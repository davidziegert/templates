const txt_left = document.getElementById("left-text");
const txt_right = document.getElementById("right-text");
const btn_left_speaker = document.getElementById("left-speaker");
const btn_left_copy = document.getElementById("left-copy");
const sel_left_lang = document.getElementById("left-select");
const btn_exchange = document.getElementById("exchange-btn");
const sel_right_lang = document.getElementById("right-select");
const btn_right_speaker = document.getElementById("right-speaker");
const btn_right_copy = document.getElementById("right-copy");
const btn_translate = document.getElementById("translate-btn");
const btn_delete = document.getElementById("delete-btn");

btn_left_speaker.addEventListener("click", () => {
  speakText(txt_left.value, sel_left_lang.value);
});

btn_left_copy.addEventListener("click", () => {
  copyText(txt_left.value);
});

btn_right_speaker.addEventListener("click", () => {
  speakText(txt_right.value, sel_right_lang.value);
});

btn_right_copy.addEventListener("click", () => {
  copyText(txt_right.value);
});

btn_exchange.addEventListener("click", exchangeLang);
btn_translate.addEventListener("click", translateText);
btn_delete.addEventListener("click", deleteText);

function copyText(value) {
  if (value.length === 0) {
    console.log("The string is empty");
  } else if (value === null) {
    console.log("The string is null");
  } else {
    navigator.clipboard.writeText(value);
  }
}

function speakText(value, lang) {
  if (value.length === 0) {
    console.log("The string is empty");
  } else if (value === null) {
    console.log("The string is null");
  } else {
    let speaker = new SpeechSynthesisUtterance(value);
    speaker.lang = lang;
    window.speechSynthesis.speak(speaker);
  }
}

function exchangeLang() {
  let tempText = txt_left.value;
  let tempLang = sel_left_lang.value;

  txt_left.value = txt_right.value;
  sel_left_lang.value = sel_right_lang.value;

  txt_right.value = tempText;
  sel_right_lang.value = tempLang;
}

function translateText() {
  let text = txt_left.value.trim();
  let from = sel_left_lang.value;
  let to = sel_right_lang.value;

  if (text.length === 0) {
    console.log("The string is empty");
  } else if (text === null) {
    console.log("The string is null");
  } else {
    fetch(
      "https://api.mymemory.translated.net/get?q=" +
        text +
        "&langpair=" +
        from +
        "|" +
        to
    )
      .then((res) => res.json())
      //.then(data => console.log(data))
      .then((data) => {
        txt_right.value = data.responseData.translatedText;
      })
      .catch((error) => console.log(error));
  }
}

function deleteText() {
  txt_left.value = "";
  txt_right.value = "";
}

txt_left.addEventListener("keyup", () => {
  if (!txt_left.value) {
    txt_right.value = "";
  }
});

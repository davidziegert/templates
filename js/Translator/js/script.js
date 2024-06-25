const input_text = document.getElementById("input-text");
const output_text = document.getElementById("output-text");
const btn_delete = document.getElementById("delete-btn");
const btn_exchange = document.getElementById("exchange-btn");
const btn_translate = document.getElementById("translate-btn");
const btn_input_speaker = document.getElementById("input-speaker");
const btn_input_copy = document.getElementById("input-copy");
const input_select = document.getElementById("input-select");
const output_select = document.getElementById("output-select");
const btn_output_speaker = document.getElementById("output-speaker");
const btn_output_copy = document.getElementById("output-copy");

btn_input_speaker.addEventListener("click", () => {
  speakText(input_text.value, input_select.value);
});

btn_input_copy.addEventListener("click", () => {
  copyText(input_text.value);
});

btn_output_speaker.addEventListener("click", () => {
  speakText(output_text.value, output_select.value);
});

btn_output_copy.addEventListener("click", () => {
  copyText(output_text.value);
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
  let tempText = input_text.value;
  let tempLang = input_select.value;

  input_text.value = output_text.value;
  input_select.value = output_select.value;

  output_text.value = tempText;
  output_select.value = tempLang;
}

function translateText() {
  let text = input_text.value.trim();
  let from = input_select.value;
  let to = output_select.value;

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
        output_text.value = data.responseData.translatedText;
      })
      .catch((error) => console.log(error));
  }
}

function deleteText() {
  input_text.value = "";
  output_text.value = "";
}

input_text.addEventListener("keyup", () => {
  if (!input_text.value) {
    output_text.value = "";
  }
});

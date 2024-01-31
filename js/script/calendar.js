const localization = moment.locale("de");
const currentDate = moment().format("LL");

let weekCounter = 1;
let weekStart = moment().isoWeekday(1).format("LL");
let weekEnd = moment().isoWeekday(7).format("LL");

const btn_prevWeek = document.getElementById("previous-week");
const btn_nextWeek = document.getElementById("next-week");
const btn_todayWeek = document.getElementById("today-week");
const span_weekStart = document.getElementById("week-start");
const span_weekEnd = document.getElementById("week-end");
const diablog_box = document.getElementById("dialog-box");

const dataArray = [];

function loadData() {

}

function saveDate() {
  let day = document.getElementById("fday");
  let from = document.getElementById("ffrom");
  let till = document.getElementById("ftill");
  let title = document.getElementById("ftitle");

  dataArray.push([day.value, from.value, till.value, title.value]);
  //console.table(dataArray);
}

function removeOptions(selectElement) {
  let i,
    L = selectElement.options.length - 1;
  for (i = L; i >= 0; i--) {
    selectElement.remove(i);
  }
}

function entryClick(item) {
  let day = document.getElementById("fday");
  let from = document.getElementById("ffrom");
  let till = document.getElementById("ftill");
  let title = document.getElementById("ftitle");

  removeOptions(till);
  title.value = "";

  //console.log("day: ", item.dataset.day, " - hour: ", item.dataset.hour);

  day.value = item.dataset.day;
  from.value = item.dataset.hour + ":00";

  let option;

  option = document.createElement("option");
  option.value = option.text = item.dataset.hour + ":15";
  till.add(option);

  option = document.createElement("option");
  option.value = option.text = item.dataset.hour + ":30";
  till.add(option);

  option = document.createElement("option");
  option.value = option.text = item.dataset.hour + ":45";
  till.add(option);

  option = document.createElement("option");
  option.value = option.text = parseInt(item.dataset.hour) + 1 + ":00";

  till.add(option);

  diablog_box.showModal();
}

function closeDialog() {
  diablog_box.close();
}

function setDataDay() {
  let dayCollection = document.getElementsByClassName("day");
  let dayStart = moment().isoWeekday(weekCounter).format("LL");

  for (let i = 0; i < dayCollection.length; i++) {
    dayStart = moment()
      .isoWeekday(weekCounter + i)
      .format("LL");
    dayCollection[i].dataset.day = dayStart;
    //dayCollection[i].setAttribute('data-day', dayStart);
    //console.log(weekCounter);
    //console.log(dayStart);
    //console.log(dayCollection[i]);

    let headCollection = dayCollection[i].children[0].children;
    //console.log(headCollection);
    headCollection[1].innerHTML = dayStart;

    let entryCollection = dayCollection[i].children[1].children;
    //console.log(entryCollection);
    for (let x = 0; x < entryCollection.length; x++) {
      entryCollection[x].dataset.day = dayStart;
      //console.log(entryCollection[x]);
    }
  }
}

function showWeek() {
  //console.log("Today: ", currentDate);
  //console.log("WeekStart: ", weekStart.toString());
  //console.log("WeekEnd: ", weekEnd.toString());
  //console.log("Counter: ", weekCounter.toString());

  span_weekStart.innerHTML = weekStart.toString();
  span_weekEnd.innerHTML = weekEnd.toString();

  setDataDay();
}

function calculateWeek() {
  weekStart = moment().isoWeekday(weekCounter).format("LL");
  weekEnd = moment()
    .isoWeekday(weekCounter + 6)
    .format("LL");
}

function previousWeek() {
  weekCounter = weekCounter - 7;
  calculateWeek();
  showWeek();
}

function nextWeek() {
  weekCounter = weekCounter + 7;
  calculateWeek();
  showWeek();
}

function todayWeek() {
  weekCounter = 1;
  calculateWeek();
  showWeek();
}

document.addEventListener("load", showWeek());

btn_prevWeek.addEventListener("click", function () {
  previousWeek();
});
btn_nextWeek.addEventListener("click", function () {
  nextWeek();
});
btn_todayWeek.addEventListener("click", function () {
  todayWeek();
});
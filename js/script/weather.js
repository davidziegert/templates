const btn_submit = document.getElementById("submit-city");
let output_icon = document.getElementById("output-icon");
let output_city = document.getElementById("output-city");
let output_temperature = document.getElementById("output-temperature");
let output_wind = document.getElementById("output-wind");
let output_description = document.getElementById("output-description");
const apikey = "xxxxxxxxxxxxx";

function kelvinToCelcious(kelvin) {
    return (kelvin - 273).toFixed(2)
}

function getWeatherData() {
    let input_city = document.getElementById("input-city").value;
    
    fetch("https://api.openweathermap.org/data/2.5/weather?q="+input_city+"&appid="+apikey)
        .then(res => res.json())
        //.then(data => console.log(data))
        .then(data => {
            const container = document.getElementById("weather-output");

            let data_icon = data['weather']['0']['icon'];
            let data_name = data['name'];
            let data_tempature = data['main']['temp'];
            let data_wind = data['wind']['speed'];
            let data_description = data['weather']['0']['description'];

            let widget = `
                <article class="weather-widget">
                    <div>
                        <img class="weather-icon" src="./weathericons/`+ data_icon +`@2x.png">
                    </div>
                    <div>
                        <h5 class="weather-city">City:  `+ data_name +`</h5>
                        <p class="weather-temperature">Temperature:  `+ kelvinToCelcious(data_tempature) +` °C</p>
                        <p class="weather-wind">Wind:  `+ data_wind + ` km/h</p>
                        <p class="weather-description">Details:  `+ data_description +`</p>
                    </div>
                </article>
            `;
            container.insertAdjacentHTML("beforeend", widget);
        })
        .catch(error => console.log(error));
}

btn_submit.addEventListener('click', getWeatherData);

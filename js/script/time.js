function updateDateTime() {
    const now = new Date();
    //const currentDateTime = now.toLocaleString();
    //const currentDateTime = now.toLocaleString('de-DE', { timeZone: 'America/New_York' })
    //document.querySelector('#time').textContent = currentDateTime;
    const currentHour = now.getHours();
    const currentMinute = now.getMinutes();
    const currentSecond = now.getSeconds();
    document.querySelector("#hour").textContent = currentHour.toLocaleString().padStart(2, '0');
    document.querySelector("#minute").textContent = currentMinute.toLocaleString().padStart(2, '0');
    document.querySelector("#second").textContent = currentSecond.toLocaleString().padStart(2, '0');
}

setInterval(updateDateTime, 1000);
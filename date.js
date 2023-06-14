function updateTime() {
    const now = new Date();
    const time = now.toLocaleTimeString();
    const date = now.toDateString();
    document.getElementById("time").textContent = time;
    document.getElementById("date").textContent = date;
  }
  setInterval(updateTime, 1000);
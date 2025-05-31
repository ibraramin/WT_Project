document.addEventListener("DOMContentLoaded", () => {
  const addTimerForm = document.getElementById("addTimerForm");
  const timerNameInput = document.getElementById("timerName");
  const timerMinutesInput = document.getElementById("timerMinutes");
  const timerSecondsInput = document.getElementById("timerSeconds");
  const multiTimerPanel = document.getElementById("multi-timer-panel");
  const alarmSound = document.getElementById("timerAlarmSound");

  let timers = [];
  let nextTimerId = 0;

  function formatTime(totalSeconds) {
    if (totalSeconds < 0) totalSeconds = 0;
    const minutes = Math.floor(totalSeconds / 60);
    const seconds = totalSeconds % 60;
    return `${String(minutes).padStart(2, "0")}:${String(seconds).padStart(
      2,
      "0"
    )}`;
  }

  function addTimerToPanel(timerData) {
    const card = document.createElement("div");
    card.classList.add("timer-card");
    card.dataset.timerId = timerData.id;
    timerData.element = card;

    card.innerHTML = `
            <div class="timer-name">${timerData.name}</div>
            <div class="time-display">${formatTime(
              timerData.remainingTime
            )}</div>
            <button class="stop-btn"><i class="fas fa-stop"></i> Stop</button>
        `;

    card.querySelector(".stop-btn").addEventListener("click", () => {
      stopTimer(timerData.id);
    });
    multiTimerPanel.appendChild(card);
  }

  function updateTimerDisplay(timerId) {
    const timer = timers.find((t) => t.id === timerId);
    if (timer && timer.element) {
      const timeDisplay = timer.element.querySelector(".time-display");
      if (timer.remainingTime <= 0) {
        timeDisplay.textContent = "Finished!";
        timer.element.classList.add("timer-finished");
        timer.element.querySelector(".stop-btn").textContent = "Clear";
      } else {
        timeDisplay.textContent = formatTime(timer.remainingTime);
      }
    }
  }

  function startNewTimer(name, minutes, seconds) {
    const totalSeconds = parseInt(minutes, 10) * 60 + parseInt(seconds, 10);
    if (isNaN(totalSeconds) || totalSeconds <= 0) {
      alert("Please enter a valid duration (more than 0 seconds).");
      return;
    }
    if (!name.trim()) {
      alert("Please enter a name for the timer.");
      return;
    }

    const newTimer = {
      id: nextTimerId++,
      name: name.trim(),
      remainingTime: totalSeconds,
      intervalId: null,
      element: null,
    };

    addTimerToPanel(newTimer);

    newTimer.intervalId = setInterval(() => {
      newTimer.remainingTime--;
      updateTimerDisplay(newTimer.id);

      if (newTimer.remainingTime <= 0) {
        clearInterval(newTimer.intervalId);
        if (alarmSound) {
          alarmSound.play().catch((e) => console.warn("Alarm sound error:", e));
        }
      }
    }, 1000);

    timers.push(newTimer);
  }

  function stopTimer(timerId) {
    const timerIndex = timers.findIndex((t) => t.id === timerId);
    if (timerIndex > -1) {
      const timer = timers[timerIndex];
      clearInterval(timer.intervalId);
      if (timer.element) {
        timer.element.remove();
      }
      timers.splice(timerIndex, 1);
    }
  }

  addTimerForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const name = timerNameInput.value || `Timer ${nextTimerId + 1}`;
    const minutes = timerMinutesInput.value || 0;
    const seconds = timerSecondsInput.value || 0;

    startNewTimer(name, minutes, seconds);

    timerNameInput.value = "";
    timerMinutesInput.value = "1";
    timerSecondsInput.value = "0";
    timerNameInput.focus();
  });
});

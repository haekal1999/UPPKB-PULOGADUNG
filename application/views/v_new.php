<div class="timer">
    <div class="controls">
        <button onclick="start()">Start</button>
        <button onclick="pause()">Pause</button>
        <button onclick="stop()">Stop</button>
        <button onclick="restart()">Restart</button>
        <button onclick="lap()">Lap</button>
        <button onclick="resetLaps()">Reset Laps</button>
    </div>
    <div class="stopwatch">00:00:00</div>
    <ul class="laps"></ul>

    <script type="text/javascript">
        var ms = 0,
            s = 0,
            m = 0;
        var timer;

        var stopwatchEl = document.querySelector('.stopwatch');
        var lapsContainer = document.querySelector('.laps');

        function start() {
            if (!timer) {
                timer = setInterval(run, 10);
            }
        }

        function run() {
            stopwatchEl.textContent = getTimer();
            ms++;
            if (ms == 100) {
                ms = 0;
                s++;
            }
            if (s == 60) {
                s = 0;
                m++;
            }
        }

        function pause() {
            stopTimer();
        }

        function stop() {
            stopTimer();
            ms = 0;
            s = 0;
            m = 0;
            stopwatchEl.textContent = getTimer();
        }

        function stopTimer() {
            clearInterval(timer);
            timer = false;
        }

        function getTimer() {
            return (m < 10 ? "0" + m : m) + ":" + (s < 10 ? "0" + s : s) + ":" + (ms < 10 ? "0" + ms : ms);
        }

        function restart() {
            stop();
            start();
        }

        function lap() {
            if (timer) {
                var li = document.createElement('li');
                li.innerText = getTimer();
                lapsContainer.appendChild(li);
            }
        }

        function resetLaps() {
            lapsContainer.innerHTML = '';
        }
    </script>
</div>
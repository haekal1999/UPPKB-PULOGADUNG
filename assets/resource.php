<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Insurance | Contact</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<style type="text/css">
			 .timer{
   color: gray;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
  }
 
  .timer .stopwatch {
   font-size: 100px;
   font-family: monospace;
  }
  .timer button {
   cursor:pointer;
   border-radius:5px;
   padding: 5px 10px;
  }
		 </style>
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content" >
			<header class="site-header">
				<div class="top-header">
					<div class="container">
						<a href="index.html" id="branding">
							<img src="images/dishub.png" alt="Company Name" class="logo"  >
							<div class="logo-text">
								<h1 class="site-title"  >UP PKB Pulogadung</h1>
							</div>
							<img src="images/dki2.png" alt="Company Name" class="logo1" >
						</a>
					</div> <!-- .container -->
				</div> <!-- .top-header -->
				
			</header> <!-- .site-header -->

				
				

			<main class="main-content">
				<div class="breadcrumbs">
					<div class="container">
						<a href="index.php">Home</a>
						<span>Admin Masuk</span>
					</div>
				</div>

				<div class="page">
					<div class="container">
					

						<div class="row">
							<div class="col-md">
								<h2 class="section-title text-left">Stopwatch </h2>
								<form action="#" class="contact-form text-center">
									<div class="timer">
										<div class="controls">
										 <button onclick="start()">Start</button>
										 <button onclick="pause()">Pause</button>
										 <button onclick="stop()">Stop</button>
										 <button onclick="restart()">Restart</button>
										 <!-- <button onclick="lap()">Lap</button>
										 <button onclick="resetLaps()">Reset Laps</button> -->
										</div>
										<div class="stopwatch">00:00:00</div>
										<ul class="laps"></ul>
										
										<script type="text/javascript">
										
										 var ms = 0, s = 0, m = 0;
										 var timer;
										
										 var stopwatchEl = document.querySelector('.stopwatch');
										 var lapsContainer = document.querySelector('.laps');
										
										 function start() {
										  if(!timer) {
										   timer = setInterval(run, 10);
										  }
										 }
										
										 function run() {
										  stopwatchEl.textContent = getTimer();
										  ms++;
										  if(ms == 100) {
										   ms = 0;
										   s++;
										  }
										  if(s == 60) {
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
										  if(timer) {
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
									<p class="text-center">
										<input type="submit" value="Simpan">
									</p>
								</form>


							</div>
						</div>
					</div>
					
				</div> <!-- .page -->
			</main>

			<div class="site-footer">
				<div class="widget-area">
					<div class="container">
						<div class="row">
							
						</div>
					</div>
				</div>

				<div class="bottom-footer">
					<div class="container">
						<nav class="footer-navigation">
						<a href="index.php">Home</a>
							<a href="contact.php">Admin Masuk</a>
							<a href="resource.php">Admin Akhir</a>
							<a href="about.php">User</a>
						</nav>

						<div class="colophon">Copyright 2014 Company name. Designed by Themezy. All rights reserved.</div>
					</div>
				</div>
			</div>
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>
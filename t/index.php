<!DOCTYPE html>
<html>
	<head>
		<title>PI Control Center</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="style.css" />
		<script src="jquery.js"></script>
		<script src="ace/ace.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="dygraph-combined.js"></script>
	</head>
	<body>
	<div id="panel">
		<h1>Status pojazdu:<h1>
		<ul>
			<li>a - back</li>
			<li>d - next</li>
		<ul>
	</div> 
		<div class="slide">
			<h1>Robot rozpoznawczy</h1>
			<p>koło naukowe Focus</p>
		</div>
		<div class="slide">
			<h1>Budowa</h1>
		</div>
		<div class="slide">
			<h1>Mapy 3D</h1>
		</div>
		<div class="slide">
			<h1>Interface</h1>
		</div>
		<div class="slide">
			<h1>Prąd silników</h1>
		</div>
		<div class="slide">
			<h1>
				Temperatura
			</h1>
			<center>
				<div id="graphdiv2" style="width:800px; height:400px;align:center"></div>
			</center>
 			<script type="text/javascript">
    				g2 = new Dygraph(
    				document.getElementById("graphdiv2"),
    				"temp_log.dat", // path to CSV file
    				{
					title: 'Pomiar temperatury w pokoju',
					ylabel: 'temperatura [&#176;C]',
					xlabel: 'numer pomiaru',
					errorBars: true
    				}          // options
   				);
  				window.intervalId = setInterval(function() {
   				g2.updateOptions( { 'file': 'temp_log.dat' } );
 	 		}, 2000);
 			</script>

		</div>
		<div class="slide">
			<h1>
				Promieniowanie
			</h1>
			
		</div>
		

		<div class="slide">
			<h1>Wykonane mapy</h1>
			<p>Brak pomiarów</p>	
		</div>
		<div class="slide">
			<h1>Dziękuje</h1>
		</div>
	</body>
</html>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Termometr</title>
  <script type="text/javascript" src="dygraph-combined.js"></script>
 </head>
 <body>
 <h1>Obecna temperatura</h1>
 <hr />
 <div id="graphdiv2"
  style="width:1200px; height:400px;"></div>
 <script type="text/javascript">
    g2 = new Dygraph(
    document.getElementById("graphdiv2"),
    "temp_log.dat", // path to CSV file
    {
	title: 'Pomiar temperatury w pokoju',
	ylabel: 'temperatura [&#176;C]',
	xlabel: 'numer pomiaru',
	showRangeSelector: true,
	errorBars: true
    }          // options
   );
  window.intervalId = setInterval(function() {
    g2.updateOptions( { 'file': 'temp_log.dat' } );
  }, 1000);
 </script>
 </body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<title>PI Control Center</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="style.css" />
		<script src="jquery.js"></script>
		<script src="ace/ace.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	</head>
	<body>
	<div id="panel">
		<h1>How to control<br/>PI Control<h1>
		<ul>
			<li>a - back</li>
			<li>d - next</li>
		</ul>
		<a href="#" onClick="$('#param').load('panel.txt')">Wczytaj dane</a>
		<br>
		<div>
			<table>
				<tr>
					<td>Silniki:<br>
					Akumulator:<br>
					Temperatura:<br>
					</td>
					<td id="param"><br><br><br></td>
					<td><br>
					V<br>
					<sup>o</sup>C
					</td>
				</tr>
				<tr><td id = "silnik1">Tu1<td>
					<td id = "silnik2">Tu2<td>
					<td id = "napiecie">Tu3<td>
					<td id = "temperatura">Tu4<td>
				</tr>
			</table>
		</div>
		<br>
		
		
	</div> 
		<div class="slide">
			<h1>
				Web cam
			</h1>
			<img id="webcam" src="cam.jpg" alt="cam" /></br>
			<p><input type="checkbox" id="stream" value="Stream photos" />Stream photos</br></p>
			<button id="make_foto">Make photo</button>
		</div>
		<div class="slide">
			<h1>
			Motors Control
			</h1>
			<table>
				<tr>
					<td> </td><td><button id="top">/\</button></td><td> </td>
				</tr>
				<tr>
					<td><button id="left"><-</button></td>
					<td><button id="bottom">\/</button></td>
					<td><button id="right">-></button></td>
				</tr>
			</table>
		</div>
		<div class="slide">
			<h1> Sensors </h1>
		</div>

		<div class="slide">
			<h1>Speak</h1>
			<p>
			<textarea id="TextToSpeech">Witajcie Nazywam sie Orfar</textarea>
			<button id="SayIt">Say it</button>
			</p>
		</div>
	</body>
</html>

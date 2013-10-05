<!DOCTYPE html>
<html>
	<head>
		<title>PI Control Center</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="style.css" />
		<script src="jquery.js"></script>
		<script src="ace/ace.js"></script>
		<script src="script.js"></script>
	</head>
	<body>
	<div id="panel">
		<h1>How to control<br/>PI Control<h1>
		<ul>
			<li>a - back</li>
			<li>d - next</li>
		<ul>
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

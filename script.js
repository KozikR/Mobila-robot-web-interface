number_of_slides = 4;
var StreamTimerId = 0;
$(document).ready(function(){
	if(sessionStorage.slideNumber == undefined) {
		sessionStorage.slideNumber = 0;
	}

	document.onkeydown = function(event) {
		// Home
		if(event.keyCode == 36) {
			sessionStorage.slideNumber = 0;
		}

		// a
		if(event.keyCode == 65) {
			if(sessionStorage.slideNumber > 0) sessionStorage.slideNumber--;
			else sessionStorage.slideNumber = 3;
		}

		// d
		if(event.keyCode == 68) {
			if(sessionStorage.slideNumber < 3)	sessionStorage.slideNumber++;
			else	sessionStorage.slideNumber = 0;
		}

		$('body').animate({
			scrollLeft: (1024 * sessionStorage.slideNumber) + 'px'
		}, 700);
	}

	// ACE Editor
	$('.editor').each(function(i, element){
		var editor = ace.edit(element);
		editor.setTheme('ace/theme/monokai');
		editor.setFontSize('40px');
		editor.setHighlightActiveLine(false);

		if([0].indexOf(i) != -1) {
			editor.getSession().setMode('ace/mode/html');
		}
		if([1, 2, 3, 4, 5, 6].indexOf(i) != -1) {
			editor.getSession().setMode('ace/mode/javascript');
		}
	});
	
	$("#make_foto").click(function() {
		$("#make_foto").html("Loading...");
		$.ajax({
   			url: "/cgi-bin/webcam.sh",
		 }).done(function( msg ) {
			$("#webcam").attr("src", "cam.jpg");
			$("#make_foto").html("Make photo");
		});
		
	});
	$("#stream").click(function() {
		if($("stream").prop('checked', 'true'))	StreamTimerId = setInterval("stream_video()", 2000);
		else clearInterval(StreamTimerId);
	});

	$("#SayIt").click(function() {
		alert($("#TextToSpeech").val());
		$.post('sayit.php', {text: $("#TextToSpeech").val()}, function(data){
			alert(data);	
   		 });
//		$.ajax({
//   		url: "/sayit.php",
///		data: 'n='.$("#TextToSpeech").val(),
        	//type: 'POST',
//		 }).done(function( msg ) {
//			$("#TextToSpeech").val(msg);
//		});
		
	});
});
function stream_video()
{
		$("#make_foto").html("Loading...");
	
		$.ajax({
   			url: "/cgi-bin/webcam.sh",
		 }).done(function( msg ) {
			$("#webcam").attr("src", "cam.jpg");
		$("#make_foto").html("Make photo");

		});
}

function Wczytaj(param)
{
	
	var n=param.split(" ");
	document.getElementById("silnik1").innerHTML=n[0];
	document.getElementById("silnik2").innerHTML=n[1];
	document.getElementById("napiecie").innerHTML=n[2];
	document.getElementById("temperatura").innerHTML=n[2];
}


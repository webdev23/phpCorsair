
window.AudioContext = window.AudioContext || window.webkitAudioContext;

var audioContext = new AudioContext();
var audioInput = null,
    realAudioInput = null,
    inputPoint = null,
    audioRecorder = null,
    rafID = null,
    analyserContext = null
//~ var canvasWidth, canvasHeight;

	var world = ['ff0000','ff3300','ff6600','ff9900','ccff00',
	'66ff00','33ff00','00ff00','00ff33','99ff00','ffcc00','ffff00',
	'00ff66','00ff99','00ffcc','00ffff','00ccff','0099ff','0066ff',
	'0033ff','0000ff','3300ff','6600ff','9900ff','cc00ff','ff00ff',
	'ff00cc','ff0099','ff0066','ff0033','ff0000','ff3300','ff6600',
	'ffff00','ccff00','99ff00','66ff00','33ff00','00ff00','00ff33',
	'00ff66','00ff99','00ffcc','00ffff','00ccff','0099ff','0066ff',
	'0033ff','0000ff','3300ff','6600ff','ff0000','ff3300','ff6600',
	'ffff00','ccff00','99ff00','66ff00','33ff00','00ff00','00ff33',
	'00ff66','00ff99','00ffcc','00ffff','00ccff','0099ff','0066ff',
	'0033ff','0000ff','3300ff','6600ff','9900ff','cc00ff','ff00ff',
	'ff00cc','ff0099','ff0066','ff0033','ff0000','ff3300','ff6600'];

	var whiteRabbit = ['02E148','086213','67F383','044A0B'];	

function cancelAnalyserUpdates() {
    window.cancelAnimationFrame( rafID );
    rafID = null;
}

function updateAnalysers(time) {

    {
        var SPACING = 2;
        var BAR_WIDTH = 24;
        var freqByteData = new Uint8Array(analyserNode.frequencyBinCount)

        analyserNode.getByteFrequencyData(freqByteData)

// We are Lions

analyserNode.minDecibels = -60;
analyserNode.maxDecibels = -56;

analyserNode.fftSize = 1024;
var bufferLength = analyserNode.frequencyBinCount;
		var pwnyFreq = freqByteData.filter(elem => elem >= 72);
		//~ console.log(pwnyFreq)
			document.getElementById("pwnyStatus").innerHTML = pwnyFreq;

			//~ document.getElementById('copy').innerHTML=pwnyFreq;
		var pwnyFreqbars = pwnyFreq.length;
		
		var mini = pwnyFreqbars;

		display.setValue('    O:FF');
			
		  var pwnyFreq = ["255","255","255","255","255","255","255","255","255","255","255","255","255","255",
							"255","255","255","255","255","255","255","255","255","255","255","255","255","255",
							"255","255","255","255","255","255","255","255","255","255","255","255","255","255",
							"255","255","255","255","255","255","255","255"]

		function pwnyEQdump() {
		  var xhttp = new XMLHttpRequest();
display.setValue(document.getElementById('eqfpsDiv').innerHTML+"  "+pwnyFreqbars+":__");
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200  ) {
		    }
		  };
		  var eqBcol = document.getElementById('bcolorDiv').innerHTML;
		  var eqHcol = document.getElementById('hcolorDiv').innerHTML;
		  var eqOcol = document.getElementById('ocolorDiv').innerHTML;
		  var eqfps = document.getElementById('eqfpsDiv').innerHTML;
		  var rainbowRatio = document.getElementById('rainbowmixDiv').innerHTML;
		  var matrixpotar = document.getElementById('matrixmixDiv').innerHTML;
		  var matrixSwitch = document.getElementById('knob2').checked;
		  var pwnRand = document.getElementById('switch1').checked;


		  var pwnyUrl = "http://localhost/daemon.php?eqdata="+pwnyFreqbars+"&eq1="+pwnyFreq[2]+
							"&eq2="+pwnyFreq[6]+"&eq3="+pwnyFreq[12]+"&eq4="+pwnyFreq[16]+"&eq5="+pwnyFreq[19]+
							"&eq6="+pwnyFreq[24]+"&eq7="+pwnyFreq[28]+"&eq8="+pwnyFreq[32]+
							"&eqbColor="+eqBcol+
							"&eqhColor="+eqHcol+
							"&eqoColor="+eqOcol+
							"&eqfps="+eqfps+ 
							// Math.floor(Math.random() * 1) + 1+ 
							"&rainRate="+rainbowRatio+
							"&matrix="+matrixSwitch+
							"&pot="+Math.floor(Math.random() * 6) + 1+
							"&rand="+pwnRand 
							
		  xhttp.open("GET", pwnyUrl, true)
		  xhttp.send();
		}
		if (document.getElementById('knob1').checked){

			pwnyEQdump()
		}

// Yes they scan
    }
    rafID = window.requestAnimationFrame( updateAnalysers );
}

function rainCom(mode) {
  var cmdRain = new XMLHttpRequest();
	  cmdRain.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200  ) {
			
	    }
	  }
	  var comUrl = "http://localhost/daemon.php?mode="+mode;
		 cmdRain.open("GET", comUrl, true);
		 cmdRain.send()
}

function effect(mode,pot) {
  var eff = new XMLHttpRequest();
	  eff.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200  ) {
			
	    }
	  } // BURN BABY BURN
	  var effUrl = "http://localhost/daemon.php?mode="+mode+"&pot="+pot
		 eff.open("GET", effUrl, true)
		 eff.send()
}

function daemon(mode) {
  var daemon = new XMLHttpRequest();

	  daemon.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200  ) {
			console.log(this.responseText);
			document.getElementById('piDaemon').innerHTML=this.responseText
	    }
	  } // BURN BABY BURN
		  var eqBcol = document.getElementById('bcolorDiv').innerHTML;
		  var eqOcol = document.getElementById('ocolorDiv').innerHTML; 
	  var daemonUrl = "http://localhost/daemon.php?mode="+mode+"&from"+eqBcol+"&to"+eqOcol
		 daemon.open("GET", daemonUrl, true)
		 daemon.send()
		 

}

function gotStream(stream) {
    inputPoint = audioContext.createGain()

    realAudioInput = audioContext.createMediaStreamSource(stream)
    audioInput = realAudioInput
    audioInput.connect(inputPoint)

    analyserNode = audioContext.createAnalyser()
    analyserNode.fftSize = 2048;
    inputPoint.connect( analyserNode )

    zeroGain = audioContext.createGain()
    zeroGain.gain.value = 0.0;
    inputPoint.connect( zeroGain )
    zeroGain.connect( audioContext.destination )
    updateAnalysers()
}

function initAudio() {
        if (!navigator.getUserMedia)
            navigator.getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
        if (!navigator.cancelAnimationFrame)
            navigator.cancelAnimationFrame = navigator.webkitCancelAnimationFrame || navigator.mozCancelAnimationFrame
        if (!navigator.requestAnimationFrame)
            navigator.requestAnimationFrame = navigator.webkitRequestAnimationFrame || navigator.mozRequestAnimationFrame;

    navigator.getUserMedia(
        {
            "audio": {
                "mandatory": {
                    "googEchoCancellation": "false",
                    "googAutoGainControl": "false",
                    "googNoiseSuppression": "false",
                    "googHighpassFilter": "false"
                },
                "optional": []
            },
        }, gotStream, function(e) {
            alert('Error getting audio')
            console.log(e)
        });
}

window.addEventListener('load', initAudio )



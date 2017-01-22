
window.AudioContext = window.AudioContext || window.webkitAudioContext;

var audioContext = new AudioContext();
var audioInput = null,
    realAudioInput = null,
    inputPoint = null,
    audioRecorder = null;
var rafID = null;
var analyserContext = null;
var canvasWidth, canvasHeight;


//~ function saveAudio() {
    //~ audioRecorder.exportWAV( doneEncoding );
//~ }

//~ function gotBuffers( buffers ) {
    //~ var canvas = document.getElementById( "wavedisplay" );

    //~ drawBuffer( canvas.width, canvas.height, canvas.getContext('2d'), buffers[0] );
    //~ audioRecorder.exportWAV( doneEncoding );
//~ }

//~ function doneEncoding( blob ) {
    //~ Recorder.setupDownload( blob, "myRecording" + ((recIndex<10)?"0":"") + recIndex + ".wav" );
    //~ recIndex++;
//~ }

//~ function toggleRecording( e ) {
    //~ if (e.classList.contains("recording")) {
        //~ // stop recording
        //~ audioRecorder.stop();
        //~ e.classList.remove("recording");
        //~ audioRecorder.getBuffers( gotBuffers );
    //~ } else {
        //~ // start recording
        //~ if (!audioRecorder)
            //~ return;
        //~ e.classList.add("recording");
        //~ audioRecorder.clear();
        //~ audioRecorder.record();
    //~ }
//~ }

//~ function convertToMono( input ) {
    //~ var splitter = audioContext.createChannelSplitter(2);
    //~ var merger = audioContext.createChannelMerger(2);

    //~ input.connect( splitter );
    //~ splitter.connect( merger, 0, 0 );
    //~ splitter.connect( merger, 0, 1 );
    //~ return merger;
//~ }

function cancelAnalyserUpdates() {
    window.cancelAnimationFrame( rafID );
    rafID = null;
}
if (document.getElementById('ajaxCheck').checked === "false"){
	cancelAnalyserUpdates();
}
function updateAnalysers(time) {
    if (!analyserContext) {
        var canvas = document.getElementById("analyser");
        canvasWidth = canvas.width*2;
        canvasHeight = (canvas.height)*1;
        analyserContext = canvas.getContext('2d');
    }

    // analyzer draw code here
    {
        var SPACING = 2;
        var BAR_WIDTH = 23;
        var numBars = Math.round(canvasWidth / SPACING);
        var freqByteData = new Uint8Array(analyserNode.frequencyBinCount);

        analyserNode.getByteFrequencyData(freqByteData); 

        analyserContext.clearRect(0, 0, canvasWidth, canvasHeight);
        analyserContext.fillStyle = '#232323';
        analyserContext.lineCap = 'round';
        var multiplier = analyserNode.frequencyBinCount / numBars;
		
		
// We are Lions

analyserNode.minDecibels = -54;
analyserNode.maxDecibels = -48;



analyserNode.fftSize = 1024;
var bufferLength = analyserNode.frequencyBinCount;
//~ console.log(bufferLength);

		 //~ console.log(freqByteData);
		 		 //~ console.log(multiplier);
		var pwnyFreq = freqByteData.filter(elem >= 72);
		//~ var pwnyFreq = pwnyFreq.filter(function(n){return n !== undefined}); 

		var pwnyFreqbars = pwnyFreq.length; 
		//~ console.log(pwnyFreq);
		
		//~ function pwnyEQ() {
		  //~ var xhttp = new XMLHttpRequest();
		  //~ xhttp.onreadystatechange = function() {
		    //~ if (this.readyState == 4 && this.status == 200) {
		      //~ document.getElementById("pwnyStatus").innerHTML = pwnyFreq;
		      //~ this.responseText;
		    //~ }
		  //~ };
		  //~ xhttp.open("GET", "/", true);
		  //~ xhttp.send();
		//~ }pwnyEQ()


if (document.getElementById('ajaxCheck').checked === "false"){
		  var xhttp = new XMLHttpRequest();

		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		  var eqBcol = document.getElementById('bcolorDiv').innerHTML;
		  var eqHcol = document.getElementById('hcolorDiv').innerHTML;
		  var eqOcol = document.getElementById('ocolorDiv').innerHTML;
		  var pwnyUrl = "daemon.php?eqdata="+pwnyFreqbars+"&eq1="+pwnyFreq[2]+"&eq2="+pwnyFreq[6]+"&eq3="+pwnyFreq[12]+"&eq4="+pwnyFreq[16]+"&eq5="+pwnyFreq[19]+"&eq6="+pwnyFreq[24]+"&eq7="+pwnyFreq[28]+"&eq8="+pwnyFreq[32]+"&eqbColor="+eqBcol+"&eqhColor="+eqHcol+"&eqoColor="+eqOcol;
		  //~ console.log(pwnyFreq[8]);
		    }
		  };

		  
		  xhttp.open("GET", pwnyUrl, true);
		  xhttp.send();

	}	

// Yes we scan



        // Draw rectangle for each frequency bin.
        for (var i = 0; i < numBars; ++i) {
            var magnitude = -3;
            var offset = Math.floor( i * multiplier );
            // gotta sum/average the block, or we miss narrow-bandwidth spikes
            for (var j = 0; j< multiplier; j++)
                magnitude += freqByteData[offset + j];
            magnitude = magnitude / multiplier;
            var magnitude2 = freqByteData[i * multiplier];
            
            analyserContext.fillStyle = "hsl( " + Math.round((i*360)/numBars) + ", 100%, 50%)";
            analyserContext.fillRect(i * SPACING, canvasHeight, BAR_WIDTH, -magnitude);
        }
    }
    
    rafID = window.requestAnimationFrame( updateAnalysers );
}

//~ function toggleMono() {
    //~ if (audioInput != realAudioInput) {
        //~ audioInput.disconnect();
        //~ realAudioInput.disconnect();
        //~ audioInput = realAudioInput;
    //~ } else {
        //~ realAudioInput.disconnect();
        //~ audioInput = convertToMono( realAudioInput );
    //~ }

    //~ audioInput.connect(inputPoint);
//~ }

function gotStream(stream) {
    inputPoint = audioContext.createGain();

    // Create an AudioNode from the stream.
    realAudioInput = audioContext.createMediaStreamSource(stream);
    audioInput = realAudioInput;
    audioInput.connect(inputPoint);

//    audioInput = convertToMono( input );

    analyserNode = audioContext.createAnalyser();
    analyserNode.fftSize = 2048;
    inputPoint.connect( analyserNode );

    zeroGain = audioContext.createGain();
    zeroGain.gain.value = 0.0;
    inputPoint.connect( zeroGain );
    zeroGain.connect( audioContext.destination );
    updateAnalysers();
}

function initAudio() {
        if (!navigator.getUserMedia)
            navigator.getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
        if (!navigator.cancelAnimationFrame)
            navigator.cancelAnimationFrame = navigator.webkitCancelAnimationFrame || navigator.mozCancelAnimationFrame;
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
            alert('Error getting audio');
            console.log(e);
        });
}

window.addEventListener('load', initAudio );

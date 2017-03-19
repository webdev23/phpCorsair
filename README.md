# phpCorsair!<br>Spectral audio based events for corsair RGB devices.
#### Controls Corsair devices running under the ckb-daemon with php

<img src="http://i.imgur.com/1TjI3cx.gif"></img>
<img src="http://i.imgur.com/f7JEuLl.png"></img>

 *  Rainbow effect for Corsair devices running trought the ckb-daemon.
 *  https://github.com/ccMSC/ckb
 *  Should works with any device running the ckb-daemon.
 *  The cue software can stay well closed. 
 *  But it can also works on top of the ckb software to add trippy effects.
 *  It can run many times in parallel to add extra trippy effects.
 *  Make sure the ckb-daemon is running with: <b>sudo ckb-daemon</b>
 *  If the driver fail: <b>sudo killall ckb-daemon && sudo ckb-daemon</b>
 *  Add a keyboard shortcut to call, or run in terminal:
 *  Kill anytime to keep the colors as a color roulette.

##### Deploy and run: 
<h5><code>
git init && git pull https://github.com/webdev23/phpCorsair.git && chromium-browser --app=http://localhost:9040/phpcorsair! | php -S localhost:9040
</code></h5>

###### Dependencies: 

<a href="apt://php7.0">php7.0</a> 
<a href="apt://curl">curl</a>

<code>sudo apt install php7.0 && sudo apt install curl</code>

###### To serve daemon.php from the folder:

<code>php -S localhost:9040</code>

###### Or as a daemon, to allow to close the terminal:

<code>nohup chromium-browser --app=http://localhost:9040/phpcorsair! | nohup php -S localhost:9040 &</code>

###### To run from the folder if the daemon is listening open the file with chromium browser, or with this command line:.

<code>chromium-browser --app=http://localhost:9040/phpcorsair!</code>

###### Rainbow only via  the terminal:

<code> php <(curl -s https://raw.githubusercontent.com/webdev23/phpCorsair/master/rainbow) 
</code>

or just:

<code>./rainbow
</code>

All files should stays on the same folder, as they are going to talk to each others.
This should be all.

Enjoy!

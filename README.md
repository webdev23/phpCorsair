# phpCorsair!
#### Controls Corsair devices running under the ckb-daemon with php

<img src="http://i.imgur.com/1TjI3cx.gif"></img>
<img src="http://i.imgur.com/f7JEuLl.png"></img>

/*  Rainbow effect for Corsair devices running trought the ckb-daemon.
 *  https://github.com/ccMSC/ckb
 *  Should works with any device running the ckb-daemon.
 *  The cue software can stay well closed. 
 *  But it can also works on top of the ckb software to add trippy effects.
 *  It can run many times in parallel to add extra trippy effects.
 *  Make sure the ckb-daemon is running with: <b>sudo ckb-daemon</b>
 *  If the driver fail: <b>sudo killall ckb-daemon && sudo ckb-daemon</b>
 *  Add a keyboard shortcut to call, or run in terminal:
 *  Kill anytime to keep the colors as a color roulette.

#### Install php7.0

## sudo apt install php7.0

#### To run the rainbow program alone (make a keyboard shorcut!)

## php phpCorsair.php rainbow

#### Kill the program to keep the colors:

## gksudo killall php
<small><i>You shouldn't run this kind of hardware on a server, anyway..</i></small>

#### Save to hardware just by calling again. It is made to works as a loop:

## php phpCorsair.php

### Deploy electron app in one line. <br>
### It will activate the spectral equalizer and the background daemon
git clone https://github.com/electron/electron-api-demos && mv electron-api-demos phpCorsair! && cd phpCorsair! && git clone https://github.com/webdev23/phpCorsair.git && mv phpCorsair/* . && npm install && npm start

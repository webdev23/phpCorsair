<?php
echo "phpCorsair v0.1!\n";
/*  Rainbow effect for Corsair devices running trought the ckb-daemon.
 *  Tested only on ubuntu with the k70rgb, but should works with any device.
 *  This program only need the ckb-daemon to run, beside php.
 *  It can also works in adjonction of the ckb software to add cools effects.
 *  Make sure the ckb-daemon is running with: sudo ckb-daemon
 *  If the driver fail: sudo killall ckb-daemon && sudo ckb-daemon
 *  Add a keyboard shortcut to call, or run like this in terminal:
 * 
 *  php k70.php rainbow
 * 
 * To kill gksudo killall php
 * *
 * Enjoy the powerful wtf licence.
 * *
 * Nico KraZhtest | nov2016 
 *	ponyhacks.com
 * */

stream_set_blocking(STDIN, 0);
error_reporting(0);

echo exec("echo hwsave > /dev/input/ckb1/cmd");
echo exec("echo idle > /dev/input/ckb1/cmd");

usleep(140000);

echo exec("echo hwload > /dev/input/ckb1/cmd");
echo exec("echo active > /dev/input/ckb1/cmd");
echo exec("echo fps 60 > /dev/input/ckb1/cmd");

usleep(10000);

$GLOBALS['cmd']  = $argv[1];
$GLOBALS['ratio']  = $argv[2];
$GLOBALS['maxloops']  = '38';

function rain() {

	if ($GLOBALS['cmd']  == 'rainbow') {

		for ($i = 1; $i <= $GLOBALS['maxloops']; $i++) {
			if ($i < $GLOBALS['maxloops']) {

			usleep(80000); 

			$rainbow=array('ff0000','ff3300','ff6600','ff9900','ccff00',
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
			'ff00cc','ff0099','ff0066','ff0033','ff0000','ff3300','ff6600');

			echo $rainbow[$i];
			echo exec("echo rgb ".$rainbow[$i]." esc,f1,f2,f3,f4,f5,f6,f7,f7,f8,f9,f10,f11,f12:".
			$rainbow[$i+3]." 1,2,3,4,5,6,7,8,9,0:".
			$rainbow[$i-3]." bslash_iso,lctrl,lwin,lalt,caps,tab,lshift,rctrl,rwin,ralt,rshift,enter,ins:".
			$rainbow[$i-8]." m,prtscn,comma,dot,slash:".
			$rainbow[$i-6]." bslash,bspace,quote,grave,rbrace,lbrace,equal,minus:".
			$rainbow[$i+5]." up,left,down,right:".
			$rainbow[$i+14]." > /dev/input/ckb1/cmd");

		} else { rain(); }
}}}

rain();

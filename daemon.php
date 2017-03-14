#!/usr/bin/php 


<?php
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
error_reporting(0);

$eqdata = $_GET['eqdata'];
$eqbColor = $_GET['eqbColor'];
$eqhColor = $_GET['eqhColor'];
$eqoColor = $_GET['eqoColor'];
$eqfps = $_GET['eqfps'];
$rainbowRatio = $_GET['rainRate'];
$pwn = $_GET['matrix'];
$pot = $_GET['pot'];
$randpwn = $_GET['rand'];

//~ echo $eqdata;
$eq1 = $_GET['eq1'];
$eq2 = $_GET['eq2'];
$eq3 = $_GET['eq3'];
$eq4 = $_GET['eq4'];
$eq5 = $_GET['eq5'];
$eq6 = $_GET['eq6'];
$eq7 = $_GET['eq7'];
$eq8 = $_GET['eq8'];
//~ echo $eq1;

//~ echo exec("echo hzload > /dev/input/ckb1/cmd");
echo exec("echo active > /dev/input/ckb1/cmd");

echo exec("echo fps ".$eqfps." > /dev/input/ckb1/cmd");
//~ echo exec("echo pollrate 8 > /dev/input/ckb1/cmd");


	$keys = ['esc','f1','f2','f3','f4','f5','f6','f7','f8','f9',
	'f1','f11','f10','grave','0','1','2','3','4','5','6','7','8','9','minus',
	'tab','q','w','e','r','t','y','u','i','o','p','lbrace','caps',
	'a','s','d','f','g','h','j','k','l','colon','quote','lshift',
	'bslash_iso','z','x','c','v','b','n','m','comma','dot','slash',
	'lctrl','lwin','lalt','space','light','f12','prtscn','scroll',
	'pause','ins','home','pgup','rbrace','bslash','hash','enter',
	'equal','bspace','del','end','pgdn','ralt','rshift','rwin','rctrl','up','left',
	'down','right','lock','mute','stop','prev','play','next','numlock',
	'numslash','numstar','numminus','numplus','numenter','num7','num8',
	'num9','num4','num5','num6','num1','num2','num3','num0'];
	
	$world = ['ff0000','ff3300','ff6600','ff9900','ccff00',
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
	
	$whiteRabbit = ['02E148','086213','67F383','044A0B'];	


if ($eqdata > $rainbowRatio ) {
	

	
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8 > "72") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");
	echo exec("echo rgb ".$eqoColor." lctrl,lwin,lalt,lbrace:".$eqbColor." x,c:".$eqbColor." v,b:".$eqbColor." comma,dot:".$eqbColor." slash,rshift:".$eqbColor." rwin,rctrl:".$eqbColor." up,left,right,down:".$eqbColor." num0,numdot,numenter:".$eqbColor." > /dev/input/ckb1/cmd");
};
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8 > "78") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");	
	echo exec("echo rgb ".$eqoColor." lctrl,lwin,lalt:".$eqbColor." x,c:".$eqbColor." v,b:".$eqbColor." comma,dot:".$eqbColor." slash,rshift:".$eqbColor." rwin,rctrl:".$eqbColor." up,left,right,down:".$eqbColor." num0,numdot,numenter:".$eqbColor." > /dev/input/ckb1/cmd");
};
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8 > "82") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");	
	echo exec("echo rgb ".$eqoColor." lctrl,lwin,lalt:".$eqbColor." x,c:".$eqbColor." v,b,g:".$eqbColor." n,m:".$eqbColor." comma,dot:".$eqbColor." rwin,rctrl:".$eqbColor." up,left,right,down:".$eqbColor." num0,numdot,numenter:".$eqbColor." > /dev/input/ckb1/cmd");
};
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8 > "84") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");	
	echo exec("echo rgb ".$eqoColor." lctrl,lwin,lalt:".$eqbColor." x,c:".$eqbColor." v,b,f,g:f:".$eqbColor." n,m:".$eqbColor." comma,dot,k,l:".$eqbColor." slash,rshift,bslash_iso,rbrace,semicolon:".$eqbColor." rwin,rctrl:".$eqbColor." up,left,right,down:".$eqbColor." num0,numdot,numenter:".$eqbColor." > /dev/input/ckb1/cmd");
};
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8 > "88") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");	
	echo exec("echo rgb ".$eqoColor." lctrl,lwin,lalt:".$eqbColor." x,c:".$eqbColor." v,b,f,g,f,r:".$eqbColor." n,m,h,j:".$eqbColor." comma,dot,k,l,i,o:".$eqbColor." slash,rshift,bslash_iso,rbrace,colon,0,p,rbrace:".$eqbColor." rwin,rctrl,rquote,hash:".$eqbColor." up,left,right,down:".$eqbColor." num0,numdot,numenter:".$eqbColor." > /dev/input/ckb1/cmd");
};
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8 > "94") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");	
	echo exec("echo rgb ".$eqoColor." lctrl,lwin,lalt:".$eqbColor." x,c,s:".$eqbColor." v,b,f,g,r,t:".$eqbColor." n,m,h,j:".$eqbColor." comma,dot,k,l,i,o:".$eqbColor." rwin,rctrl:".$eqbColor." up,left,right,down:".$eqbColor." num0,numdot,numenter:".$eqbColor." > /dev/input/ckb1/cmd");
};
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8 > "100") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");	
	echo exec("echo rgb ".$eqoColor." lctrl,lwin,lalt:".$eqbColor." x,c,s,d:".$eqbColor." v,b,f,g,r,t:".$eqbColor." n,m,h,j,y,u:".$eqbColor." comma,dot,k,l,i,o,8:".$eqbColor." up,left,right,down:".$eqbColor." num0,numdot,numenter:".$eqbColor." > /dev/input/ckb1/cmd");
};
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8 > "127") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");	
	echo exec("echo rgb ".$eqoColor." lctrl,lwin,lalt:".$eqbColor." x,c,s,d:".$eqbColor." v,b,f,g,r,t,4:".$eqbColor." n,m,h,j,y,u:".$eqbColor." comma,dot,k,l,i,o,8,9:".$eqbColor." up,left,right,down:".$eqbColor." up,left,right,down:".$eqbColor." num0,numdot,numenter,num1,num2,num3:".$eqbColor." > /dev/input/ckb1/cmd");
};
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8 == "255") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");	
};
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8 > "240") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");	
	echo exec("echo rgb ".$eqoColor." lctrl,lwin,lalt:".$eqbColor." x,c,s,d:".$eqbColor." v,b,f,g,r,t,4,5:".$eqbColor." n,m,h,j,y,u:".$eqbColor." ralt,comma,dot,k,l,i,o,8,9:".$eqbColor." up,left,right,down:".$eqbColor." num0,numdot,numenter:".$eqbColor." num0,numdot,numenter,num1,num2,num3,num4,num5,num6:".$eqbColor." > /dev/input/ckb1/cmd");
};
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8> "310") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");	
	echo exec("echo rgb ".$eqoColor." lctrl,lwin,lalt,minus,z,bslash,lshift:".$eqbColor." x,c,s,d,e:".$eqbColor." v,b,f,g,r,t:".$eqbColor." n,m,h,j,y,u:".$eqbColor." enter:".$eqbColor." up,left,right,down,del:".$eqbColor." num0,numdot,numenter,num1,num2,num3:".$eqbColor." > /dev/input/ckb1/cmd");
};
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8 > "320") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");	
	echo exec("echo rgb ".$eqoColor." lctrl,lwin,lalt,z,bslash,lshift,caps:".$eqbColor." x,c,s,d,w,e,d,3,4:".$eqbColor." n,m,h,j,y,u,6,7:".$eqbColor." up,left,right,down,del,end,pgdn:".$eqbColor." > /dev/input/ckb1/cmd");
};
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8 > "330") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");	
	echo exec("echo rgb ".$eqoColor." lctrl,lwin,lalt,z,bslash,lshift,caps,tab,q:".$eqbColor." x,c,s,d,w,e,d,3,4,5:".$eqbColor." 2,3:".$eqbColor." up,left,right,down,del,end,pgdn:".$eqbColor." num0,numdot,numenter,num1,num2,num3,num4,num5,num6,num7,num8,num9,numplus:".$eqbColor." > /dev/input/ckb1/cmd");
};
if ($eq1  || $eq2  || eq3 || $eq4 || $eq5 || $eq6 || $eq7 || $eq8 > "340") {
	// echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");	
	echo exec("echo rgb ".$eqoColor." lctrl,lwin,lalt,z,bslash,lshift,caps,tab,a,q,1,grave:".$eqbColor." x,c,s,d,w,e,d,3:".$eqbColor." n,m,h,j,y,u:".$eqbColor." up,left,right,down,del,end,pgdn,ins,home,pgup:".$eqbColor." num0,numdot,numenter,num1,num2,num3,num4,num5,num6,num7,num8,num9,numplus,numlock,numstar,numslash,numminus:".$eqbColor." > /dev/input/ckb1/cmd");
};
if ($eq4 || $eq5 || $eq6 || $eq7 || $eq8 > "359") {
	//~ echo exec("echo rgb ".$eq0Color." 111111 > /dev/input/ckb1/cmd");
	if ($eq1){
		echo exec("echo rgb esc,f1,f2:".$eqhColor." > /dev/input/ckb1/cmd");
	};
	if ($eq2){
		echo exec("echo rgb f3,f4:".$eqhColor." > /dev/input/ckb1/cmd");
	};
	if ($eq3){
		echo exec("echo rgb f5,f6:".$eqhColor." > /dev/input/ckb1/cmd");
	};
	if ($eq4){
		echo exec("echo rgb f7,f8:".$eqhColor." > /dev/input/ckb1/cmd");
	};
	if ($eq5){
		echo exec("echo rgb f9,f10:".$eqhColor." > /dev/input/ckb1/cmd");
	};
	if ($eq6){
		echo exec("echo rgb f11,f12:".$eqhColor." > /dev/input/ckb1/cmd");
	};
	if ($eq7){
		echo exec("echo rgb prtscn,scroll,pause:".$eqhColor." > /dev/input/ckb1/cmd");
	};
	if ($eq8){
		echo exec("echo rgb stop,prev,play,next:".$eqhColor." > /dev/input/ckb1/cmd");
	};	
};




}

echo exec("echo rgb space:560000 > /dev/input/ckb1/cmd");

echo exec("echo rgb lock,mute,light:560000 > /dev/input/ckb1/cmd");


if ($_GET['mode'] == 'rainbow'){
	echo shell_exec("php ./k70.php ".$eqbColor." ".$eqoColor);
	echo $return_var;

}
if ($_GET['mode'] == 'kill'){
	$sys = 'pid';
	$pid = file_get_contents($sys);
	echo $pid;
	echo shell_exec("sudo kill ".$pid);
	echo shell_exec("sudo kill ".$pid+1);
	echo shell_exec("sudo kill ".$pid+2);
	echo shell_exec("sudo kill ".$pid+3);
}



if ($pwn === "true") {
	if ($eqdata >= null){
		
	$neo =  str_repeat($keys[array_rand($keys, 1)].",",$pot);

		$neo = str_repeat($keys[array_rand($keys, 1)].",",$pot);


	
 echo exec("echo rgb ".$keys[array_rand($keys, 1)].$neo.":".$whiteRabbit[array_rand($whiteRabbit, 1)]." > /dev/input/ckb1/cmd");

	//~ echo exec("echo rgb ".$keys[array_rand($keys, 1)].",".$keys[array_rand($keys, 1)].",".$keys[array_rand($keys, 1)].",".$keys[array_rand($keys, 1)].":".$whiteRabbit[array_rand($whiteRabbit, 1)]." > /dev/input/ckb1/cmd");

	
}
};

if ($randpwn === "true") {
	if ($eqdata >= null){
		
	$neo =  str_repeat($keys[array_rand($keys, 1)].",",$pot);

		$neo = str_repeat($keys[array_rand($keys, 1)].",",$pot);


	
 echo exec("echo rgb ".$keys[array_rand($keys, 1)].$neo.":".$world[array_rand($world, 1)]." > /dev/input/ckb1/cmd");

	//~ echo exec("echo rgb ".$keys[array_rand($keys, 1)].",".$keys[array_rand($keys, 1)].",".$keys[array_rand($keys, 1)].",".$keys[array_rand($keys, 1)].":".$world[array_rand($world, 1)]." > /dev/input/ckb1/cmd");

	
}
};	

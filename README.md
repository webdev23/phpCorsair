# phpCorsair
#### Controls Corsair devices running under the ckb-daemon with php.

/*  Rainbow effect for Corsair devices running trought ckb-daemon.
 *  Tested only on ubuntu with the k70rgb, but should works with any device.
 *  This program only need the ckb-daemon to run, beside php.
 *  It can also works in adjonction of the ckb software to add cools effects.
 *  Make sure the ckb-daemon is running with: sudo ckb-daemon
 *  If the driver fail: sudo killall ckb-daemon && sudo ckb-daemon
 *  Add a keyboard shortcut to call this program, or run like this in terminal:
 * 
 #### php phpCorsair.php rainbow
 * 
 * To kill: gksudo killall php

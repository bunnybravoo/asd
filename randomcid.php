#!/usr/bin/php
<?php
     include 'phpagi-2.20/phpagi.php';
     $agi = new AGI();
     $numbers = file('/var/lib/asterisk/agi-bin/cids-list.txt');
     $cid = array_rand($numbers, 1);
     //return trim($numbers[$cid[0]]);
     $newCID = trim($numbers[$cid]);
     //echo $newCID;
     $agi->set_variable("CALLERID(num)", $newCID);

?>

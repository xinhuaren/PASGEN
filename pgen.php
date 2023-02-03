#code by xinhuaren_id

<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$suci="cls";
} else {
$suci="clear";
}
system($suci);
$olive = "\e[92m";
$orange = "\e[91m";
$yellow = "\e[93m";
$navy = "\e[36m";

echo "\n$green  PASSWORD GENERATOR POWERFULL";


echo "\n$red
Author : Xinhuaren
Team   : haxmax sec
";

echo $green."=========================== XINHUAREN ))=====(@)>".$red."\n";
$string=str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
        $array=["1","2","3","4","5","6","7","8","9","0"];
 	       $random=array_rand($array);
	       $rand=$array[$random];
        $a=$rand;
        $b=$rand;
	       $c=$rand;
        $d=$rand;
        $e=$a*$b*$c*$d*$e*$f*$g*$h*$i*$j*$k*$l*$m*$n*$o*$p*$q*$r*$s*$t*$u*$v*$w*$x*$y*$z*;
        $f=$string.$e.$string;
        $out=md5(sha1($f));
echo $green.$out."\n";
tulis=fopen("pgen.txt", "w");
fwrite($ditulis,$out);
fclose(di$tulis);
die($dark brown."password".$dark gray." -> ".$emerald."pass.txt"."\n");

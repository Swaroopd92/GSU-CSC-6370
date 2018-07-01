<?php
echo "\"Good morning, Dave,\" said HAL.";
// yur code goes here

$r = 2;
$pi = 3.142;
$a = $pi * $r * $r;
print "\n $a";


//$ff = floatvar($f);
//Print $ff;
$f = -459.67;
$c = (5/9) * ($f - 32);

Print "\n$c";

$s = " PHP is fun ";
Print $s;
$i = strlen($s);
print "\nCount = $i";

$s1 = "kayak";
$s2 = strrev($s1);
if ($s1 == $s2)
{
	print "\nPalindrome\n";
}
else
{
	print "\nNot palindrome\n";
}

$s3 = "wwdfwwwe";

print $s3[strpos($s3, "www")+3];
?>
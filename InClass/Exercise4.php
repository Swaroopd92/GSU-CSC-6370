<?php
function factorial ($x){
	if( $x == 0){
		return 1;
	}
	else{
		return $x * factorial($x-1);
	}
}

print "<p> Factorial of 5 is ".factorial(5)."</p>";

function average ($x, $y, $z){
	return ($x + $y + $z)/3;
}

print "<p> Average of 3, 4 and 5 is ".average(3,4,5)."</p>";
?>
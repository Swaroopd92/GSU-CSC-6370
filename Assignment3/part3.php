<!DOCTYPE html>
<html>
<body>
	<?php
	$month = array ("January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"); 
	$length = count($month);
	for($i = 0; $i < $length ; $i++)
	{
		echo ($month[$i]);
		echo"<br>";
	}
	echo "<br>";
	echo "Sorted months:";
	echo "<br>";
	echo "<br>";
	sort($month);
	for($i = 0; $i < $length; $i++)
	{
		echo $month[$i];
		echo "<br>";
	}
	$month = array ("January", "February", "March", "April",
		"May", "June", "July", "August",
		"September", "October", "November", "December"); 
	echo"<br>";
	echo " Display of  months using foreach:";
	echo"<br>";
	echo"<br>";
	foreach($month as $value)
	{
		echo ($value);
		echo"<br>";
	}
	echo"<br>";
	echo " Display of sorted  months using foreach:";
	echo"<br>";
	echo"<br>";
	sort($month);
	foreach($month as $value)
	{
		echo ($value);
		echo"<br>";
	}
	?>
</body>
</html>
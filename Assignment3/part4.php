<!DOCTYPE html>
<html>
<body>
	<?php
	function price()
	{
		echo"<table width=\"300px\"  border=\"1px\">";
		echo"<br>";
		echo" Table sorted by Cost:";
		echo"<br>";
		echo"<br>";
		$r = array( "Chama Gaucha" => "40.5" ,
			"Aviva by Kameel" =>"15" ,
			"Bone’s Restaurant"=>"65" ,
			"Umi Sushi Buckhead" =>"40.5" ,
			"Fandangles" =>"30" ,
			"Capital Grille" =>"60.5" ,
			"Canoe" =>"35.5" ,
			"One Flew South" =>"21" ,
			"Fox Bros. BBQ" =>"15" ,
			"South City Kitchen Midtown" =>"29" );
		asort($r);
		echo "<tr>";		
		echo "<td>"."Restaurant Name"."</td>";
		echo "<td>"." Average Cost"."</td>";
		echo "</tr>";

		foreach($r as $x=>$x_value)
		{
			echo "<tr>";
			echo "<td>".$x."</td>";
			echo "<td>".$x_value."</td>";
			echo "</tr>";
		}
		echo"</table>"; 
	}
	?>

	<?php
	function name()
	{
		echo"<table width=\"300px\"  border=\"1px\">";
		echo"<br>";
		echo" Table sorted by Name:";
		echo"<br>";
		echo"<br>";
		$r = array( "Chama Gaucha" => "40.5" ,
			"Aviva by Kameel" =>"15" ,
			"Bone’s Restaurant"=>"65" ,
			"Umi Sushi Buckhead" =>"40.5" ,
			"Fandangles" =>"30" ,
			"Capital Grille" =>"60.5" ,
			"Canoe" =>"35.5" ,
			"One Flew South" =>"21" ,
			"Fox Bros. BBQ" =>"15" ,
			"South City Kitchen Midtown" =>"29" );
		ksort($r);
		echo "<tr>";
		echo "<td>"."Restaurant Name"."</td>";
		echo "<td>"." Average Cost"."</td>";
		echo "</tr>";

		foreach($r as $x=>$x_value)
		{
			echo "<tr>";
			echo "<td>".$x."</td>";
			echo "<td>".$x_value."</td>";
			echo "</tr>";
		}
		echo"</table>";        

	}
	?>
	
	<?php
	echo"<table width=\"300px\"  border=\"1px\">";
	$r = array( "Chama Gaucha" => "40.5" ,
		"Aviva by Kameel" =>"15" ,
		"Bone’s Restaurant"=>"65" ,
		"Umi Sushi Buckhead" =>"40.5" ,
		"Fandangles" =>"30" ,
		"Capital Grille" =>"60.5" ,
		"Canoe" =>"35.5" ,
		"One Flew South" =>"21" ,
		"Fox Bros. BBQ" =>"15" ,
		"South City Kitchen Midtown" =>"29" );
	echo "<tr>";
	echo "<td>"."Restaurant Name"."</td>";
	echo "<td>"." Average Cost"."</td>";
	echo "</tr>";

	foreach($r as $x=>$x_value)
	{
		echo "<tr>";		
		echo "<td>".$x."</td>";
		echo "<td>".$x_value."</td>";
		echo "</tr>";
	}
	echo"</table>"; 
	price();
	name();
	?>
</body>
</html>
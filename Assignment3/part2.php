<!DOCTYPE html>
     <html> 
     <head> 

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
  <h3>CHECKER BOARD</h3>
   <table width="300px"  cellpadding="1px" cellspacing="1px" border="1px">
  
      <?php
      for($r=1;$r<=8;$r++)
	  {
          echo "<tr>";
          for($c=1;$c<=8;$c++)
		  {
          $t=$r+$c;
          if($t%2==0)
		  {
          echo "<td  width=30px height=35px bgcolor=red></td>";
          }
		  else
		  {
          echo "<td  width=30px height=35px bgcolor=black></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
</html>
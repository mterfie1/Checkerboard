<!DOCTYPE html>
<html>
<head>

	<title>Play Checkers!</title>
	<link rel="stylesheet" type="text/css" href="checkerboard.css" />
	
</head>
<body>
	
	<h1 class="title">
		<span class="red-letter">M</span>i<span class="red-letter">k</span>e<span class="red-letter">'</span>s <span class="red-letter">C</span>h<span class="red-letter">e</span>c<span class="red-letter">k</span>e<span class="red-letter">r</span>b<span class="red-letter">o</span>a<span class="red-letter">r</span>d
	</h1>
	
	<table class="center">
		<tbody>
			<?php
				for($i=0; $i<=7; $i++){
					echo "<tr>";
					for($j=1; $j<=8; $j++){

						$x=$i+$j;
				
						if($x % 2 == 0){
							echo '<td class="black"></td>';
							
						}
						else{
							echo '<td class="red"></td>';
						}
					}
				}
?>
		</tbody>
	</table>

</body>

</html>

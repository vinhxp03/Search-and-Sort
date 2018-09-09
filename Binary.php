<?php 	

$x = 5;

echo decbin($x) . '<br>'; 			// 101
echo ($y = $x << 2) . '<br>'; 		// = (2 * $x) * 2 = 20
echo decbin($y) . '<br>';			// 10100
echo bindec(decbin($y)) . '<br>';	// 20

 ?>
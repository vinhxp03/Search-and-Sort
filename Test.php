<?php 

require_once 'Search.php';

/**
 * Test
 */
$arr = [1,45,8,31,4,6,48,5];
$x = 5;
$search = Search::LinearSearch($arr, $x);

if ($search) {
	echo "Tìm thấy giá trị " . $x . " ở vị trí thứ " . $search . " trong mảng arr";
} else {
	echo "Không tìm thấy!";
}

 ?>
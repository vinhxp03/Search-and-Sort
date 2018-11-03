<?php 

require 'Search.php';
require 'Sort.php';

/**
 * Test
 */
class Test
{
	public function testLinearSearch($arr = array(), $x)
	{
		$search = Search::linearSearch($arr, $x);

		if ($search) {
			echo "Tìm thấy giá trị " . $x;
		} else {
			echo "Không tìm thấy giá trị " . $x;
		}
	}

	public function testLinearSearchFix($arr = array(), $x)
	{
		$search = Search::linearSearchFix($arr, $x);

		if ($search) {
			echo "Tìm thấy giá trị " . $x;
		} else {
			echo "Không tìm thấy giá trị " . $x;
		}
	}

	public function testBinarySearch($arr = array(), $x)
	{
		$search = Search::binarySearch($arr, $x);

		if ($search) {
			echo "Tìm thấy giá trị " . $x;
		} else {
			echo "Không tìm thấy giá trị " . $x;
		}
	}

	public function printArray($arr)
	{
		$len = count($arr) - 1;

		foreach ($arr as $key => $value) {
			if ($key != $len) {
				echo $value . ',';
			} else {
				echo $value . '<br>';
			}
		}
	}
}
$arr = [-2,1,-5,8,19,-10,4,7,-8,32,5];
$x = 19;

echo "Mảng ban đầu: ";
echo Test::printArray($arr);

/**
 * Search
 */
// Test::testLinearSearch($arr, $x);
// Test::testLinearSearchFix($arr, $x);

/**
 * Sort
 */
$sort = new Sort();
// $sort = $sort->interChangeSort($arr);
// $sort = $sort->selectionSort($arr);
// $sort = $sort->bubbleSort($arr);
// $sort = $sort->shakerSort($arr);
// $sort = $sort->insertionSort($arr);
// $sort = $sort->binaryInsertionSort($arr);
$sort = $sort->shellSort($arr);

echo "Mảng sau khi sắp xếp: ";
echo Test::printArray($sort);
// Test::testBinarySearch($sort, $x); //Tìm kiếm nhị phân

 ?>
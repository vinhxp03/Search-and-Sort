<?php 
/**
 * Sort
 */
class Sort
{
	/**
	 * Đổi chỗ trực tiếp
	 */
	public function interChangeSort($arr = array())
	{
		$len = count($arr);

		for ($i=0; $i < $len; $i++) { 
			for ($j=$i+1; $j < $len; $j++) { 
				if ($arr[$i] > $arr[$j]) {
					$this->swap($arr[$i], $arr[$j]);
				}
			}
		}

		return $arr;
	}

	/**
	 * Chọn trực tiếp
	 */
	public function selectionSort($arr = array())
	{
		$len = count($arr);

		for ($i=0; $i < $len; $i++) { 
			$min = $i;
			for ($j=$i+1; $j < $len; $j++) { 
				
				if ($arr[$j] < $arr[$min]) {
					$min = $j;
				}
			}
			$this->swap($arr[$min], $arr[$i]);
		}

		return $arr;
	}

	/**
	 * Nổi bọt
	 */
	public function bubbleSort($arr = array())
	{
		$len = count($arr);
		$right = $len - 1; 

		for ($i=0; $i < $len; $i++) { 
			for ($j=$right; $j > $i ; $j--) { 
				if ($arr[$j] < $arr[$j - 1]) {
					$this->swap($arr[$j], $arr[$j - 1]);
				}
			}
		}

		return $arr;
	}

	/**
	 * Shaker sort
	 */
	public function shakerSort($arr = array())
	{
		# code...
	}

	/**
	 * Chèn trực tiếp
	 */
	public function insertionSort($arr = array())
	{
		# code...
	}

	/**
	 * Chèn nhị phân
	 */
	public function binaryInsertionSort($arr = array())
	{
		# code...
	}

	/**
	 * Shell sort
	 */
	public function shellSort($arr = array())
	{
		# code...
	}

	/**
	 * Heap sort
	 */

	/**
	 * Swap
	 */
	public function swap(&$a, &$b)
	{
		$temp = $a;
		$a = $b;
		$b = $temp;
	}
}
 ?>
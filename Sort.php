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
	 * Chọn trực tiếp: chọn phần tử nhỏ nhất của dãy đưa về đầu
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
	 * Nổi bọt: xuất phát từ cuối dãy, đổi chỗ các phần tử nhỏ về đầu
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
	 * Shaker sort: duyệt 2 phía đẩy phần tử nhỏ về đầu mảng, phần tử lớn về cuối mảng
	 */
	public function shakerSort($arr = array())
	{
		$len = count($arr);
		$left = 0;
		$right = $len - 1;
		$k = $len - 1;

		while ($left < $right) {
			for ($i=$right; $i > $left ; $i--) { 
				if ($arr[$i] < $arr[$i - 1]) {
					$this->swap($arr[$i], $arr[$i - 1]);
					$k = $i;
				}
			}
			$left = $k;

			for ($i=$left; $i < $right ; $i++) { 
				if ($arr[$i] > $arr[$i + 1]) {
					$this->swap($arr[$i], $arr[$i + 1]);
					$k = $i;
				}
			}
			$right = $k;
		}

		return $arr;
	}

	/**
	 * Chèn trực tiếp: chèn phần tử vào vị trí thích hợp để có thứ tự
	 */
	public function insertionSort($arr = array())
	{
		$len = count($arr);

		for ($i=0; $i < $len; $i++) { 
			$x = $arr[$i];
			$pos = $i - 1;

			while ($pos >= 0 && $arr[$pos] > $x) {
				$arr[$pos + 1] = $arr[$pos];
				$pos--;
			}

			$arr[$pos + 1] = $x;
		}
		return $arr;
	}

	/**
	 * Chèn nhị phân
	 */
	public function binaryInsertionSort($arr = array())
	{
		$len = count($arr);

		for ($i=1; $i < $len; $i++) { 
			$x = $arr[$i];
			$l = 0;
			$r = $i - 1;

			// Tìm vị trí chèn
			while ($l <= $r) {
				$m = floor(($l + $r)/2); 

				if ($x < $arr[$m]) {
					$r = $m - 1;
				} else {
					$l = $m + 1;
				}
			}

			for ($j=$i-1; $j >= $l; $j--) { 
				$arr[$j+1] = $arr[$j];
			}

			$arr[$l] = $x;
		}
		return $arr;
	}

	/**
	 * Shell sort: cải tiến chèn trực tiếp
	 * - Phân hoạch thành các dãy con 
	 * - Sắp xếp dãy con bằng chèn trực tiếp
	 * - Sắp xếp lại dãy bằng chèn trực tiếp
	 */
	public function shellSort($arr = array())
	{
		return $arr;
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
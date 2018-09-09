<?php 
/**
 * Giải thuật tìm kiếm
 */
class Search
{
	/**
	 * Tìm kiếm tuyến tính
	 */
	public function linearSearch($arr = array(), $x)
	{
		$i = 0;
		$n = count($arr);

		while ($i < $n && $arr[$i] != $x) {
			$i += 1;
		}

		if ($i == $n) {
			return 0; //Không tìm thấy
		} else {
			return 1; //Tìm thấy ở vị trí thứ $i
		}
	}

	/**
	 * Lính canh: giảm thiểu số phép so sánh trong vòng lặp
	 */
	public function linearSearchFix($arr = array(), $x)
	{
		$i = 0;
		$n = count($arr);
		$arr[$n] = $x; //Lính canh

		while ($arr[$i] != $x) {
			$i += 1;
		}

		if ($i == $n) {
			return 0; //Không tìm thấy
		} else {
			return 1;
		}
	}

	/**
	 * Tìm kiếm nhị phân: mảng đã sắp xếp
	 */
	public function binarySearch($arr = array(), $x)
	{
		$n = count($arr);
		$left = 0;
		$right = $n - 1;

		while ($left <= $right) {
			$mid = (int) (($left + $right) / 2);

			if ($arr[$mid] == $x) {
				return 1; //Tìm thấy
			} else {
				if ($arr[$mid] < $x) {
					$left = $mid + 1; 
				} else {
					$right = $mid - 1;
				}
			}
		} 

		return 0; //Không tìm thấy
	}
}

 ?>
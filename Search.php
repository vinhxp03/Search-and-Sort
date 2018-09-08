<?php 
/**
 * Giải thuật tìm kiếm
 */
class Search
{
	/**
	 * Tìm kiếm tuyến tính
	 */
	public function LinearSearch($arr = array(), $x)
	{
		$i = 0;
		$n = count($arr);

		while ($i < $n && $arr[$i] != $x) {
			$i += 1;
		}

		if ($i == $n) {
			return 0; // Không tìm thấy
		} else {
			return $i; // Tìm thấy ở vị trí thứ $i
		}
	}

	
}

 ?>
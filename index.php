<?php

class scenario {

	//-------------------//
	// V a r i a b l e s //
	//-------------------//

	var $districts = array();
	var $districts_num = 0;

	var $mandates = array();
	var $mandates_num = 0;

	var $parties = array();
	var $parties_num = 0;

	var $random = false;
	var $styringstillegg = 1;
	
	//-------------------//
	//   M e t h o d s   //
	//-------------------//

	// ===== G ===== //
	
	function get_districts() {
		return $this->districts;
	}

	function get_mandates() {
		return $this->mandates;
	}

	function get_parties() {
		return $this->parties;
	}

	// ===== S ===== //

	function sainte_laguë($arr, $mandates, $st = $this->styringstillegg) {
		$num = count($arr);

		$result = array();
		$tmp_arr = array();
		
		for ($i = 0; $i < $this->num; $i++) {
			$tmp_arr[$i] = $arr[$i] / $st;
			$result[$i] = 0;
		}
		
		for ($i = 0; $i < $mandates; $i++) {
			$biggest_arr = array_keys($tmp_arr, max($tmp_arr));
			$bc = count($biggest_arr);
			if ($bc == 1) {
				$biggest = $biggest_arr[0];
			}
			else {
				$biggest = $biggest_arr[rand(1, $bc) - 1];
				$this->random = true;
			}
			$result[$biggest]++;
			$tmp_arr[$biggest] = $arr[$biggest] / (2 * $result[$biggest] + 1);
		}
		return $result;
	}
	
	function set_districts($arr) {
		if (!is_array($arr)) {
			return false;
		}
		else {
			$this->districts = $arr;
			$this->districts_num = count($arr);
			return true;
		}
	}

	function set_mandates($arr) {
		if (!is_array($arr)) {
			return false;
		}
		else {
			$this->mandates = $arr;
			$this->mandates_num = count($arr);
			return true;
		}
	}

	function set_parties($arr) {
		if (!is_array($arr)) {
			return false;
		}
		else {
			$this->parties = $arr;
			$this->parties_num = count($arr);
			return true;
		}
	}
}

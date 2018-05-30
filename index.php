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

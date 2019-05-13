<?php
class ElectricalResistanceModel{

	public function __construct(){

	}

	public function calculateU($data){
		$data['U'] = $data['I']*$data['R'];
		return $data;
	}
	public function calculateI($data){
		$data['I'] = $data['U']/$data['R'];
		return $data;
	}
	public function calculateR($data){
		$data['R'] = $data['U']/$data['I'];
		return $data;
	}
}


?>
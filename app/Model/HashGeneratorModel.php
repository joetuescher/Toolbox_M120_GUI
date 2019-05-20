<?php

class HashGeneratorModel{

	public function __construct(){}

	public function hashGenerator($value){

		$value['hashoutput'] = sha1(md5($value['hashinput']));

		return $value;
	}
}
?>
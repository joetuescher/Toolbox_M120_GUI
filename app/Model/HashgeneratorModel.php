<?php

class Model{

	public function __construct(){}

	public function hashGenerator($value){

		$hashKey = sha1(md5($value));

		return $hashKey;
	}
}
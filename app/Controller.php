<?php

require 'Model/Model.php';
require 'View.php';
require 'helper.php';

class Controller{

	private $view;
	private $model;
	private $helper;

	public function __construct(){
		$this->view = new view;
		$this->model = new model;
		$this->helper = new helper;
	}
	
}
?>
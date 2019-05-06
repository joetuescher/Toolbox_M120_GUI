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
	
	public function showNav(){
		$this->view->showNav();
	}
	public function showHash(){
		$this->view->showHashGenerator();
	}
	public function showHome(){
		$this->view->showHome();
	}
}
?>
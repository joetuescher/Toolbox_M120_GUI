<?php

require 'Model/ElectricalResistanceModel.php';
require 'View.php';
require 'helper.php';

class Controller{

	private $view;
	private $model;
	private $helper;

	public function __construct(){
		$this->view = new view;
		$this->helper = new helper;
		$this->electricalResistanceModel = new ElectricalResistanceModel;
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
	public function showElectricalResistance(){
		$this->view->showElectricalResistance();
	}
	public function showGewichtsmasse(){
		$this->view->showGewichtsmasse();
	}
	public function calcElectricalResistance($data){
		$data = $this->electricalResistanceModel->calcElectricalResistance($data);
		//$this->view->showElectricalResistanceResult($data);

	}
}
?>
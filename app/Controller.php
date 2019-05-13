<?php

require 'Model/ElectricalResistanceModel.php';
require 'View.php';
require 'helper.php';

class Controller{

	private $view;
	private $model;
	private $helper;
	private $electricalResistanceModel;

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
	public function electricalResistance($data){

		if(@$data['function'] == 'calcU'){
			$data = $this->electricalResistanceModel->calculateU($data);
			$this->view->showElectricalResistanceResult($data);

		}elseif(@$data['function'] == 'calcI'){
			$data = $this->electricalResistanceModel->calculateI($data);
			$this->view->showElectricalResistanceResult($data);

		}elseif(@$data['function'] == 'calcR'){
			$data = $this->electricalResistanceModel->calculateR($data);
			$this->view->showElectricalResistanceResult($data);

		}else{
			$this->view->showElectricalResistance();

		}
	}
	public function showGewichtsmasse(){
		$this->view->showGewichtsmasse();
	}
}
?>
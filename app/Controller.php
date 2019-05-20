<?php

require 'Model/HashGeneratorModel.php';
require 'Model/ElectricalResistanceModel.php';
require 'View.php';
require 'helper.php';

class Controller{

	private $view;
	private $model;
	private $helper;
	private $electricalResistanceModel;
	private $hashGeneratorModel;
	private $woerterZaehlen;

	public function __construct(){
		$this->view = new view;
		$this->helper = new helper;
		$this->electricalResistanceModel = new ElectricalResistanceModel;
		$this->hashGeneratorModel = new HashGeneratorModel;
	}
	
	public function showNav(){
		$this->view->showNav();
	}
	public function showHash($data){
		if(@$data['function'] == 'HashCode'){
			$data = $this->hashGeneratorModel->hashGenerator($data);
			$this->view->showHashGeneratorResult($data);
		}
		else
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
	public function showWoerterZaehlen(){
		$this->view->showWoerterZaehlen();
	}
}
?>
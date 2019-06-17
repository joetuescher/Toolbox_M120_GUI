<?php

require 'Model/HashGeneratorModel.php';
require 'Model/ElectricalResistanceModel.php';
require 'Model/GewichtsmasseModel.php';
require 'Model/WoerterZaehlenModel.php';
require 'View.php';
require 'helper.php';

class Controller{

	private $view;
	private $model;
	private $helper;
	private $electricalResistanceModel;
	private $hashGeneratorModel;
	private $woerterZaehlen;
	private $GewichtsmasseModel;

	public function __construct(){
		$this->view = new view;
		$this->helper = new helper;
		$this->electricalResistanceModel = new ElectricalResistanceModel;
		$this->hashGeneratorModel = new HashGeneratorModel;
		$this->GewichtsmasseModel = new GewichtsmasseModel;
		$this->WoerterZaehlenModel = new WoerterZaehlenModel;
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

		if(@$data['U'] == '' && @$data['I'] == '' && @$data['R'] == ''){
			$this->view->showElectricalResistance();
		}elseif(@$data['U'] == ''){
			$data = $this->electricalResistanceModel->calculateU($data);
			$this->view->showElectricalResistanceResult($data);

		}elseif(@$data['I'] == ''){
			$data = $this->electricalResistanceModel->calculateI($data);
			$this->view->showElectricalResistanceResult($data);

		}elseif(@$data['R'] == ''){
			$data = $this->electricalResistanceModel->calculateR($data);
			$this->view->showElectricalResistanceResult($data);

		}
	}
	public function showGewichtsmasse($data){
		if(@$data['function'] == 'umwandeln'){
			$data = $this->GewichtsmasseModel->Gewichtsmasse($data);
			$this->view->showGewichtsmasseResult($data);
		}else{
			$this->view->showGewichtsmasse();
		}
	}
	public function showWoerterZaehlen($data){
		if(@$data['function'] == 'calculate'){
			$data['solution'] = $this->WoerterZaehlenModel->WoerterZaehlen($data['textInput']);
			$this->view->showWoerterZaehlenResult($data);

		}else{
			$this->view->showWoerterZaehlen();
		}
	}
}
?>
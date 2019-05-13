<?php
class View{

	public function __construct(){

	}
	public function showNav(){
		echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Toolbox</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <button type="submit" name="Action" class="btn" value="Home">Home</button>
                </li>
                <li class="nav-item">
                  <button type="submit" name="Action" class="btn" value="Hash">Hash Generator</button>
                </li>
                <li class="nav-item">
                  <button type="submit" name="Action" class="btn" value="ElectricalResistance">Eletrical Resistance</button>
                </li>
                <li class="nav-item">
                  <button type="submit" name="Action" class="btn" value="Gewichtsmasse">Gewichtsmasse Umwandeln</button>
                </li>
              </ul>
            </div>
          </form>
          </nav>';
	}
  public function showHome(){
    echo '<h1>Home</h1>';
  }
  public function showHashGenerator(){
    echo '<h1>Hash Generator</h1>
          <p>Du bisch da</p>
          <p>Wer das liest ist dumm.</p>';
  }

  public function showGewichtsmasse(){
    echo 'Gewichtsmasse';
  }

  public function showElectricalResistance(){
    echo '<h1>Elektrischer Wiederstand</h1>
          <form method="get">
          <div class="form-row">
            <div class="form-group col-md-4">
              <input type="number" name="R" class="form-control" id="R" placeholder="R">
            </div>
            <div class="form-group col-md-4">
              <input type="number" name="I" class="form-control" id="I" placeholder="I">
            </div>
            <input type="hidden" name="function" value="calcU">
            <div class="form-group col-md-4">
              <button type="submit" class="btn btn-primary" Name="Action" value="ElectricalResistance">Berechnen</button>
            </div>
          </div>
        </form>';
  }
  public function showElectricalResistanceResult($data){
    
  }
}
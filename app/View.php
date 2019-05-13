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
    echo '<h1>Hash Generator</h1><br>
          <form method="get">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="hashinput">Hashinput</label>
              <input type="text" class="form-control" id="hashinput">
            </div>
            <div class="form-group col-md-4">
              <label for="hashoutput">Hashoutput</label>
              <input type="text" class="form-control" id="hashoutput">
            </div>
          </div>
          <button type="submit" class="btn btn-primary" Name="Action" value="HashCode">Hash generieren</button>
        </form>';
  }

  public function showGewichtsmasse(){
    echo 'Gewichtsmasse';
  }
  public function showElectricalResistance(){
    echo '<h1>Elektrischer Wiederstand</h1>
          <p>Hier kann der Elektrische Wiederstand berechnet werden.</p>
          <form method="get">
            <h3>Berechnung von Volt (U)</h3>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="R">Ohm (R)</label>
              <input type="number" name="R" class="form-control" id="R" placeholder="R" required>
            </div>
            <div class="form-group col-md-4">
              <label for="I">Ampere (I)</label>
              <input type="number" name="I" class="form-control" id="I" placeholder="I" required>
            </div>
            <input type="hidden" name="function" value="calcU">
            <div class="form-group col-md-4">
              <button id="btn-ElectricalResistance" type="submit" class="btn btn-primary" Name="Action" value="ElectricalResistance">Berechnen</button>
            </div>
          </div>
        </form><hr>
          <form method="get">
            <h3>Berechnung von Ohm (R)</h3>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="U">Volt (U)</label>
              <input type="number" name="U" class="form-control" id="U" placeholder="U" required>
            </div>
            <div class="form-group col-md-4">
              <label for="I">Ampere (I)</label>
              <input type="number" name="I" class="form-control" id="I" placeholder="I" required>
            </div>
            <input type="hidden" name="function" value="calcR">
            <div class="form-group col-md-4">
              <button id="btn-ElectricalResistance" type="submit" class="btn btn-primary" Name="Action" value="ElectricalResistance">Berechnen</button>
            </div>
          </div>
        </form>
        <hr>
          <form method="get">
            <h3>Berechnung von Ampere (I)</h3>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="U">Volt (U)</label>
              <input type="number" name="U" class="form-control" id="U" placeholder="U" required>
            </div>
            <div class="form-group col-md-4">
              <label for="R">Ohm (R)</label>
              <input type="number" name="R" class="form-control" id="R" placeholder="R" required>
            </div>
            <input type="hidden" name="function" value="calcI">
            <div class="form-group col-md-4">
              <button id="btn-ElectricalResistance" type="submit" class="btn btn-primary" Name="Action" value="ElectricalResistance">Berechnen</button>
            </div>
          </div>
        </form><hr>
         ';
  }
  public function showElectricalResistanceResult($data){
    echo '
          <h2>Resultat</h2>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="U">Volt (U)</label>
              <input type="number" name="U" class="form-control" id="U" value="'.$data['U'].'" required disabled>
            </div>
            <div class="form-group col-md-4">
              <label for="R">Ohm (R)</label>
              <input type="number" name="R" class="form-control" id="R" value="'.$data['R'].'" required disabled>
            </div>
            <div class="form-group col-md-4">
              <label for="I">Ampere (I)</label>
              <input type="number" name="I" class="form-control" id="I" value="'.$data['I'].'" required disabled>
            </div>
          </div>
      ';
  }
}
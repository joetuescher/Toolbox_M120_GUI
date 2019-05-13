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
              <input type="text" name="hashinput" class="form-control" id="hashinput">
            </div>
            <div class="form-group col-md-4">
              <label for="hashoutput">Hashoutput</label>
              <input type="text" name="hashoutput" class="form-control" id="hashoutput">
            </div>
          </div>
          <input type="hidden" name="function" value="HashCode">
          <button type="submit" class="btn btn-primary" Name="Action" value="Hash">Hash generieren</button>
        </form>';
  }

  public function showHashGeneratorResult($data){
    echo '<h1>Hash Generator</h1><br>
          <form method="get">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="hashinput">Hashinput</label>
              <input type="text" class="form-control" id="hashinput" value="'.$data['hashinput'].'" disabled>
            </div>
            <div class="form-group col-md-4">
              <label for="hashoutput">Hashoutput</label>
              <input type="text" class="form-control" id="hashoutput" value="'.$data['hashoutput'].'" disabled>
            </div>
          </div>
          <button type="submit" name="Action" class="btn" value="Hash">Neuen Hash generieren</button>
        </form>';
  }

  public function showGewichtsmasse(){
    echo 'Gewichtsmasse';
  }

  public function showElectricalResistance(){
    echo '<h1>Elektrischer Wiederstand</h1>
          <form method="get">
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
              <button type="submit" class="btn btn-primary" Name="Action" value="ElectricalResistance">Berechnen</button>
            </div>
          </div>
        </form>
        <form method="get">
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
              <button type="submit" class="btn btn-primary" Name="Action" value="ElectricalResistance">Berechnen</button>
            </div>
          </div>
        </form>
        <form method="get">
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
              <button type="submit" class="btn btn-primary" Name="Action" value="ElectricalResistance">Berechnen</button>
            </div>
          </div>
        </form>

        ';
  }
  public function showElectricalResistanceResult($data){
    echo '
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="U">Volt (U)</label>
              <input type="number" name="U" class="form-control" id="U" value="'.$data['U'].'" required>
            </div>
            <div class="form-group col-md-4">
              <label for="R">Ohm (R)</label>
              <input type="number" name="R" class="form-control" id="R" value="'.$data['R'].'" required>
            </div>
            <div class="form-group col-md-4">
              <label for="I">Ampere (I)</label>
              <input type="number" name="I" class="form-control" id="I" value="'.$data['I'].'" required>
            </div>
          </div>
      ';
  }
}
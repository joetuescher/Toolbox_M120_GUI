<?php
class View{

	public function __construct(){

	}
	public function showNav(){
		echo '
    <div class="menue-wrap">
    <nav class="navbar navbar-expand-lg navbar-light">
            <a id="navtitle" class="navbar-brand" href="#">Toolbox</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <button id="Hash" type="submit" name="Action" class="btn" value="Hash">Hash Generator</button>
                </li>
                <li class="nav-item">
                  <button id="ElectricalResistance" type="submit" name="Action" class="btn" value="ElectricalResistance">Eletrical Resistance</button>
                </li>
                <li class="nav-item">
                  <button id="GewichtsmasseUmwandeln" type="submit" name="Action" class="btn" value="GewichtsmasseUmwandeln">Gewichtsmasse Umwandeln</button>
                </li>
                <li class="nav-item">
                  <button id="WoerterZaehlen" type="submit" name="Action" class="btn" value="WoerterZaehlen">Wörter in Text zählen</button>
                </li>
              </ul>
            </div>
          </form>
          </nav>
          </div>';
	}
  public function showHome(){
    echo '';
  }
  public function showHashGenerator(){
    echo '<h1 class="title">Hash Generator</h1><br>
    <div class="content-wrap">
          <form method="get">
          <div class="form-row">
            <div class="form-group">
              <label for="hashinput">Hashinput</label>
              <input type="text" name="hashinput" class="form-control" id="hashinput">
            </div>
            <div class="form-group">
              <label for="hashoutput">Hashoutput</label>
              <input type="text" name="hashoutput" class="form-control" id="hashoutput">
            </div>
          </div>
          <input type="hidden" name="function" value="HashCode">
          <button type="submit" class="btn btn-primary" Name="Action" value="Hash">Hash generieren</button>
        </form>
        </div>';
  }

  public function showHashGeneratorResult($data){
    echo '<h1 class="title">Hash Generator</h1><br>
    <div class="content-wrap">
          <form method="get">
          <div class="form-row">
            <div class="form-group">
              <label for="hashinput">Hashinput</label>
              <input type="text" class="form-control" id="hashinput" value="'.$data['hashinput'].'" disabled>
            </div>
            <div class="form-group">
              <label for="hashoutput">Hashoutput</label>
              <input type="text" class="form-control" id="hashoutput" value="'.$data['hashoutput'].'" disabled>
            </div>
          </div>
          <button type="submit" name="Action" class="btn btn-primary" value="Hash">Neuen Hash generieren</button>
        </form>
        </div>';
  }

 public function showGewichtsmasse(){
    echo '<h1 class="title">Gewichtsmasse umwandeln</h1>
    <div class="content-wrap">
          <form method="get">
          <div class="form-row">
            <div class="form-group">
            <label for="Input">Wert</label>
              <input type="number" name="Input" class="form-control" id="Input" placeholder="Wert eingeben" required>
            </div>
            <div class="form-group">
            <label for="dropdown1">Einheit aktuell</label>
              <select name="dropdown1" class="form-control" id="dropdown1" required>
              <option>Gramm</option>
              <option>Pfund</option>
              <option>Kilogramm</option>
              <option>Tonne</option>
              </select>
            </div>
              <div class="form-group">
                <label for="dropdown2">Einheit umwandeln</label>
                <select name="dropdown2" class="form-control" id="dropdown2" required>
                <option>Gramm</option>
                <option>Pfund</option>
                <option>Kilogramm</option>
                <option>Tonne</option>
                </select>
              </div>
            </div>
            <input type="hidden" name="function" value="umwandeln">
              <button type="submit" class="btn btn-primary" Name="Action" value="GewichtsmasseUmwandeln">Umwandeln</button>
        </form>
        </div>';
  }

  public function showGewichtsmasseResult($data){
      echo '<h1 class="title">Gewichtsmasse umgewandelt</h1>
      <div class="content-wrap">
          <div class="form-row">
            <div class="form-group">
            <label for="Input">Wert umgewandelt</label>
              <input type="number" name="Input" class="form-control" id="Input" value="'.$data['Input'].'" required>
             </div>
            <div class="form-group">
            <label for="dropdown2">Einheit neu</label>
              <input type="text" name="dropdown2" class="form-control" id="dropdown2" value="'.$data['dropdown2'].'" required>
            </div>
            <div class="form-group">
            <label for="dropdown1">Einheit vorher</label>
              <input type="text" name="dropdown1" class="form-control" id="dropdown1" value="'.$data['dropdown1'].'" required>
            </div>
          </div>
        </form>
        </div>';
  }

  public function showElectricalResistance(){
    echo '<h1 class="title">Elektrischer Widerstand</h1>
          <div class="content-wrap">
            <form method="get">
            <div class="form-row" id="form-div-elRes">
              <div class="form-group">
                <label for="U">Volt (U)</label>
                <input oninput="checkInputFields()" type="number" name="U" class="form-control" id="U" placeholder="U" required>
              </div>
              <div class="form-group">
                <label for="R">Ohm (R)</label>
                <input oninput="checkInputFields()" type="number" name="R" class="form-control" id="R" placeholder="R" required>
              </div>
              <div class="form-group">
                <label for="I">Ampere (I)</label>
                <input oninput="checkInputFields()" type="number" name="I" class="form-control" id="I" placeholder="I" required>
              </div>
            </div>
            <button id="btn-electricalResistance"type="submit" class="btn btn-primary" Name="Action" value="ElectricalResistance">Berechnen</button>
          </form>
        </div>
         ';
  }
  public function showElectricalResistanceResult($data){
    echo '<h1 class="title">Elektrischer Widerstand Resultat</h1>
    <div class="content-wrap">
          <div class="form-row elRes">
            <div class="form-group" id="divU">
              <label for="U">Volt (U)</label>
              <input type="number" name="U" class="form-control" id="U" value="'.$data['U'].'" required disabled>
            </div>
            <div class="form-group" id="divR">
              <label for="R">Ohm (R)</label>
              <input type="number" name="R" class="form-control" id="R" value="'.$data['R'].'" required disabled>
            </div>
            <div class="form-group" id="divI">
              <label for="I">Ampere (I)</label>
              <input type="number" name="I" class="form-control" id="I" value="'.$data['I'].'" required disabled>
            </div>
            <a href="?Action=ElectricalResistance"><button id="btn-electricalResistance" type="button" class="btn btn-primary">Zurück</button></a>
            <input type="hidden" id="solution" name="solution" value="'.$data['solution'].'">
          </div>
        </div>
      ';
  }
 public function showWoerterZaehlen(){
    echo '<h1 class="title">Wörter Zählen</h1><br>
    <div class="content-wrap">
          <form method="get">
          <div class="form-row">
            <div class="form-group">
              <label for="textInput">Text</label>
              <input type="textfield" name="textInput" class="form-control" id="textInput" required>
            </div>
            <div class="form-group">
              <label for="textOutput">Anzahl Worte</label>
              <input type="number" name="textOutput" class="form-control" id="textOutput" disabled>
            </div>
          </div>
          <input type="hidden" name="function" value="calculate">
          <button type="submit" class="btn btn-primary" Name="Action" value="WoerterZaehlen">Wörter Zählen</button>
        </form>
      </div>';
  }

  public function showWoerterZaehlenResult($data){
    echo '<h1 class="title">Wörter Zählen</h1><br>
          <div class="content-wrap">
            <form method="get">
            <div class="form-row">
              <div class="form-group">
                <label for="textInput">Text</label>
                <input type="textfield" name="textInput" class="form-control" id="textInput" value="'.$data['textInput'].'" disabled>
              </div>
              <div class="form-group">
                <label for="textOutput">Anzahl Worte</label>
                <input type="number" name="textOutput" class="form-control" id="textOutput" value="'.$data['solution'].'" disabled>
              </div>
            </div>
              <button type="submit" class="btn btn-primary" Name="Action" value="WoerterZaehlen">Zurück</button>
            </form>
          </div>';
  }
}
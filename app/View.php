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
    echo '<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>';
  }
  public function showGewichtsmasse(){
    echo 'Gewichtsmasse';
  }
}
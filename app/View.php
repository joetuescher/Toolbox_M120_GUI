<?php
class View{

	public function __construct(){

	}
	public function showNav(){
		echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navigation</a>
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
          <p>Missgeburt</p>
          <p>Wer das liest ist dumm.</p>';
  }
}
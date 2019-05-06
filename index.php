<!DOCTYPE html>
<html>
<head>
	<title>Toolbox</title>
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="public/js/main.js"></script>
</head>
<body>

	<div class="mainContainer">
		<?php 
			require "app/Controller.php";
			$controller = new Controller;
			$request = array_merge($_GET, $_POST);
			$controller->showNav();
		?>
		<div class="mainContent">
			<?php
			switch (@$request['Action']) {
				case 'Home':
					$controller->showHome();
					break;

				case 'Hash':
					$controller->showHash();
					break;

				case 'ElectricalResistance':
					$controller->showElectricalResistance();
					break;

				default:
					$controller->showHome();
					break;
			}
		?>	
			</div>

	</div>

</body>
</html>
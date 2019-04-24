<!DOCTYPE html>
<html>
<head>
	<title>Previsão</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
		<?php
	$umidade = $_POST['umidade'];
	
	$calor =  array('Está 35°', 'Está 40°', 'Está 42°', "45" => "Calor do cão" );
	$vaiChover = ($umidade > 90);


	if ($vaiChover) {

		echo "Vai chover";
		# code...
	}
	else{
		echo "Não vai chover " . $calor[2];
		
	}

	?>


</body>
</html>

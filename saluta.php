<?php
	$prefisso = 'Mr.';
	$saluto = "Ciao {$prefisso} {$_POST['nome']} {$_POST['cognome']}";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Ciao <?= $_POST['nome']; ?> <?= $_POST['cognome']; ?></h1>

	<h1>Ciao <?= $_POST['nome'] . ' ' . $_POST['cognome']; ?></h1>

	<h1>Ciao <?= "{$prefisso} {$_POST['nome']} {$_POST['cognome']}"; ?></h1>

	<h1><?= $saluto; ?></h1>
</body>

</html>

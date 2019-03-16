<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link type="text/css" rel="stylesheet" href="reset.css">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>PHP Table</title>
</head>
<body>
	<form method="post">
		<label>Táblázat sorainak száma</label>
		<input type="text" name="sor">
		<label>Táblázat oszlopainak száma</label>
		<input type="text" name="oszlop">
		<input type="submit" value="Táblázat rajzolása">
	</form>
	
	<?php
	
	$sor = $_POST['sor'];
	$oszlop = $_POST['oszlop'];
	
	echo '<table>';
	
	for($x = 0; $x < $sor; $x++){
		echo '<tr>';
		for($j = 0; $j < $oszlop; $j++){
			echo '<td>';
			echo $j . '/' . $x;
			echo '</td>'; 
			}
		echo '</tr>';
	}
	echo '</table>';
	
	?>
	
</body>
</html>
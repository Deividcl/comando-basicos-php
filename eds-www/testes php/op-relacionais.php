<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Treinando</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div>
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$tipo = $_GET["op"];
		echo "Os valores passados foram $n1 e $n2";
		# Operador ternário é representado pelo sinal de interrogação
		#expressao?verdadeiro:falso
		#avalia_a_expressão ? se_verdadeiro : se_não      $r = ($tipo == "s")?$n1+$n2:$n1*$n2;
		echo "<br>O resultado será $r";
	?>
</div>
</body>
</html>
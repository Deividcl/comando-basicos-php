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
		$a = 6;
		$b = "6";
		# Operador ternário é representado pelo sinal de interrogação
		# expressao ?verdadeiro e :falso
		# === Identico e do mesmo tipo | == Igual independente do tipo

		$r = ($a === $b)?"SIM":"NAO"; #avalia_a_expressão ? se_verdadeiro : se_não
		echo "As variáveis $a e $b são iguais? $r";
	?>
</div>
</body>
</html>
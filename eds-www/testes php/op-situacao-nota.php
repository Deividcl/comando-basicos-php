!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Treinando</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div>
	<?php
	/*Comando GET diz para pegar algum valor, neste modelo, ele esta pegando o valor passado como parametro na propria url (.../teste.php?x=2&y=3)*/
		$nota1 = $_GET["n1"]; 
		$nota2 = $_GET["n2"];
		$m = ($nota1 + $nota2) / 2;
		echo "A média entre $nota1 e $nota2 é igual a $m";

		$sit = ($m < 6)?"Reprovado":"Aprovado!";
		echo "<br>A situação do aluno é $sit";
	?>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Funções aritmeticas</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div>
	<?php
	#Comando GET diz para pegar algum valor, neste modelo, ele esta pegando o valor passado como parametro na propria url (.../teste.php?x=2&y=3)
	$v1 = $_GET["x"]; 
	$v2 = $_GET["y"];

	echo "<h2> Valores recebidos:$v1 e $v2</h2>";
    #abs() Valor Absoluto
    echo "O valor absoluto de $v2 é " . abs($v2);
    #pow() Potenciação/<sup> é usado para elevar um numero a um determinado valor passado. Ex:. 4¹.
    echo "<br/> O valor da pontecia $v1<sup>$v2</sup> é " .pow($v1, $v2);
    #sqrt() Raiz Quadrada
    echo "<br/> A raiz de $v1 é" .sqrt($v1);
    #round() Arredondamento
    echo "<br/> O valor de $v2 arredondado é " .round($v2);
    ?>
</div>
</body>
</html>
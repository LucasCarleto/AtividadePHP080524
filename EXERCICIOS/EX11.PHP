<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 11</title>
</head>



<body>
	<!-- Título da página -->
	<h1>Tabuada</h1>

	<!-- Criar o formulário para receber os valores necessários -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

		<!-- Recebe do usuário o valor da tabuada -->
		<p>Defina um número <input type="number" name="valor"></p>

		<!-- Botão para enviar os dados -->
		<input type="submit"/>
	</form>
	<br/>

<?php
	//Verifica se o valor já foi definido
	if (isset($_POST['valor']))
		$valor = $_POST["valor"]; //Recebe o valor do formulário para a variável
	else
		goto fim; //Se não recebeu, pule para o final do script PHP, para não rodá-lo

	//Escrever qual será a palavra repetida, conforme o exemplo
	echo "Tabuada do $valor:<br/>";

	//Loop para formar a tabuada, começando do zero e incrementando até 10.
	for ($i = 0; $i < 11; $i++)
		echo "$valor × $i = " . $valor*$i . "<br/>"; //valor X i = valor*i

	//Pulo para evitar a execução do PHP (caso as variáveis não tenham sido definidas)
	fim:
?>
</body>
</html>
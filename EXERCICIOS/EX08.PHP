<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 8</title>
</head>



<body>
	<!-- Título da página -->
	<h1>Números e produtos</h1>

	<!-- Criar o formulário para receber os valores necessários -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

		<!-- Recebe do usuário o valor para o programa -->
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

	echo "Números e produtos de $valor:<br/>";

	//Acumulador dos produtos
	$prod = 1;

	//Loop para formar os números entre 1 e valor e seus produtos
	for ($i = 1; $i < $valor; $i++)
	{
		echo "$i → $i × $valor = " . $i*$valor . "<br/>"; //i -> i X valor = i * valor
		$prod *= ($i * $valor);
	}

	//Listar dos produtos obtidos
	echo "Produtos: " . 1*$valor;

	for ($i = 2; $i < $valor; $i++)
		echo " × " . $i*$valor; // produto X produto X produto ...

	//Escrever o total de produtos
	echo "<br/> Total de produtos: " . $prod . ".";

	//Pulo para evitar a execução do PHP (caso as variáveis não tenham sido definidas)
	fim:
?>
</body>
</html>
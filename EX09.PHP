<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 9</title>
</head>



<body>
	<!-- Título da página -->
	<h1>Repetição da palavra "SOL"</h1>

	<!-- Criar o formulário para receber os valores necessários -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

		<!-- Recebe do usuário o número de vezes em que "SOL" será repetido -->
		<p>Defina quantas vezes deseja repetir a palavra <input type="number" name="repete"></p>

		<!-- Botão para enviar os dados -->
		<input type="submit"/>
	</form>
	<br/>

<?php
	//Verifica se o valor do texto já foi definido
	if (isset($_POST['repete']))
		$repete = $_POST["repete"] . " "; //Recebe o valor do formulário para a variável
	else
		goto fim; //Se não recebeu, pule para o final do script PHP, para não rodá-lo

	//Definir a palavra "SOL"
	$txt = "SOL";

	//Contador para iniciar a iteração
	$i = 0;

	//Loop para fazer a repetição horizontalmente
	while ($i < $_POST["repete"])
	{
		//Escrever a string e quebrar a linha
		echo "$txt ";

		//Incrementar o contador
		$i++;
	}

	//Preparação para o loop vertical
	$i = 0;
	echo "<br/><br/>";

	//Loop para fazer a repetição verticalmente
	while ($i < $_POST["repete"])
	{
		//Escrever a string e quebrar a linha
		echo "$txt <br/>";

		//Incrementar o contador
		$i++;
	}

	//Pulo para evitar a execução do PHP (caso as variáveis não tenham sido definidas)
	fim:
?>
</body>
</html>
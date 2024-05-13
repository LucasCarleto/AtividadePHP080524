<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 2</title>
</head>



<body>
	<!-- Título da página -->
	<h1>Divisão</h1>

	<!-- Criar o formulário para receber os valores necessários -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

		<!-- Recebe do usuário o valor a ser comparado -->
		<p>Valor <input type="number" name="valor"></p>

		<!-- Botão para enviar os dados -->
		<input type="submit"/>
	</form>
	<br/>

<?php
	//Verifica se o valor já foi definido
	if (!isset($_POST['valor']))
		goto fim; //Se não recebeu, pule para o final do script PHP, para não rodá-lo

	//Passar valor para variável	
	$valor = $_POST["valor"];

	//Fazer a comparação
	echo "O valor que ";
	if ($valor % 10 != 0 && $valor % 5 != 0 && $valor % 2 != 0) //Não é divisível se o resto é diferente de zero
		echo "não é divisível por 10, nem 5, nem 2";
	else
	{
		echo "é divisível por ";
		if ($valor % 10 == 0)
			echo "10, ";
		if ($valor % 5 == 0)
			echo "5, ";
		if ($valor % 2 == 0)
			echo "2, ";
	}
	echo " definido pelo usuário, é $valor" . ".";

	//Pulo para evitar a execução do PHP (caso as variáveis não tenham sido definidas)
	fim:
?>
</body>
</html>
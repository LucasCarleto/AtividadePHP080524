<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 12</title>
</head>



<body>
	<!-- Título da página -->
	<h1>Escada de Palavras</h1>

	<!-- Criar o formulário para receber os valores necessários -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

		<!-- Recebe do usuário o texto a ser repetido -->
		<p>Definir palavra <input type="text" name="texto"></p>

		<!-- Recebe do usuário o número de iterações que o programa terá -->
		<p>Nº de Iterações <input type="number" name="iteracao"></p>

		<!-- Botão para enviar os dados -->
		<input type="submit"/>
	</form>
	<br/>

<?php
	//Verifica se o valor do texto já foi definido
	if (isset($_POST['texto']))
		$txt = $_POST["texto"] . " "; //Recebe o valor do formulário para a variável
	else
		goto fim; //Se não recebeu, pule para o final do script PHP, para não rodá-lo

	//Escrever qual será a palavra repetida, conforme o exemplo
	echo "◦Palavra: $txt<br/>";

	//Deixar a string em maiúsculo, conforme o exemplo
	$txt = strtoupper($txt);

	//Definir a string que será escrita na tela
	$str = $txt;

	//Contador para não ficar repetindo infinitamente e travar o sistema
	$i = 0;

	//Loop para fazer a repetição em "escadinha"
	while (1)
	{
		//Escrever a string e quebrar a linha
		echo "◦$str <br/>";

		//Concatenar a string, repetindo o texto mais uma vez.
		$str .= $txt;

		//Incrementar o contador
		$i++;

		//Limitar a repetição para 64 vezes (limite arbitrário)
		if ($i > $_POST["iteracao"])
			break;
	}

	//Pulo para evitar a execução do PHP (caso as variáveis não tenham sido definidas)
	fim:
?>
</body>
</html>
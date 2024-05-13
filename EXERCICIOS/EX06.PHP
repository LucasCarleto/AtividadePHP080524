<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 6</title>
</head>



<body>
	<!-- Título da página -->
	<h1>Meses por extenso</h1>

	<!-- Criar o formulário para receber os valores necessários -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

		<!-- Recebe do usuário o número do mês -->
		<p>Mês <input type="number" name="mes"></p>

		<!-- Botão para enviar os dados -->
		<input type="submit"/>
	</form>
	<br/>

<?php
	//Verifica se o mês já foi definido
	if (isset($_POST['mes']))
		if ($_POST['mes'] > 0 && $_POST['mes'] < 13) //Verifica se o mês é válido
			$mes = $_POST["mes"]; //Recebe o valor do livro para a variável
		else
			goto falha; //Se não for, revelar ao usuário que o mês é inválido
	else
		goto fim; //Se não recebeu, pule para o final do bloco PHP, para não rodá-lo

	//Verifica o valor e mostra o mês por extenso.
	echo "O mês " . $mes . " é ";
	if ($mes == 1)
		echo "janeiro";
	else if ($mes == 2)
		echo "fevereiro";
	else if ($mes == 3)
		echo "março";
	else if ($mes == 4)
		echo "abril";
	else if ($mes == 5)
		echo "maio";
	else if ($mes == 6)
		echo "junho";
	else if ($mes == 7)
		echo "julho";
	else if ($mes == 8)
		echo "agosto";
	else if ($mes == 9)
		echo "setembro";
	else if ($mes == 10)
		echo "outubro";
	else if ($mes == 11)
		echo "novembro";
	else if ($mes == 12)
		echo "dezembro";
	echo ".";

	//Garante que não apareça a mensagem de erro se tudo deu certo
	goto fim;

	//Pulo para exibir a mensagem de erro, caso o mês for inválido
	falha:
	echo "Erro: Não existe um mês do Calendário Gregoriano com este número. Defina outro valor.";

	//Pulo para encerrar a execução do bloco do PHP
	fim:
?>
</body>
</html>
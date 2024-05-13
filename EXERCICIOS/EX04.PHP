<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 4</title>
</head>



<body>
	<!-- Título da página -->
	<h1>Ordem decrescente</h1>

	<!-- Criar o formulário para receber os valores necessários -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

		<!-- Recebe do usuário os 20 valores -->
		<?php
		for ($i = 1; $i < 4; $i++)
			echo "<p>Defina o " . $i . ".º valor <input type=\"number\" name=\"v$i\"></p>";
		?>

		<!-- Botão para enviar os dados -->
		<input type="submit"/>
	</form>
	<br/>

<?php
	//Cria o vetor e recebe os 3 valores
	$vals = array();

	//Se o primeiro valor não foi definido, pular para o final do bloco PHP
	for ($i = 1; $i < 4; $i++)
	{
		$temp = "v$i";
		if (isset($_POST[$temp]))
			$vals[] = $_POST[$temp];
		else
			goto fim; //Se não recebeu, pule para o final do bloco PHP, para não rodá-lo
	}

	//Se os números forem iguais, pular para o erro
	if ($vals[0] == $vals[1] || $vals[1] == $vals[2] || $vals[0] == $vals[2])
		goto falha;

	//Ordenação
	$i = 0;
	while ($i < 2)
	{
		if ($vals[$i] < $vals[$i + 1]) //Verificando se o valor é menor que o próximo
		{
			$temp = $vals[$i]; //Cria uma variável para trocar os valores
			$vals[$i] = $vals[$i + 1]; //O atual terá o valor do próximo
			$vals[$i + 1] = $temp; //O próximo terá o valor do atual
			$i = 0; //Começa a contagem a partir do zero, para garantir
		}
		else
			$i++; //Avança para os próximos números

		//echo "$vals[0] - $vals[1] - $vals[2]<br/>"; //Debug para verificar a ordenação

	}

	echo "Valores: ";
	for ($i = 0; $i < 2; $i++)
		echo $vals[$i] . ", ";
	echo $vals[$i] . ".";

	//Pular a mensagem de erro e encerrar o bloco PHP
	goto fim;

	//Exibir a mensagem de erro se os valores não formam um triângulo
	falha:
		echo "Não pode haver números repetidos. Defina outros valores.";

	//Pulo para evitar a execução do PHP (caso as variáveis não tenham sido definidas)
	fim:
?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 10</title>
</head>



<body>
	<!-- Título da página -->
	<h1>Soma de positivos e total de negativos</h1>

	<!-- Criar o formulário para receber os valores necessários -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

		<!-- Recebe do usuário os 20 valores -->
		<?php
		for ($i = 1; $i < 21; $i++)
			echo "<p>Defina o " . $i . ".º número <input type=\"number\" name=\"v$i\"></p>";
		?>

		<!-- Botão para enviar os dados -->
		<input type="submit"/>
	</form>
	<br/>

<?php
	//Cria o vetor e recebe os 20 valores
	$valores = array();

	//Se o primeiro valor não foi definido, pular para o final do bloco PHP
	for ($i = 1; $i < 21; $i++)
	{
		$temp = "v$i";
		if (isset($_POST[$temp]))
			$valores[] = $_POST[$temp];
		else
			goto fim; //Se não recebeu, pule para o final do bloco PHP, para não rodá-lo
	}

	//Acumulador da soma de positivos
	$spos = 0;

	//Acumulador do total de negativos
	$cneg = 0;

	//Loop para processar os dados
	for ($i = 0; $i < 20; $i++) 
		if ($valores[$i] > 0) 
			$spos += $valores[$i]; //Se o valor for positivo (maior que zero), adicionar à soma
		else if ($valores[$i] < 0)
			$cneg++; //Se for negativo (menor que zero), incrementar o contador de negativos

	//Mostrar os resultados
	echo "Soma dos valores positivos: " . $spos . ".<br/>";
	echo "Total de valores negativos: " . $cneg . ".<br/>";

	//Pulo para evitar a execução do PHP (caso as variáveis não tenham sido definidas)
	fim:
?>
</body>
</html>
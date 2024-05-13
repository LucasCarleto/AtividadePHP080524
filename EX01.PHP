<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 1</title>
</head>



<body>
	<!-- Título da página -->
	<h1>Adição</h1>

	<!-- Criar o formulário para receber os valores necessários -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

		<!-- Recebe do usuário os 2 valores -->
		<?php
		for ($i = 1; $i < 3; $i++)
			echo "<p>Defina o " . $i . ".º número <input type=\"number\" name=\"v$i\"></p>";
		?>

		<!-- Botão para enviar os dados -->
		<input type="submit"/>
	</form>
	<br/>

<?php
	//Cria o vetor e recebe os 2 valores
	$val = array();

	//Se o primeiro valor não foi definido, pular para o final do bloco PHP
	for ($i = 1; $i < 3; $i++)
	{
		$temp = "v$i";
		if (isset($_POST[$temp]))
			$val[] = $_POST[$temp];
		else
			goto fim; //Se não recebeu, pule para o final do bloco PHP, para não rodá-lo
	}

	$soma = $val[0] + $val[1];
	echo "$val[0] + $val[1] = $soma <br/>";
	echo "$soma ";
	if ($soma > 20)
	{
		echo "+ 8 = ";
		$soma += 8;
	}
	else
	{
		echo "- 5 = ";
		$soma -= 5;
	}

	echo "$soma <br/> Resultado final: " . $soma . ".";

	//Pulo para evitar a execução do PHP (caso as variáveis não tenham sido definidas)
	fim:
?>
</body>
</html>
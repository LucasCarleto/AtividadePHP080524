<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 5</title>
</head>



<body>
	<!-- Título da página -->
	<h1>Triângulos</h1>

	<!-- Criar o formulário para receber os valores necessários -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

		<!-- Recebe do usuário os 20 valores -->
		<?php
		for ($i = 1; $i < 4; $i++)
			echo "<p>Defina o lado do " . $i . ".º triângulo <input type=\"number\" name=\"l$i\"></p>";
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
		$temp = "l$i";
		if (isset($_POST[$temp]))
			$vals[] = $_POST[$temp];
		else
			goto fim; //Se não recebeu, pule para o final do bloco PHP, para não rodá-lo
	}

	//Se não for um triângulo, pular para o erro
	if (!($vals[0] + $vals[1] > $vals[2] && $vals[0] + $vals[2] > $vals[1] && $vals[1] + $vals[2] > $vals[0]))
		goto falha;

	//Verificar a classificação
	echo "Este é um triãngulo ";
	
	if ($vals[0] == $vals[1] && $vals[1] == $vals[2]) //Todos os lados são iguais
		echo "equilátero";
	else if ($vals[0] == $vals[1] || $vals[0] == $vals[2] || $vals[1] == $vals[2]) //Dois lados são iguais
		echo "isósceles";
	else
		echo "escaleno"; //Os lados são diferentes
	echo ".";

	//Pular a mensagem de erro e encerrar o bloco PHP
	goto fim;

	//Exibir a mensagem de erro se os valores não formam um triângulo
	falha:
		echo "Não é um triângulo.";

	//Pulo para evitar a execução do PHP (caso as variáveis não tenham sido definidas)
	fim:
?>
</body>
</html>
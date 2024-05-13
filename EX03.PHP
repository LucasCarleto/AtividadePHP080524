<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 3</title>
</head>



<body>
	<!-- Título da página -->
	<h1>Cadastro</h1>

	<!-- Criar o formulário para receber os valores necessários -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

		<!-- Recebe do usuário o nome -->
		<p>Nome <input type="text" name="nome"></p>

		<!-- Recebe do usuário o sexo -->
		<label for="usuario">Sexo: </label>
		<select name="sexo" id="sexo">
			<option value="M">Masculino</option>
			<option value="F">Feminino</option>
			<option value="C">Chevrolet Corsa, modelo LTZ subcompacto, motor 1.4L com 4 cilindros, 100 cavalos de potência, transmissão manual de 5 marchas</option>
		</select><br/>

		<!-- Recebe do usuário a idade -->
		<p>Idade <input type="number" name="idade"></p>

		<!-- Botão para enviar os dados -->
		<input type="submit"/>
	</form>
	<br/>

<?php
	//Verifica se os valores já foram definidos
	if (!(isset($_POST['nome']) && isset($_POST['sexo']) && isset($_POST['idade'])))
		goto fim; //Se não recebeu, pule para o final do script PHP, para não rodá-lo

	//Passar do formulário para as variáveis
	$nome = $_POST["nome"];
	$sexo = $_POST["sexo"];
	$idade = $_POST["idade"];

	//Mostrar o texto
	echo $nome . ": ";
	if ($sexo == "F" && $idade < 25)
		echo "ACEITA"; //Se o sexo for feminino e idade < 25
	else if ($sexo == "F")
		echo "NÃO ACEITA"; //Se for falso mas for do sexo feminino, aparece "NÃo ACEITA"
	else
		echo "NÃO ACEITO"; //Se for do sexo masculino, aparece "NÃO ACEITO"
	echo "!";

	//Pulo para evitar a execução do PHP (caso as variáveis não tenham sido definidas)
	fim:
?>
</body>
</html>
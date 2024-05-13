<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Exercício 7</title>
</head>



<body>
	<!-- Título da página -->
	<h1>Biblioteca</h1>

	<!-- Criar o formulário para receber os valores necessários -->
	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

		<!-- Recebe do usuário o livro a ser emprestado -->
		<p>Nome do livro <input type="text" name="livro"></p>

		<!-- Recebe do usuário o número de iterações que o programa terá -->
		<label for="usuario">Usuário: </label>
		<select name="usuario" id="usuario">
			<option value="Aluno">Aluno</option>
			<option value="Professor">Professor</option>
		</select><br/><br/>

		<!-- Botão para enviar os dados -->
		<input type="submit"/>
	</form>
	<br/>

<?php
	//Verifica se o livro já foi definido
	if (isset($_POST['livro']))
		$livro = $_POST["livro"]; //Recebe o valor do livro para a variável
	else
		goto fim; //Se não recebeu, pule para o final do bloco PHP, para não rodá-lo

	//Recebe o valor do usuário para a variável
	$usuario = $_POST["usuario"];

	echo "Recibo:<br/><br/>";
	echo "Livro: \"" . $livro . "\"<br/>";
	echo "Usuário: " . $usuario . "<br/>";
	echo "Prazo de devolução: ";
	
	if ($usuario == "Professor")
		echo "10";
	else
		echo "3";
	
	echo " dias";

	//Pulo para evitar a execução do PHP (caso as variáveis não tenham sido definidas)
	fim:
?>
</body>
</html>
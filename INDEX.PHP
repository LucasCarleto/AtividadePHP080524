<!DOCTYPE html>
<html>
<body>

<?php
	//Variável que recebe o texto a ser repetido
	$txt = "texto ";

	//Escrever qual será a palavra repetida, conforme o exemplo
	echo "○Palavra: $txt<br/>";

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
		echo "○$str <br/>";

		//Concatenar a string, repetindo o texto mais uma vez.
		$str .= $txt;

		//Incrementar o contador
		$i++;

		//Limitar a repetição para 64 vezes (limite arbitrário)
		if ($i > 21)
			break;
	}
?>
</body>
</html>
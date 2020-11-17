<?php 
	if(isset($_POST['dimensao']) > 0 && isset($_POST['inicio']) > 0 && isset($_POST['fim']))
	{
		$dim = $_POST['dimensao'];
		$inc = $_POST['inicio'];
		$fim = $_POST['fim'];
		$valorpesquisado = $_POST['vlp'];
		$soma = 0;
		$produto = 0;
		$media = 0;
	
	echo "Valores do array:";
	for ($i=0; $i < $dim; $i++) { 
		$num[$i] = rand(1, $fim);
		$soma = $soma + $num[$i];
		$produto = $soma * $num[$i];
		$media = $soma / $dim;
		echo $num[$i].  ' ';
	}

	foreach ($num as $chave => $num) {
		if ($valorpesquisado == $num) {
			$chave = $chave + 1;	
			echo "<br>";
			echo "O valor " .$valorpesquisado. " encontra-se na posicao " .$chave. " do vetor <br>";
		}
	}	
		echo "<br>";
		echo "A soma é " .$soma. "<br>";
		echo "O produto é " .$produto. "<br>";	
		echo "A media é " .$media;

}
?>
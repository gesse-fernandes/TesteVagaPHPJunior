    
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$total = $_POST["total"];
	$pessoas = $_POST["pessoas"];

	if (!is_numeric($total) || !is_numeric($pessoas)) {
		echo "Por favor, insira apenas números.";
	} else if (!filter_var($pessoas, FILTER_VALIDATE_INT)) {
		echo "Por favor, insira um número inteiro de pessoas.";
	} else {
		$valor_individual = round($total / $pessoas, 2);
		echo "O valor individual a ser pago é: R$ " . $valor_individual;
	}
}

?>

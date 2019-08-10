<?php

	require "classes.class.php";
	
	$num1 = $_POST['num1']; 
	$operacao = $_POST['opera']; 
	$num2 = $_POST['num2'];
	
	switch ($operacao) {
    case "soma":
	
		$h = new somar ($num1, $num2);
		echo $num1 . " + " . $num2 . " = ". $h->soma();
		
        break;
    case "subtração":
	
        $h = new subitracao ($num1, $num2);
		echo $num1 . " - " . $num2 . " = ". $h->subtrai();
        
		break;
    case "divisao":
	
		$h = new divisao ($num1, $num2);
		echo $num1 . " / " . $num2 . " = ". $h->divide();
		
        break;
	case "multiplicacao":
	
		$h = new multiplicacao ($num1, $num2);
		echo $num1 . " X " . $num2 . " = ". $h->multiplica();
		
        break;
	default:
       echo " deu ruim";
}
	
	/*$h = new verifica ($aluno, $nota);
	echo "O aluno " . $h->aluno() . " foi " . $h->nota() . " com media ". $nota;*/ 
	
 ?>
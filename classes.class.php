<?php

class numero {
	
	public $num1;
	public $num2;
	public $operacao;
	
	function __construct( $num1, $num2 ) {
		$this->num1 = $num1;
		$this->num2 = $num2;
	}	
	
}

class somar extends numero {	

	function soma() {

		$operacao = ($this->num1 + $this->num2);
		return $operacao;
		
	}	
	
}

class subitracao extends numero {
	
	function subtrai() {
		
		$operacao = ($this->num1 - $this->num2);
		return $operacao;
		
	}	
	
}

class divisao extends numero {

	function divide() {
		
		$operacao = ($this->num1 / $this->num2);
		return $operacao;
		
	}	
	
}

class multiplicacao extends numero {
	
	function multiplica() {
		
		$operacao = ($this->num1 * $this->num2);
		return $operacao;
		
	}	
	
}

 ?>
<html>
<head>

<title> Calculadora em php </title>

</head>
<body>
	<form method="POST" action="calc.php">
	
		<label>digite o primeiro numero</label>
		<input type="number" name="num1" ><br><br>
		
		<label>Selecione a operacao:</label>
		<select name="opera" >
			<option value="soma"> + </option>
			<option value="subtração"> - </option>
			<option value="divisao"> % </option>
			<option value="multiplicacao"> x </option>
		</select>
		<br><br>
		
		<label>digite o segundo numero</label>
		<input type="number" name="num2" ><br><br>
		
		<input type="submit" value="Resultado" name="">
	</form>
</body>
</html>
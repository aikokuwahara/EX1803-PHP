<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title> Compra </Title>
	</head>
	<body>
	<fieldset>
		<legend> Pagamento da Compra </legend>
		<form method="post" action = "calcular.php">

        Informe o valor da compra: 
        <input type = "text" name = "$c" size = "25" />
        <br><br>

        Você deseja fazer o pagamento "A PRAZO" ou "A VISTA"? Digite:
        <input type = "text" name = "$pagamento" size = "25" />
        <br><br>

        Caso seja "A PRAZO", quantas parcelas quer fazer?
        <input type = "text" name = "$prestacao" size = "25" />
        <br><br>
		
		<input type = "submit" name = "botão" value = "Valor Total" />
		
		</form>
	</fieldset>
	</body>
	</html>
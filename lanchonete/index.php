<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title> Lanchonete </Title>
	</head>
	<body>
	<fieldset>
		<legend> Lanchonete Hamburgueria </legend>
		<form method="post" action = "calcular.php">

        Informe seu nome: 
        <input type = "text" name = "$nome" size = "25" />
        <br><br>

		1 – X Burguer (R$6,00) <br>
        2 – X Salada (R$8,00) <br>
        3 – X Bacon (R$10,00) <br>
        4 – X Tudo (R$12,00) <br>
        5 – X Duplo (R$15,00) <br>
        <br><br>

        Qual opção de lanche você deseja? 
        <input type = "text" name = "$l" size = "25" />
        <br><br>

        Quantos lanches você deseja comprar?
        <input type = "text" name = "$nl" size = "25" />
        <br><br>

        1 – Água (R$2,00) <br>
        2 – Suco (R$5,00) <br>
        3 – Lata (R$3,00) <br>
        4 – 600 ml (R$5,00) <br>
        5 – 2 Litros (R$8,00) <br>
        <br><br>

        Qual opção de bebida você deseja?    
        <input type = "text" name = "$b" size = "25" />
        <br><br>

        Quantas bebidas você deseja comprar?
        <input type = "text" name = "$nb" size = "25" />
        <br><br>
		
		<input type = "submit" name = "botão" value = "Valor Total" />
		
		</form>
	</fieldset>
	</body>
	</html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>GET e POST</title>

</head>
<body>

    <div class="w3-container w3-teal">

        <h2>PROMOÇÃO DE MÊS DE ANIVERSÁRIO !</h2>
<br>
    
<?php 
	$ValorCompra = $_POST['txtValorCompra'];
	$FormaPagamento = $_POST['cmbPag'];
	$por;
	
	if($_POST['cmbPag'] == "deposito")
	{
		$por = 10;
	}
	
	elseif($_POST['cmbPag'] == "boleto")
	{
		$por = 8;
	}
	
	else($_POST['cmbPag'] == "cartaoCredito")
	{
		$por = "Sem desconto";
	}
	
echo "".$_POST['txtNome']."<br> ";
echo "Valor da Compra Sem Desconto: R$  ".$_POST['txtValorCompra']." <br> ";
echo "Forma de Pagamento: ".$_POST['cmbPag']." <br> ";
echo "Desconto de: ".$por"%"." <br> ";
echo "Você economizou: ".($por * $ValorCompra / 100)." <br> ";
echo "Valor à Pagar: ".($ValorCompra - $por * $ValorCompra / 100)." <br> ";



	?>
	
	</div>
	
	</body>
	
	</html>
<?php	
	
    $pagamento = $_POST['$pagamento'];
    $prestacao = $_POST['$prestacao']; 
    $c = $_POST['$c'];
    $t = 0;
    $tp = 0;

    switch ($pagamento)
    {
        case "A PRAZO":
            if ($prestacao < 4){
                $tp = $c / $prestacao;
                echo "O valor final de sua compra é de: R$" .$c .".00"; 
                echo ". Como seu total de parcelas foi de " .$prestacao .", não há taxa de juros.
                Cada parcela tem valor de: R$". $tp .".00";
            }
            else if ($prestacao >=4 && $prestacao <=6) {
                $t = $c * 1.1;
                $tp = $t / $prestacao;
                echo "O valor final de sua compra é de: R$" .$t; 
                echo ". Como seu total de parcelas foi de " .$prestacao .", a taxa de juros é de 10%. 
                Cada parcela tem valor de: R$". $tp .".00";
            }
            else if ($prestacao >6) {
                $t = $c * 1.2;
                $tp = $t / $prestacao;
                echo "O valor final de sua compra é de: R$" .$t; 
                echo ". Como seu total de parcelas foi de " .$prestacao .", a taxa de juros é de 20%. 
                Cada parcela tem valor de: R$". $tp .".00";
            }
        break;

        case "A VISTA":
            $t = $c * 0.9;
            echo "O valor final de sua compra é de: R$" .$t; 
                echo ". Como seu pagamento foi A VISTA, há desconto de 10%.";
                
        break;
    }
		
?>
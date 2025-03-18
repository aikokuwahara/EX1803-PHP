<?php	
	
    $nome = $_POST['$nome'];
    $l = $_POST['$l'];
    $nl = $_POST['$nl'];
    $tl = 0;
    $b = $_POST['$b'];
    $nb = $_POST['$nb'];
    $t = 0;
    $t2 = 0;
    $t3 = 0;
    $tb = 0;


    switch ($l) {
        case "1":
            $t = $t + 15;  
            break;
    
        case "2":
            $t = $t + 10;  
            break;
    
        case "3":
            $t = $t + 12;  
            break;
    
        case "4":
            $t = $t + 12;  
            break;
    
        case "5":
            $t = $t + 14;  
            break;
        default:
            echo ("Você não inseriu todos os dados corretamente.");
       
    }

    $tl = $t * $nl;


    switch ($b) {
        case "1":
            $t2 = $t2 + 8;
            break;
    
        case "2":
            $t2 = $t2 + 10;
            break;
    
        case "3":
            $t2 = $t2 + 7;
            break;
    
        case "4":
            $t2 = $t2 + 12;
            break;
    
        case "5":
            $t2 = $t2 + 10;
            break;
    
        case "6":
            $t2 = $t2 + 8;
            break;
    
        case "7":
            $t2 = $t2 + 9;
            break;
        default:
            echo ("Você não inseriu todos os dados corretamente.");
       
    }

    $tb = $t2 * $nb;

    $t3 = $tb + $tl;

    echo "Olá " .$nome ."! O valor total da compra foi de: R$" .$t3 .".00! Volte sempre <3";
		
?>
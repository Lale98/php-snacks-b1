## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

<?php 

    $numbers = [];
    
    do {
        $num = rand(1, 100);
        
        if (!in_array($num, $numbers)) {
            $numbers[] = $num;
        }
    } while (count($numbers) < 15);
    
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";

?>

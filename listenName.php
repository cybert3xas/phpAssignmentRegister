<?php
    include 'info.php';

    $userName = $_POST['brow'];
    
    for($i=0; $i<count($list_items); $i++){
        //echo "hello";
        if($userName == ($list_items[$i]->getName())){
            echo "{$list_items[$i]->getPLU()} {$list_items[$i]->getName()}";
        }
    }
?>
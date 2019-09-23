<?php
    include 'info.php';
    $userPLU = $_POST['pluInput'];

    if(strlen($userPLU) == 4){
        for($i = 0; $i < count($list_items); $i++){
            if(toString($userPLU) == ($list_items[$i]->getPLU())){
                echo "{$list_items[$i]->getPLU()} {$list_items[$i]->getName()}";
            }
        }
    }
    else{
        echo "Ivalid Input!";
    }

?>
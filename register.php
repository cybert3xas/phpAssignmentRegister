<?php
    require_once 'item.php';
    
	$filename = "PLUCodes.txt";
    $fp = fopen($filename, "r");

    $content = fread($fp, filesize($filename));
    $lines = explode("\n", $content); //create and array with all the lines [lines have PLU and NAME] 
    fclose($fp);

    $list_items = array(); //array will hold all items

    for($i=0; $i < count($lines); $i++){
        //split the line by comma
        $holder = explode(",", $lines[$i]);
        $item = new item($holder[0],  $holder[1]);
        array_push($list_items, $item); //the item to the list
    }
    print($list_items[0]->getPLU());
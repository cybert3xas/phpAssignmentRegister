<?php
    include 'item.php';

	$filename = "PLUCodes.txt";
    $fp = fopen($filename, "r");
    
    $myHashMap = array();//maps PLU with names

    $content = fread($fp, filesize($filename));
    $lines = explode("\n", $content);//create an array 
    fclose($fp);

    $list_items = array();
    for($i=0; $i < count($lines); $i++){
        //split the string by the comma
        $holder = explode(",", $lines[$i]);
        $item = new item($holder[0],  $holder[1]);
        array_push($list_items, $item);
    }
    print_r($list_items);
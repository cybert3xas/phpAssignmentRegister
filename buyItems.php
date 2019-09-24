<html>
    <?php $PLU = $_POST['selectedPLU'];
          $Name = $_POST['selectedName'];
    ?> 
	<head><title>PHP Assignment</title>
		<meta charset="utf-8">
    </head>
    
    <body>
        <h1>Fruit Store</h1>
        <br>
        <div id="selecSection">
            <div id="nameSearch">
                <!-- method will verify the Name is valid and it will find the matching object that 
                corresponds to that Name-->
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <h3>Search by Name</h3> 
                    <input name="selectedName" list="selectedName">
                    <datalist id="selectedName">
                        <!--Create a dropdown list from the inventory at the moment-->
                        <?php require_once "register.php";
                        foreach($list_items as $fruits){
                        ?>
                        <option value="<?php echo $fruits->getName();?>"><?php echo $fruits->getName(); ?></option>
                        <?php 
                        }
                        ?>
                    </datalist>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div id="pluSearch">
                <!-- method will verify the PLU is valid and it will find the matching object that 
                corresponds to that PLU-->
                <?php
                    $file_read = "shoppingList.txt";
                    function add_to_file($item){
                        global $file_read;
                        $fp = fopen($file_read, "a");
                        fputs($fp, nl2br("{$item->getPLU()},{$item->getName()}")."\n");
                        fclose($fp);
                    }
                    function display_list(){
                        global $file_read;
                        $fp = fopen($file_read, "r");
                        $content = fread($fp, filesize($file_read));
                        $lines = explode("\n", $content);
                        for($i=0; $i < count($lines); $i++){
                            //split the line by comma
                            $holder = explode(",", $lines[$i]);
                            echo "{$holder[0]}  {$holder[1]}<br>";
                        }
                    }
                    if(strlen($PLU) == 4){
                        for($i = 0; $i < count($list_items); $i++){
                            //if the PLU is valid, then write it to the file
                            if($PLU == ($list_items[$i]->getPLU())){
                                add_to_file($list_items[$i]);
                            }
                        }
                    }
                    for($i = 0; $i < count($list_items); $i++){
                        //if the Name is valid, then write it to the file
                        if($Name == $list_items[$i]->getName()){
                            add_to_file($list_items[$i]);
                        }
                    }
                ?>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <h3>Search by PLU</h3>
                    <input type="text" value="" name="selectedPLU" minlength="4" maxlength="4">
                    <input type="submit" value="Submit" />
                </form>
                <h3>Shopping List</h3><br/>
                <?php display_list();?>
                <form action="option.php" method="post">
                    <input type="submit" value="MAIN MENU" name="menuBtn">
                </form>
            </div>
        </div>
    </body>
</html>
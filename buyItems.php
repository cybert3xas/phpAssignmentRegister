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
            <!--Method will add the passing object into-->
            <?php
                function add_to_file($item){
                    
                }
            ?>
            <div id="nameSearch">
                <!-- method will verify the Name is valid and it will find the matching object that 
                corresponds to that Name-->
                <?php
                    for($i = 0; $i < count($list_items); $i++){
                        //if the Name is valid, then write it to the file
                        if($Name == ($list_items[$i]->getName())){
                            add_to_file($list_items[$i]);
                        }
                    }
                ?>
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
                    if(strlen($PLU) == 4){
                        for($i = 0; $i < count($list_items); $i++){
                            //if the PLU is valid, then write it to the file
                            if($PLU == ($list_items[$i]->getPLU())){
                                add_to_file($list_items[$i]);
                            }
                        }
                    }
                ?>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <h3>Search by PLU</h3>
                    <input type="text" value="" name="selectedPLU" minlength="4" maxlength="4">
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </div>
    </body>
</html>
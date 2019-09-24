<html>
    <?php $addedPLU = $_POST['addedPLU'];
          $addedName = $_POST['addedName'];
    ?> 
	<head><title>PHP Assignment</title>
		<meta charset="utf-8">
    </head>
    
    <body>
        <h1>Fruit Store</h1>
        <div id="addSection">
			<!-- User has to type a PLU and a name for the item being added to the list-->
			<?php 
				$file = "PLUItems.txt";
				function add_to_list($item, $itemPLU){
					global $file;
					if(!empty($item)){
						$fp = fopen($file, "a");
						fputs($fp, "\n{$itemPLU},{$item}");
						fclose($fp);
					}
				}
			?>
            <h2>Add an Item</h2>
            <br>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <h3>Name:
                    <input type="text" name="addedName" wrap=virtual value="" minlength="4">
                    PLU: <input type="number" name="addedPLU" min=1000 max=9999>
                    <input type="submit" value="ADD">
                </h3>
			</form>
			<!-- Add item to the list -->
			<?php add_to_list($addedName, $addedPLU)?>
			<form action="option.php" method="post">
                <input type="submit" value="MAIN MENU" name="menuBtnAdd">
            </form>
		</div>
    </body>
</html>
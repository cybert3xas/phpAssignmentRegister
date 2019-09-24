<html>
    <head>
        <title>PHP Assignment</title>
    </head>
    <body>
    <?php
        //if the MENU BUTTON in buyItems is clicked, then direct them to this page
        if(isset($_POST['menuBtnBuy'])){
            header("Location: http://cssrvlab01.utep.edu/classes/cs3360/jargumedo/php/option.php");
            exit;
        }
        //if the MENU BUTTON in buyItems is clicked, then direct them to this page
        elseif(isset($_POST['menuBtnAdd'])){
            //if the POST request is from the ADD INVENTORY then the list has updated and shopping list is reseted
            file_put_contents("shoppingList.txt","");
            header("Location: http://cssrvlab01.utep.edu/classes/cs3360/jargumedo/php/option.php");
            exit;
        }
        ?>
        <div id="buyBtn">
            <h2>BUY</h2>
            <form action="buyItems.php" method="post"> 
                <input type="submit" value="Buy Items">
            </form>
            <br>
        </div>
        <div id="addBtn">    
            <h2>ADD TO INVENTORY</h2>
            <form action="addInventory.php" method="post">
                <input type="submit" value="Add Items">
            </form>
        </div>
    </body>
</html>
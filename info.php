
<html>
	<head>
		<title>PHP Assignment</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>PHP Assignment</h1>
		<br>
		<div id="nameSection">
			<form action="listenName.php" method="post">
				<label for="fruitName"><h3>Search by Name</h3></label>
                <input name="brow" list="brow">
                <datalist id="brow">
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
			</div><br><br>
		<div id="pluSection">
			<h3>Search by PLU</h3>
			<form action="listen.php" method="post">
				<input type="text" name="pluInput" value="" />
				<input type="submit" value="Submit" />
			</form>
		</div>
		</body>
	</html>
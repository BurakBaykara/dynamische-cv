<?php
    
if(isset($_POST['submit'])){
    $taal = $_POST['taal'];
    $niveau = $_POST['niveau'];
    
    include('database_connectie.php');
    
    $sql ="UPDATE Taal SET Taal ='$_POST[taal]', Niveau='$_POST[niveau]'"; 
    $statement = $db_conn->prepare($sql); 
    $statement->execute();
}
    include('database_connectie.php');
    $sql4 = "SELECT * FROM Taal WHERE Studentennummer";
	$statement4 = $db_conn->query($sql4);
	$row4 = $statement4->fetch();





?>

<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" type="text/css" href="update.css">
    </head>
    <body>
        <a href="../home.phtml">Ga terug</a>
        
        <form method="post">
        <p>Taal:</p><input type="text" name="taal"/>    
        <p>Niveau:</p><input type="text" name="niveau"/>    
        <input type="submit" name="submit" value="Bewerken"/>
            
        </form>
        	<div id="taal">
		<table>
			<tr>
				<h3>Taal</h3>
				<p>Taal: <?php echo $row4["Taal"]; ?></p>
				<p>Niveau taal: <?php echo $row4["Niveau"]; ?></p>
			</tr>
		</table>
	</div>
    </body>
</html>

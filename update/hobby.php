<?php
    
if(isset($_POST['submit'])){
    $hobby = $_POST['hobby'];
    
    include('database_connectie.php');
    
    $sql ="UPDATE Hobby SET Hobby ='$_POST[hobby]'"; 
    $statement = $db_conn->prepare($sql); 
    $statement->execute();
}

    include('database_connectie.php');
	$sql5 = "SELECT * FROM Hobby WHERE Studentennummer";
	$statement5 = $db_conn->query($sql5);
	$row5 = $statement5->fetch();




?>

<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" type="text/css" href="update.css">
    </head>
    <body>
        <a href="../home.phtml">Ga terug</a>
        
        <form method="post">
        <p>Hobby:</p><input type="text" name="hobby"/>    
        <input type="submit" name="submit" value="Bewerken"/>
            
        </form>
        	<div id="hobby">
		<table>
			<tr>
				<h3>Hobby</h3>
				<p>Hobby: <?php echo $row5["Hobby"]; ?></p>
			</tr>
		</table>
	</div>
    </body>
</html>

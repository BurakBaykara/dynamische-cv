<?php
    
if(isset($_POST['submit'])){
    $type = $_POST['type'];
    $niveau = $_POST['niveau'];
    
    include('database_connectie.php');
    
    $sql ="UPDATE vaardigheden SET Type ='$_POST[type]', Niveau='$_POST[niveau]'"; 
    $statement = $db_conn->prepare($sql); 
    $statement->execute();
}

        include('database_connectie.php');
    $sql3 = "SELECT * FROM vaardigheden WHERE Studentennummer";
	$statement3 = $db_conn->query($sql3);
	$row3 = $statement3->fetch();
	






?>

<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" type="text/css" href="update.css">
    </head>
    <body>
        
        <a href="../home.phtml">Ga terug</a>
        
        <form method="post">
        <p>Type vaardigheden:</p><input type="text" name="type"/>    
        <p>Niveau vaardigheden:</p><input type="text" name="niveau"/>  
        <input type="submit" name="submit" value="Bewerken"/>
            
        </form>
        	<div id="vaardigheden">
		<table>
			<tr>
				<h3>Vaardigheden</h3>
				<p>Vaardigheden: <?php echo $row3["Type"];?></p>
				<p>Niveau vaardigheden: <?php echo $row3["Niveau"];?></p>
			</tr>
		</table>
	</div>
    </body>
</html>

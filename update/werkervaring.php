<?php
    
if(isset($_POST['submit'])){
    $school = $_POST['werkcode'];
    $startdatum = $_POST['startdatum'];
    $einddatum = $_POST['einddatum'];
    $locatie = $_POST['type'];
    
    include('database_connectie.php');
    
    $sql ="UPDATE Werkervaring SET Werkcode ='$_POST[werkcode]', Startdatum='$_POST[startdatum]', Einddatum='$_POST[einddatum]', Type='$_POST[type]'"; 
    $statement = $db_conn->prepare($sql); 
    $statement->execute();
}
    include('database_connectie.php');
    $sql2 = "SELECT * FROM Werkervaring WHERE Studentennummer";
	$statement2 = $db_conn->query($sql2);
	$row2 = $statement2->fetch();






?>

<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" type="text/css" href="update.css">
    </head>
    <body>
        
        <a href="../home.phtml">Ga terug</a>
        
        <form method="post">
        <p>Werkcode:</p><input type="text" name="werkcode"/>    
        <p>Startdatum:</p><input type="date" name="startdatum"/>    
        <p>Einddatum:</p><input type="date" name="einddatum"/>    
        <p>Type:</p><input type="text" name="type"/><br>        
        <input type="submit" name="submit" value="Bewerken"/>
            
        </form>
        
     	<div id="werkervaring">
		<table>
			<tr>
				<h3>Werkervaring</h3>
				<p>Werkcode: <?php echo $row2["Werkcode"]; ?></p>
				<p>Startdatum en einddatum: <?php echo $row2["Startdatum"] . " - " . $row2["Einddatum"];?></p>
				<p>Type werk: <?php echo $row2["Type"]; ?></p>
			</tr>
		</table>
	</div>   
    </body>
</html>

<?php
    
if(isset($_POST['submit'])){
    $school = $_POST['school'];
    $niveau = $_POST['niveau'];
    $startdatum = $_POST['startdatum'];
    $einddatum = $_POST['einddatum'];
    $locatie = $_POST['locatie'];
    
    include('database_connectie.php');
    
    $sql ="UPDATE Opleiding SET Soort ='$_POST[school]', niveau ='$_POST[niveau]', Startdatum='$_POST[startdatum]', Einddatum='$_POST[einddatum]', Locatie='$_POST[locatie]'"; 
    $statement = $db_conn->prepare($sql); 
    $statement->execute();
}
    include('database_connectie.php');
	$sql1 = "SELECT * FROM Opleiding WHERE Studentennummer";
	$statement1 = $db_conn->query($sql1);
	$row1 = $statement1->fetch();





?>

<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" type="text/css" href="update.css">
    </head>
    <body>
        <a href="../home.phtml">Ga terug</a>
        
        <form method="post">
        <p>School:</p><input type="text" name="school"/>    
        <p>Niveau:</p><input type="text" name="niveau"/>    
        <p>Startdatum:</p><input type="date" name="startdatum"/>    
        <p>Einddatum:</p><input type="date" name="einddatum"/>    
        <p>Locatie:</p><input type="text" name="locatie"/><br><br>
        <input type="submit" name="submit" value="Bewerken"/>
            
        </form>
        	<div id="opleiding">
		<table>
			<tr>
				<h3>Opleiding</h3>
				<p>School: <?php echo $row1["Soort"]; ?></p>
				<p>Niveau: <?php echo $row1["niveau"]; ?></p>
				<p>Startdatum en einddatum: <?php echo $row1["Startdatum"] . " - " . $row1["Einddatum"]; ?></p>
				<p>Locatie: <?php echo $row1["locatie"]; ?></p>
			</tr>
		</table>
	</div>
    </body>
</html>

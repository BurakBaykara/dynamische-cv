<?php
    
if(isset($_POST['submit'])){
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $studentennummer = $_POST['studentennummer'];
    $woonplaats = $_POST['woonplaats'];
    $geboortedatum = $_POST['geboortedatum'];
    
    include('database_connectie.php');
    
    $sql ="UPDATE Student SET Voornaam ='$_POST[voornaam]', Achternaam ='$_POST[achternaam]', Studentennummer='$_POST[studentennummer]', Woonplaats='$_POST[woonplaats]', Geboortedatum='$_POST[geboortedatum]'"; 
    $statement = $db_conn->prepare($sql); 
    $statement->execute();
}

    include('database_connectie.php');
	$sql = "SELECT * FROM Student WHERE Studentennummer";
	$statement = $db_conn->query($sql);
	$row = $statement->fetch();	







?>

<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" type="text/css" href="update.css">
    </head>
    <body>
        <a href="../home.phtml">Ga terug</a>
        
        <form method="post">
        <p>Voornaam:</p><input type="text" name="voornaam"/>    
        <p>Achternaam:</p><input type="text" name="achternaam"/>    
        <p>Studentennummer:</p><input type="text" name="studentennummer"/>    
        <p>Woonplaats:</p><input type="text" name="woonplaats"/>    
        <p>Geboortedatum:</p><input type="date" name="geboortedatum"/><br><br>
        <input type="submit" name="submit" value="Bewerken"/>
            
        </form>
        	<div id="student">
		<table>
			<tr>
				<h3>Student informatie</h3>
				<p> Voor-Achternaam: <?php echo $row["Voornaam"] . " " . $row["Achternaam"];?></p>
				<p>Studentennummer: <?php echo $row["Studentennummer"];?></p>
				<p>Woonplaats: <?php echo $row["Woonplaats"];?></p>
				<p>Geboortedatum: <?php echo $row['Geboortedatum'];?></p>
			</tr>
		</table>
	</div>	
    </body>
    	<div id="student">
    
</html>

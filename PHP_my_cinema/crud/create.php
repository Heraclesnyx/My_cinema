

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<!-- <link rel="stylesheet" href="style.css" type="text/css" /> -->
</head>
<body>
<center>

<div id="header">
 <div id="content">
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="../my_cinema.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="nom" placeholder="Nom" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="prenom" placeholder="Prenom" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="abonnement" placeholder="Abonnement" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
	</table>
</form>



<?php
try{
		$DB = new PDO('mysql:host=localhost; dbname=my_cinema','root','');
		$DB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $e){ //$e = erreur
		echo "try again";
	}
// include_once 'cinema.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $first_name = $_POST['nom'];
 // $last_name = $_POST['prenom'];
 $abonnement = $_POST['abonnement'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql=("INSERT INTO tp_abonnement VALUES('$abonnement')");
        $recup=$DB->query($sql);
 while ($data = $recup->fetch()) {
           print_r($data['abonnement'] . "<br/>");
        }
        
        // sql query for inserting data into database
 
}
?>
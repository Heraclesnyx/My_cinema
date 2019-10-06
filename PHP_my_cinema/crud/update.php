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


 // variables for input data
 $abo = $_POST['nom'];
 // variables for input data
 
 // sql query for update data into database
 $sql= "UPDATE tp_abonnement SET nom='$abo' WHERE id_abo=".$_GET['edit_id'];
        $recup=$DB->query($sql);
        while($data = $recup ->fetch()){

 // sql query for update data into database 


    echo "<tr>";
    echo "<td>".$data['nom']."</td>";
    echo "<td>".$data['prenom']."</td>";
    echo "<td>".$data['Abonnement']."</td>";
    echo "<td>".$data['prix']."</td>";

    echo "</tr>";
  }

?>



            </tbody>
          </table>
        </div>
      </div>
    </div>

  </body>
  </html>

<!-- if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
  $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE users SET first_name='$first_name',last_name='$last_name',user_city='$city_name' WHERE user_id=".$_GET['edit_id'];
        mysql_query($sql_query));
 // sql query for update data into database 
}
?> -->
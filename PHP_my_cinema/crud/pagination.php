<?php

try{
  $DB = new PDO('mysql:host=localhost; dbname=my_cinema','root','');
  $DB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){ //$e = erreur
  echo "try again";
}


$sql = "SELECT COUNT(titre) as film FROM tp_film";
$recup= $DB->query($sql);
$data = $recup->fetch();

$nbrFilm = $data['film'];
$nbrPage = ceil($nbrFilm/$perPage); //ceil permet de prendre l'entier sup

if(isset($_GET['p']) && $_GET['p']>0 && $_GET['p']<=$nbrPage){
    $departPage = $_GET['p'];
}
else{
    $departPage = 1;
}
 
$perPage = 10;


$sql = "SELECT nom,titre FROM tp_film INNER JOIN tp_genre ON tp_film.id_genre=tp_genre.id_genre LIMIT ".(($departPage-1)*$perPage).", $perPage";
$recup= $DB->query($sql);
while ($data = $recup->fetch()) {
       print_r($data['titre'] . "<br/>");
   }

for ($i=1; $i <=$nbrPage ; $i++){
    if ($i===$departPage) {
        
    }
    else{
    echo "<a href=\"pagination.php?p=$i\">$i</a> /";
    }
}
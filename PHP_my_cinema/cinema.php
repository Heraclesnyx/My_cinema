<?php
  try{
  $DB = new PDO('mysql:host=localhost; dbname=my_cinema','root','');
  $DB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){ //$e = erreur
  echo "try again";
}

if(!empty($_POST)){
$res = "";
// $gen = "";
// $dis = "";

  if (isset($_POST['titre'])) {
    $res = $_POST['titre']; //on stock pour la récupérer
// Méthode pour faire une requête.
      if(!empty($_POST['titre'])) {
    $sql="SELECT `titre` FROM `tp_film` WHERE `titre` LIKE ('%".$res."%')";
    $recup= $DB->query($sql);//taper les requête dans le query pour les prochaines requêtes.
    while ($data = $recup->fetch()) {
       print_r($data['titre'] . "<br/>");
    }
  }
}

      //Methode pour ajouter une requete complète
    if(isset($_POST['genre'])){
      $gender = $_POST['genre'];
        if(!empty($_POST['genre'])){

        $recup= $DB->query("SELECT nom,titre FROM tp_film INNER JOIN tp_genre ON tp_film.id_genre=tp_genre.id_genre WHERE nom LIKE ('%".$gender."%')");//taper les requête dans le query pour les prochaines requêtes.
        while ($data = $recup->fetch()) {
           print_r($data['titre'] . "<br/>");
        }
      }
    }
    
            if(isset($_POST['distrib'])){
              $dist = $_POST['distrib'];
                if(!empty($_POST['distrib'])){

                $recup= $DB->query("SELECT nom,titre FROM tp_film INNER JOIN tp_distrib ON tp_film.id_distrib=tp_distrib.id_distrib WHERE nom LIKE ('%".$dist."%')");//taper les requête dans le query pour les prochaines requêtes.
                while ($data = $recup->fetch()) {
                   print_r($data['titre'] . "<br/>");
                }
              }
            }

            if(isset($_POST['nom']) || isset($_POST['prenom'])){
              $nomme = $_POST['nom'];
              $pre = $_POST['prenom'];
                if(!empty($_POST['nom']) || !empty($_POST['prenom'])){

                $recup= $DB->query("SELECT nom,prenom FROM tp_fiche_personne WHERE nom='$nomme' OR prenom='$pre'");//taper les requête dans le query pour les prochaines requêtes.
                // echo "SELECT nom,prenom FROM tp_fiche_personne WHERE nom='$nomme' OR prenom='$pre'";
                while ($data = $recup->fetch()) {
                   print_r($data['nom'] . " " .  $data['prenom'] . "<br/>");
                }
              }
            }



            

            if(isset($_POST['projection'])){  // dernier point des requêtes
              $projec = $_POST['projection'];
                if(!empty($_POST['projection'])){

                $recup= $DB->query("SELECT titre FROM tp_film  WHERE '$projec' BETWEEN date_debut_affiche AND date_fin_affiche");//taper les requête dans le query pour les prochaines requêtes. 
                while ($data = $recup->fetch()) {
                   print_r($data['titre'] . "<br/>");
                }
              }
            }

            // if(isset($_POST['nom'])){
            //   $nomme = $_POST['nom'];
            //     if(!empty($_POST['nom'])){

            //     $recup= $DB->query("SELECT nom FROM tp_fiche_personne");//taper les requête dans le query pour les prochaines requêtes.
            //     // echo "SELECT nom,prenom FROM tp_fiche_personne WHERE nom='$nomme' OR prenom='$pre'";
            //     while ($data = $recup->fetch()) {
            //        print_r($data['nom'] . "<br/>");
            //     }
            //   }
            // }
          
        
}
          
?>
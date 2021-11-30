<?php
session_start();

$db = new PDO('mysql:host=localhost; dbname=concoursChant', 'chant', '01021991');

$artiste=$_POST['artists'];
$titre=$_POST['songs'];
$pseudoSession=$_SESSION['pseudo'];
$_SESSION['song']=$titre;

$requser = $db->prepare("SELECT * FROM songs WHERE song = ?");
$requser->execute(array($titre));
$songexist = $requser->rowCount();

if($songexist != 0) {
  echo '<script>alert("Chanson déjà demandée par un participant." );window.location.href = "./profil.php";</script>';


  
}else{ $sql ="UPDATE songs SET song= '$titre', artiste= '$artiste' WHERE pseudo = '$pseudoSession'";
  $req = $db->prepare($sql);
  $req -> execute();
  echo "slip";
  echo'<script>alert("Demande envoyée");window.location.href = "./profil.php";</script>'; 

}
?>
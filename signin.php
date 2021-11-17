<?php


session_start();

$db = new PDO('mysql:host=localhost;dbname=concoursChant;', 'chant' , '01021991');

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$sexe = $_POST['sexe'];
$email = $_POST['email'];
$password = $_POST['password'];



  // $password = password_hash($password, PASSWORD_DEFAULT);
// POUR DECRYPTER LE HACHAGE : password_verify('mot de passe', variable-hachage)

// $user = 'chant';
// $pass ='01021991';
// try{
//     $db = new PDO ('mysql:host=localhost;dbname=concoursChant', $user, $pass);
// } catch (PDOException $e)
// {
//     print "Erreur :" . $e->getMessage() . "<br/>";
//     die;
// }

$sql = "SELECT * FROM users WHERE email='$email'"; 
  $result = $db->prepare($sql);
  $result-> execute();

if($result->rowCount() > 0){
  echo '<script>alert("Adresse mail déja utilisée" );window.location.href = "./inscription.php";</script>'; 

  
}
else{
  $sql = "INSERT INTO users (nom,prenom,age,sexe,email,password) VALUES ('$nom','$prenom','$age','$sexe','$email','$password')";
  $req = $db->prepare($sql);
  $req -> execute();
   echo '<script>alert("Enregistrement réussi" );window.location.href = "./page2.html";</script>'; 
  
 
  exit();

}
?>
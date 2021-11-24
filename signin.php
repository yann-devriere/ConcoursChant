<?php
session_start();

$db = new PDO('mysql:host=localhost;dbname=concoursChant;', 'chant' , '01021991');
// $db = new PDO('mysql:host=localhost;dbname=concoursChant', 'yann.devriere', '!!MAcao2001@'); 

$pseudo=$_POST['pseudo'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
$sexe=$_POST['sexe'];
$email=$_POST['email'];
$password=$_POST['password'];
$telephone=$_POST['telephone'];
$adresse=$_POST['adresse'];
$codepostal=$_POST['codepostal'];
$ville=$_POST['ville'];
          
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM users WHERE email='$email'"; 
  $result = $db->prepare($sql);
  $result-> execute();

if($result->rowCount() > 0){
  echo '<script>alert("Adresse mail déja utilisée" );window.location.href = "./inscription.php";</script>'; 
  
}
else{
  $sql = "INSERT INTO users (pseudo,nom,prenom,age,sexe,email,password,telephone,adresse,codepostal,ville) VALUES ('$pseudo','$nom','$prenom','$age','$sexe','$email','$hashed_password','$telephone','$adresse','$codepostal','$ville')";
  $req = $db->prepare($sql);
  $req -> execute();
   echo '<script>alert("Enregistrement réussi" );window.location.href = "./index.php";</script>'; 
   
  exit();

}
?>
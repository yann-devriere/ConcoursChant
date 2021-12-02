<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concours de chant</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
</head>
<body>
<a href ="index.php" ><header>CONCOURS DE CHANT</header></a>
    
    <nav class = "onglets">
        <span class = "active" id="onglet"></spanclass>Je m'inscris</span>
        </nav>

        
<div class ="introConnexion"> <p class="titreIntro">Envie de participer au concours ?</p>
    <br>
    Remplissez le formulaire ci-dessous pour vous inscrire, puis connectez vous. Vous pourrez ensuite préparer votre prestation pour le jour J en suivant les futures instructions.</div>

<div class="containerForm">
<form class="formulaire" method="POST" action="signin.php" name="form" onsubmit="checkPass();">

<label for="nom">Pseudo: </label><input type="text" maxlength="100" required name="pseudo" placeholder="pseudo" id="pseudo" class="pseudo marge">

<label for="nom">Nom: </label><input type="text" maxlength="100" required name="nom" placeholder="Nom" id="nom" class="nom marge",>

<label for="nom">Prénom: </label><input type="text" maxlength="100" required name="prenom" placeholder="Prénom" id="prenom" class="prenom marge">

<label for="nom">Age: </label><input type="number" min ="5" max="99" maxlength="2" required name="age" placeholder="age" id="age" class="age marge">

<label for="nom">Sexe: </label><select type="select" maxlength="6"required name="sexe" placeholder="Sexe" id="sexe" class="sexe marge">
<option value ="homme">Homme</option> 
<option value = "femme">Femme</option>
</select>

<label for="nom">Email: </label><input type="email" maxlength="255"required name="email" placeholder ="abc@exemple.com" id="email" class="email marge">

<label for="nom">Mot de passe: </label><input type="password" maxlength="100" required name="password" placeholder="Mot de passe" id="password" class="password marge">

<label for="nom">Confirmer le mot de passe: </label><input type="password" required name="password2" placeholder="Mot de passe" id="password2" class="password2 marge">

<label for="nom">Numéro de téléphone: </label><input type="text" min length = "10" maxlength="14" required name="telephone" placeholder="+33......" id="telephone" class="telephone marge">


<label for="nom">Adresse: </label><input type="text" maxlength="150" required name="adresse" placeholder="12 rue du pont" id="" class="adresse marge">

<div class="CPadresse">
<label for="nom">C.P: </label><input type="number" min="00001" max="99999" minlength="5"  maxlength="5" required name="codepostal" placeholder="59000" id="codepostal" class="codepostal marge">

<label for="nom">Ville: </label><input type="text" maxlength="100" required name="ville" placeholder="Ville" id="ville" class="ville marge">
</div>

<div class="btncgu">
<label for="cgu">J'ai lu et accepte le reglement :</label>
<input type="checkbox" id="cgu" class="cgu" name="cgu" required ></input>



<div class="valider">
<button type="submit" name="submit" class="btnValider">Valider</button>
</div>
        </form>
        </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<!-- <?php
session_start();
?> -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concours de chant</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
</head>
<body>
    <header>CONCOURS DE CHANT</header>
    
    <nav class = "onglets">
        <span class = "active" id="onglet"></spanclass>Inscription</span>
        </nav>

        <div>


<form class="formulaire" method="POST" action="signin.php">


<label for="nom">Nom: </label><input type="text" required name="nom" placeholder="Nom" id="nom" class="nom marge",>

<label for="nom">Prénom: </label><input type="text" required name="prenom" placeholder="Prénom" id="prenom" class="prenom marge">

<label for="nom">Age: </label><input type="number" min ="10" max="99" required name="age" placeholder="age" id="age" class="age marge">

<label for="nom">Sexe: </label><select type="select" required name="sexe" placeholder="Sexe" id="sexe" class="sexe marge">
<option value ="homme">Homme</option> 
<option value = "femme">Femme</option>
</select>

<label for="nom">Email: </label><input type="email" required name="email" placeholder ="abc@exemple.com" id="email" class="email marge">

<label for="nom">Mot de passe: </label><input type="password" required name="password" placeholder="Mot de passe" id="password" class="password marge">


<label for="nom">Confirmer le mot de passe: </label><input type="password" required name="password2" placeholder="Mot de passe" id="password" class="password marge">

<div class="valider">
<button type="submit" name="submit" class="btnValider">Valider</button>
</div>
        </form>
        </div>
</body>
</html>
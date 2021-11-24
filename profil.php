<?php
session_start();
	 
	$db = new PDO('mysql:host=localhost;dbname=concoursChant', 'chant', '01021991');
	// $db = new PDO('mysql:host=localhost;dbname=concoursChant', 'yann.devriere', '!!MAcao2001@'); 


	?>
    
   
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
   <a href="index.php";> <span class = "active onglet1">Présentation</span></a>
    <span class = "barre onglet0">|</span>
    <span class = "active onglet2"><div class="testback">Mon profil</div></span>
</nav>



<div class="container"> 
    <div class="menuD" id="menuDeconnecte">
    <html>
	   <head>
	      <title>Profil</title>
	      <meta charset="utf-8">
	   </head>
	   <body>
	      <div class="infos">
		  <h2>Profil de <?php echo $_SESSION['pseudo']; ?></h2>
	         <br />
	         Nom : <?php echo $_SESSION['nom']; ?>
	         <br />
			 Prénom : <?php echo $_SESSION['prenom']; ?>
	         <br />
			 Age : <?php echo $_SESSION['age']; ?> ans
	         <br />
			 <?php echo $_SESSION['sexe']; ?>
	         <br />
	         Mail : <?php echo $_SESSION['email']; ?>
	         <br />
             Téléphone : <?php echo $_SESSION['telephone']; ?>
	         <br />
             Adresse : <?php echo $_SESSION['adresse']; ?>
	         <br />
             Code Postal : <?php echo $_SESSION['codepostal']; ?>
	         <br />
             Ville : <?php echo $_SESSION['ville']; ?>
	         <br />
	        
	         <a  class="deco" id="deco"><button>Se déconnecter</button></a>
	        
	      </div>
	   </body>
	</html>
	<?php   
	
	?>
            
            </div>
        </div>
        
    </div>
    <h2>Mon profil</h2><br>
     <p> dolor sit amet consectetur adipisicing elit. Aperiam officia necessitatibus beatae architecto expedita reiciendis 
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, sit? Dicta sapiente hic corrupti suscipit. Consequuntur vel sed unde, fugiat numquam explicabo iusto ducimus, odio id provident consectetur iste iure
         Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt ea, commodi pariatur sit ut ipsam quaerat aut fugiat. Nam, vero vitae. Est, eveniet repellendus tempora voluptatem corporis necessitatibus excepturi assumenda.
         Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde tempora dolorum cumque laudantium molestiae libero ipsam, asperiores soluta ullam ex id dolorem quo veritatis facilis cum illum quaerat quae. Quos?
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam suscipit cum at nulla enim nobis, nam dolorem tenetur rerum mollitia commodi nostrum consequatur fuga eos iusto, nemo illo rem consectetur?
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio laboriosam tenetur, error id harum labore sunt fuga perferendis quae quasi beatae accusamus dolorum eaque aut saepe facilis deserunt nobis. Eveniet!
        </p>

		
<h2>Choix de votre chanson pour le concours.</h2>
		<div class="containerFormChant">
			
		<Form class="formChant"> 
				<label for="nom">Artiste</label><Input placeholder="Artiste" class="marge">
				<label for="nom">Titre</label><Input placeholder="Titre de la chanson" class="marge">
				<div class="valider">
				<button type="submit" name="submit" class="btnValider">Rechercher</button>
</div>
		</Form>
		</div>
</div>



    <form method="POST"  enctype="multipart/form-data">
        <input type="file" name="uploaded_file"> <br />
        <input type="submit" name="submit"> <br>
</body>

</html>

<?php
if (isset($_POST['submit'])) 
{
    $maxSize = 8000000;
    $validtext = array('.jpg', '.jpeg', '.gif', '.png', '.mp3', 'mp4', '.mpeg');

    if ($_FILES['uploaded_file']['error'] > 0) 
    {
        echo "Une erreur est survenue lors du transfert";
        die;
    }

    $fileSize = $_FILES['uploaded_file']['size'];
echo" $fileSize octets envoyés, ";
    if ($fileSize > $maxSize) 
    {
        echo "le fichier est trop gros";
        die;
    }

    $fileName = $_FILES['uploaded_file']['name'];

    $fileExt = "." . strtolower(substr(strrchr($fileName, "."), 1));

    if (!in_array($fileExt, $validtext)) {
        echo "le fichier n'est pas une image !";
        die;
    }

    $tmpName = $_FILES['uploaded_file']['tmp_name'];
    $uniqueName = md5(uniqid(rand() . true));
    $fileName = "upload/" . $uniqueName . $fileExt;
    $resultat = move_uploaded_file($tmpName, $fileName);

    if ($resultat) 
    {
        echo "Transfert terminé ! ";
    }
}

?>

</form>


<script>
	const deco= document.querySelector("#deco");

	deco.addEventListener("click",()=>{
		if ( confirm("Souhaitez-vous vraiment vous déconnecter")){
			window.location.href="./deconnexion.php";
		}else{
			window.location.href="./profil.php"
		}

	})

	</script>
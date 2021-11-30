<?php
session_start();

	$db = new PDO('mysql:host=localhost;dbname=concoursChant', 'chant', '01021991');
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

<?php
if($_SESSION['pseudo']!='admin'){
    $erreur = '<script>alert("Accès interdit");</script>';
       echo"$erreur";
}else{
?>
    
<nav class = "ongletsAdmin">
   <span class = "admin">Administration</span>
</nav>

<div class="container"> 
    <div class="menuDadmin" id="menuDeconnecte">
    <html>
	   <head>
	      <title>Profil</title>
	      <meta charset="utf-8">
	   </head>
	   <body>
	      <div class="infos">
		  <h2 class="souligne">Profil de <?php echo $_SESSION['pseudo']; ?></h2>
	         <br />
	         Mail : <?php echo $_SESSION['email']; ?>
             
	         <a  class="deco" id="deco"><button>Se déconnecter</button></a>
	        
	      </div>
        </div>

        <div class = "bodyContainer"> 
    <h2>Interface d'administration <br> <br> Gestion des candidatures</h2><br>
</div>

        <div class= "tabData">
<?php
          if($_SESSION['pseudo']=='admin')
$query=$db->prepare('SELECT * FROM songs');
$query->execute();


echo'<table><tr><td>pseudo</td><td>chanson</td><td>artiste</td><td>verif1</td></tr>';
while($data=$query->fetch())
{
   $pseudotab= $data['pseudo'];
   
echo'<tr><td id='.$pseudotab.'>'.$data['pseudo'].'</td><td>'.$data['song'].'</td><td>'.$data['artiste'].'</td><td> <form name='.$pseudotab.' method="POST" action=""> <input type="submit" >'.$data['verif1'].'</form></td></tr>';
}

echo'</table>';
            
?>

<?php
if("CB.$pseudotab" == 1){
    $query2=$db->prepare("UPDATE song SET verif1= '1' WHERE pseudo ='$pseudotab'");
    $query2->execute();
}

?>
</div>
</div>
 </div>
	   </body>
	</html>  
           
    




</body>

</html>



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

    <?php
};
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hyper Text Preprocessor Plug-in in Php for HTC</title>
</head>
<body>
<?php

$mdp = file_get_contents("02256248456454965265.txt");

if(!isset($_GET['mdp']) && !isset($_GET['mdb'])): ?>
	<form action="" formmethod="get"><p>Entrez le mot de passe(Ou, pour la 1er utilisation, Créez-le) : <input     type="password" id="mdp"><input type="button" onClick="location.href='index.php?mdp='+document.getElementById('mdp').value;" value="Soumettre"></p></form>

<?php elseif($mdp=="0" && !isset($_GET['mdb'])): ?> 
	<script type="text/javascript">
		function Go(Arg){
			if(Arg==0){
				location.href="../index.php";
			}else {
				var mdp = <?php echo "\"";
				echo $_GET['mdp'];
				echo "\"" ?>;

				location.href="index.php?mdp="+mdp+"&mdb=true";
			}
		}
	</script>
	<p>
		Souhaitez-vous définir "<?php echo $_GET['mdp']; ?>" comme mot de passe ?
		<input type="button" value="Oui" onclick="Go(1);">
	</p>
<?php elseif(isset($_GET['mdb'])): 
# Chemin vers fichier texte
$file ="02256248456454965265.txt";
# Ouverture en mode écriture
$fileopen=(fopen("$file",'a'));
# Ecriture de "Début du fichier" dansle fichier texte
fwrite($fileopen,$_GET['mdp']);
# On ferme le fichier proprement
fclose($fileopen);

?>
<center>
	<h1>
		Nous téléchargeons et installons quelques fichiers...
	</h1>
	<p>
		Merci de patienter...
	</p>
</center>
<?php
$NMDP = $_GET['mdp'];
 header("Location: index.php?mdp=$NMDP&create=true");
  exit();

elseif(isset($_GET['mdp']) && isset($_GET['create'])) : ?>
<center><h1>Un projet <a href="https://github.com/EcologicCode">EcologicCode</a></h1></center>
<?php

endif;
?>

</body>
</html>
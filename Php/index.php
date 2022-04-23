<?php 
session_start();

if($_SESSION['Accept'] == true): ?>
<!DOCTYPE html>
<html lang="fr-fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<title>Hyper Text Preprocessor Plug-in in Php for HTC - Accueil</title>
</head>
<body>
<header style="background-color: greenyellow;">
	<p>
		<a href="index.php?Sess=true">&lt; Retour</a><br>
		<a href="../index.php">&lt; Finir</a>
	</p>
</header>
<center>
	<h1>OpenCreators : HTC<br>Hyper Text Preprocessor Plug-in in Php for HTC</h1>
	<p>
		Bienvenue sur Hyper Text Preprocessor Plug-in in Php for HTC !<br>
		Autrement : HTPPIP<br>
		Ce système a été consus pour faciliter la création de sites Webs<br>
	</p>
</center>
</body>
</html>
<?php 
else:
	header("Location: login.php");
	exit();
endif;
?>

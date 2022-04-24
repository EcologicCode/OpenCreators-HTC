<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hyper Text Preprocessor Plug-in in Php for HTC - Edition</title>
</head>
<body>
<?
session_start();

function FWF($File, $Content){

# Ouverture en mode écriture
$fileopen=(fopen("$File",'a'));
# Ecriture de "Début du fichier" dansle fichier texte
fwrite($fileopen, $Content);
# On ferme le fichier proprement
fclose($fileopen);
}

if(isset($_SESSION['Accept']) && !isset($_GET['TextWrite'])):
	?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div id="Editor">
	Nom du fichier : <input title="Nom" value="<?php echo $_GET['f'];?>" type="text" id="Name"><input type="button" value="Ouvrir en édition Simple" onclick="location.href='edit.php?f=<?php echo $_GET['f'];?>&editor=ui';"><br>
	Contenu : <textarea cols="50" rows="2" id="Text"><?php echo file_get_contents("base.php");?></textarea>
</div>
<?php
elseif(isset($_SESSION['Accept']) && isset($_GET['TextWrite'])):
	
else:
	$F = $_GET['f'];
	header("Location: login.php?url=edit.php?f=$F");
	exit();
endif;
?>
</body>
</html>

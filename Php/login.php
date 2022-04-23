<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
<?php 
session_start();

if (isset($_GET['url'])) :?>
	<script type="text/javascript">function MdpOk(){location.href="login.php?mdp="+document.getElementById('Pass').value+"&url=<?php echo $_GET['url'];?>";}</script>
Mot de passe : <input type="password" id="Pass"><button onclick="MdpOk(document.getElementById('Pass').value);">Soumettre</button>
<?php 

elseif (!isset($_GET['url']) && !isset($_SESSION['Accept'])) :?>
	<script type="text/javascript">function MdpOk(){location.href="login.php?mdp="+document.getElementById('Pass').value;}</script>

Mot de passe : <input type="password" id="Pass"><button onclick="MdpOk();">Soumettre</button>
<?php 

elseif($_SESSION['Accept'] == true && isset($_GET['url'])):?>
	$url = $_GET['url'];
<script type="text/javascript">location.href="<?php echo $_GET['url'];?>"</script><?php
	
elseif ($_SESSION['Accept'] == true && !isset($_GET['url'])) :?>
	<script type="text/javascript">location.href="indexHTC.php";</script><?php
endif;
?>
</body>
</html>

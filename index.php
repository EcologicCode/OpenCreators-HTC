<?php
$linkGT = ""; // intialisation de la variable du lien 

if(isset($_GET['lang']) && isset($_GET['url'])){  // Test de l'URL et de la langue

	$lang = $_GET['lang']; // Intialisation pour la langue
	$url = $_GET['url']; // Initialisation pour l'URL

	if($lang == "fr"){ // Test en Fr

$linkGT = $url; // Si le test Fr est OK, mettre la variable du lien à l'URL
header('Status: 301 Moved Permanently', false, 301); // Si le test Fr est OK, mettre que la page a bougé
  header("Location: $linkGT"); // Si le test Fr est OK, envoyer vers la variable du lien
  exit(); // Si le test Fr est OK, arrêter la page vu qu'une redirection a été lancé

	}else if($lang == "n"){
			$linkGT ="lang.html";
	}else { // Si le test Fr n'est pas OK, 

$linkGT = "https://translate.google.com/translate?sl=fr&tl=$lang&hl=$lang&u=$url&client=webapp"; // mettre la variable du lien à Google Traduction

}}else { // Si le Test de l'URL et de la langue n'est pas OK,

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // Rechercher la langue du navigateur
header('Status: 301 Moved Permanently', false, 301);  // mettre que la page a bougé
  header("Location: index.php?lang=$lang&url=docs/"); // envoyer vers cette page avec les arguments : language & URL
  exit(); // arrêter la page vu qu'une redirection a été lancé

}

$homepage = file_get_contents($linkGT); // Rechercher la source de la variable du lien

echo "<h1 style='background-color:red;'>Pour une meilleur utilisation, nous vous recommendons de cliquer <a href='$linkGT'>ici</a></h1>";
echo $homepage; // Envoyer la source de la variable du lien au client.
?>
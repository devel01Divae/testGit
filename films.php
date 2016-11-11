<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Parsing flux RSS</title>
		</head>
<body>
<?php
// Création d'une nouvelle ressource cURL
$ch = curl_init();

// Configuration de l'URL et d'autres options
curl_setopt($ch, CURLOPT_URL, "https://www.google.fr/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Récupération de l'URL et affichage sur le naviguateur
curl_exec($ch);
// Fermeture de la session cURL
curl_close($ch);

/*
	$xml = new DOMDocument();
	$xml->load("http://rss.allocine.fr/ac/bandesannonces/prochainement?format=xml");
	
	$items 	= $xml->getElementsByTagName("item");
	
	foreach($items as $item){
	
		echo "<h2>".$item->getElementsByTagName("title")->item(0)->nodeValue."</h2><br/>";
	
		$ba = $item->getElementsByTagName("guid")->item(0)->nodeValue."<br/>";
	
		$a = explode("player_gen_cmedia=", $ba);
		$b = explode("&cfilm", $a[1]);
		$film = $b[0];
		
		echo "
		    <iframe src='http://www.allocine.fr/_video/iblogvision.aspx?cmedia=".$film."' style='width:480px; height:270px'>
		</iframe>
		<hr/>";
		
	
	}	
*/

	
/*	
	echo "<pre>";
print_r($items);
	echo "</pre>";
*/
?>

</body>
</html>
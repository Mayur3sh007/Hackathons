<?php
	include ('simple_html_dom.php');

	// $html = file_get_html('#');
	// echo $html->find('title',0)->plaintext //We can get the Title of the page in form of Text
    
	$html = file_get_html("https://en.wikipedia.org/wiki/PHP");
	echo $html->find('table.infobox',0)->innertext; //table is the class and infobox is ID inside wikipedia
    
?>
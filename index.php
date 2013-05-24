<?php
//===================================================
//File: index.php
//Desc: Holds the me presentation
//Author: Freddy
//Created: 30/04 - 2013
//===================================================


//---------------------------------------------------
//Basic imports and variable creation.
$pageId = "me";
$title = "Min me sida";
include('incl/header.php');
include('incl/footer.php');


//---------------------------------------------------
//Creates the basic information of this file
$html = <<<input
<div id="content">
	<figure class="right top">
		<img src="img/me.jpg" alt="En bild på mig" />
		<figcaption>
			<p>En bild på mig.</p>
		</figcaption>
	</figure>
	
	<h1>Presentation:</h1>
	<p>
		Freddy heter jag, är 24 år och kommer från Östersund, Jämtland.<br>
		Har sysslat lite med HTML, CSS och PHP tidigare även om det var ett tag sedan och det blev aldrig någon större fördjupning i språken. 
	</p>
</div>
input;


//---------------------------------------------------
//Prints out this page.
echo $headInfo. $bannerInfo . $html . $footer;
?>
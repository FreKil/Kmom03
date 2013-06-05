<?php
//===================================================
//File: drygia.php
//Desc: Links to MVC - Drygia
//Author: Freddy
//Created: 30/04 - 2013
//===================================================


//---------------------------------------------------
//Basic imports and variable creation.
$pageId = "drygia";
$title = "Mitt MVC - Ramverk";
include('incl/header.php');
include('incl/footer.php');


//---------------------------------------------------
//Creates the basic information of this file
$html = <<<input
<div id="content">
	<h1>Mina MVC-Ramverk</h1>
	<p>
		Här är en länk till mitt MVC - Ramverk, Drygia. (Öppnas i nytt fönster)<br />
		<a href="PHPMVC/" target="_blank">Drygia</a>
	</p>
	<p>
		Och den här är till CodeIgniter.<br />
		<a href="CodeIgniter/" target="_blank">CodeIgniter</a>
	</p>
</div>
input;


//---------------------------------------------------
//Prints out this page.
echo $headInfo. $bannerInfo . $html . $footer;
?>
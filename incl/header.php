<?php
//===================================================
//File: header.php
//Desc: Header and banner information.
//Author: Freddy
//Created: 30/04 - 2013
//===================================================


//---------------------------------------------------
//Takes care of necessary variables
$title = (isset($title)) ? $title : "";
$pageId = (isset($pageId)) ? $pageId : "";
$lang = (isset($lang)) ? $lang : "sv";
$charset = (isset($charset)) ? $charset : "utf-8";


//---------------------------------------------------
//Create header information.
$headInfo = <<< input
<!doctype html>
<!--[if lt IE 7]>      <html lang="{$lang}" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="{$lang}" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="{$lang}" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="{$lang}" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="{$charset}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{$title}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/stylesheet.css" title="General stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
input;

$bannerInfo = <<< input
<body id="{$pageId}">
<header id="top">
	<img src="img/logo.png" alt="Sidans logotyp">
	<nav class="navmenu">
		<a id="me-"     href="index.php">Me</a>
		<a id="report-" href="redovisning.php">Redovisning</a>
		<a id="drygia-" href="drygia.php">Mina MVC</a>
		<a id="source-" href="source.php">Källkod</a>
	</nav>
</header>
input;

?>
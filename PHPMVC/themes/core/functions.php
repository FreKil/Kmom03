<?php
/**
* Helpers for the template file.
*/
$drygia->data['header'] = CreateMenu();
$drygia->data['main'] = (isset($drygia->data['main'])) ? $drygia->data['main'] : "";
$drygia->data['footer'] = '<p>Footer: &copy; Drygia by Freddy</p>';


/**
* Print debuginformation from the framework.
*/
function get_debug() {
	$drygia = CDrygia::Instance(); 
	$html = null;
	if(isset($drygia->config['debug']['db-num-queries']) && $drygia->config['debug']['db-num-queries'] && isset($drygia->db)) {
		$html .= "<p>Database made " . $drygia->db->GetNumQueries() . " queries.</p>";
	}   
	if(isset($drygia->config['debug']['db-queries']) && $drygia->config['debug']['db-queries'] && isset($drygia->db)) {
		$html .= "<p>Database made the following queries.</p><pre>" . implode('<br/><br/>', $drygia->db->GetQueries()) . "</pre>";
	}   
	if(isset($drygia->config['debug']['drygia']) && $drygia->config['debug']['drygia']) {
		$html .= "<hr><h3>Debuginformation</h3><p>The content of CDrygia:</p><pre>" . htmlent(print_r($drygia, true)) . "</pre>";
	}
	if(isset($drygia->config['debug']['session']) && $drygia->config['debug']['session']) {
		$html .= "<hr><h3>SESSION</h3><p>The content of CLydia->session:</p><pre>" . htmlent(print_r($drygia->session, true)) . "</pre>";
		$html .= "<p>The content of \$_SESSION:</p><pre>" . htmlent(print_r($_SESSION, true)) . "</pre>";
	} 	
	return $html;
}

//---------------------------------------------------------------
//Returning navigation links to header.
function CreateMenu(){
	$hem = $drygia->CreateUrl('index');
	$guestbook = $drygia->CreateUrl('guestbook');
	
	$html = <<<input
<h1>Header: Drygia</h1>
<a href="{$hem}">Hem</a>
<a href="{$guestbook}">Gästbok</a>
input;

	return($html);
}
<?php
/**
* Holding a instance of CLydia to enable use of $this in subclasses.
*
* @package LydiaCore
*/
class CObject {

	//-----------------------------------------------------------------------------------------
	//Members
	public $config;
	public $request;
	public $data;
	public $db;
	public $views;
	public $session;
   

	//-----------------------------------------------------------------------------------------
	//Constructor
	protected function __construct() {
		$drygia = CDrygia::Instance();
		$this->config   = &$drygia->config;
		$this->request  = &$drygia->request;
		$this->data     = &$drygia->data;
		$this->db       = &$drygia->db;
		$this->views    = &$drygia->views;
		$this->session  = &$drygia->session;
	}
	
	//-----------------------------------------------------------------------------------------
	// Redirect to another url and store the session
	protected function RedirectTo($url) {
		$drygia  = CDrygia::Instance();
		if(isset($drygia->config['debug']['db-num-queries']) && $drygia->config['debug']['db-num-queries'] && isset($drygia->db)) {
			$this->session->SetFlash('database_numQueries', $this->db->GetNumQueries());
		}
		if(isset($drygia->config['debug']['db-queries']) && $drygia->config['debug']['db-queries'] && isset($drygia->db)) {
			$this->session->SetFlash('database_queries', $this->db->GetQueries());
		}
		if(isset($drygia->config['debug']['timer']) && $drygia->config['debug']['timer']) {
			$this->session->SetFlash('timer', $drygia ->timer);
		}
		$this->session->StoreInSession();
		header('Location: ' . $this->request->CreateUrl($url));
	}
}
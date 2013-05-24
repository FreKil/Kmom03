<?php
class CCDeveloper extends CObject implements IController {

	public function __construct() {
		parent::__construct();
	}
	
	public function Index() {   
		$this->data['title'] = "The Developer Controller";	 
	}
	
	public function Links() {   
      $this->request->cleanUrl = false;
      $this->request->querystringUrl = true;      
      $querystring  = $this->request->CreateUrl($url);
      $this->data['title'] = "The Developer Controller";
	}
	
	public function DisplayObject() {
		$this->data['title'] = "The Developer Controller";	 
		$this->data['main'] = <<<EOD
<h2>Dumping content of CDeveloper</h2>
<p>Here is the content of the controller, including properties from CObject which holds access to common resources in CLydia.</p>
EOD;
		$this->data['main'] .= '<pre>' . htmlentities(print_r($this, true)) . '</pre>';
   }
}
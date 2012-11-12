<?php
class controller_subcontroller_home extends controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$data['hello'] = "Hello from subcontroller home. Nice to meet you!";
		$this->view( 'home.php', $data );
	}
}
?>
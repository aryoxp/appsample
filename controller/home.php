<?php
class controller_home extends controller {

	function __construct() {
		parent::__construct();	
	}
	
	function index() {
		$data['hello'] = 'Hello! I am content from controller <code>' 
			. $this->className . '</code> method <code>' 
			. $this->methodName . '</code>';
		$this->view( 'home.php', $data );
	}
	
	function test( $par1, $par2 = '', $par3 = '' ) {
		
		
		
		$mbuku = new model_buku();
		
		$data['par1'] = $par1;
		$data['result'] = $mbuku->read();
		
		$this->view( 'test.php', $data );
	}
}
?>
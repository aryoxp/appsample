<?php
class model_buku extends model {

	public function __construct() {
		parent::__construct();	
	}
	
	public function read() {
		
		$sql = "SELECT * FROM animal ";
		$result = $this->db->query( $sql );
		return $result;	
	}
}
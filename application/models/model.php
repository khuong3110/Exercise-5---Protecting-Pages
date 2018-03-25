<?php
include_once('application/libraries/adodb5/adodb.inc.php');
class Model {

	protected $db;

	public function __construct(){

		try{

			$this->db = NewADOConnection('mysqli');
			$this->db->connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		} catch (exception $e){

			echo 'Connection failed: ' . $e->getMessage();

		}
	}
}

<?php
include_once 'src/DataRetrievers/MySQL/MySQLRetriever.php';

class RetrieverFactory {
	public function __construct($message){
		
	}
	public function getRetrieverOfType($type) {
		$retriever = new MySQLRetriever(0);
		return $retriever;
	}
}
?>
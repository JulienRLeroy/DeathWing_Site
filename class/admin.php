<?php
include_once "connect_db.php";

class Player {
	
	private $_username;
	private $_rank;
	private $_vote;
	private $_id;
	private $_ip;  
	private $_BDD;
	private $_parrain;

	function __construct($username, $email, $vote, $id, $ip, $parrain) {
	    
		$this->_BDD = new DB();
		$this->_username = $username;
		$this->_email = $email;
		$this->_vote = $vote;
		$this->_id = $id;
		$this->_ip = $ip;
		$this->_parrain = $parrain;
		
	}

	
	public function getUsername() {
		return $this->_username;
	}
	
	public function getEmail() {
		return $this->_email;
	}
	
	public function getVote() {
	    return $this->_vote;
	}
	
	public function getId() {
	    return $this->_id;
	}
	
	public function getIp() {
	    return $this->_ip;
	}
	
	public function getParrain() {
		return $this->_parrain;	
	}
	
	public function setParrainvisual($parrain) {
		$this->_parrain = $parrain;
	}
	
	public function setEmailvisual($email) {
		$this->_email = $email;
	}
}
?>
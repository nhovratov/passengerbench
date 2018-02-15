<?php

class Person{
	/*
	* @var string
	*/
	private $firstname;
	/*
	* @var string
	*/
	private $lastname;
	/*
	* @var string
	*/
	private $email; 
	/*
	* @var string
	*/
	private $licensePlate;
	/*
	* @var string
	*/
	private $picture;
	/*
	* @var string
	*/
	private $password;
	
	/*
	*instantiate the object
	* @param int
	* @param string
	* @param string
	*/
	public function __construct ($firstname, $lastname, $email, $licensePlate, $picture, $password){
		$this->setFirstname($firstname); 
		$this->setLastname($lastname);
		$this->setEmail($email);
		$this->setLicensePlate($licensePlate);
		$this->setPicture($picture);
		$this->setPassword($password);
	}
	
	/*
	* @return string
	*/
	public function getFirstname (){
		return $this->firstname;
	}
	/*
	* @param string
	*/
	public function setFirstname ($firstname){
		$this->firstname = $firstname;
	}
	
	/*
	* @return string
	*/
	public function getLastname (){
		return $this->lastname;
	}
	/*
	* @param string
	*/
	public function setLastname ($lastname){
		$this->lastname = $lastname;
	}
	/*
	* @return string
	*/
	public function getEmail (){
		return $this->email;
	}
	/*  
	* @param string
	*/
	public function setEmail ($email){
		$this->email = $email;
	}
	/*
	* @return string
	*/
	public function getLicensePlate (){
		return $this->licensePlate;
	}
	/*  
	* @param string
	*/
	public function setLicensePlate ($licensePlate){
		$this->licensePlate = $licensePlate;
	}
	/*
	* @return string
	*/
	public function getPicture (){
		return $this->picture;
	}
	/*  
	* @param string
	*/
	public function setPicture ($picture){
		$this->picture = $picture;
	}
	/*
	* @return string
	*/
	public function getPassword (){
		return $this->password;
	}
	/*  
	* @param string
	*/
	public function setPassword ($password){
		$this->password = $password;
	}
}

?>
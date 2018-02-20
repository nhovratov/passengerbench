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
	* instantiate the object
	* @param string
	* @param string
	* @param string
	* @param string
	* @param string
	* @param string
	*/
	public function __construct ((string) $firstname, (string) $lastname, (string) $email, (string) $licensePlate, (string) $picture, (string) $password){
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
	public function setFirstname ((string) $firstname){
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
	public function setLastname ((string) $lastname){
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
	public function setEmail ((string) $email){
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
	public function setLicensePlate ((string) $licensePlate){
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
	public function setPicture ((string) $picture){
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
	public function setPassword ((string) $password){
		$this->password = $password;
	}
}

?>
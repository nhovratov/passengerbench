<?php

class Station{
	/*
	* @var string
	*/
	private $name;
	/*
	* @var double
	*/
	private $latitude;
	/*
	* @var double
	*/
	private $longitude; 
	
	/*
	* instantiate the object
	* @param string
	* @param double
	* @param double
	*/
	public function __construct ((string) $name, (double) $latitude, (double) $longitude){
		$this->setName($name); 
		$this->setLatitude($latitude);
		$this->setLongitude($longitude);
	}
	
	/*
	* @return string
	*/
	public function getName (){
		return $this->name;
	}
	/*
	* @param string
	*/
	public function setName ((string) $name){
		$this->name = $name;
	}
	
	/*
	* @return double
	*/
	public function getLatitude (){
		return $this->latitude;
	}
	/*
	* @param double
	*/
	public function setLatitude ((double) $latitude){
		$this->latitude = $latitude;
	}
	/*
	* @return double
	*/
	public function getLongitude (){
		return $this->longitude;
	}
	/*  
	* @param double
	*/
	public function setLongitude ((double) $longitude){
		$this->longitude = $longitude;
	}
}

?>
<?php

require_once('Person.php');

class Trip{
	/*
	* @var Date
	*/
	private $startTime;
	/*
	* @var Person
	*/
	private $driver;
	/*
	* @var double
	*/
	private $departureLatitude; 
	/*
	* @var double
	*/
	private $departureLongitude;
	/*
	* @var double
	*/
	private $destinationLatitude;
	/*
	* @var double
	*/
	private $destinationLongitude;
	/*
	* @var int
	*/
	private $availableSeats;
	
	/*
	* instantiate the object
	* @param Date
	* @param double
	* @param double
	* @param double
	* @param double
	*/
	public function __construct ((Date) $startTime, (double) $departureLatitude, (double) $departureLongitude, (double) $destinationLatitude, (double) $destinationLongitude){
		$this->setStartTime($startTime); 
		$this->setDepartureLatitude($departureLatitude);
		$this->setDepartureLongitude($departureLongitude);
		$this->setDestinationLatitude($destinationLatitude);
		$this->setDestinationLongitude($destinationLongitude);
	}
	
	/*
	* @return Date
	*/
	public function getStartTime (){
		return $this->startTime;
	}
	/*
	* @param Date
	*/
	public function setStartTime ((Date) $startTime){
		$this->startTime = $startTime;
	}
	/*  
	* @return Person
	*/
	public function getDriver (){
		return $this->driver;
	}
	/*  
	* @param Person
	*/
	public function setDriver ((Person) $driver){
		$this->driver = $driver;
	}
	
	/*
	* @return double
	*/
	public function getDepartureLatitude (){
		return $this->departureLatitude;
	}
	/*
	* @param double
	*/
	public function setDepartureLatitude ((double) $departureLatitude){
		$this->departureLatitude = $departureLatitude;
	}
	/*
	* @return double
	*/
	public function getDepartureLongitude (){
		return $this->departureLongitude;
	}
	/*  
	* @param double
	*/
	public function setDepartureLongitude ((double) $departureLongitude){
		$this->departureLongitude = $departureLongitude;
	}
	/*
	* @return double
	*/
	public function getDestinationLatitude (){
		return $this->destinationLatitude;
	}
	/*  
	* @param double
	*/
	public function setDestinationLatitude ((double) $destinationLatitude){
		$this->destinationLatitude = $destinationLatitude;
	}
	/*
	* @return double
	*/
	public function getDestinationLongitude (){
		return $this->destinationLongitude;
	}
	/*  
	* @param double
	*/
	public function setDestinationLongitude ((double) $destinationLongitude){
		$this->destinationLongitude = $destinationLongitude;
	}
	/*  
	* @return int
	*/
	public function getAvailableSeats (){
		$this->availableSeats;
	}
	/*  
	* @param int
	*/
	public function setAvailableSeats ((int) $availableSeats){
		$this->availableSeats = $availableSeats;
	}
}

?>
<?php

require_once('Person.php');
require_once('Trip.php');

class PersonDemandsTrip{
	/*
	* @var Person
	*/
	private $passenger;
	/*
	* @var Trip
	*/
	private $trip;
	/*
	* @var int
	*/
	private $passengerCount;
	/*
	* @var boolean
	*/
	private $accepted;
	
	/*
	* instantiate the object
	* @param Person
	* @param Trip
	* @param int
	* @param boolean
	*/
	public function __construct ((Person) $passenger, (Trip) $trip, (int) $passengerCount, (boolean) $accepted){
		$this->setPassenger($passenger); 
		$this->setTrip($trip); 
		$this->setPassengerCount($passengerCount);
		$this->setAccepted($accepted);
	}
	
	/*
	* @return Person
	*/
	public function getPassenger (){
		return $this->passenger;
	}
	/*
	* @param Person
	*/
	public function setPassenger ((Person) $passenger){
		$this->passenger = $passenger;
	}
	
	/*
	* @return Trip
	*/
	public function getTrip (){
		return $this->trip;
	}
	/*
	* @param Trip
	*/
	public function setTrip ((Trip) $trip){
		$this->trip = $trip;
	}
	/*
	* @return double
	*/
	public function getPassengerCount (){
		return $this->passengerCount;
	}
	/*  
	* @param double
	*/
	public function setPassengerCount ((int) $passengerCount){
		$this->passengerCount = $passengerCount;
	}
	/*
	* @return boolean
	*/
	public function getAccepted (){
		return $this->accepted;
	}
	/*  
	* @param boolean
	*/
	public function setAccepted ((boolean) $accepted){
		$this->accepted = $accepted;
	}
}

?>
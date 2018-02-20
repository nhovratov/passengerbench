<?php

class PersonDemandsTrip
{
    /**
     * @var Person
     */
    private $passenger = null;

    /**
     * @var Trip
     */
    private $trip = null;

    /**
     * @var int
     */
    private $passengerCount = 0;

    /**
     * @var boolean
     */
    private $accepted = false;

    /**
     * @return Person
     */
    public function getPassenger(): Person
    {
        return $this->passenger;
    }

    /**
     * @param Person $passenger
     */
    public function setPassenger(Person $passenger)
    {
        $this->passenger = $passenger;
    }

    /**
     * @return Trip
     */
    public function getTrip(): Trip
    {
        return $this->trip;
    }

    /**
     * @param Trip $trip
     */
    public function setTrip(Trip $trip)
    {
        $this->trip = $trip;
    }

    /**
     * @return int
     */
    public function getPassengerCount(): int
    {
        return $this->passengerCount;
    }

    /**
     * @param int $passengerCount
     */
    public function setPassengerCount(int $passengerCount)
    {
        $this->passengerCount = $passengerCount;
    }

    /**
     * @return bool
     */
    public function isAccepted(): bool
    {
        return $this->accepted;
    }

    /**
     * @param bool $accepted
     */
    public function setAccepted(bool $accepted)
    {
        $this->accepted = $accepted;
    }
}

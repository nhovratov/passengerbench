<?php

class Trip
{
    /**
     * @var int
     */
    private $idTrip = 0;
    /**
     * @var DateTime
     */
    private $startTime = null;
    /**
     * @var Person
     */
    private $driver = null;
    /**
     * @var double
     */
    private $departureLatitude = 0.0;
    /**
     * @var double
     */
    private $departureLongitude = 0.0;
    /**
     * @var double
     */
    private $destinationLatitude = 0.0;
    /**
     * @var double
     */
    private $destinationLongitude = 0.0;
    /**
     * @var int
     */
    private $availableSeats = 0;

    /**
     * @return DateTime
     */
    public function getStartTime(): DateTime
    {
        return $this->startTime;
    }

    /**
     * @param DateTime $startTime
     */
    public function setStartTime(DateTime $startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * @return Person
     */
    public function getDriver(): Person
    {
        return $this->driver;
    }

    /**
     * @param Person $driver
     */
    public function setDriver(Person $driver)
    {
        $this->driver = $driver;
    }

    /**
     * @return float
     */
    public function getDepartureLatitude(): float
    {
        return $this->departureLatitude;
    }

    /**
     * @param float $departureLatitude
     */
    public function setDepartureLatitude(float $departureLatitude)
    {
        $this->departureLatitude = $departureLatitude;
    }

    /**
     * @return float
     */
    public function getDepartureLongitude(): float
    {
        return $this->departureLongitude;
    }

    /**
     * @param float $departureLongitude
     */
    public function setDepartureLongitude(float $departureLongitude)
    {
        $this->departureLongitude = $departureLongitude;
    }

    /**
     * @return float
     */
    public function getDestinationLatitude(): float
    {
        return $this->destinationLatitude;
    }

    /**
     * @param float $destinationLatitude
     */
    public function setDestinationLatitude(float $destinationLatitude)
    {
        $this->destinationLatitude = $destinationLatitude;
    }

    /**
     * @return float
     */
    public function getDestinationLongitude(): float
    {
        return $this->destinationLongitude;
    }

    /**
     * @param float $destinationLongitude
     */
    public function setDestinationLongitude(float $destinationLongitude)
    {
        $this->destinationLongitude = $destinationLongitude;
    }

    /**
     * @return int
     */
    public function getAvailableSeats(): int
    {
        return $this->availableSeats;
    }

    /**
     * @param int $availableSeats
     */
    public function setAvailableSeats(int $availableSeats)
    {
        $this->availableSeats = $availableSeats;
    }

    /**
     * @return int
     */
    public function getIdTrip(): int
    {
        return $this->idTrip;
    }

    /**
     * @param int $idTrip
     */
    public function setIdTrip(int $idTrip)
    {
        $this->idTrip = $idTrip;
    }

}

?>

<?php

class Station
{
    /**
     * @var int
     */
    private $idStation = 0;
    /**
     * @var string
     */
    private $name = "";
    /**
     * @var double
     */
    private $latitude = 0.0;
    /**
     * @var double
     */
    private $longitude = 0.0;

    /**
     * @return int
     */
    public function getIdStation(): int
    {
        return $this->idStation;
    }

    /**
     * @param int $idStation
     */
    public function setIdStation(int $idStation)
    {
        $this->idStation = $idStation;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude)
    {
        $this->longitude = $longitude;
    }

}

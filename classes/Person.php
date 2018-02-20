<?php

class Person
{

    private $idPerson = 0;
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
    * @return string
    */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /*
    * @param string
    */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /*
    * @return string
    */
    public function getLastname()
    {
        return $this->lastname;
    }

    /*
    * @param string
    */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /*
    * @return string
    */
    public function getEmail()
    {
        return $this->email;
    }

    /*
    * @param string
    */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /*
    * @return string
    */
    public function getLicensePlate()
    {
        return $this->licensePlate;
    }

    /*
    * @param string
    */
    public function setLicensePlate($licensePlate)
    {
        $this->licensePlate = $licensePlate;
    }

    /*
    * @return string
    */
    public function getPicture()
    {
        return $this->picture;
    }

    /*
    * @param string
    */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /*
    * @return string
    */
    public function getPassword()
    {
        return $this->password;
    }

    /*
    * @param string
    */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getIdPerson(): int
    {
        return $this->idPerson;
    }

    /**
     * @param int $idPerson
     */
    public function setIdPerson(int $idPerson)
    {
        $this->idPerson = $idPerson;
    }
}

?>

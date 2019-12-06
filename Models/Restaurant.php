<?php
class Restaurant
{
    #object Models Restaurant (ResID, Address, Name, Rating, WorkTime)
    private $ResID;
    private $Address;
    private $Name;
    private $Rating;
    private $WorkTime;

    public function __construct($ResID, $Address, $Name, $Rating, $WorkTime)
    {
        $this->ResID = $ResID;
        $this->Address = $Address;
        $this->Name = $Name;
        $this->Rating = $Rating;
        $this->WorkTime = $WorkTime;
    }

    public function getResID()
    {
        return $this->ResID;
    }

    public function getAddress()
    {
        return $this->Address;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function getRating()
    {
        return $this->Rating;
    }

    public function getWorkTime()
    {
        return $this->WorkTime;
    }
}

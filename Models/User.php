<?php
class User
{
    #object Models User (ID, Name, Sex, AccountName, Password)
    private $ID;
    private $Name;
    private $Sex;
    private $AccountName;
    private $Password;

    public function __construct($ID, $Name, $Sex, $AccountName, $Password)
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Sex = $Sex;
        $this->AccountName = $AccountName;
        $this->Like = $Password;
    }

    public function getID()
    {
        return $this->ID;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function getSex()
    {
        return $this->Sex;
    }

    public function getAccountName()
    {
        return $this->AccountName;
    }

    public function getPassword()
    {
        return $this->Password;
    }
}

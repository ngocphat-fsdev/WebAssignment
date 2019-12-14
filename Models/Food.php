<?php
class Food
{
    #object Models Food (ID, PicLink, Name, Price, Like, Dislike)
    private $ID;
    private $PicLink;
    private $Name;
    private $Price;

    public function __construct($ID, $PicLink, $Name, $Price)
    {
        $this->ID = $ID;
        $this->PicLink = $PicLink;
        $this->Name = $Name;
        $this->Price = $Price;
    }

    public function getID()
    {
        return $this->ID;
    }

    public function getPicLink()
    {
        return $this->PicLink;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function getPrice()
    {
        return $this->Price;
    }
}

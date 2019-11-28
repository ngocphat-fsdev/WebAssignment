<?php
    class Agency
    {
        #object Models Agency (Location, Address, Phone, Email, Website, WorkTime)
        private $Location;
        private $Address;
        private $Phone;
        private $Email;
        private $Website;
        private $WorkTime;

        public function __construct($Location, $Address, $Phone, $Email, $Website, $WorkTime){
            $this->Location = $Location;
            $this->Address = $Address;
            $this->Phone = $Phone;
            $this->Email = $Email;
            $this->Website = $Website;
            $this->WorkTime = $WorkTime;
        }

        public function getLocation()
        {
            return $this->Location;
        }   

        public function getAddress()
        {
            return $this->Address;
        }

        public function getPhone(){
            return $this->Phone;
        }

        public function getEmail(){
            return $this->Email;
        }

        public function getWebsite(){
            return $this->Website;
        }

        public function getWorkTime(){
            return $this->WorkTime;
        }
    }
?>
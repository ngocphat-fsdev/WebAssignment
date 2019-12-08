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

        public function __construct($row){
            $this->Location = $row['Location'];
            $this->Address = $row['Address'];
            $this->Phone = $row['Phone'];
            $this->Email = $row['Email'];
            $this->Website = $row['Website'];
            $this->WorkTime = $row['WorkTime'];
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
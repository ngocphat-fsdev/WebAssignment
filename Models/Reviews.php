<?php
    class Reviews
    {
        private $ID;
        private $Title;
        private $ReviewPlaceName;
        private $AddressOfReviewPlace;
        private $ReviewerName;
        private $ReviewContent;
        private $ReviewerAvatar;
        private $ReviewPoint;
        private $ReviewPicture;
        private $ReviewComment;

        public function __construct($ID, $Title, $ReviewPlaceName, $AddressOfReviewPlace, $ReviewerName, $ReviewContent,
                            $ReviewPoint, $ReviewerAvatar, $ReviewPicture, $ReviewComment){
            $this->ID = $ID;
            $this->Title = $Title;
            $this->ReviewPlaceName = $ReviewPlaceName;
            $this->AddressOfReviewPlace = $AddressOfReviewPlace;
            $this->ReviewerName = $ReviewerName;
            $this->ReviewContent = $ReviewContent;
            $this->ReviewPoint = $ReviewPoint;
            $this->ReviewerAvatar = $ReviewerAvatar;
            $this->ReviewPicture = $ReviewPicture;
            $this->ReviewComment = $ReviewComment;
        }

        public function getID(){
            return $this->ID;
        }

        public function getTitle(){
            return $this->Title;
        }

        public function getReviewPlaceName(){
            return $this->ReviewPlaceName;
        }

        public function getAddressOfReviewPlace(){
            return $this->AddressOfReviewPlace;
        }

        public function getReviewerName(){
            return $this->ReviewerName;
        }

        public function getReviewContent(){
            return $this->ReviewContent;
        }

        public function getReviewPoint(){
            return $this->ReviewPoint;
        }

        public function getReviewerAvatar(){
            return $this->ReviewerAvatar;
        }

        public function getReviewPicture(){
            return $this->ReviewPicture;
        }

        public function getReviewComment(){
            return $this->ReviewComment;
        }

        public function countReviewPicture(){
            return;
        }

        public function countReviewComment(){
            return;
        }
    }
?>
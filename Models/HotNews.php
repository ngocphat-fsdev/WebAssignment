<?php
    class HotNews
    {
        private $Image;
        private $Title;
        private $Content;
        private $SeenCount;
        private $ShareCount;
        private $CommentCount;
        private $LinkBlog;
        
        public function __construct($Image, $Title, $Content, $SeenCount, $ShareCount, $CommentCount, $LinkBlog){
            $this->Image = $Image;
            $this->Title = $Title;
            $this->Content = $Content;
            $this->SeenCount = $SeenCount;
            $this->ShareCount = $ShareCount;
            $this->CommentCount = $CommentCount;
            $this->LinkBlog = $LinkBlog;
        }

        public function getImage(){
            return $this->Image;
        }

        public function getTitle(){
            return $this->Title;
        }

        public function getContent(){
            return $this->Content;
        }

        public function getSeenCount(){
            return $this->SeenCount;
        }

        public function getShareCount(){
            return $this->ShareCount;
        }

        public function getCommentCount(){
            return $this->CommentCount;
        }

        public function getLinkBlog(){
            return $this->LinkBlog;
        }
    }
?>
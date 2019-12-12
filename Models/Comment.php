<?php
class Comment
{
    private $CommentID;
    private $User;
    private $Content;
    private $Time;
    private $LikeCount;

    public function __construct($CommentID, $User, $Content, $Time, $LikeCount)
    {
        $this->CommentID = $CommentID;
        $this->User = $User;
        $this->Content = $Content;
        $this->Time = $Time;
        $this->LikeCount = $LikeCount;
    }

    public function CommentID()
    {
        return $this->CommentID;
    }

    public function getUser()
    {
        return $this->User;
    }

    public function getContent()
    {
        return $this->Content;
    }

    public function getTime()
    {
        return $this->Time;
    }

    public function getLikeCount()
    {
        return $this->LikeCount();
    }
}
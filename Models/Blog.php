<?php
class Blog
{
    #object Models Blog (BlogID, PicLink, Content, Comment, Like, Dislike)
    private $BlogID;
    private $Title;
    private $Content;
    private $Time;
    private $LikeCount;
    private $Rating;
    private $User;
    private $Avatar;

    public function __construct($BlogID, $Title, $Content, $Time, $LikeCount, $Rating, $User, $Avatar)
    {
        $this->BlogID = $BlogID;
        $this->Title = $Title;
        $this->Content = $Content;
        $this->Time = $Time;
        $this->LikeCount = $LikeCount;
        $this->Rating = $Rating;
        $this->User = $User;
        $this->Avatar = $Avatar;
    }

    public function getBlogID()
    {
        return $this->BlogID;
    }

    public function getTitle()
    {
        return $this->Title;
    }

    public function getContent()
    {
        return $this->Content;
    }

    public function getTime()
    {
        return $this->Time;
    }

    public function getRating()
    {
        return $this->Rating;
    }

    public function getUser()
    {
        return $this->User;
    }

    public function getAvatar()
    {
        return $this->Avatar;
    }
}

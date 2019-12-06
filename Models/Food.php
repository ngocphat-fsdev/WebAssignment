<?php
class Food
{
    #object Models Food (BlogID, PicLink, Content, Comment, Like, Dislike)
    private $BlogID;
    private $PicLink;
    private $Content;
    private $Comment;
    private $LikeCount;
    private $DislikeCount;

    public function __construct($BlogID, $PicLink, $Content, $Comment, $LikeCount, $DislikeCount)
    {
        $this->BlogID = $BlogID;
        $this->PicLink = $PicLink;
        $this->Content = $Content;
        $this->Comment = $Comment;
        $this->Like = $LikeCount;
        $this->Dislike = $DislikeCount;
    }

    public function getBlogID()
    {
        return $this->BlogID;
    }

    public function getPicLink()
    {
        return $this->PicLink;
    }

    public function getContent()
    {
        return $this->Content;
    }

    public function getComment()
    {
        return $this->Comment;
    }

    public function getLikeCount()
    {
        return $this->LikeCount;
    }

    public function getDislikeCount()
    {
        return $this->DislikeCount;
    }
}

<?php


//namespace public_html;


class GuestBookRecord
{
    private $message;
    public function __construct($message)
    {
        $this->message = $message;
    }
    public function getMessage()
    {
        return $this->message;
    }
}
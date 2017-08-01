<?php
class Message {
    private $text;
    private $author;
    private $date;
    
    function __construct($text) {
        $this->text = $text;
        $this->author = $author;
        $this->date = new DateTime();
    }
    function getText() {
        return $this->text;
    }

    function getAuthor() {
        return $this->author;
    }

    function getDate() {
        return $this->date;
    }

    function setText($text) {
        $this->text = $text;
    }

    function setAuthor($author) {
        $this->author = $author;
    }

    function setDate($date) {
        $this->date = $date;
    }


}

 
 
 
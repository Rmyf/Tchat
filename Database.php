<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author tal
 */
class Database {
    
    private $db;

    function __construct() {
        $this->db=new PDO('mysql:host=localhost;dbname=ajax-chat', 'ajax-chat-user','SQLAPI');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }
    
    //create new message

function createmessage(Message $message) {
        $query = $this->db->prepare("INSERT INTO messages (text,author,date) " .
                "VALUES (:text,:author,:date)");
        $query->bindValue(':text', $message->getText());
        $query->bindValue(':author', $message->getAuthor());
        $query->bindValue(':date', $message->getDate());
        $query->execute();

        return TRUE;
    }
}
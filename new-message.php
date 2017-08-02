<?php
require_once("classes/Message.php");
require_once("classes/Database.php");

$db = new Database();

if (empty($_POST['input'])) {
    
$msg = new Message($_POST['input']);
$db->createMessage($msg);
header('Content-Type: text/plain');
echo $msg;

} else {

http_response_code(400);
header('Content-Type: text/plain');
echo 'expect a message parameter';
}
<?php

if(isset($_POST['name']) && !empty($_POST['name'])){

$nome = addslashes($_POST['name']) ;
$email = addslashes($_POST['email']) ;
$message = addslashes($_POST['message']) ;

} 

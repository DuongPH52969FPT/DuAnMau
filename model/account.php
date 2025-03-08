<?php


function insert_account($email,$user,$pass){
    $sql = "INSERT INTO account(email,user,pass) VALUES('$email','$user','$pass')";
    pdo_execute($sql);
}

?>
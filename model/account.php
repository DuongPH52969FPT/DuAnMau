<?php


function insert_account($email,$user,$pass){
    $sql = "INSERT INTO account(email,user,pass) VALUES('$email','$user','$pass')";
    pdo_execute($sql);
}
function check_user($user,$pass){
    $sql = "SELECT * FROM account WHERE user = '".$user."' AND pass = '".$pass."'";
    $pro = pdo_query_one($sql);
    return $pro;
}
function check_user_email($email,$user){
    $sql = "SELECT * FROM account WHERE email = '".$email."' AND user = '".$user."'";
    $pro = pdo_query_one($sql);
    return $pro;    
}
function loadall_acc(){
    $sql = "SELECT * FROM account ORDER BY id desc";
    $listacc = pdo_query($sql);
    return $listacc;
}
function update_acc($user,$pass,$email,$address,$phone,$id){
    $sql = "UPDATE account SET user = '$user', pass = '$pass', email = '$email', address = '$address', phone = '$phone' WHERE id = '$id'";
    pdo_execute($sql);
}
?>
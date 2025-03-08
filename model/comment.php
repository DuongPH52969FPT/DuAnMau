<?php 
function insert_comment($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan) VALUES('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
?>

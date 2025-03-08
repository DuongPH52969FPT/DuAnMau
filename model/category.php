<?php

function insert_category($tenloai){
    $sql = "INSERT INTO category(name) VALUES('$tenloai')";
    pdo_execute($sql);
}
function delete_category($id){
    $sql = "DELETE FROM category WHERE id=".$id;   
    pdo_execute($sql);
}
function loadall_cate(){
    $sql = "SELECT * FROM category ORDER BY id desc";
    $listcate = pdo_query($sql);
    return $listcate;
}
function loadone_cate($id){
    $sql = "SELECT * FROM category WHERE id=".$id;
    $cate = pdo_query_one($sql);
    return $cate;
}
function loadone_cate_name($id){
  if($id>0){
    $sql = "SELECT * FROM category WHERE id=".$id;
    $cate = pdo_query_one($sql);
    extract($cate);
    return $name;
  }else{
    return "";
  }
}
function update_cate($tenloai,$id){
    $sql = "UPDATE category SET name ='".$tenloai."' WHERE id=".$id;
    pdo_execute($sql);
}
?>
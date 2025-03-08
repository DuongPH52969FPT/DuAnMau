<?php

function insert_products($tensp,$giasp,$pro_img,$mota,$cate_id){
    $sql = "INSERT INTO products(pro_name,price,pro_img,pro_detail,id_cate) VALUES('$tensp','$giasp','$pro_img','$mota','$cate_id')";
    pdo_execute($sql);
}
function delete_products($id){
    $sql = "DELETE FROM products WHERE pro_id=".$id;   
    pdo_execute($sql);
}
function loadall_pro($keyword="",$id_cate=0){
    $sql = "SELECT * FROM products WHERE 1";
    if($keyword != ""){
        $sql.= " AND pro_name LIKE '%".$keyword."%'";
    }
    if($id_cate>0){
        $sql.= " AND id_cate =".$id_cate;
    }
    $sql.= " ORDER BY pro_id DESC";
    $listpro = pdo_query($sql);
    return $listpro;
}
function loadone_pro($id){
    $sql = "SELECT * FROM products WHERE pro_id=".$id;
    $pro = pdo_query_one($sql);
    return $pro;
}
function loadone_pro_sim($id, $id_cate){
    $sql = "SELECT * FROM products WHERE id_cate=".$id_cate." AND pro_id <>".$id;
    $listpro = pdo_query($sql);
    return $listpro;
}
function load_cate_name($id_cate){
    if($id_cate>0){
        $sql = "SELECT * FROM category WHERE id=".$id_cate;
        $cate = pdo_query_one($sql);
        extract($cate);
        return $name;
      }else{
        return "";
      }
}
function update_pro($id, $id_cate, $tensp, $giasp, $mota, $pro_img){
    if($pro_img != ""){
        $sql = "UPDATE products SET id_cate = '$id_cate', pro_name = '$tensp', price = '$giasp', pro_detail = '$mota', pro_img = '$pro_img' WHERE pro_id = $id";
    } else {
        $sql = "UPDATE products SET id_cate = '$id_cate', pro_name = '$tensp', price = '$giasp', pro_detail = '$mota' WHERE pro_id = $id";
    }
    pdo_execute($sql);
}

function load_allpro_home(){
    $sql = "SELECT * FROM products WHERE 1 ORDER BY pro_id desc";
    $listpro = pdo_query($sql);
    return $listpro;
}
function load_allpro_best(){
    $sql = "SELECT * FROM products WHERE 1 ORDER BY views desc LIMIT 0,10";
    $listpro = pdo_query($sql);
    return $listpro;
}
?>
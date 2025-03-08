<?php
include 'model/pdo.php';
include 'model/sanpham.php';
include 'views/header.php';
include 'global.php';
include 'model/category.php';
include 'model/account.php';

$newpro = load_allpro_home();
$listcate = loadall_cate();
$top10 = load_allpro_best();

if((isset($_GET['act'])) && $_GET['act'] !== ''){
    $act = $_GET['act'];
    
    switch($act){

        case 'product':
            if (isset($_POST['keyword']) && $_POST['keyword'] != "") {
                $kyw = $_POST['keyword'];
            } else {
                $kyw = "";
            }



            if(isset($_GET['id_cate'])&&$_GET['id_cate']>0){
            $id_cate = $_GET['id_cate'];
            
            }else{
                $id_cate = 0;
            }
            $catelist = loadall_pro($kyw,$id_cate);
            $catename = load_cate_name($id_cate);
            include 'views/product.php';
            break;

        case 'productdetail':
            if(isset($_GET['pro_id'])&&$_GET['pro_id']>0){
            $id = $_GET['pro_id'];
            $onepro = loadone_pro($id);
            extract($onepro);
            $simpro = loadone_pro_sim($id, $id_cate);
            include 'views/product-detail.php';
            }else{
              include 'views/main.php';
            }
            break;

        case 'about':
            include 'views/about.php';
            break;

        case 'register';
        if(isset($_POST['register'])&&$_POST['register']){
            $email = $_POST['email'];
            $user = $_POST['username'];
            $pass = $_POST['pass'];
            insert_account($email, $user, $pass);

            $thongbao = 'Thông tin đã được lưu';
        }
        include 'views/account/reg.php';
        break;

        default:
        break;
    }
}else{
    include 'views/main.php';
}
include 'views/footer.php';

?>
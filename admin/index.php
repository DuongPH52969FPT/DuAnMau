<?php
include '../model/pdo.php';
include 'header.php';
include '../model/category.php';
include '../model/sanpham.php';
include '../model/account.php';

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'addcate':
            if(isset($_POST['themmoi'])&&$_POST['themmoi']){
                $tenloai = $_POST['tenloai'];
               insert_category($tenloai);
                $thongbao = 'Thêm mới thành công';
            }
            include 'category/add.php';
            break;

        case 'listcate':
            $listcate = loadall_cate();
            include 'category/list.php';
            break;

        case 'delcate':
            if(isset($_GET['id'])&&$_GET['id']>0){
           delete_category($_GET['id']);
            }
                $listcate = loadall_cate();
                include 'category/list.php';
                break;
            case 'editcate':
                if(isset($_GET['id'])&&$_GET['id']>0){
                    $cate = loadone_cate($_GET['id']);
                   }
                include 'category/update.php';
                break;
            case 'updatecate':
                if(isset($_POST['update'])&&$_POST['update']){
                    $id = $_POST['id'];
                    $tenloai = $_POST['tenloai'];
                    update_cate($tenloai,$id);
                    $thongbao = 'Update thành công';
                }
                $listcate = loadall_cate();
                include 'category/list.php';
                break;

                //Controller San pham
                
                case 'addpro':
                    if(isset($_POST['themmoi'])&&$_POST['themmoi']){
                        $id_cate = $_POST['id_cate'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $mota = $_POST['mota'];
                        $pro_img = $_FILES['hinh']['name'];

                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                          } else {
                            // echo "Sorry, there was an error uploading your file.";
                          }

                       insert_products($tensp,$giasp,$pro_img,$mota,$id_cate);
                        $thongbao = 'Thêm mới thành công';
                    }
                    $listcate = loadall_cate();
                    include 'product/add.php';
                    break;
        
                case 'listpro':
                    if(isset($_POST['listok'])&&$_POST['listok']){
                        $keyword = $_POST['keyword'];   
                        $id_cate = $_POST['id_cate'];
                    }else{
                        $keyword = '';
                        $id_cate = 0;
                    }
                    $listcate = loadall_cate(); 
                    $listpro = loadall_pro($keyword,$id_cate);
                    include 'product/list.php';
                    break;
        
                case 'delpro':
                    if(isset($_GET['id'])&&$_GET['id']>0){
                        delete_products($_GET['id']);
                    }
                        $listpro = loadall_pro("",0);
                        include 'product/list.php';
                        break;
                    case 'editpro':
                        if(isset($_GET['id'])&&$_GET['id']>0){
                            $product = loadone_pro($_GET['id']);
                           }
                           $listcate = loadall_cate(); 
                        include 'product/update.php';
                        break;
                    case 'updatepro':
                        if(isset($_POST['update'])&&$_POST['update']){
                            $id = $_POST['id'];
                            $id_cate = $_POST['id_cate'];
                            $tensp = $_POST['tensp'];
                            $giasp = $_POST['giasp'];
                            $mota = $_POST['mota'];
                            $pro_img = $_FILES['hinh']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
    
                            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                              } else {
                                // echo "Sorry, there was an error uploading your file.";
                              }

                            update_pro($id,$id_cate,$tensp,$giasp,$mota,$pro_img);
                            $thongbao = 'Update thành công';
                        }
                        $listcate = loadall_cate(); 
                        $listpro = loadall_pro();
                        include 'product/list.php';
                        break;

                        case 'client':
                            $listaccount = loadall_acc();
                            include 'account/list.php';
                        break;

        default:
        include 'main.php';
            break;
    }

}else{
    include 'main.php';
}

include 'footer.php';
?>
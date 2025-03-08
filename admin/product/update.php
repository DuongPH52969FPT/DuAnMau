<?php

if(is_array($product)){
    extract($product);
}
$hinhpath = "./upload/" . $pro_img;
if(is_file($hinhpath)){
    $hinh = '<img src="'.$hinhpath.'" height="80">';
}else{
    $hinh = "no photo";
}
?>

<div class="container">
<div class="row">
            <div class="row-tittle">
              <h1>SỬA MỚI LOẠI HÀNG HÓA</h1>
                <div class="row-content">
                <form action="index.php?act=updatepro" method="POST" enctype="multipart/form-data">
                        <div class="form-d">
                        <select name="id_cate">
                            <option value="0" selected>All</option>
                                <?php

                                foreach ($listcate as $cate) {
                                    extract($cate);
                                    if($id_cate==$id) $s = "selected"; else $s = "";
                                    echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                                }

                                ?>
                            </select>
                        </div>

                        <div class="form-n">
                            Tên sản phẩm
                            <input type="text" name="tensp" value="<?=$pro_name?>"> 
                        </div>

                        
                        <div class="form-n">
                            Price
                            <input type="text" name="giasp" value="<?=$price?>">
                        </div>


                       
                        <div class="form-n" style="padding-bottom: 20px;">
                            Img
                            <input type="file" name="hinh">
                        </div>
                        <?=$hinh?>

                        <div style="padding: 10px 0 10px 0;">Detail</div>
                        <div class="form-n">
                            <textarea name="mota" rows="4" cols="50"><?=$pro_detail?></textarea>
                        </div>

                        <div class="form-d">
                        <input type="hidden" name="id" value="<?=$pro_id ?>">
                        <input type="submit" name="update" value="Update">
                          <input type="submit" value="RESET">
                         <a href="index.php?act=listpro"> <input type="button" value="DANH SÁCH" ></a>
                        </div>
                        <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                        ?>
                    </form>
                </div>
            </div>
        </div>

</div>
<?php

if(is_array($cate)){
    extract($cate);
}

?>

<div class="container">
<div class="row">
            <div class="row-tittle">
              <h1>SỬA MỚI LOẠI HÀNG HÓA</h1>
                <div class="row-content">
                    <form action="index.php?act=updatecate" method="POST">
                        <div class="form-d">
                            Mã loại
                            <input type="text" name="maloai" disabled>
                        </div>

                        <div class="form-n">
                            Tên loại
                            <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!=="")) echo $name ?>">
                        </div>

                        <div class="form-d">
                        <input hidden name="id" value="<?php if(isset($id)&&($id>0)) echo $id ?>">
                          <input type="submit" name="update" value="CẬP NHẬT">
                          <input type="submit" value="NHẬP LẠI">
                         <a href="index.php?act=listcate"> <input type="button" value="DANH SÁCH" ></a>
                        </div>
                        <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                        ?>
                    </form>
                </div>
            </div>
        </div>

</div>
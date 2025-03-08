<div class="container">
<div class="row">
            <div class="row-tittle">
              <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
                <div class="row-content">
                    <form action="index.php?act=addcate" method="POST">
                        <div class="form-d">
                            Mã loại
                            <input type="text" name="maloai" disabled>
                        </div>

                        <div class="form-n">
                            Tên loại
                            <input type="text" name="tenloai">
                        </div>

                        <div class="form-d">
                          <input type="submit" name="themmoi" value="THÊM MỚI">
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
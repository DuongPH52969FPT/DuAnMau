<div class="container">
<div class="row">
            <div class="row-tittle">
              <h1>THEM SẢN PHẨM</h1>
                <div class="row-content">
                    
                <form action="index.php?act=addpro" method="POST" enctype="multipart/form-data">
                        <div class="form-d">
                            Danh mục
                            <select name="id_cate" id="">
                                <?php

                                foreach ($listcate as $cate) {
                                    extract($cate);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }

                                ?>
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="form-n">
                            Tên sản phẩm
                            <input type="text" name="tensp">
                        </div>

                        
                        <div class="form-n">
                            Price
                            <input type="text" name="giasp">
                        </div>


                       
                        <div class="form-n" style="padding-bottom: 20px;">
                            Img
                            <input type="file" name="hinh">
                        </div>

                        Detail
                        <div class="form-n">
                            <textarea name="mota" rows="4" cols="50"></textarea>
                        </div>

                        <div class="form-d">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                          <input type="submit" value="NHẬP LẠI">
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
<div class="container">
    
<div class="row-t">
            <div class="row-title-t">
                <h1>DANH SÁCH SẢN PHẨM</h1>
                <div class="row-content-t">
              
                        <div class="form-t">
                        <form action="index.php?act=listpro" method="post">
                            <input type="text" name="keyword">
                            <select name="id_cate">
                            <option value="0" selected>All</option>
                                <?php

                                foreach ($listcate as $cate) {
                                    extract($cate);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }

                                ?>
                            </select>
                            <input type="submit" name="listok" value="OK">
                        </form>
                            <table>
                                <tr>
                                    <th></th>
                                    <th>MÃ LOẠI</th>
                                    <th>TÊN SP</th>
                                    <th>Gia</th>
                                    <th>Hinh</th>
                                    <th>Views</th>
                                    <th></th>
                                </tr>
                                <?php
                                foreach ($listpro as $pro) {
                                    extract($pro);
                                    $editpro = "index.php?act=editpro&id=" . $pro_id;
                                    $delpro = 'index.php?act=delpro&id=' . $pro_id;
                                    
                                    $hinhpath = "../upload/" . $pro_img;
                                    if(is_file($hinhpath)){
                                        $hinh = '<img src="'.$hinhpath.'" height="80">';
                                    }else{
                                        $hinh = "no photo";
                                    }
                                    echo '
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$pro_id.'</td>
                                    <td>'.$pro_name.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$views.'</td>
                                    <td>
                                        <a href="'.$delpro.'" onclick="return confirm(\'Xóa?\')"><input type="button" class="del" value="DELETE"></a>
                                        <a href="'.$editpro.'"><input type="button" class="edit" value="EDIT"></a>
                                    </td>
                                </tr>
                                    ';
                                }
                                ?>

                            </table>
                        </div>

                        <div class="form-d">
                            <input type="button" value="CHỌN TẤT CẢ">
                            <input type="button" value="BỎ CHỌN TẤT CẢ">
                            <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
                            <a href="index.php?act=addpro"><input type="button" value="ADD"></a>
                        </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
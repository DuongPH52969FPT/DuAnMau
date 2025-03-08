<div class="container">
    
<div class="row-t">
            <div class="row-title-t">
                <h1>DANH SÁCH SẢN PHẨM</h1>
                <div class="row-content-t">
                    <form action="#" method="POST">
                        <div class="form-t">
                            <table>
                                <tr>
                                    <th></th>
                                    <th>MÃ LOẠI</th>
                                    <th>TÊN LOẠI</th>
                                    <th></th>
                                </tr>
                                <?php
                                foreach ($listcate as $cate) {
                                    extract($cate);
                                    $editcate = "index.php?act=editcate&id=" . $id;
                                    $delcate = 'index.php?act=delcate&id=' . $id;
                                    echo '
                                    <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>
                                        <a href="'.$delcate.'" onclick="return confirm(\'Xóa?\')"><input type="button" class="del" value="DELETE"></a>
                                        <a href="'.$editcate.'"><input type="button" class="edit" value="EDIT"></a>
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
                            <a href="index.php?act=addcate"><input type="button" value="NHẬP THÊM"></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
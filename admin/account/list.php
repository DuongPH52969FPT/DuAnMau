<div class="container">
    
<div class="row-t">
            <div class="row-title-t">
                <h1>DANH SÁCH SẢN PHẨM</h1>
                <div class="row-content-t">
                        <div class="form-t">
                            <table>
                                <tr>
                                    <th></th>
                                    <th>USER</th>
                                    <th>PASS</th>
                                    <th>EMAIL</th>
                                    <th>ADDRESS</th>
                                    <th>PHONE</th>
                                    <th>ROLE</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <?php
                                foreach ($listaccount as $acc) {
                                    extract($acc);
                                    $editacc = "index.php?act=editacc&id=" . $id;
                                    $delacc = 'index.php?act=delacc&id=' . $id;
                                    echo '
                                    <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$role.'</td>
                                    <td>
                                        <a href="'.$delacc.'" onclick="return confirm(\'Xóa?\')"><input type="button" class="del" value="DELETE"></a>
                                        <a href="'.$editacc.'"><input type="button" class="edit" value="EDIT"></a>
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
                </div>
            </div>
        </div>
    </div>
</div>
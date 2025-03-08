<div class="sidebar-box">
                        <h3>Đăng nhập</h3>
                        <?php
                        if(isset($_SESSION['username'])){
                            extract($_SESSION['username']);
                        ?>
                         <div class="additional-links">
                            <h2>Hello! <?=$user ?></h2>
                            <div class="loginfunction">
                                <ul>
                                    <li><a href="index.php?act=passforgor">Quên mật khẩu?</a></li>
                                    <li><a href="index.php?act=updateacc">Cập nhật tài khoản</a></li>
                                   <?php 
                                    if($role==1){
                                    ?>
                                    <li><a href="admin/index.php">Đăng nhập admin</a></li>
                                    <?php
                                    }
                                   ?>
                                    <li><a href="index.php?act=logout">Thoát</a></li>
                                </ul>
                            </div>
                        </div>
                        <?php
                        }else{
                        ?>
                         <form action="index.php?act=login" method="post">

                            <label for="username">Username:</label><br>
                            <input type="text" name="username"><br>

                            <label for="password">Password:</label><br>
                            <input type="password" name="pass"><br>

                            <div><input type="checkbox" name="save-password">
                                <label for="save-password">Save Password</label><br>
                            </div>

                            <input type="submit" name="login"></button>
                            </form>
                            <div class="additional-links">
                            <div class="loginfunction">
                                <ul>
                                    <li><a href="index.php?act=passforgor">Quên mật khẩu?</a></li>
                                    <li><a href="index.php?act=register">Đăng Ký</a></li>
                                </ul>
                            </div>
                            </div>
                        <?php
                        }

                        ?>
                    </div>

                    <div class="sidebar-box">
                        <div class="sidebar-title">
                            <h3>Danh mục</h3>
                        </div>
                        <div class="cate-search">

                        <form action="index.php?act=product" class="form-s" method="post" enctype="multipart/form-data">
                            
                            <input type="text" placeholder="Từ khóa tìm sản phẩm" name="keyword">
                            <input type="submit" name="search">

                        </form>

                        </div>
                        <ul>

                        <?php
                        foreach($listcate as $cate){
                            extract($cate);
                            $linkcate = "index.php?act=product&id_cate=".$id;
                        ?>
                            <li><a href="<?=$linkcate ?>"><?=$name ?></a></li>
                        <?php
                        }
                        ?>
                        </ul>
                       
                    </div>

                    <?php

                    ?>
                    <div class="sidebar-box">
                        <h3>Top 10 Sản phẩm</h3>
                        <ul class="best-sellers">
                        <?php
                        foreach($top10 as $one){
                            extract($one);
                            $linkpro  = "index.php?act=productdetail&pro_id=" . $pro_id;
                            $img = $img_path . $pro_img;
                            echo "<li><img src=\"$img\" alt=\"Best Seller 1 Image\"><a href=\"$linkpro\">$pro_name</a></li>";
                        }
                        ?>

                        </ul>
                    </div>
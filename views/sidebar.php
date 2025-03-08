<div class="sidebar-box">
                        <h3>Login</h3>
                        <form>
                            <label for="username">Username:</label><br>
                            <input type="text" id="username" name="username"><br>
                            <label for="password">Password:</label><br>
                            <input type="password" id="password" name="password"><br>
                            <div><input type="checkbox" id="save-password" name="save-password">
                                <label for="save-password">Save Password</label><br>
                            </div>
                            <button type="submit">Login</button>
                        </form>
                        <div class="additional-links">
                            <div class="loginfunction">
                                <ul>
                                    <li><a href="#">Forgot Password?</a></li>
                                    <li><a href="index.php?act=register">Đăng Ký</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-box">
                        <div class="sidebar-title">
                            <h3>Categories</h3>
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

                    <div class="sidebar-box">
                        <h3>Top 10 Best Sellers</h3>
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
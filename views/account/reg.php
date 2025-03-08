

<hr>

        

<div class="content-outline">
    <div class="content">
        <main class="main-content">
           
        <section class="product-info">
                <h2>Đăng Ký Tài Khoản</h2>
                <div class="product-detail">
                    <form action="index.php?act=register" method="post">

                        <div>
                           <label for="username">Email</label><br>
                           <input type="text" name="email" placeholder="">
                       </div>

                       <div>
                           <label for="username">Username:</label><br>
                           <input type="text" name="username" placeholder="">
                       </div>
                       <div>
                           <label for="password">Password</label><br>
                           <input type="text" name="pass" placeholder="">
                       </div>
                        <input type="submit" value="Đăng Ký" name="register">
                        <input type="reset">
                    </form>
                    <?php

                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }else{
                        echo "Đăng ký loi";
                    }

                    ?>
                </div>
            </section>


           </div>
        </main>

        <div class="sidebar">
                <?php
                include 'views/sidebar.php';
                ?>
        </div>
    </div>
</div>
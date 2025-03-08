<hr>

<div class="content-outline">
    <div class="content">
        <main class="main-content">
            <section class="reg-info">
            <h2>Cập nhật</h2>
                <div class="reg-detail">
                    <?php  
                    if(isset($_SESSION['username'])&& (is_array($_SESSION['username']))){
                        extract($_SESSION['username']);
                    }
                    ?>
                    <div class="log-reg">
                        <form action="index.php?act=updateacc" method="post">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" placeholder="Nhập email của bạn" value="<?= $email ?>">
                            </div>

                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" placeholder="Nhập username của bạn" required value="<?= $user ?>">
                            </div>

                            <div class="form-group">
                                <label for="pass">Password:</label>
                                <input type="password" name="pass" placeholder="Nhập password của bạn" required value="<?= $pass ?>">
                            </div>

                            <div class="form-group">
                                <label for="pass">Address:</label>
                                <input type="text" name="address" placeholder="Nhập địa chỉ của bạn" required value="<?= $address ?>">
                            </div>

                            <div class="form-group">
                                <label for="pass">Phone:</label>
                                <input type="text" name="phone" placeholder="Nhập số điện thoại của bạn" required value="<?= $phone ?>">
                            </div>

                            <div class="form-actions">
                                <input type="hidden" value="<?= $id ?>" name="id">
                                <input type="submit" value="Cập nhật" name="updateacc">
                                <input type="reset" value="Reset">
                            </div>
                        </form>
                    </div>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                ?>
            </div>
        </section>
    </main>

    <div class="sidebar">
        <?php include 'views/sidebar.php'; ?>
    </div>
</div>
</div>
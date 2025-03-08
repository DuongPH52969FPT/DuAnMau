<hr>

<div class="content-outline">
    <div class="content">
        <main class="main-content">
            <section class="reg-info">
            <h2>Quên mật khẩu</h2>
                <div class="reg-detail">
                    <div class="log-reg">
                        <form action="index.php?act=passforgor" method="post">
                            <div class="form-group">
                                Vui lòng nhập Email và User đễ hiện pass
                                <label for="email">Email:</label>
                                <input type="email" name="email" placeholder="Nhập email của bạn" required>
                            </div>

                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" placeholder="Nhập username của bạn" required>
                            </div>

                            <div class="form-actions">
                                <input type="submit" value="Nhập" name="passforgor">
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


<hr>

        

<div class="content-outline">
    <div class="content">
    <main class="main-content">
                     <h2>Sản phẩm <?=$catename ?></h2>
                   <div class="product">
                    <?php
                        foreach($catelist as $cate){
                            extract($cate);
                            $img = $img_path.$pro_img;
                    ?>
                    <div class="product-info">
                        <a href="index.php?act=productdetail&pro_id=<?=$pro_id ?>">
                            <img src="<?=$img ?>" alt=""></a>
                        <div class="product-title">
                            <p><?=$pro_name ?></p>
                        </div>
                        <strong><p>$<?=number_format($price) ?></p></strong>
                        <div class="in-stock">
                            <p><?=$pro_detail ?></p>
                        </div>
                    </div>
                    <?php
                        }

                    ?>



                   </div>
                </main>

        <div class="sidebar">
                <?php
                include 'sidebar.php';
                ?>
        </div>
    </div>
</div>

<div class="banner-outline">
            <div class="banner">
    <!-- Slideshow container -->
                    <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                    <img src="views/images/banner.webp" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                    <img src="views/images/banner2.webp" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                    <img src="views/images/banner3.webp" style="width:100%">
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
            </div>    
        </div>

        <hr>

        <div class="content-outline">
            <div class="content">

                <main class="main-content">
                    <h2>TOP SELLER</h2>
                   <div class="product">
                    <?php
                        foreach($newpro as $pro){
                            extract($pro);
                            $img = $img_path.$pro_img;
                    ?>
                    <div class="product-info">
                        <a href="index.php?act=productdetail&pro_id=<?=$pro_id ?>">
                            <img src="<?=$img ?>" alt=""></a>
                        <div class="product-title">
                            <p><?=$pro_name ?></p>
                        </div>
                        <strong><p><?=number_format($price) ?>₫</p></strong>
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
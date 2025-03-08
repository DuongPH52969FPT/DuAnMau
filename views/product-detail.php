

        <hr>

        

        <div class="content-outline">
            <div class="content">
                <main class="main-content">
                   
                <section class="product-info">
                        <h2>Product Details</h2>
                        <div class="product-detail">
                            <?php
                                extract($onepro);
                                $img = $img_path.$pro_img;
                            ?>
                            <img src="<?=$img ?>" alt="Guitar">
                            <?php
                            ?>
                            <div class="product-description">
                            <?php
                                extract($onepro);
                              
                            ?>
                                <h3><?=$pro_name?></h3>
                                <p>Classic Silver</p>
                                <strong><p>$<?=number_format($price)?></p></strong>
                                <p><?=$pro_detail;?></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                            </div>
                        </div>
                    </section>


                    <section class="comments-section">
                        <h2>Comments</h2>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                        <script>
                                $(document).ready(function(){
                                $("#comment").keyup(function(){
                                    txt = $("input").val();
                                    $("span").load("views/binhluan/comment.php", {idpro: <?=$pro_id?>});
                                });
                                });
                        </script>
                        <div class="comment" id="comment">

                        </div>
                        <!-- <div class="comment">
                            <p><strong>Jane Smith:</strong> Amazing build and finish.</p>
                        </div> -->
                       <?php 
                    if(isset($_SESSION['username'])&& !empty($_SESSION['username'])){
                        extract($_SESSION['username']);
                    ?>
                         <form class="comment-form" action="index.php?act=comment" method="post">
                            <label for="comment">Viết bình luận:</label>
                            <textarea id="comment" name="comment" rows="4" placeholder="Viết bình luận..."></textarea>
                            <button type="submit">Comment</button>
                        </form>
                    <?php
                    }else{
                    ?>
                     <label for="comment" style="font-weight: bold; color: red">Vui lòng đăng nhập để viết bình luận</label>
                    <?php
                    }
                       
                       ?>
                    </section>



                    <section class="similar-products">
                        <h2>Similar Products</h2>
                        <div class="similar-text" style="margin-left: 20px;">
                            <ul>
                                <?php
                                    foreach($simpro as $pro){
                                        extract($pro);
                                        $linkpro = 'index.php?act=productdetail&pro_id='.$pro_id;
                                ?>
                                <li><a href="<?=$linkpro?>"><?=$pro_name?></a></li>
                                <?php
                                     }
                                    ?>
                            </ul>
                        </div>
                    </section>


                   </div>
                </main>

                <div class="sidebar">
                        <?php
                        include 'sidebar.php';
                        ?>
                </div>
            </div>
        </div>
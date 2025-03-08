

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
                        <div class="comment">
                            <p><strong>John Doe:</strong> Great guitar, loved the sound quality!</p>
                        </div>
                        <div class="comment">
                            <p><strong>Jane Smith:</strong> Amazing build and finish.</p>
                        </div>
                        <form class="comment-form">
                            <label for="comment">Leave a comment:</label>
                            <textarea id="comment" name="comment" rows="4" placeholder="Write your comment here..."></textarea>
                            <button type="submit">Submit</button>
                        </form>
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
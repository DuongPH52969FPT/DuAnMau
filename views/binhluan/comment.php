<?php

$idpro = $_GET['idpro'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/css/css.css">
</head>
<body>
    
<section class="comments-section">
                        <h2>Comments</h2>
                        <div class="comment">
                            <!-- <iframe src="views/binhluan/comment.php?idpro=<?=$pro_id?>" frameborder="0" width="100%" height="200"></iframe> -->
                        </div>
                        <!-- <div class="comment">
                            <p><strong>Jane Smith:</strong> Amazing build and finish.</p>
                        </div> -->
                       <?php 
                    if(isset($_SESSION['username'])&& !empty($_SESSION['username'])){
                        extract($_SESSION['username']);
                    ?>
                         <form class="comment-form" action="index.php?act=comment" method="post">
                            <label for="comment">Leave a comment:</label>
                            <textarea id="comment" name="comment" rows="4" placeholder="Viết bình luận..."></textarea>
                            <input type="submit" name="sentcomment" value="Comment">
                        </form>
                    <?php
                    }else{
                    ?>
                     <label for="comment" style="font-weight: bold; color: red">Vui lòng đăng nhập để viết bình luận</label>
                    <?php
                    }
                       
            ?>

            <?php 
            
            if(isset($_POST['sentcomment'])&&$_POST['sentcomment']){
                $noidung = $_POST['comment'];
                $iduser = $_SESSION['username']['iduser'];
                $idpro = $_GET['idpro'];
                $ngaybinhluan = date('Y-m-d H:i:s');
            }

            insert_comment($noidung,$iduser,$idpro,$ngaybinhluan);

            ?>
</section>

</body>
</html>
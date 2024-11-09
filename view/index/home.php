<div class="all">
    <div class="boxleft">
        <div class="banner">
            <img id="imgbanner" src="./images/anh0.jpg" alt="">
        </div>
        <main>
            <?php foreach ($spnew as $sanpham) { ?>
                <article>
                    <img class="imgsp" src="<?php echo '/duanmau' . $sanpham->image ?>" alt="">
                    <h3 class="ttsp"><?php echo $sanpham->name ?></h3>
                    <p class="price"><span>$<?php echo $sanpham->price ?></p></span>
                </article>
            <?php } ?>

        </main>
    </div>

    <aside class="boxright">
        <?php require_once "boxright.php";?>
    </aside>
</div>
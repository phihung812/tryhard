<div class="all">
    <div class="boxleft">
        <div class="box4">
            <div class="tieude2"><?php 
                if($tendm != ""){
                    echo 'Sản phẩm '.$tendm->name; 
                }else{
                    echo "Sản phẩm";
                }
             
             ?></div>
            <?php foreach ($listsp as $sanpham)  {?>
            <article>
                <img class="imgsp" src="<?php echo '/duanmau' . $sanpham->image ?>" alt="">
                <h3 class="ttsp"><?php echo $sanpham->name ?></h3>
                <p class="price"><span>$<?php echo $sanpham->price ?></p></span>
            </article>
            <?php } ?>
        </div>

    </div>

    <aside class="boxright">
        <?php require_once "boxright.php"; ?>
    </aside>
</div>
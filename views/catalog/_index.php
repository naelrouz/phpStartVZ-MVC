<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                <?php include_once (ROOT.'/views/layouts/leftCategoryMenu.php')?>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>
                    
                    <?php foreach ($products as $productItem){ ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="<?php echo $productItem['image']; ?>" alt="" />
                                        <h2>
                                            <?php echo $productItem['price'];?>
                                            <i class="fa fa-rub" aria-hidden="true"></i>
                                        </h2>
                                        <p>
                                            <a href="/product/<?php echo $productItem['id'];?>">
                                                <?php echo $productItem['id'];?> ~
                                                <?php echo $productItem['name'];?>
                                            </a>
                                        </p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                    <?php
                                        echo  ($productItem['is_new']) ? '<img src="/images/home/new.png" class="new" alt="" />' : '';
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div><!--features_items-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9 padding-right">
                            <?php //echo $pagination->get();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
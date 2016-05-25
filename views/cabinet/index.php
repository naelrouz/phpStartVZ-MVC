<?php include_once ROOT . '/views/layouts/header.php' ?>
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                <?php
                echo 'Кабинет';

                echo '<br>'.$_SESSION['user'];

                ?>
                </div><!--/login form-->
            </div>
        </div>

    </section><!--/form-->
<?php include_once ROOT . '/views/layouts/footer.php' ?>
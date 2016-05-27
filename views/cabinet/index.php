<?php include_once ROOT . '/views/layouts/header.php' ?>
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <h3>Приветствуем вас <?php echo $user['name']?></h3>
                    <a href="/cabinet/edit">Изменить личные двнные</a>
                    <br>
                    <a href="/contacts">Test mail</a>
                    <br>  <br>
                    <table class="inner" border="1"></table>
                    <br>  <br>

                    <button id="ajax" type="submit" name="submit" class="btn btn-default">Получить</button>
                </div><!--/login form-->
            </div>
        </div>
    </section><!--/form-->
<?php include_once ROOT . '/views/layouts/footer.php' ?>



<?php include_once ROOT . '/views/layouts/header.php' ?>
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Изменить данные</h2>
                        <?php if($editUserDataResult){?>
                            <h2>Данные успешно изменены</h2>
                        <?php }?>
                        <form action="/cabinet/edit" method="post">
                            <input type="hidden" name="login">
                            <?php echo $errors['name']; ?>
                            <input type="text" name="name" value="<?php echo $name ?>" placeholder="Имя"/>
                            <?php echo $errors['password']; ?>
                            <input type="password" name="password"  value="<?php echo $password ?>" placeholder="Пароль"/>
                            <button type="submit" name="submit" class="btn btn-default">Изменить</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-4">
                </div>
            </div>
        </div>
    </section><!--/form-->
<?php include_once ROOT . '/views/layouts/footer.php' ?>
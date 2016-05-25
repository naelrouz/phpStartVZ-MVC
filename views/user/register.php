<?php include ROOT . '/views/layouts/header.php'; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 padding-right">
                    <div class="signup-form">
                    <?php if ($registeRresult) { ?>
                        <h3>Вы успешно прошли регистрацию</h3>
                    <?php } else { ?>

                            <h2>Регистрация на сайте</h2>
                            <form action="/register" method="post">
                                <?php echo $errors['name']; ?>
                                <input type="text" name="name" value="<?php echo $name ?>" placeholder="Имя"/>
                                <?php echo $errors['email']; ?>
                                <input type="email" name="email" value="<?php echo $email ?>" placeholder="E-mail"/>
                                <?php echo $errors['password']; ?>
                                <input type="password" name="password" value="<?php echo $password ?>"
                                       placeholder="Пароль"/>
                                <button type="submit" name="submit" class="btn btn-default">Регистрация</button>
                            </form>

                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
<?php include ROOT . '/views/layouts/footer.php'; ?>
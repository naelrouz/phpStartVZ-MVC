<?php include_once ROOT . '/views/layouts/header.php' ?>
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Войти в свой аккаунт</h2>
                        <form action="/login" method="post">
                            <input type="hidden" name="login">
                            <?php echo isset($li_errors['email']) ? $errors['email'] : ''; ?>
                            <input type="email" name="email" value="<?php echo $li_email ?>" placeholder="Email Адресс"/>
                            <?php echo isset($li_errors['name']) ? $errors['name'] : ''; ?>
                            <input type="password" name="password"  value="<?php echo $li_password ?>" placeholder="Пароль"/>
<!--							<span>-->
<!--								<input type="checkbox" class="checkbox"> -->
<!--								Keep me signed in-->
<!--							</span>-->
                            <button type="submit" name="submit" class="btn btn-default">Login</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Регистрация на сайте</h2>
                        <?php if ($registeRresult) { ?>
                            <h3>Вы успешно прошли регистрацию</h3>
                        <?php } else { ?>
                            <form action="/register" method="post">
                                <input type="hidden" name="signup">
                                <?php echo isset($errors['name']) ? $errors['name'] : ''; ?>
                                <input type="text" name="name" value="<?php echo $name ?>" placeholder="Имя"/>
                                <?php echo isset($errors['email']) ? $errors['email'] : ''; ?>
                                <input type="email" name="email" value="<?php echo $email ?>" placeholder="E-mail"/>
                                <?php echo isset($errors['password']) ? $errors['password'] : ''; ?>
                                <input type="password" name="password" value="<?php echo $password ?>"
                                       placeholder="Пароль"/>
                                <button type="submit" name="submit" class="btn btn-default">Регистрация</button>
                            </form>
                        <?php } ?>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
<?php include_once ROOT . '/views/layouts/footer.php' ?>
<?php include_once ROOT . '/views/layouts/header.php' ?>
    <section id="form" xmlns="http://www.w3.org/1999/html">
        <div id="contact-page" class="container">
        <div class="bg">
<!--            <div class="row">-->
<!--                <div class="col-sm-12">-->
<!--                    <h2 class="title text-center">Contact <strong>Us</strong></h2>-->
<!--                    <div id="gmap" class="contact-map">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
<?php if ($emailSendResult) { ?>
    <h2 class="title text-center">Сообщение отправлено</h2>
<?php } else { ?>
                        <h2 class="title text-center">Напишите нам</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                            <div class="form-group col-md-6">
                                <?php echo $errors['name']; ?>
                                <input type="text" name="name" class="form-control" required="required" placeholder="Ваше имя">
                            </div>
                            <div class="form-group col-md-6">
                                <?php echo $errors['email']; ?>
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Тема">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Сообщение введите здесь"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Отправить"
                            </div>
                        </form>
                    </div>
                </div>
    <?php }?>

<!--                <div class="col-sm-4">-->
<!--                    <div class="contact-info">-->
<!--                        <h2 class="title text-center">Contact Info</h2>-->
<!--                        <address>-->
<!--                            <p>E-Shopper Inc.</p>-->
<!--                            <p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>-->
<!--                            <p>Newyork USA</p>-->
<!--                            <p>Mobile: +2346 17 38 93</p>-->
<!--                            <p>Fax: 1-714-252-0026</p>-->
<!--                            <p>Email: info@e-shopper.com</p>-->
<!--                        </address>-->
<!--                        <div class="social-networks">-->
<!--                            <h2 class="title text-center">Social Networking</h2>-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a href="#"><i class="fa fa-facebook"></i></a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#"><i class="fa fa-twitter"></i></a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#"><i class="fa fa-google-plus"></i></a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#"><i class="fa fa-youtube"></i></a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

            </div>
        </div>

        </div><!--/#contact-page-->

    </section>
<?php include_once ROOT . '/views/layouts/footer.php' ?>
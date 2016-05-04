<!DOCTYPE html>
<html lang="en">
<!--Include head block-->
 <?php
    require_once ROOT.'/views/news/head.php';
 ?>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- End Preloader -->

        
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        <!-- ==================start header=============== -->
        <header id="header">
            <div class="container">
                <!-- Static navbar -->
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><span>iron </span> maiden</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav custom_nav">
                                <li class=""><a href="#">Home</a></li>              
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jobs</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Jobs Home</a>
                                            <!--  <ul class="dropdown-menu" role="menu">
                                               <li>Two Columns</li>
                                               <li>Three Columns</li>
                                               <li>Four Columns</li>
                                             </ul>   -->
                                        </li>
                                        <li><a href="#">Faq</a></li>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Article</a></li>

                                    </ul>
                                </li>            
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Standard Blog Layout</a></li>
                                        <li><a href="#">Post With Comments</a></li>
                                        <li><a href="#">Page:Right Sidebar</a></li>                
                                    </ul>
                                </li>
                                <li><a href="#">Shortcodes</a></li>
                                <li><a href="#">Archive</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Download Template</a></li>
                            </ul>           
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav>
                <form id="searchForm">
                    <input type="text" placeholder="Search...">
                    <input type="submit" value="">
                </form>
            </div>
        </header>    
        <!-- ==================End header=============== -->

        <!-- ==================start content body section=============== -->
        <section id="contentbody">
            <div class="container">
                <div class="row">
                    <!-- start left bar content -->
                    <div class=" col-sm-12 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="leftbar_content">
                                <h2>The New Stuff</h2>
                                <?php foreach ($newsList as $newsItem) { ?>
                                    <!-- start single stuff post -->
                                    <div class="single_stuff wow fadeInDown">
                                        <div class="single_stuff_img">
                                            <a href="single_page.html"><img src="<?php echo $newsItem['preview_img']?>" alt="img"></a>
                                        </div>
                                        <div class="single_stuff_article">
                                            <div class="single_sarticle_inner">
                                                <a class="stuff_category" href="#">
                                                    <?php echo $newsItem['category']?>
                                                </a>
                                                <div class="stuff_article_inner">
                                                    <span class="x- stuff_date">Дата <strong><?php echo $newsItem['date']?></strong></span>
                                                    <h2><a href="/news/<?php echo $newsItem['id']?>">
                                                        <?php echo $newsItem['short_content']?>
                                                        </a>
                                                    </h2>
                                                    <p><?php echo $newsItem['content']?></p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single stuff post -->
                                <?php } ?>


                                <div class="stuffpost_paginatinonarea wow slideInLeft">
                                    <ul class="newstuff_pagnav">
                                        <li><a class="active_page" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!-- End left bar content -->

                    <!-- start middle bar content -->
                    <div class="col-sm-6 col-md-2 col-lg-2">
                        <div class="row">
                            <div class="middlebar_content">
                                <h2 class="yellow_bg">What's Hot</h2>
                                <div class="middlebar_content_inner wow fadeInUp">
                                    <ul class="middlebar_nav">
                                        <li>
                                            <a class="mbar_thubnail" href="#"><img src="template/img/hot_img1.jpg" alt="img"></a>
                                            <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a>
                                        </li>
                                        <li>
                                            <a class="mbar_thubnail" href="#"><img src="template/img/hot_img2.jpg" alt="img"></a>
                                            <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a>
                                        </li>
                                        <li>
                                            <a class="mbar_thubnail" href="#"><img src="template/img/hot_img1.jpg" alt="img"></a>
                                            <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a>
                                        </li>
                                        <li>
                                            <a class="mbar_thubnail" href="#"><img src="template/img/hot_img1.jpg" alt="img"></a>
                                            <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a>
                                        </li>
                                        <li>
                                            <a class="mbar_thubnail" href="#"><img src="template/img/hot_img1.jpg" alt="img"></a>
                                            <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a>
                                        </li>
                                        <li>
                                            <a class="mbar_thubnail" href="#"><img src="template/img/hot_img1.jpg" alt="img"></a>
                                            <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a>
                                        </li>
                                        <li>
                                            <a class="mbar_thubnail" href="#"><img src="template/img/hot_img1.jpg" alt="img"></a>
                                            <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a>
                                        </li>
                                        <li>
                                            <a class="mbar_thubnail" href="#"><img src="template/img/hot_img1.jpg" alt="img"></a>
                                            <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="popular_categori  wow fadeInUp">
                                    <h2 class="limeblue_bg">Most Popular Categories</h2>
                                    <ul class="poplr_catgnva">
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Life & Style</a></li>
                                        <li><a href="#">Games</a></li>
                                        <li><a href="#">Slider</a></li>
                                        <li><a href="#">Sports</a></li>
                                    </ul>  
                                </div>        
                            </div>
                        </div>
                    </div>
                    <!-- End middle bar content -->

                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="rightbar_content">
                                <!-- start featured post -->
                                <div class="single_blog_sidebar wow fadeInUp">
                                    <h2>The Featured Stuff</h2>  
                                    <ul class="featured_nav">
                                        <li>
                                            <a class="featured_img" href="#"><img src="template/img/featured_img1.jpg" alt="img"></a>
                                            <div class="featured_title">
                                                <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="featured_img" href="#"><img src="template/img/featured_img1.jpg" alt="img"></a>
                                            <div class="featured_title">
                                                <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="featured_img" href="#"><img src="template/img/featured_img1.jpg" alt="img"></a>
                                            <div class="featured_title">
                                                <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End featured post -->

                                <!-- start Popular Posts -->
                                <div class="single_blog_sidebar wow fadeInUp">
                                    <h2>Popular Posts</h2>  
                                    <ul class="middlebar_nav wow">
                                        <li>
                                            <a href="#" class="mbar_thubnail"><img alt="img" src="template/img/hot_img1.jpg"></a>
                                            <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a>
                                        </li>
                                        <li>
                                            <a href="#" class="mbar_thubnail"><img alt="img" src="template/img/hot_img2.jpg"></a>
                                            <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a>
                                        </li>
                                        <li>
                                            <a href="#" class="mbar_thubnail"><img alt="img" src="template/img/hot_img1.jpg"></a>
                                            <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a>
                                        </li>
                                        <li>
                                            <a href="#" class="mbar_thubnail"><img alt="img" src="template/img/hot_img1.jpg"></a>
                                            <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Popular Posts -->  

                                <!-- start Popular Posts -->
                                <div class="single_blog_sidebar wow fadeInUp">
                                    <h2>Popular Tags</h2>  
                                    <ul class="poplr_tagnav">
                                        <li><a href="#">Arts</a></li>
                                        <li><a href="#">Games</a></li>
                                        <li><a href="#">Nature</a></li>
                                        <li><a href="#">Comedy</a></li>
                                        <li><a href="#">Sports</a></li>
                                        <li><a href="#">Tourism</a></li>
                                        <li><a href="#">Videos</a></li>
                                    </ul>
                                </div>
                                <!-- End Popular Posts -->              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_inner">
                            <p class="pull-left">All Rights Reserved <a href="#">ColorMag</a></p>
                            <p class="pull-right">Developed By <a href="http://www.wpfreeware.com" rel="nofollow">WpFreeware</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ==================End content body section=============== -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="template/js/bootstrap.min.js"></script> 
        <!-- For content animatin  -->
        <script src="template/js/wow.min.js"></script> 
        <!-- custom js file include -->
        <script src="template/js/custom.js"></script>     

    </body>
</html>
<?php get_header();?>
<body>
    <!-- PRELOADER -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    
    <!-- HEADER -->
    <!-- <header>
        <img src="images/logo.png" alt="">
        <div class="nav-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header> -->


    <!-- FULL MENU -->
    <!-- <div class="full-menu">
            <div class="full-inner row">
                <nav class="col-md-8">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div class="col-md-4 full-contact">
                    <ul>
                        <li class="title">Get in Touch</li>
                        <li>hi@gorge.com</li>
                        <li>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook"></i>  </a>
                                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
                                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                                <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
                                <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </div> -->

    <!-- SITE CONTENT -->
    <div class="wrapper">
        <section class="titlebar">
            <h1 class="page-title"><span>乃木</span>厨</h1>
            <div id="particles-js"></div>
        </section>
        
        <hr class="col-md-6 bottom_60">

        <div class="cont">
            <section class="our-news">
                <div class="row">
                    <?php if(have_posts()):?>
                        <?php while(have_posts()): the_post();?>
                            <!-- a news -->
                            <div class="col-sm-6 news bottom_60 bottom_60">
                                <article class="news-box">
                                    <?php 
                                        $youtube = get_field("youtube");
                                        $youtube = preg_replace('/<p>(.*)<\/p>/', '$1', $youtube);
                                        if($youtube):
                                    ?>
                                        <?php echo $youtube;?>
                                    <?php else:?>
                                        <figure><img src="<?php echo esc_url(get_template_directory_uri() . '/images/news-1.jpg');?>" alt=""></figure>
                                    <?php endif;?>
                                    <?php
                                        $cats = get_the_terms($post->ID,"category");
                                        if($cats):
                                            foreach($cats as $cat):
                                    ?>
                                        <a href="<?php echo get_term_link($cat->slug, 'category');?>">
                                            <small>
                                                <?php echo $cat->name;?>
                                            </small>
                                        </a>
                                    <?php 
                                            endforeach;
                                        endif;
                                    ?>
                                    <h4 class="title">
                                        <?php the_title();?>
                                    </h4>
                                    <p>
                                        <?php the_excerpt();?>
                                    </p>
                                    <div class="information">
                                        <?php the_author();?> <span><?php echo get_the_date();?></span>
                                    </div>
                                </article>
                            </div>
                        <?php endwhile;?>
                    <?php else:?>
                        <p>動画が見つかりませんでした。</p>
                    <?php endif;?>
                </div>
            </section>

        </div> <!-- cont end -->
    </div> <!-- wrapper end -->

    <!-- <footer>
       <div class="cont">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 copyright">
                    <img src="images/logo.png" alt="">
                    <p>© 2018 Gorge Creative Agency</p>
                </div>
                <div class="col-md-4 d-sm-none d-md-block">
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook"></i>  </a>
                        <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
                        <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                        <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
                        <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 d-none d-sm-block getintouch">
                    <a href="#">
                        <strong>Get In Touch</strong><br>
                        <p>hi@gergedigital.co</p>
                    </a>
                </div>
            </div>
       </div>
    </footer> -->
<?php get_footer();?>

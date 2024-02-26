<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="header_bottom_border">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-7">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <?php
                                            wp_nav_menu( array(
                                              'theme_location' => 'primary-menu',
                                              'container' => 'false',
                                              'menu_class' => 'primary-menu-class',
                                              'menu_id' => 'false',
                                              'echo' => 'true',
                                              'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                              'depth' => 2,
                                              'walker' => new bootstrap_4_walker_nav_menu(),
                                            ) );
                                            ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="say_hello">
                                    <a href="#">Book a Table</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
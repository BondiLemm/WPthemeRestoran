<?php wp_head(); ?>
<?php get_header(); ?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Restaurant</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <?php wp_head(); ?>
</head>

<body>
        <?php get_header(); ?>
        <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Fresh and Delicious Food
                                    For your Health</h3>
                                <a href="menu.html" class="boxed-btn3">View Menus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Fresh and Delicious Food
                                    For your Health</h3>
                                <a href="menu.html" class="boxed-btn3">View Menus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Fresh and Delicious Food
                                    For your Health</h3>
                                <a href="menu.html" class="boxed-btn3">View Menus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

<!-- about_area_start -->
<div class="about_area">
    <div class="icon_1 d-none d-md-block">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/1.png" alt="">
    </div>
    <div class="icon_2 d-none d-md-block">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/2.png" alt="">
    </div>
    <div class="icon_3 d-none d-md-block">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/3.png" alt="">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_info_wrap">
                    <h3>Sed ut perspiciatis unde  <br>
                        omnis iste natus</h3>
                    <span class="long_dash"></span>
                    <p>Omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. Exercitation photo booth stumptown tote bag todo Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation photo booth et 8-bit kale chips proident chillwave deep vow laborum. Aliquip veniam delectus, marfa eiusmod pinterest.</p>
                    <ul class="food_list">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/svg_icon/salad.svg" alt="">
                            <span>Fresh Ingredients</span>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/svg_icon/tray.svg" alt="">
                            <span>Expert cooker</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_img">
                    <div class="img_1">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/big.png" alt="">
                    </div>
                    <div class="small_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/small.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area_end -->

<!-- Delicious area start -->
<div class="Delicious_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-50">
                    <h3>Delicious Food For You</h3>
                </div>
            </div>
        </div>
        <div class="tablist_menu">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="nav justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                <div class="single_menu text-center">
                                    <div class="icon">
                                        <i class="flaticon-lunch"></i>
                                    </div>
                                    <h4>Dinner</h4>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <div class="single_menu text-center">
                                    <div class="icon">
                                        <i class="flaticon-food"></i>
                                    </div>
                                    <h4>Breakfast</h4>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                <div class="single_menu text-center">
                                    <div class="icon">
                                        <i class="flaticon-kitchen"></i>
                                    </div>
                                    <h4>Lunch</h4>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-6">
                        <?php
$args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'Dinner', // название категории
        ),
    ),
);

$products = new WP_Query($args);

if ($products->have_posts()) {
    while ($products->have_posts()) {
        $products->the_post();
        global $product;
?>

<div class="single_delicious d-flex align-items-center">
    <div class="thumb">
        <?php echo get_the_post_thumbnail($product->get_id(), 'thumbnail'); ?>
    </div>
    <div class="info">
        <h3><?php echo get_the_title(); ?></h3>
        <p><?php echo get_the_excerpt(); ?></p>
        <span><?php echo $product->get_price_html(); ?></span>
    </div>
</div>

<?php
    }
    wp_reset_postdata();
}
?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-6">
                        <?php
$args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'Breakfast', // название категории
        ),
    ),
);

$products = new WP_Query($args);

if ($products->have_posts()) {
    while ($products->have_posts()) {
        $products->the_post();
        global $product;
?>

<div class="single_delicious d-flex align-items-center">
    <div class="thumb">
        <?php echo get_the_post_thumbnail($product->get_id(), 'thumbnail'); ?>
    </div>
    <div class="info">
        <h3><?php echo get_the_title(); ?></h3>
        <p><?php echo get_the_excerpt(); ?></p>
        <span><?php echo $product->get_price_html(); ?></span>
    </div>
</div>

<?php
    }
    wp_reset_postdata();
}
?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-6">
                        <?php
$args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'Lunch', // название категории
        ),
    ),
);

$products = new WP_Query($args);

if ($products->have_posts()) {
    while ($products->have_posts()) {
        $products->the_post();
        global $product;
?>

<div class="single_delicious d-flex align-items-center">
    <div class="thumb">
        <?php echo get_the_post_thumbnail($product->get_id(), 'thumbnail'); ?>
    </div>
    <div class="info">
        <h3><?php echo get_the_title(); ?></h3>
        <p><?php echo get_the_excerpt(); ?></p>
        <span><?php echo $product->get_price_html(); ?></span>
    </div>
</div>

<?php
    }
    wp_reset_postdata();
}
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Delicious area start -->
    
    <!-- testimonial_area  -->
    <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <p>Testimonials</p>
                        <h3>Our Customer’s Say</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                        sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed
                                        neque.</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/testimonial/author.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Robert Thomson</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                        sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed
                                        neque.</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/testimonial/author2.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Kristiana Chouhan</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                        sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed
                                        neque.</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/testimonial/author2.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Kristiana Chouhan</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                        sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed
                                        neque.</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/testimonial/author.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Robert Thomson</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                <div class="author_opinion">
                                    <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                        sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed
                                        neque.</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/testimonial/author2.png" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>Kristiana Chouhan</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <!-- gallery_start -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-75">
                        <h3>Photo Gallery</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_gallery big_img">
            <a class="popup-image" href="img/gallery/1.png"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/1.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="img/gallery/2.png"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/2.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="img/gallery/3.png"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/3.png" alt="">
        </div>

        <div class="single_gallery small_img">
            <a class="popup-image" href="img/gallery/4.png"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/4.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="img/gallery/5.png"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/5.png" alt="">
        </div>
        <div class="single_gallery big_img">
            <a class="popup-image" href="img/gallery/6.png"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/6.png" alt="">
        </div>
    </div>
    
    <!-- gallery end -->
    <div class="Reservation_area">
        <div class="rev_icon_1 d-none d-md-block">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/4.png" alt="">
        </div>
        <div class="rev_icon_2 d-none d-md-block">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/5.png" alt="">
        </div>
        <div class="rev_icon_3 d-none d-md-block">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/6.png" alt="">
        </div>
        <div class="container p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-75">
                        <h3>Reservation</h3>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-6 col-lg-6">
                    <div class="map_area">
                        <div id="map" style="height: 480px; position: relative; overflow: hidden;"> </div>
                        <script>
                            function initMap() {
                                var uluru = {
                                    lat: -25.363,
                                    lng: 131.044
                                };
                                var grayStyles = [{
                                        featureType: "all",
                                        stylers: [{
                                                saturation: -90
                                            },
                                            {
                                                lightness: 50
                                            }
                                        ]
                                    },
                                    {
                                        elementType: 'labels.text.fill',
                                        stylers: [{
                                            color: '#ccdee9'
                                        }]
                                    }
                                ];
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    center: {
                                        lat: -31.197,
                                        lng: 150.744
                                    },
                                    zoom: 9,
                                    styles: grayStyles,
                                    scrollwheel: false
                                });
                            }
                        </script>
                        <script
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                        </script>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="book_Form">
                        <h3>Book a Table</h3>
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="input_field mb_15">
                                    <input type="text" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field mb_15">
                                    <input type="text" placeholder="Phone no.">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field">
                                    <input id="datepicker2" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Dinner">Dinner</option>
                                            <option value="1">Dinner</option>
                                            <option value="1">Dinner</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input_field">
                                    <select class="wide">
                                        <option data-display="Person">Person</option>
                                        <option value="1">Person</option>
                                        <option value="1">Person</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <button class="sumbit_btn" type="submit">Book</button>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_add d-flex">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/svg_icon/address.svg" alt="">
                                    </div>
                                    <div class="ifno">
                                        <h4>Address</h4>
                                        <p>20/D, Kings road, Green lane</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_add d-flex">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/svg_icon/head.svg" alt="">
                                    </div>
                                    <div class="ifno">
                                        <h4>Reservation</h4>
                                        <p>+10 673 567 367</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>

    
    <?php wp_footer(); ?>
    
    
</body>

</html>



<!-- Это верстка к bootstrap_4_walker_nav_menu из файла functions.php -->
<!-- 
<ul>
    <li>
        <a class="nav-link" href="/">Главная</a>
    </li>
    <li class="nav-item dropdown">
        <a 
        class="nav-link dropdown-toggle"
        href="#"
        id="navbarWelcome"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
        >О нас</a>

        <div class="dropdown-menu" aria-labelledby="navbarWelcome"> 
            <a class="dropdown-item" href="about.html">О компании</a>
            <a class="dropdown-item" href="about.html">Об услугах</a>
        </div>
    </li>
</ul> -->
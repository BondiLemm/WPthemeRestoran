<?php
/*
Template Name: Шаблон страницы Menu
Template Post Type: post, page, product
*/

// … остальной код шаблона
?>


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
    
         <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Our Menu</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

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

    <div class="Reservation_area">
        <div class="rev_icon_1 d-none d-md-block">
            <img src="img/icon/4.png" alt="">
        </div>
        <div class="rev_icon_2 d-none d-md-block">
            <img src="img/icon/5.png" alt="">
        </div>
        <div class="rev_icon_3 d-none d-md-block">
            <img src="img/icon/6.png" alt="">
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
                                        <img src="img/svg_icon/address.svg" alt="">
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
                                        <img src="img/svg_icon/head.svg" alt="">
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



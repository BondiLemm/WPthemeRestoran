<?php
/*
Template Name: Шаблон страницы About
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
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="main_about_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h3>Exercitation photo booth stumptown tote
                        bag todo Banksy elit small</h3>
                        <p>Omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. Exercitation photo booth stumptown tote bag todo Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation photo booth et 8-bit kale chips proident chillwave deep vow laborum. Aliquip veniam delectus, marfa eiusmod pinterest.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="about_thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_1.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="about_thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/about/about_2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    <!-- testimonial_area  -->
    <div class="testimonial_area overlay custom_mt">
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


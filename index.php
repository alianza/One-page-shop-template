<!doctype html>
<html lang="en">
    <head>
    <?php include_once("partials/head.php"); ?>
    <?php include("dbconfig.php") ?>
    <title><?php echo($title); ?></title>
    <script src="js/before.js"></script>
    </head>

    <!-- Facebook Pixel Code -->
        <script src="js/fb_pixel.js"></script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=398533611065090&ev=PageView&noscript=1"></noscript>
    <!-- End Facebook Pixel Code -->

<!--    Smooth scroll 'Read More'-->

<!--  End  Smooth scroll 'Read More'-->

<body>
    <div id="page">
        <div class="main_logo">
            <img src="media/logo.png">
        </div>
        <!--  Big video of product with text  -->
        <div id="top_div">
            <video id="top_div_img" autoplay playsinline muted loop src="media/kak1.mp4" width="100%" height="100%"></video>
            <div id="item_desc">
                <h1 class="item_title"><?php echo($title); ?></h1>
                <p class="item_desc_text"><?php echo($desc_text); ?></p>
                <a href="<?php echo($order_button_link); ?>"><button class="refer_button refer_button_primary"><?php echo($order_button); ?></button></a>
                <a href="#info_div_container"><button class="refer_button refer_button_secondary"><?php echo($refer_button); ?></button></a>
            </div>
        </div>

        <div id="icons_div">
            <div id="icons_container">
                <img src="media/ico_accuracy.jpg">
                <img src="media/ico_cardio.jpg">
                <img src="media/ico_learn.jpg">
                <img src="media/ico_reflex.jpg">
                <img src="media/ico_speed.jpg">
                <img src="media/ico_tricks.jpg">
            </div>
        </div>

        <!--  Information about the 3 main features of product  -->
        <div id="info_div_container">
            <h2 class="section_title_theme" id="features"><?php echo($small_title_1); ?></h2>

            <div id="info_div">
                <div class="info_box">
                    <img class="info_div_img" src="<?php echo($feature_image_1); ?>">
                    <p class="product_large_desc"><?php echo($large_desc_1); ?></p>
                </div>

                <div class="info_box">
                    <img class="info_div_img" src="<?php echo($feature_image_2); ?>">
                    <p class="product_large_desc"><?php echo($large_desc_2); ?></p>
                </div>

                <div class="info_box">
                    <img class="info_div_img" src="<?php echo($feature_image_3); ?>">
                    <p class="product_large_desc"><?php echo($large_desc_3); ?></p>
                </div>

            </div>
        </div>

        <div id="overview_div_container">
            <h2 class="section_title_theme" id="overview"><?php echo($overview_title); ?></h2>

            <div id="overview_div">

                <div class="overview_left">
                        <img class="overview_image" src="<?php echo($overview_image); ?>">
                    </div>
                <div class="overview_right">
                        <p class="overview_text"><?php echo($overview_text); ?></p>

                    <?php
                    // Display Details Spoilers
                    while ($row = $stmtSpoil->fetch(PDO::FETCH_ASSOC)) {
                        echo("<details class='overview_details'>
                                  <summary><strong>{$row['summary']}</strong></summary>
                                  <p>{$row['text']}</p>
                              </details>");
                    }
                    ?>
                    </div>
            </div>
        </div>

        <!--  Variations  -->
        <div id="products_div_container">
            <h2 class="section_title_light" id="products"><?php echo($small_title_2); ?></h2>

            <div id="products_div">
                <div id="product_box1" class="products_box">
                    <img class="products_div_img" src="<?php echo($misc_image_1); ?>">
                    <p class="product_small_desc"><?php echo($small_desc_1); ?></p>
                </div>

                <div id="products_box2" class="products_box">
                    <img class="products_div_img" src="<?php echo($misc_image_2); ?>">
                    <p class="product_small_desc"><?php echo($small_desc_2); ?></p>
                </div>

                <div id="products_box3" class="products_box">
                    <img class="products_div_img" src="<?php echo($misc_image_3); ?>">
                    <p class="product_small_desc"><?php echo($small_desc_3); ?></p>
                </div>

                <div id="products_box4" class="products_box">
                    <img class="products_div_img" src="<?php echo($misc_image_4); ?>">
                    <p class="product_small_desc"><?php echo($small_desc_4); ?></p>
                </div>

            </div>
            <a href="<?php echo($order_button_link); ?>"><button id="order_button" class="order_button"><?php echo($order_button); ?></button></a>
        </div>

        <!--  testimonials  -->
        <div id="testimonials_div">
            <div class="testimonials_slider slider">

                <?php
//              Display Testimonials
                while ($row = $stmtTest->fetch(PDO::FETCH_ASSOC)) {
                echo("<div><div class='slick-slide_inner_container'><div class='slick-slide_container'>
                        <img src='" . "data:image/jpg;base64," . base64_encode($row['image']) . "'>
                        <h3>" . $row['name'] . "</h3>
                        <p>" . $row['testimony'] . "</p>
                        </div>
                        </div>
                    </div>");
                }
                ?>

            </div>
        </div>
        <!--  Footer  -->
        <div class="footer_div">
            <div id='footer_company'>
                <ul class="links_list">
                    <li class="link_list_item"><a class="link" href="<?php echo($more_products_link); ?>">MORE PRODUCTS</a></li>
                    <li class="link_list_item"><a class="link" href="<?php echo($about_us_link); ?>">ABOUT US</a></li>
                    <li class="link_list_item"><a class="link" href="<?php echo($contact_link); ?>">CONTACT</a></li>
                    <li class="link_list_item"><a class="link" href="<?php echo($faqs_link); ?>">FAQS</a></li>
                </ul>
            </div>

            <div id="footer_payments">
                <img src="media/payment_methods.png">
            </div>

            <div id='socialmedia_div'>
                <a href="<?php echo($social_link_1); ?>"><img class="socialmedia_icon" src="<?php echo($social_image_1); ?>"></a>
                <a href="<?php echo($social_link_2); ?>"><img class="socialmedia_icon" src="<?php echo($social_image_2); ?>"></a>
                <a href="<?php echo($social_link_3); ?>"><img class="socialmedia_icon" src="<?php echo($social_image_3); ?>"></a>
            </div>

            <div class="official_container">
                <div class='official_item'>&copy; Copyright DamsCommerce</div>
                <div class='official_item'><u>KVK</u>: 69141215 <u>BTW</u>: NL857752170B01</div>
            </div>
        </div>
    </div>
</body>
<script src="js/after.js"></script>
</html>

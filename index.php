<!doctype html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=".//css/style.css">
<!--    Favicon Generator-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#c1282d">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
<!--    End Favicon Generator-->
    <meta name="theme-color" content="#c1282d">
    <?php include("dbconfig.php") ?>
    <title><?php echo($title); ?></title>

<!--    Macafee   -->
<!--    <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>-->

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    </head>

    <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '398533611065090');
          fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=398533611065090&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

<!--    Smooth scroll 'Read More'-->
    <script>

        $(document).ready(function(){
            document.querySelectorAll('a[href^="#products_div_container"], a[href^="#info_div_container"]').forEach(anchor => {anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
                    });
                });
            });
        });



    </script>

<!--  End  Smooth scroll 'Read More'-->

<body>

    <div id="page">
        <div class="main_logo">
            <img src="media/logo.png">
        </div>
        <!--  Big video of product with text  -->
        <div id="top_div">
            <video id="top_div_img" autoplay muted loop src="media/kak1.mp4" width="100%" height="100%"></video>
            <div id="item_desc">
                <h1 class="item_title"><?php echo($title); ?></h1>
                <p class="item_desc_text"><?php echo($desc_text); ?></p>
                <a href="<?php echo($order_button_link); ?>"><button class="refer_button refer_button_primary"><?php echo($order_button); ?></button></a>
                <a href="#info_div_container"><button class="refer_button refer_button_secondary"><?php echo($refer_button); ?></button></a>
            </div>
            <div class="v-align-helper"></div>
        </div>

        <!--  Information about the 3 main features of product  -->
        <div id="info_div_container">
            <div class="v-align-helper"></div>

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

        <!--  Variations  -->
        <div id="products_div_container">
            <div class="v-align-helper"></div>

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
            <a href="<?php echo($order_button_link); ?>"><button class="order_button"><?php echo($order_button); ?></button></a>
        </div>

        <!--  testimonials  -->
        <div id="testimonials_div">

            <div class="testimonials_slider slider">

                <?php
//              Display Testimonials
                while ($row = $stmttest->fetch(PDO::FETCH_ASSOC)) {
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
    <script>
        $(document).ready(function(){
            $('.testimonials_slider').slick({
                accessibility: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3,
                autoplay: true,
                autoplaySpeed: 5000,
                pauseOnFocus: true,
                pauseOnHover: true,
                arrows: true,
                variableWidth: true,
                responsive: [
                {
                breakpoint: 768,
                settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '20px',
                slidesToShow: 2,
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '0px',
                  slidesToShow: 1
                  }
                }
              ]
            });
        });
    </script>
</body>

</html>

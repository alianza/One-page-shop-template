<!doctype html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=".//css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!--    Favicon Generator-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#c1282d">
    <meta name="msapplication-TileColor" content="#da532c">
<!--    End Favicon Generator-->
    <meta name="theme-color" content="#c1282d">
    <?php include("dbconfig.php") ?>
    <title><?php echo($title); ?></title>
</head>

<body>

    <div id="page">
        <!--   Big image of product with text     -->
        <div id="top_div">
            <video id="top_div_img" autoplay muted loop src="media/kak1.mp4" width="100%" height="100%"></video>
            <div id="item_desc">
                <h1 class="item_title"><?php echo($title); ?></h1>
                <p class="item_desc_text"><?php echo($desc_text); ?></p>
                <a href="#info_div_container"><button class="refer_button"><?php echo($refer_button); ?></button></a>
                <a href="#products_div_container"><button class="refer_button"><?php echo($order_button); ?></button></a>
            </div>
            <div class="v-align-helper"></div>
        </div>

        <!--   Information about the 3 main features of product     -->
        <div id="info_div_container">
            <div class="v-align-helper"></div>

            <h2 class="section_title" id="features"><?php echo($small_title_1); ?></h2>

            <div id="info_div">
                <div id="info_div1" class="info_box">
                    <img class="info_div_img" src="<?php echo($feature_image_1); ?>">
                    <p class="product_large_desc"><?php echo($large_desc_1); ?></p>
                </div>

                <div id="info_div2" class="info_box">
                    <img class="info_div_img" src="<?php echo($feature_image_2); ?>">
                    <p class="product_large_desc"><?php echo($large_desc_2); ?></p>
                </div>

                <div id="info_div3" class="info_box">
                    <img class="info_div_img" src="<?php echo($feature_image_3); ?>">
                    <p class="product_large_desc"><?php echo($large_desc_3); ?></p>
                </div>

            </div>
        </div>

        <!--  Variations   -->
        <div id="products_div_container">
            <div class="v-align-helper"></div>

            <h2 class="section_title" id="products"><?php echo($small_title_2); ?></h2>

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

        <!--    Footer    -->
        <div class="footer_div">
            <div id='footer_company'>
                <ul class="links_list">
                    <li class="link_list_item"><a class="link" href="<?php echo($more_products_link); ?>">MORE PRODUCTS</a></li>
                    <li class="link_list_item"><a class="link" href="<?php echo($about_us_link); ?>">ABOUT US</a></li>
                    <li class="link_list_item"><a class="link" href="<?php echo($contact_link); ?>">CONTACT</a></li>
                    <li class="link_list_item"><a class="link" href="<?php echo($faqs_link); ?>">FAQS</a></li>
                </ul>
            </div>


            <div id='socialmedia_div'>
                <a href="<?php echo($social_link_1); ?>"><img class="socialmedia_icon" src="<?php echo($social_image_1); ?>"></a>
                <a href="<?php echo($social_link_2); ?>"><img class="socialmedia_icon" src="<?php echo($social_image_2); ?>"></a>
                <a href="<?php echo($social_link_3); ?>"><img class="socialmedia_icon" src="<?php echo($social_image_3); ?>"></a>
            </div>

            <div class='copyright'>&copy; Copyright DamsCommerce</div>
            <div class='official'><u>KVK</u>: 69141215 <u>BTW</u>: NL857752170B01</div>

        </div>

    </div>
</body>

</html>

<!doctype html>

<html>
	<head>
		<title>Onepage</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href=".//css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <?php include("dbconfig.php") ?>
	</head>

	<body>

        <div id="page">
        <!--   Big image of product with text     -->
        <div id="top_div">
            <div id="top_div_img" style="background-image: url('<?php echo($header_image); ?>');"> </div>
            <div id="item_desc">
                <h1 class="item_title"><?php echo($title); ?></h1>
                <p class="item_desc_text"><?php echo($desc_text); ?></p>
                <a href="#features"><button class="refer_button"><?php echo($refer_button); ?></button></a>
                <a href="#products"><button class="refer_button"><?php echo($order_button); ?></button></a>
            </div>
            <div class="v-align-helper"></div>
        </div>

        <!--   Information about the 3 main features of product     -->
        <div id="info_div_container">
            <div class="v-align-helper"></div>

            <h2 class="section_title" id="features"><?php echo($small_title_1); ?></h2>

            <div id="info_div">
            <div id="info_div1" class="info_box">
                <img id="info_div_img1" src="http://placehold.it/300x150">
                <p><?php echo($large_desc_1); ?></p>
            </div>

            <div id="info_div2" class="info_box">
                <img id="info_div_img2" src="http://placehold.it/300x150">
                <p><?php echo($large_desc_2); ?></p>
            </div>

            <div id="info_div3" class="info_box">
                <img id="info_div_img3" src="http://placehold.it/300x150">
                <p><?php echo($large_desc_3); ?></p>
            </div>

        </div>
        </div>

        <!--  Variations   -->
        <div id="products_div_container">
            <div class="v-align-helper"></div>

            <h2 class="section_title" id="products"><?php echo($small_title_2); ?></h2>

            <div id="products_div">
                <div id="product_box1"  class="products_box">
                    <img id="products_div_img1" src="http://placehold.it/150x150">
                    <p class="product_small_desc"><?php echo($small_desc_1); ?></p>
                </div>

                <div id="products_box2" class="products_box">
                    <img id="products_div_img3" src="http://placehold.it/150x150">
                    <p class="product_small_desc"><?php echo($small_desc_2); ?></p>
                </div>

                <div id="products_box3" class="products_box">
                    <img id="products_div_img3" src="http://placehold.it/150x150">
                    <p class="product_small_desc"><?php echo($small_desc_3); ?></p>
                </div>

                <div id="products_box4" class="products_box">
                    <img id="products_div_img4" src="http://placehold.it/150x150">
                    <p class="product_small_desc"><?php echo($small_desc_4); ?></p>
                </div>

            </div>
                <a href=""><button class="order_button"><?php echo($order_button); ?></button></a>
            </div>

        <!--    Footer    -->
        <div id="footer_div">
            <div id='footer_company'>
                <ul>
                    <li class="link_list_item"><a class="link" href="<?php echo($more_products_link); ?>">MORE PRODUCTS</a></li>
                    <li class="link_list_item"><a class="link" href="<?php echo($about_us_link); ?>">ABOUT US</a></li>
                    <li class="link_list_item"><a class="link" href="<?php echo(contact_link); ?>">CONTACT</a></li>
                    <li class="link_list_item"><a class="link" href="<?php echo(faqs_link); ?>">FAQS</a></li>
                </ul>
            </div>


            <div id='socialmedia_div'>
                <img class="socialmedia_icon" href="<?php echo($social_link_1); ?>" src="<?php echo($social_image_1); ?>">
                <img class="socialmedia_icon" href="<?php echo($social_link_2); ?>"src="<?php echo($social_image_2); ?>">
                <img class="socialmedia_icon" href="<?php echo($social_link_3); ?>"src="<?php echo($social_image_3); ?>">
            </div>

            <div id='copyright'>&copy; Copyright DamsCommerce</div>

            </div>

        </div>
	</body>
</html>

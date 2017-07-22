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
            <div id="top_div_img" style="background-image: url('data:image/jpeg;base64,<?php echo($header_image); ?>');"> </div>
            <div id="item_desc">
                <h1><?php echo($title); ?></h1>
                <p class="item_desc_text"><?php echo($desc_text); ?></p>
                <button class="order_button"><?php echo($order_button); ?></button>
            </div>
            <div class="v-align-helper"></div>
        </div>

        <!--   Information about the 3 main features of product     -->
        <div id="info_div_container">
            <div class="v-align-helper"></div>

            <h2><?php echo($top_small_title); ?></h2>

            <div id="info_div">
            <div id="info_div1" class="info_box">
                <img id="info_div_img1" src="https://placehold.it/300x150">
                <p><?php echo($large_desc_1); ?></p>
            </div>

            <div id="info_div2" class="info_box">
                <img id="info_div_img2" src="https://placehold.it/300x150">
                <p><?php echo($large_desc_2); ?></p>
            </div>

            <div id="info_div3" class="info_box">
                <img id="info_div_img3" src="https://placehold.it/300x150">
                <p><?php echo($large_desc_3); ?></p>
            </div>
        </div>
        </div>

        <!--    information about delivery: order > deliver > time/wait    -->
        <div id="order_div_container">
            <div class="v-align-helper"></div>

            <h2><?php echo($bottom_small_title); ?></h2>

            <div id="order_div">
                <div id="order_box1"  class="order_box">
                    <img id="order_div_img1" src="https://placehold.it/150x150">
                    <p><?php echo($small_desc_1); ?></p>
                </div>

                <div id="order_box2" class="order_box">
                    <img id="order_div_img3" src="https://placehold.it/150x150">
                    <p><?php echo($small_desc_2); ?></p>
                </div>

                <div id="order_box3" class="order_box">
                    <img id="order_div_img3" src="https://placehold.it/150x150">
                    <p><?php echo($small_desc_3); ?></p>
                </div>
            </div>

            <div id="order_button_big_remind">
                <button class="order_button_big"><?php echo($order_button); ?></button>
            </div>
        </div>

        <!--    Footer    -->
        <div id="footer_div">
            <div id='footer_company'>
                <ul>
                    <li class="link_list_item"><a class="link" href="">MORE PRODUCTS</a></li>
                    <li class="link_list_item"><a class="link" href="">ABOUT US</a></li>
                    <li class="link_list_item"><a class="link" href="">CONTACT</a></li>
                    <li class="link_list_item"><a class="link" href="">FAQS</a></li>
                </ul>
            </div>


            <div id='socialmedia_div'>
                <img class="socialmedia_icon" src="https://placehold.it/45x45">
                <img class="socialmedia_icon" src="https://placehold.it/45x45">
                <img class="socialmedia_icon" src="httpss://placehold.it/45x45">
            </div>

            <div id='copyright'>&copy; Copyright DamsCommerce</div>

            </div>

        </div>
	</body>
</html>

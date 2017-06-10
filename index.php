<!doctype html>

<html>
	<head>
        <?php include("dbconfig.php") ?>
		<title>Onepage 2.0</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href=".//css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	</head>

	<body>

        <div id="page">
        <!--   Big image of product with text     -->
        <div id="top_div">
            <div id="top_div_img" style="background-image: url('data:image/jpeg;base64,<?php echo($header_image); ?>');"> </div>
            <div id="item_desc">
                <h1>Lorem ipsum dolor</h1>
                <p class="item_desc_text">consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                <button class="order_button">Order now $6,99</button>
            </div>
            <div class="v-align-helper"></div>
        </div>




        <!--   Information about the 3 main features of product     -->
        <div id="info_div_container">
            <div class="v-align-helper"></div>

            <h2>Features</h2>

            <div id="info_div">
            <div id="info_div1" class="info_box">
                <img id="info_div_img1" src="http://placehold.it/300x150">
                <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, </p>
            </div>

            <div id="info_div2" class="info_box">
                <img id="info_div_img2" src="http://placehold.it/300x150">
                <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
            </div>

            <div id="info_div3" class="info_box">
                <img id="info_div_img3" src="http://placehold.it/300x150">
                <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo</p>
            </div>
        </div>
        </div>

        <!--    information about delivery: order > deliver > time/wait    -->
        <div id="order_div_container">
            <div class="v-align-helper"></div>

            <h2>Delivery</h2>

            <div id="order_div">
                <div id="order_box1"  class="order_box">
                    <img id="order_div_img1" src="http://placehold.it/150x150">
                    <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                </div>

                <div id="order_box2" class="order_box">
                    <img id="order_div_img3" src="http://placehold.it/150x150">
                    <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                </div>

                <div id="order_box3" class="order_box">
                    <img id="order_div_img3" src="http://placehold.it/150x150">
                    <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                </div>
            </div>

            <div id="order_button_big_remind">
                <button class="order_button_big">Order now $6,99</button>
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
                <img class="socialmedia_icon" src="http://placehold.it/45x45">
                <img class="socialmedia_icon" src="http://placehold.it/45x45">
                <img class="socialmedia_icon" src="http://placehold.it/45x45">
            </div>

            <div id='copyright'>&copy; Copyright DamsCommerce</div>

            </div>

        </div>
	</body>
</html>

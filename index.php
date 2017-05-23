<!doctype html>

<html>
	<head>
        <?php include('DBconfig.php') ?>
		<title>Onepage</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href=".//css/style.css">
	</head>

	<body>

        <div id="page">
        <!--   Big image of product with text     -->
        <div id="top_div">
            <h1><?php echo $header_image ?></h1>
            <div class="v-align-helper"></div>
            <div id="item_descr">
            <h1><?php echo $title ?></h1>
            <p class="item_descr_text">consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p>
        </div>
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
                <p><?php echo $large_description ?></p>
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

            <h2>Features</h2>

            <div id="order_div" class="order_box">
                <div id="order_div1" >
                    <img id="order_div_img1" src="http://placehold.it/150x150">
                    <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                </div>

                <div id="order_div2" class="order_box">
                    <img id="order_div_img3" src="http://placehold.it/150x150">
                    <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                </div>

                <div id="order_div3" class="order_box">
                    <img id="order_div_img3" src="http://placehold.it/150x150">
                    <p><?php echo $small_description ?></p>
                </div>
            </div>
        </div>

        <!--    Footer    -->
        <div id="footer_div">
            <div id="footer_div1"></div>
        </div>
        </div>
	</body>
</html>

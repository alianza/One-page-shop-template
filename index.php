<!doctype html>

<html>
	<head>
        <?php include("dbconfig.php") ?>
		<title>Onepage</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href=".//css/style.css">
	</head>

	<body>

        <div id="page">
        <!--   Big image of product with text     -->
        <div id="top_div">
            <?php echo($header_image); ?>
        </div>

        <!--   Information about the 3 main features of product     -->
        <div id="info_div_container">
            <div class="v-align-helper"></div>
        <div id="info_div">
            <div id="info_div1">
                <img id="info_div_img1" src="http://placehold.it/300x150">
                <p><?php echo($title); ?></p>
            </div>

            <div id="info_div2">
                <img id="info_div_img2" src="http://placehold.it/300x150">
                <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
            </div>

            <div id="info_div3">
                <img id="info_div_img3" src="http://placehold.it/300x150">
                <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
            </div>
        </div>
        </div>

        <!--    information about delivery: order > deliver > time/wait    -->
        <div id="order_div_container">
            <div class="v-align-helper"></div>

            <div id="order_div">
                <div id="order_div1">
                    <img id="order_div_img1" src="http://placehold.it/150x150">
                    <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                </div>

                <div id="order_div2">
                    <img id="order_div_img3" src="http://placehold.it/150x150">
                    <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                </div>

                <div id="order_div3">
                    <img id="order_div_img3" src="http://placehold.it/150x150">
                    <p>L Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
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

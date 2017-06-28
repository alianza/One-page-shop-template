<?php

$template_ID = 1;

DEFINE("DB_USER", "database_admin");
DEFINE("DB_PASS", "DamsCommerce12");

try {

    $db = new PDO("mysql:host=localhost:3306;dbname=onepage_template",DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo $e->getMessage();

    }

//Get Text

        try {

            $sql = "SELECT * FROM `text` WHERE id = 1";

            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $title = $result['title'];
            $desc_text = $result['desc_text'];
            $order_button = $result['order_button'];
            $top_small_title = $result['top_small_title'];
            $large_desc_1 = $result['large_desc_1'];
            $large_desc_2 = $result['large_desc_2'];
            $large_desc_3 = $result['large_desc_3'];
            $buttom_small_title = $result['buttom_small_title'];
            $small_desc_1 = $result['small_desc_1'];
            $small_desc_2 = $result['small_desc_2'];
            $small_desc_3 = $result['small_desc_3'];

     } catch(PDOException $e) {

            echo $e->GetMessage();

        }

//get Images

try {

            $sql = "SELECT * FROM `images` WHERE id = $template_ID";

            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

  //        $header_image = "data:image/jpeg;base64," . base64_encode( $result['header_image'] );
            $header_image = base64_encode($result['header_image']);
            $image_1 = base64_encode($result['image_1']);
            $image_2 = base64_encode($result['image_2']);
            $image_3 = base64_encode($result['image_3']);
            $misc_image_1 = base64_encode($result['misc_image_1']);
            $misc_image_2 = base64_encode($result['misc_image_2']);
            $misc_image_3 = base64_encode($result['misc_image_3']);

     } catch(PDOException $e) {

            echo $e->GetMessage();

    }

?>

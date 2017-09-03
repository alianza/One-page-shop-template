<?php

    include("userconfig.php");

try {

    $db = new PDO("mysql:host=localhost:3306;dbname=onepage_template",DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo $e->getMessage();

    }

//Get Text

try {

            $sql = "SELECT * FROM `text` WHERE id = :onepage_ID";

            $stmt = $db->prepare($sql);
            $stmt->execute(array(':onepage_ID' => $onepage_ID));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $title = $result['title'];
            $desc_text = $result['desc_text'];
            $refer_button = $result['refer_button'];
            $order_button = $result['order_button'];
            $order_button_link = $result['order_button_link'];
            $small_title_1 = $result['small_title_1'];
            $large_desc_1 = $result['large_desc_1'];
            $large_desc_2 = $result['large_desc_2'];
            $large_desc_3 = $result['large_desc_3'];
            $small_title_2 = $result['small_title_2'];
            $small_desc_1 = $result['small_desc_1'];
            $small_desc_2 = $result['small_desc_2'];
            $small_desc_3 = $result['small_desc_3'];
            $small_desc_4 = $result['small_desc_4'];

     } catch(PDOException $e) {

            echo $e->GetMessage();

        }

//get Images

try {

            $sql = "SELECT * FROM `images` WHERE id = :onepage_ID";

            $stmt = $db->prepare($sql);
            $stmt->execute(array(':onepage_ID' => $onepage_ID));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $header_image = "data:image/jpg;base64," . base64_encode($result['header_image']);
            $feature_image_1 = "data:image/jpg;base64," . base64_encode($result['feature_image_1']);
            $feature_image_2 = "data:image/jpg;base64," . base64_encode($result['feature_image_2']);
            $feature_image_3 = "data:image/jpg;base64," . base64_encode($result['feature_image_3']);
            $misc_image_1 = "data:image/jpg;base64," . base64_encode($result['misc_image_1']);
            $misc_image_2 = "data:image/jpg;base64," . base64_encode($result['misc_image_2']);
            $misc_image_3 = "data:image/jpg;base64," . base64_encode($result['misc_image_3']);
            $misc_image_4 = "data:image/jpg;base64," . base64_encode($result['misc_image_4']);

     } catch(PDOException $e) {

            echo $e->GetMessage();

    }

//get global onepage social info and images

try {

            $sql = "SELECT * FROM `global` WHERE id = :global_ID";

            $stmt = $db->prepare($sql);
            $stmt->execute(array(':global_ID' => $global_ID));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $more_products_link = $result['more_products_link'];
            $about_us_link = $result['about_us_link'];
            $contact_link = $result['contact_link'];
            $faqs_link = $result['faqs_link'];
            $social_image_1 = "data:image/jpg;base64," . base64_encode($result['social_image_1']);
            $social_image_2 = "data:image/jpg;base64," . base64_encode($result['social_image_2']);
            $social_image_3 = "data:image/jpg;base64," . base64_encode($result['social_image_3']);
            $social_link_1 = $result['social_link_1'];
            $social_link_2 = $result['social_link_2'];
            $social_link_3 = $result['social_link_3'];


     } catch(PDOException $e) {

            echo $e->GetMessage();

    }

?>

<?php

$template_ID = 1;

DEFINE("DB_USER", "database_admin");
DEFINE("DB_PASS", md5("5b922b35d5c82c68a5091a908de83965"));

try {

    $db = new PDO("mysql:host=localhost:;dbname=onepage",DB_USER,DB_PASS);
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

     } catch(PDOException $e) {

            echo $e->GetMessage();

        }

        $title = $result['title'];
        $small_description = $result['desc_text'];
        $large_description = $result['order_button'];

//get Images

try {

            $sql = "SELECT * FROM `images` WHERE id = 1";

            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

     } catch(PDOException $e) {

            echo $e->GetMessage();

        }

//        $header_image = "data:image/jpeg;base64," . base64_encode( $result['header_image'] );
        $header_image = base64_encode($result['header_image']);

?>

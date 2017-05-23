<?php

DEFINE("DB_USER", "root");
DEFINE("DB_PASS", "");

try {

    $db = new PDO("mysql:host=localhost;dbname=onepage",DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo $e->getMessage();

    }

//Get Text

        try {

            $sql = "SELECT * FROM `text` WHERE 1";

            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

     } catch(PDOException $e) {

            echo $e->GetMessage();

        }

        $title = $result['title'];
        $small_description = $result['small_desc'];
        $large_description = $result['large_desc'];

//get Images

try {

            $sql = "SELECT * FROM `images` WHERE 1";

            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

     } catch(PDOException $e) {

            echo $e->GetMessage();

        }

//        $header_image = "data:image/jpeg;base64," . base64_encode( $result['header_image'] );
        $header_image = '<img id="top_div_img" src="data:image/jpeg;base64,' . base64_encode( $result['header_image'] ) . '"/>';

?>

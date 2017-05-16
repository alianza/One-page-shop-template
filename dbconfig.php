<?php

DEFINE("DB_USER", "root");
DEFINE("DB_PASS", "");

try {

    $db = new PDO("mysql:host=localhost;dbname=onepage",DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo $e->getMessage();

    }

        try {

            $sql = "SELECT * FROM `tekst` WHERE 1";

            $stmt = $db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

     } catch(PDOException $e) {

            echo $e->GetMessage();

        }

        $title = $result['title'];

    }

?>

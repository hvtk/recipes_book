<?php

    define (DB_USERNAME, "root");
    define (DB_PASSWORD, "TuT5&K5mfrC8GV");
    define (DB_DATABASE, "recipe_book");
    define (DB_HOST, "127.0.0.1");
    $mysqli = new mysqli(DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_HOST);

    if(!empty($_POST["kitchenware"])) {

        foreach ($_POST["kitchenware"] as $key => $value) {
            $sql = "INSERT INTO recipes(kitchenware) VALUES ('".$value."')";
            $mysqli->query($sql);
        }
    }

?>
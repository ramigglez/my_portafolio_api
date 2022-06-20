<?php

    $use = 0;

    require_once './src/url_reader_controller/MainViewController.php';

    if ($use === 1) {

        $obj1 = new MainViewController;
        $obj1 -> getIndex();

    } else {

        getIndex ();

    }

?>
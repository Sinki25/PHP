<?php


if (isset($_GET['password2']) && isset($_GET['email']) && isset($_GET['password']) && isset($_GET['data']) && isset($_GET['country'])) {
    if ($_GET['password'] === $_GET['password2']) {
        if (isset($_REQUEST['gender1'])) {
            if (isset($_REQUEST['subscribe'])) {
                $list = array(
                    $_GET['email'],
                    $_GET['password'],
                    $_GET['data'],
                    $_GET['country'],
                    'Male',
                    'Subscribe');
            } else {
                $list = array(
                    $_GET['email'],
                    $_GET['password'],
                    $_GET['data'],
                    $_GET['country'],
                    'Male');
            }
        } else {
            if (isset($_REQUEST['subscribe'])) {
                $list = array(
                    $_GET['email'],
                    $_GET['password'],
                    $_GET['data'],
                    $_GET['country'],
                    'Female',
                    'Subscribe');
            } else {
                $list = array(
                    $_GET['email'],
                    $_GET['password'],
                    $_GET['data'],
                    $_GET['country'],
                    'Female');
            }
        }


        $f = fopen("file.csv", "w");

        var_dump(fputcsv($f, $list));

        fclose($f);
    }


}

require "reg.tmp.php";
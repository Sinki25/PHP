<?php


if (isset($_GET['x1']) && isset($_GET['x2']) && isset($_GET['operation']))
    switch($_GET['operation']){
        case '+' :
            $sum= $_GET['x1']+$_GET['x2'];
            break;
        case '-' :
            $sum= $_GET['x1']-$_GET['x2'];
            break;
        case '*' :
            $sum= $_GET['x1']*$_GET['x2'];
            break;
        case '/' :
            $sum= $_GET['x1']/$_GET['x2'];
            break;
        default :
            return 'Wrong operation';
        }

require "index.tmpl.php";
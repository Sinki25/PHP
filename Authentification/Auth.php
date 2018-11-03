<?php

$result=NULL;

if($_GET['login']==='admin' && $_GET['password']==='admin'){

    //$result = 1;
    $token = md5(time());
    $login = md5($_GET['login']);

    setcookie($_GET['login'], $token);
    setcookie($_GET['login']."1", $login);
    setcookie("token",$token);

}
var_dump($_COOKIE[$_GET['login']]);
var_dump($_COOKIE["token"]);

if($_COOKIE[$_GET['login']]===$_COOKIE["token"] && $_COOKIE[$_GET['login']."1"]===md5($_GET['login'])){
    unset($_COOKIE[$_GET['login']],$_COOKIE[$_GET['login']."1"]);
    //var_dump($_COOKIE[$_GET['login']]);
    require "Success.tmpl.php";
}
else
    require "Auth.tmpl.php";

unset($_COOKIE["token"]);
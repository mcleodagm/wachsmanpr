<?php
ini_set('display_errors','off');


$app_name = '/';
$development = true;


$allowed = array("home", "contact", "about", "team", "team_single", "clients", "client_single", "careers", "news", "single_news");

$mainUrl = 'http://'. $_SERVER['HTTP_HOST'] . $app_name .'';
$request = str_replace($app_name, "", $_SERVER['REQUEST_URI']);




$params = explode("/", $request);

if (in_array($params[0], $allowed)) {
    include('view/' . $params[0] . ".php");
} elseif ($params[0] == '') {
    include("view/home.php");
} elseif ($params[0] == 'index.php') {
    include("view/home.php");
} else {
    include("view/404.php");
}

?>

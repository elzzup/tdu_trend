<?php
/* @var $title string */
$url = '';
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title><?= $title ?></title>
        <meta name="date" content="" />
        <!--link rel="canonical" href="<?= $url ?>" /-->
        <!--link rel="alternate" media="handheld" href="<?= $url ?>" /-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?= SITE_ROOT ?>style/style.css">
        <link rel="icon" href="favicon.ico" /> 
        <!--Import jQuery before materialize.js-->
        <!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
        <script type="text/javascript" src="<?= URL_LIB_JQUERY ?>"></script>
        <script type="text/javascript" src="<?= URL_LIB_MATERIALIZE_JS ?>"></script>
        <script type="text/javascript" src="<?= URL_JS_SCRIPT ?>"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script> <![endif]-->
    </head>

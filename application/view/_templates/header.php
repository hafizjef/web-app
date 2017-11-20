<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>WOW Laundry <? echo isset($pageTitle) ? ("| " . $pageTitle) : null; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo URL; ?>css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo URL; ?>css/fonts.css">
    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
</head>
<body>
<!-- logo -->

<?php
    function active($current_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);
        if($current_page == $url){
            echo 'active'; //class name in css
        }
    }
?>

<!-- navigation -->
<label class="menu-toggle" for="menu-toggle">
       <div style="padding-top: 6px"> <i class="fa fa-bars" aria-hidden="true"></i><p>WOW Laundry</p></div>
</label><input type="checkbox" id="menu-toggle"/>
<ul class="navigation">
    <li><a class="<?php active('');?>" href="<? echo URL; ?>">Home</a></li>
    <li><a class="<?php active('about');?>" href="<? echo URL; ?>home/about">About</a></li>
    <li><a class="<?php active('contact');?>" href="<? echo URL; ?>home/contact">Contacts</a></li>
    <li class="right"><a class="<?php active('login');?>" href="<? echo URL; ?>auth/login">Login</a></li>
</ul>
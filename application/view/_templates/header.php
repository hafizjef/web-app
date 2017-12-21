<?php
    if(Session::userIsLoggedIn()){
        Redirect::profile();
    } elseif (Session::staffIsLoggedIn()){
        Redirect::admin();
    }
?>
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

<!-- navigation -->
<label class="menu-toggle" for="menu-toggle">
       <div style="padding-top: 6px"> <i class="fa fa-bars" aria-hidden="true"></i><p>WOW Laundry</p></div>
</label><input type="checkbox" id="menu-toggle"/>
<ul class="navigation">
    <li><a class="<?php Helper::active('');?>" href="<? echo URL; ?>">Home</a></li>
    <li><a class="<?php Helper::active('about');?>" href="<? echo URL; ?>home/about">About</a></li>
    <li class="right"><a class="<?php Helper::active('login');?>" href="<? echo URL; ?>auth/login">Login</a></li>
</ul>
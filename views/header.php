<?php
    $nav = GetPrimaryNavigationItems();
    $page = 'PAGE NAME';
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta name="author" content="Sterling Grant">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>SilverOasis Entertainment | Unity Gaming</title>
	<link rel="stylesheet" type="text/css" href="/com.web.css/web-main.css" />
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js" ></script>
        <script>
        $( document ).ready(function() {
            $('body').restive({
                breakpoints: ['240', '320', '480', '640', '720', '960', '1280'],
                classes: ['rp_240', 'rp_320', 'rp_480', 'rp_640', 'rp_720', 'rp_960', 'rp_1280'],
                turbo_classes: 'is_mobile=mobi,is_phone=phone,is_tablet=tablet',
                force_dip: true
            });
        });
        </script>
    </head>
  
    <body>
        <div id="background">
            
            <header>
                <div>
                    
                    <nav>
                        <a href="/index.php?action=home" class="logo" title="Home">
                            <img src="/com.web.images/logo.png" alt="logo">
			</a>
                        <ul>
                            <?php
                            echo ''
                            . '<li><a',($page=='home'       ? ' class="selected"' : ''),' href="/index.php?action=home" id="menu1" title="Home">Home</a></li>'
                            . '<li><a',($page=='contact'    ? ' class="selected"' : ''),' href="/index.php?action=contact" id="menu2" title="Contact">Contact</a></li>'
                            . '<li><a',($page=='project'    ? ' class="selected"' : ''),' href="/index.php?action=project" id="menu3" title="project">Project</a></li>'
                            . '<li><a',($page=='about'      ? ' class="selected"' : ''),' href="/index.php?action=about" id="menu4" title="About">About</a></li>'
                            . '<li><a',($page=='login'      ? ' class="selected"' : ''),' href="/index.php?action=login" id="menu5" title="Login">Login</a></li>'
                            ?>
                        </ul>
                    </nav>
                    
                </div>
            </header>
            
            <div id="body">
                <div>
                    <div>
<!-- =========================END HEADER.PHP========================= -->
<br />
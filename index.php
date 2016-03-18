<?php $baseurl = 'http://localhost/CSS-R-Framework/'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="twitter:site" value="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>CSS-R-Framework</title>
<meta name="description" content="Simple Responsive CSS Framework" />
<meta name="keywords" content="Simple Responsive CSS Framework" />
<link rel="shortcut icon" href="<?php echo $baseurl; ?>images/icon.png" />
<meta name="twitter:site" value="@">
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="CSS-R-Framework"/>
<meta property="og:description" content="Simple Responsive CSS Framework"/>
<meta property="og:image" content=""/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo $baseurl; ?>style/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>style/styles-720.css" type="text/css" media="screen and (min-width: 720px)" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>style/styles-986.css" type="text/css" media="screen and (min-width: 986px)" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>style/styles-1236.css" media="screen and (min-width: 1236px)" />
<link rel="apple-touch-icon-precomposed" media="screen and (resolution: 163dpi)" href="<?php echo $baseurl; ?>images/icon-57.png" />
<link rel="apple-touch-icon-precomposed" media="screen and (resolution: 132dpi)" href="<?php echo $baseurl; ?>images/icon-72.png" />
<link rel="apple-touch-icon-precomposed" media="screen and (resolution: 326dpi)" href="<?php echo $baseurl; ?>images/icon-114.png" />
<link rel="canonical" href="<?php echo $baseurl; ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo $baseurl; ?>feed/" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php echo $baseurl; ?>feed/rss/" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php echo $baseurl; ?>feed/atom/" />
<script type="text/javascript" language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#back-top").hide();
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
});
</script>
</head>
<body id="top">
<div id="Wrapper">
	<div id="Header">
        <a href="<?php echo $baseurl; ?>">About</a>
        <a href="<?php echo $baseurl; ?>">Portfolio</a>
        <a href="<?php echo $baseurl; ?>">Home</a>
        <a href="<?php echo $baseurl; ?>">Blog</a>
        <a href="<?php echo $baseurl; ?>">Contact</a>
    </div>
    
    <div class="clear50"></div>
    
    <h1>This is the h1</h1>
    <div class="clear25"></div>
    <h2>This is the h2</h2>
    <div class="clear25"></div>
    <h3>This is the h3</h3>
    <div class="clear25"></div>
    <h4>This is the h4</h4>
    <div class="clear25"></div>
    <h5>This is the h5</h5>
    <div class="clear25"></div>
    <h6>This is the h6</h6>
    
    
</div>

<div class="clear50"></div>

<div id="Footer">
	<div class="Wrap">
        <p id="back-top"><a href="#top">scroll to top</a></p>
    	<div class="clear25"></div>
        <div class="Social">
            <a href="#" target="_blank" class="SocFacebook"></a>
            <a href="#" target="_blank" class="SocTwitter"></a>
            <a href="#" target="_blank" class="SocLinkedin"></a>
            <a href="#" target="_blank" class="SocBehance"></a>
            <a href="#" target="_blank" class="SocDeviant"></a>
            <a href="#" target="_blank" class="SocInstagram"></a>
    	</div>
    </div>
</div>
</body>
</html>
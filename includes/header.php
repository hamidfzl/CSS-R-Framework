<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="twitter:site" value="@hamidafzal">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>CSS-R-Framework</title>
<meta name="description" content="Simple Responsive CSS Framework" />
<meta name="keywords" content="Simple Responsive CSS Framework" />
<link rel="shortcut icon" href="<?php echo $baseurl; ?>images/icon.png" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo $baseurl; ?>style/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>style/styles-720.css" type="text/css" media="screen and (min-width: 720px)" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>style/styles-986.css" type="text/css" media="screen and (min-width: 986px)" />
<link rel="stylesheet" href="<?php echo $baseurl; ?>style/styles-1236.css" media="screen and (min-width: 1236px)" />
<link rel="apple-touch-icon-precomposed" media="screen and (resolution: 163dpi)" href="<?php echo $baseurl; ?>images/icon-57.png" />
<link rel="apple-touch-icon-precomposed" media="screen and (resolution: 132dpi)" href="<?php echo $baseurl; ?>images/icon-72.png" />
<link rel="apple-touch-icon-precomposed" media="screen and (resolution: 326dpi)" href="<?php echo $baseurl; ?>images/icon-114.png" />
<script type="text/javascript" language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $baseurl; ?>jquery/jquery.bxSlider.js"></script>
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
$(document).ready(function(){
	$('#Slider').bxSlider({mode: 'vertical', pager: true, controls: false, pagerSelector: '.bx-pager', wrapperClass: 'bx-wrapper SliderDesk'});
	$('#SliderDevice').bxSlider({mode: 'vertical', pager: true, controls: false, pagerSelector: '.pagerdevice', wrapperClass: 'bx-wrapper SliderDev'});
	$('#Slider2').bxSlider({mode: 'fade', pager: false, controls: true, wrapperClass: 'bx-wrapper SliderPort'});
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
    <div class="clearH50"></div>
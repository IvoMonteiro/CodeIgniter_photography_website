<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Andi Frank</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/img/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/img/favicon/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon/favicon-32x32.png" sizes="32x32">
<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon/favicon.png">
<meta name="msapplication-TileColor" content="#000000">
<meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/img/favicon/mstile-144x144.png">


<link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-touch-carousel.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css" type="text/css" media="screen" />

<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/responsejs/responsejs.min.js"></script>
<script src="<?php echo base_url();?>assets/js/screenfull.js"></script>
<script src="<?php echo base_url();?>assets/js/funcs.js"></script>

<script src="<?php echo base_url();?>assets/js/bootstrap-touch-carousel.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/mobile-footer.css" type="text/css" media="screen and (max-width: 768px)" />
<style>html,body,iframe {
    background: #000000;
    overflow: hidden;
}</style>
<script>
$(window).on('load',function () {
if (!screenfull.enabled) {
	return false;
}

$('.fullscreen_btn').click(function () {
	screenfull.toggle($('#container')[0]);
	var iframe = document.createElement('iframe')
	iframe.setAttribute('id', 'external-iframe');
	iframe.setAttribute('src', window.location + "/");
	iframe.setAttribute('frameborder', 'no');
	iframe.style.position = 'absolute';
	iframe.style.top = '0';
	iframe.style.right = '0';
	iframe.style.bottom = '0';
	iframe.style.left = '0';
	iframe.style.width = '100%';
	iframe.style.height = '100%';
	iframe.style.zIndex = '9999';
	$('#container').prepend(iframe);
	document.body.style.overflow = 'hidden';
});

document.addEventListener(screenfull.raw.fullscreenchange, function () {
	var elem = screenfull.element;

	$('#status').text('Is fullscreen: ' + screenfull.isFullscreen);

	if (elem) {
		$('#element').text('Element: ' + elem.localName + (elem.id ? '#' + elem.id : ''));
	}

	if (!screenfull.isFullscreen) {
		$('#external-iframe').remove();
		document.body.style.overflow = 'auto';
	}
});

$(document).on(screenfull.raw.fullscreenchange, function () {
// 	console.log('Fullscreen change')
	$('iframe').on('load',function() {
	$('.fullscreen_btn').hide();
	})
});

$('#carousel').carousel();
screenfull.onchange();
});
		</script>

</head>
<body class="fe_photos">
    <div id="container" class="container-fluid">
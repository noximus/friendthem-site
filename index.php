<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="" lang="en" > <!--<![endif]-->
<head>
	<title>Friendthem | The location-based friend request</title>
	<?php include("res/head.php") ?>
	<link rel="stylesheet" href="res/css/home.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="./favicon.ico" type="image/x-icon">



	<script src="res/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" href="res/fancybox/jquery.fancybox-1.3.4.css" media="screen">

	<script>
	jQuery(document).ready(function() {
		$("#button_watch_video").fancybox({
			'href'			: 'http://vimeo.com/moogaloop.swf?clip_id=24831131&autoplay=1',
			'type'			: 'swf',
			'padding'           : 0,
			'autoScale'     	: false,
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'overlayColor'		: '#000',
			'overlayOpacity'	: '0.9',
			'margin'			: '30',
			'width'				: '640',
			'height'			: '360'
		});

		function validate(address) {
		   var reg = /^([A-Za-z0-9_\-\.\+])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		   if(reg.test(address) == false) {
			  return false;
		   } else return true;
		}

		function restore() {
			$('#wrongemail').hide();
			$('#email').val('');
			$('#subscribed').fadeOut('slow',function(){$('#subscribe_form').fadeIn('slow',function(){$('#email').blur();});}); 
		}
		
		function processMail() {
			if (!validate($.trim($('#email').val()))) {
				$('#intro').hide();
				$('#wrongemail').show();
				return false;
			}
			$('#loader').show();
			$.ajax({
				url: 'chimpapi.php?subscribe='+$.trim($('#email').val()),
				success: function(data){
					if (data=='OK') {
						$('#loader').hide();
						$('#subscribe_form').fadeOut('slow',function(){$('#subscribed').fadeIn('slow');});
						setTimeout(restore,4000); 
					}
				}
			});
			
			return false;
		}
		
//		$('#subscribe').click(processMail);
		$('#subscribe_form').submit(processMail);
	});


	</script>
</head>

<body class="level1">
	<?php $filename="-dev/tools.php";if (file_exists($filename)) include $filename; ?>

	<?php $page="home"; include "res/header.php"?>

	<article>
		<section>
			<div id="banner_content">
				<h1 class="title">The location-based friend request.</h1>
				<h2 class="title"><span style="font-family: Arial;">Imagine you meet someone at a party, a conference, or even out for a walk. This could potentially lead to a date, a new job, or just a great friendship. As you part ways, this person says &quot;Facebook me&quot; and then disappears. Friendthem is a &nbsp;location-based app which helps you find that person and send a friend request.</span><br />
</h2>
				<p><a id="button_download" class="button edit-txt" href="http://www.itunes.com/apps/friendthem" target="_blank">Download Now</a><br /><a id="button_download_adroid" class="button edit-txt" href="https://market.android.com/details?id=com.friendthem.activity&feature=search_result#?t=W251bGwsMSwxLDEsImNvbS5mcmllbmR0aGVtLmFjdGl2aXR5Il0" target="_blank">Download Now</a><br /><a href="http://player.vimeo.com/video/24831131?title=0&amp;byline=0&amp;portrait=0" id="button_watch_video" class="button">Watch Video</a></p>
			</div>

			<img id="iphone" src="http://www.friendthem.com/images/2-iphoneandroid2.png" alt="" class="edit">
		</section>
	</article>

	<?php include "res/footer.php"?>
</body>
</html>
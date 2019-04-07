<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>About us</title>
	<base href="{{base_url}}" />
	<meta name="viewport" content="width=1200" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="About us" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20180222164022" type="text/javascript"></script>
	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20180215152128" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1519836400" rel="stylesheet" type="text/css" />
	<link href="css/2.css?ts=1519836400" rel="stylesheet" type="text/css" />
	{{ga_code}}
	
	<script type="text/javascript">var currLang = '';</script>
		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="root">
		<div class="vbox wb_container" id="wb_header">
			<div class="wb_cont_inner">
				<div id="wb_element_instance16" class="wb_element wb-menu">
					<ul class="hmenu">
						<li>
							<a href="" target="_self">Home</a>
						</li>
						<li class="active">
							<a href="About-us/" target="_self">About us</a>
						</li>
						<li>
							<a href="Event/" target="_self">Events</a>
						</li>
						<li>
							<a href="Draw/" target="_self">Draw</a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div id="wb_element_instance17" class="wb_element wb-elm-orient-horizontal">
					<div class="wb-elm-line"></div>
				</div>
				<div id="wb_element_instance18" class="wb_element wb_element_picture">
					<a href="http://facebook.com" target="1">
						<img alt="gallery/facebook-icon" src="gallery_gen/4748b934a4555ca627645be2a878c8c9_30x30.png">
					</a>
				</div>
				<div id="wb_element_instance19" class="wb_element wb_element_picture">
					<a href="http://twitter.com" target="1">
						<img alt="gallery/twitter-icon" src="gallery_gen/43a0b234aaf5583e248ab21c7bc03aca_30x30.png">
					</a>
				</div>
				<div id="wb_element_instance20" class="wb_element wb-elm-orient-horizontal">
					<div class="wb-elm-line"></div>
				</div>
				<div id="wb_element_instance21" class="wb_element" style=" line-height: normal;">
					<h5 class="wb-stl-subtitle" style="text-align: center;">
						<span class="wb_tr_ok">My Day</span>
					</h5>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="vbox wb_container" id="wb_main">
			<div class="wb_cont_inner">
				<div id="wb_element_instance23" class="wb_element" style=" line-height: normal;">
					<p class="wb-stl-normal">
						<span style="font-size: 16px; font-weight: normal; line-height: 26px; background-color: transparent;">You will find the latest information about us on this page. Our company is constantly evolving and growing. We provide wide range of services. Our mission is to provide best solution that helps everyone. If you want to contact us, please fill the contact form on our website. We wish you a good day! You will find the latest information about us on this page. Our company is constantly...</span>
					</p>
					<p class="wb-stl-normal">Evolving and growing. We provide wide range of services. Our mission is to provide best solution that helps everyone. If you want to contact us, please fill the contact form on our website. We wish you a good day! You will find the latest information about us on this page. Our company is...</p>
					<p class="wb-stl-normal"></p>
					<p class="wb-stl-normal">Constantly evolving and growing. We provide wide range of services. Our mission is to provide best solution that helps everyone. If you want to contact us, please fill the contact form on our website. We wish you a good day! You will find the latest information about us on this page. Our company is constantly evolving and...</p>
					<p class="wb-stl-normal"></p>
					<p class="wb-stl-normal">Growing. We provide wide range of services. Our mission is to provide best solution that helps everyone. If you want to contact us, please fill the contact form on our website. We wish you a good day! You will find the latest information about us on this page. Our company is constantly evolving and growing. We provide wide range of services. Our mission is to provide best solution that...</p>
					<p class="wb-stl-normal">Helps everyone. If you want to contact us, please fill the contact form on our website. We wish you a good day! You will find the latest information about us on this page. Our company is constantly evolving and growing. We provide wide range of services. Our mission is to provide best...</p>
					<p class="wb-stl-normal"></p>
					<p class="wb-stl-normal">Solution that helps everyone. If you want to contact us, please fill the contact form on our website. We wish you a good day! You will find the latest information about us on this page. Our company is constantly evolving and growing. We provide wide range of services. Our mission is to provide best solution that helps...</p>
				</div>
				<div id="wb_element_instance24" class="wb_element" style=" line-height: normal;">
					<h2 class="wb-stl-heading2">
						<span class="wb_tr_ok">About us</span>
					</h2>
				</div>
				<div id="wb_element_instance25" class="wb_element" style="width: 100%;">
					<?php
					global $show_comments;
					if (isset($show_comments) && $show_comments) {
						renderComments(2);
						?>
						<script type="text/javascript">
							$(function() {
								var block = $("#wb_element_instance25");
								var comments = block.children(".wb_comments").eq(0);
								var contentBlock = $("#wb_main");
								contentBlock.height(contentBlock.height() + comments.height());
							});
						</script>
						<?php
					} else {
						?>
						<script type="text/javascript">
							$(function() {
								$("#wb_element_instance25").hide();
							});
						</script>
						<?php
					}
					?>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="vbox wb_container" id="wb_footer">
			<div class="wb_cont_inner" style="height: 134px;">
				<div id="wb_element_instance22" class="wb_element" style=" line-height: normal;">
					<p class="wb-stl-footer">© 2018 
						<a href="http://tencenium.000webhostapp.com">tencenium.000webhostapp.com</a>
					</p>
				</div>
				<div id="wb_element_instance26" class="wb_element" style="text-align: center; width: 100%;">
					<div class="wb_footer"></div>
					<script type="text/javascript">
						$(function() {
							var footer = $(".wb_footer");
							var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
							if (!html) {
								footer.parent().remove();
								footer = $("#wb_footer, #wb_footer .wb_cont_inner");
								footer.css({height: ""});
							}
						});
					</script>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="wb_sbg"></div>
	</div>{{hr_out}}
</body>
</html>

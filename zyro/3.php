<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Events</title>
		<base href="{{base_url}}" />
		<meta name="viewport" content="width=1200" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!-- Facebook Open Graph -->
		<meta name="og:title" content="Events" />
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
		<link href="css/3.css?ts=1519836400" rel="stylesheet" type="text/css" />
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
					<div id="wb_element_instance27" class="wb_element wb-menu">
						<ul class="hmenu">
							<li>
								<a href="" target="_self">Home</a>
							</li>
							<li>
								<a href="About-us/" target="_self">About us</a>
							</li>
							<li class="active">
								<a href="Events/" target="_self">Events</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div id="wb_element_instance28" class="wb_element wb-elm-orient-horizontal">
						<div class="wb-elm-line"></div>
					</div>
					<div id="wb_element_instance29" class="wb_element wb_element_picture">
						<a href="http://facebook.com" target="1">
							<img alt="gallery/facebook-icon" src="gallery_gen/4748b934a4555ca627645be2a878c8c9_30x30.png">
							</a>
						</div>
						<div id="wb_element_instance30" class="wb_element wb_element_picture">
							<a href="http://twitter.com" target="1">
								<img alt="gallery/twitter-icon" src="gallery_gen/43a0b234aaf5583e248ab21c7bc03aca_30x30.png">
								</a>
							</div>
							<div id="wb_element_instance31" class="wb_element wb-elm-orient-horizontal">
								<div class="wb-elm-line"></div>
							</div>
							<div id="wb_element_instance32" class="wb_element" style=" line-height: normal;">
								<h5 class="wb-stl-subtitle" style="text-align: center;">
									<span class="wb_tr_ok">My Day</span>
								</h5>
							</div>
						</div>
						<div class="wb_cont_outer"></div>
						<div class="wb_cont_bg"></div>
					</div>

					<div class="vbox wb_container" id="wb_current_events">
						<div class="wb_cont_inner">
							<div id="wb_element_instance40" class="wb_element">
								<form class="wb_form" method="post">
									<tr>
										<th>Event</th>
										<th>Year</th>
										<th>Venue</th>
										<th>Location</th>
									</tr>
									<script type="text/javascript">
										(function() {
											
											// var getEventFunc = function() {
												
											// };
											// getEventFunc();
										})();
									</script>
								</form>
							</div>
						</div>
					</div>


					<div class="vbox wb_container" id="wb_main">
						<div class="wb_cont_inner">
							<div id="wb_element_instance34" class="wb_element">
								<form class="wb_form" method="post" enctype="multipart/form-data">
									<input type="hidden" name="wb_form_id" value="d251a956">
										<textarea name="message" rows="3" cols="20" class="hpc"></textarea>
										<table>
											<tr>
												<th class="wb-stl-normal">Event Name&nbsp;&nbsp;</th>
												<td>
													<input type="hidden" name="wb_input_0" value="Name">
														<input class="form-control form-field" type="text" value="" name="wb_input_0" required="required">
														</td>
													</tr>
													<tr>
														<th class="wb-stl-normal">E-mail&nbsp;&nbsp;</th>
														<td>
															<input type="hidden" name="wb_input_1" value="E-mail">
																<input class="form-control form-field" type="text" value="" name="wb_input_1" required="required">
																</td>
															</tr>
															<tr class="area-row">
																<th class="wb-stl-normal">Message&nbsp;&nbsp;</th>
																<td>
																	<input type="hidden" name="wb_input_2" value="Message">
																		<textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_2" required="required"></textarea>
																	</td>
																</tr>
																<tr class="form-footer">
																	<td colspan="2">
																		<button type="submit" class="btn btn-default">Submit</button>
																	</td>
																</tr>
															</table>
														</form>
														<script type="text/javascript">
															<?php $wb_form_id = popSessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "d251a956") { ?>
				var formValues = 
											
															<?php echo json_encode($_POST); ?>;
				var formErrors = 
											
															<?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("d251a956", formValues, formErrors);
				
											
															<?php if ($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state")) { ?>
					setTimeout(function() {
						alert("<?php echo addcslashes($wb_form_send_state, "\\'\"&\n\r\0\t<>"); ?>");
					}, 100);
					
											
															<?php $wb_form_send_state = null; ?>
															<?php } ?>
															<?php } ?>
														</script>
													</div>
													<div id="wb_element_instance35" class="wb_element wb-map">
														<div style="background: rgba(0,0,0,0.38); position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
															<div style="font-size: 24px; width: 100%; color: #c00; padding: 0 20%; text-align: center; display: inline-block; vertical-align: middle;">Get API Key from 
												
																<a style="display: inline-block; max-width: 100%; word-break: break-all; color: #fff;" target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key">https://developers.google.com/maps/documentation/javascript/get-api-key</a>
															</div>
															<div style="vertical-align: middle; height: 100%; display: inline-block;"></div>
														</div>
														<script type="text/javascript">
				(function() {
					var resizeFunc = function() {
						var elem = $("#wb_element_instance35");
						var w = elem.width(), h = elem.height();
						elem.find("div > div:first").css("zoom", Math.max(0.5, Math.min(1, ((w * h) / 120000))));
					};
					$(window).on("resize", resizeFunc);
					resizeFunc();
				})();
			</script>
													</div>
													<div id="wb_element_instance36" class="wb_element" style=" line-height: normal;">
														<h2 class="wb-stl-heading2">
															<span class="wb_tr_ok">Contacts</span>
														</h2>
													</div>
													<div id="wb_element_instance37" class="wb_element" style=" line-height: normal;">
														<p class="wb-stl-normal">
															<span class="wb_tr_ok">Address:</span>
														</p>
														<p class="wb-stl-normal">
															<span class="wb_tr_ok">Empire State Building</span>
														</p>
														<p class="wb-stl-normal">
															<span class="wb_tr_ok">350 5th Ave</span>
														</p>
														<p class="wb-stl-normal">
															<span class="wb_tr_ok">New York</span>
														</p>
														<p class="wb-stl-normal">
															<span class="wb_tr_ok">NY 10118</span>
														</p>
														<p class="wb-stl-normal">
															<span class="wb_tr_ok">USA</span>
														</p>
														<p class="wb-stl-normal">
															<span class="wb_tr_ok">Phone:</span>
														</p>
														<p class="wb-stl-normal">
															<span class="wb_tr_ok">
																<span dir="ltr" style="direction: ltr;">+1 212 736 3100</span>
															</span>
														</p>
														<p class="wb-stl-normal">
															<span class="wb_tr_ok">E-mail:</span>
														</p>
														<p class="wb-stl-normal">
															<a data-type="email" data-url="info@site.info" href="mailto:info@site.info">info@site.info</a>
														</p>
													</div>
													<div id="wb_element_instance38" class="wb_element" style="width: 100%;">
														<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(3);
			?>
														<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance38");
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
					$("#wb_element_instance38").hide();
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
													<div id="wb_element_instance33" class="wb_element" style=" line-height: normal;">
														<p class="wb-stl-footer">© 2018 
															<a href="http://tencenium.000webhostapp.com">tencenium.000webhostapp.com</a>
														</p>
													</div>
													<div id="wb_element_instance39" class="wb_element" style="text-align: center; width: 100%;">
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
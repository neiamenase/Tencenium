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
							<a href="Upcoming/" target="_self">Upcoming</a>
						</li>
						<li class="active">
							<a href="Event/" target="_self">Events</a>
						</li>
						<li>
							<a href="Draw/" target="_self">Draw</a>
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
						<span class="wb_tr_ok">Event</span>
					</h5>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>

		<div class="vbox wb_container" id="wb_current_events">
			<div class="wb_cont_inner">
				<div id="wb_element_instance40" class="wb_element">
					<script type="text/javascript">
						var results = <?php include 'connectDB.php';	echo  getEvent();?>;
						table = '';
						for ( var i = 0; i < results.length; i++) {
							var obj = results[i];
								//header 
								if (i == 0){
									table = table + "<tr>";
									for ( var key in obj) {
										table = table + "<th><font color=\"white\">" + key + "</th>"; 
									}
									table = table + "</tr>";
								}
								//body 
								
								table = table + "<tr>";
								
								for ( var key in obj) {
									if ((i%2) > 0){
										table = table + "<td><font color=\"white\">" + obj[key] + "</td>";
									}else{
										table = table + "<td>" + obj[key] + "</td>";
									}
								}
								table = table + "</tr>";
									// table = table + "<tr><th>Name: </th><td>" + results[i].eventName + "</td></tr>";
									// table = table + "<tr><th>date: </th><td>" + results[i].date + "</td></tr>";
									// table = table + "<tr><th>venue: </th><td>" + results[i].venue + "</td></tr>";
									// table = table + "<tr><th>location: </th><td>" + results[i].location + "</td></tr>";
									// table = table + "<tr><th>groupName: </th><td>" + results[i].groupName + "</td></tr>";
								}
								document.write('<table>' + table + '</table>');
							</script>
						</div>
					</div>
				</div>
<!-- 					<div class="vbox wb_container" id="wb_main">
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
					</div> -->
					<div class="wb_sbg"></div>
				</div>{{hr_out}}
			</body>
			</html>
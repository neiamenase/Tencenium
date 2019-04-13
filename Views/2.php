<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Upcoming</title>
	<base href="{{base_url}}" />
	<meta name="viewport" content="width=1200" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Upcoming />
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
							<a href="Upcoming/" target="_self">Upcoming</a>
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
				<div id="wb_element_instance20" class="wb_element wb-elm-orient-horizontal">
					<div class="wb-elm-line"></div>
				</div>
				<div id="wb_element_instance21" class="wb_element" style=" line-height: normal;">
					<h5 class="wb-stl-subtitle" style="text-align: center;">
						<span class="wb_tr_ok">UPCOMING</span>
					</h5>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="vbox wb_container" id="wb_main">
			<div class="wb_cont_inner">

				<div id="wb_element_instance24" class="wb_element" style=" line-height: normal;">
					<h2 class="wb-stl-heading2">
						<span class="wb_tr_ok">Details</span>
					</h2>
				</div>
				<!-- <div id="wb_element_instance25" class="wb_element" style="width: 100%;">
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
				</div> -->
				<div class="wb_cont_outer"></div>
				<div class="wb_cont_bg"></div>
			</div>
			<div class="vbox wb_container" id="wb_footer">
				<div class="wb_cont_inner" style="height: 134px;">
					<div id="wb_element_instance23" class="wb_element" style=" line-height: normal;">
						<script type="text/javascript">
							  var results = <?php include 'connectDB.php';	echo  getUpcomingEvent();?>;
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
									table = table + "<td>" + obj[key] + "</td>"; 
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

				<!-- <div id="wb_element_instance22" class="wb_element" style=" line-height: normal;">
					<p class="wb-stl-footer">© 2018 
						<a href="http://tencenium.000webhostapp.com">tencenium.000webhostapp.com</a>
					</p>
				</div> -->
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

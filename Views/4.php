<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Draw</title>
	<base href="{{base_url}}" />
	<meta name="viewport" content="width=1200" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20180222164022" type="text/javascript"></script>
	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20180215152128" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1519836400" rel="stylesheet" type="text/css" />
	<link href="css/4.css?ts=1519836400" rel="stylesheet" type="text/css" />
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
						<li>
							<a href="Event/" target="_self">Events</a>
						</li>
						<li class="active">
							<a href="Draw/" target="_self">Draw</a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div id="wb_element_instance28" class="wb_element wb-elm-orient-horizontal">
					<div class="wb-elm-line"></div>
				</div>
				<div id="wb_element_instance31" class="wb_element wb-elm-orient-horizontal">
					<div class="wb-elm-line"></div>
				</div>
				<div id="wb_element_instance32" class="wb_element" style=" line-height: normal;">
					<h5 class="wb-stl-subtitle" style="text-align: center;">
						<span class="wb_tr_ok">Draw!</span>
					</h5>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>

		<div class="vbox wb_container" id="wb_main">
			<div class="wb_cont_inner">
				<div id="wb_element_instance40" class="wb_element">
					<script type="text/javascript">
						var results = <?php include 'connectDB.php';	echo  getIsDrawingUpcomingEvent();?>;
						select = '';
						for ( var i = 0; i < results.length; i++) {
							select = select + "<option value=\"" + results[i]["Id"] + "\">" + results[i]["Name"] + "</option>";
						}
						document.write('<select id=wb_upcomingSelect>' + select + '</select>');
					</script>
				</div>

				<div id="wb_element_instance41" class="wb_element">
					<button type="button">Draw</button>
				</div>

			</div>
		</div>
	</div>

	<div class="wb_cont_outer"></div>
	<div class="wb_cont_bg"></div>
</div>
<div class="wb_sbg"></div>
</div>{{hr_out}}
</body>
</html>
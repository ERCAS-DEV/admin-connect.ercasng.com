<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title>ERCASConnect_ControlPanel</title>
		<meta name="description" content="">
		<meta name="author" content="">
			
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/smartadmin-production-plugins.min.css');?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/smartadmin-production.min.css');?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/smartadmin-skins.min.css');?>">

		<!-- SmartAdmin RTL Support  -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/smartadmin-rtl.min.css');?>">

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href=<?php echo base_url('assets/css/your_style.css');?>"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/demo.min.css');?>">

		<!-- FAVICONS -->
		<link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon/favicon.ico');?>" type="image/x-icon">
		<link rel="icon" href="<?php echo base_url('assets/img/favicon/favicon.ico');?>" type="image/x-icon">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="<?php echo base_url('assets/img/splash/sptouch-icon-iphone.png');?>">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/splash/touch-icon-ipad.png');?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/img/splash/touch-icon-iphone-retina.png');?>">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/img/splash/touch-icon-ipad-retina.png');?>">
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="<?php echo base_url('assets/img/splash/ipad-landscape.png');?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="<?php echo base_url('assets/img/splash/ipad-portrait.png');?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="<?php echo base_url('assets/img/splash/iphone.png');?>" media="screen and (max-device-width: 320px)">
<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="<?php echo base_url('assets/js/plugin/pace/pace.min.js');?>"></script>

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="<?php echo base_url('assets/js/libs/jquery-2.1.1.min.js');?>"><\/script>');
			}
		</script>

		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="<?php echo base_url('assets/js/libs/jquery-ui-1.10.3.min.js');?>"><\/script>');
			}
		</script>

		

		

	</head>
	
	<!--

	TABLE OF CONTENTS.
	
	Use search to find needed section.
	
	===================================================================
	
	|  01. #CSS Links                |  all CSS links and file paths  |
	|  02. #FAVICONS                 |  Favicon links and file paths  |
	|  03. #GOOGLE FONT              |  Google font link              |
	|  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
	|  05. #BODY                     |  body tag                      |
	|  06. #HEADER                   |  header tag                    |
	|  07. #PROJECTS                 |  project lists                 |
	|  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
	|  09. #MOBILE                   |  mobile view dropdown          |
	|  10. #SEARCH                   |  search field                  |
	|  11. #NAVIGATION               |  left panel & navigation       |
	|  12. #RIGHT PANEL              |  right panel userlist          |
	|  13. #MAIN PANEL               |  main panel                    |
	|  14. #MAIN CONTENT             |  content holder                |
	|  15. #PAGE FOOTER              |  page footer                   |
	|  16. #SHORTCUT AREA            |  dropdown shortcuts area       |
	|  17. #PLUGINS                  |  all scripts and plugins       |
	
	===================================================================
	
	-->
	
	<!-- #BODY -->
	<!-- Possible Classes

		* 'smart-style-{SKIN#}'
		* 'smart-rtl'         - Switch theme mode to RTL
		* 'menu-on-top'       - Switch to top navigation (no DOM change required)
		* 'no-menu'			  - Hides the menu completely
		* 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
		* 'fixed-header'      - Fixes the header
		* 'fixed-navigation'  - Fixes the main menu
		* 'fixed-ribbon'      - Fixes breadcrumb
		* 'fixed-page-footer' - Fixes footer
		* 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
	-->
	<body class="fixed-header fixed-navigation fixed-footer fixed-ribbon">

		<!-- HEADER -->
		<header id="header">
			<div id="logo-group">

				<!-- PLACE YOUR LOGO HERE -->
				<span id="logo"> <img src="<?php echo base_url('assets/img/logo.png');?>" alt="SmartAdmin"> </span>
				<!-- END LOGO PLACEHOLDER -->

				
			</div>


			<!-- pulled right: nav area -->
			<div class="pull-right">
				
				<!-- collapse menu button -->
				<div id="hide-menu" class="btn-header pull-right">
					<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
				</div>
				<!-- end collapse menu -->
				

				<!-- logout button -->
				<div id="logout" class="btn-header transparent pull-right">
					<span><a href="<?php echo site_url('login/logout');?>" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
				</div>
				<!-- end logout button -->


				<!-- fullscreen button -->
				<div id="fullscreen" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
				</div>
				<!-- end fullscreen button -->
			</div>
			<!-- end pulled right: nav area -->

		</header>
		<!-- END HEADER -->
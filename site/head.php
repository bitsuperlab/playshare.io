<?php include('config.php'); ?>

<!DOCTYPE html>

<html>

<head>

<!-- META -->
<meta name="viewport" content="width=device-width, user-scalable=no">

<title>Maya - Smart & Powerful HTML Theme</title>

<!-- CSS LIBS -->

<link href='css/style.css' rel='stylesheet' type="text/css">
<link href='css/plugins.css' rel='stylesheet' type="text/css">

<!-- GOOGLE FONTS -->
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>

<style type="text/css">
	
	/* THEME COLORS */
	
	.wh-clr { color: #fff; }
	.wh-clr-hov:hover { color: #fff; }
	.brd-wh-clr { border-color: #fff; }
	.brd-wh-clr-hov:hover { border-color: #fff; }
	.bg-wh-clr { background-color: #fff; }
	.bg-wh-clr-hov:hover { background-color: #fff; }
	.bg-wh-alpha { background-color: rgba(255,255,255,0.9); }
	
	.bg-bk-alpha { background-color: rgba(0,0,0,0.7); }
	
	.gr1-clr { color: #fafafa; }
	.gr1-clr-hov:hover { color: #fafafa; }
	.brd-gr1-clr { border-color: #fafafa; }
	.brd-gr1-clr-hov:hover { border-color: #fafafa; }
	.bg-gr1-clr { background-color: #fafafa; }
	.bg-gr1-clr-hov:hover { background-color: #fafafa; }
	
	.gr2-clr { color: #dfdfdf; }
	.gr2-clr-hov:hover { color: #dfdfdf; }
	.brd-gr2-clr { border-color: #dfdfdf; }
	.brd-gr2-clr-hov:hover { border-color: #dfdfdf; }
	.bg-gr2-clr { background-color: #dfdfdf; }
	.bg-gr2-clr-hov:hover { background-color: #dfdfdf; }
	
	.gr3-clr { color: #333; }
	.gr3-clr-hov:hover { color: #333; }
	.brd-gr3-clr { border-color: #333; }
	.brd-gr3-clr-hov:hover { border-color: #333; }
	.bg-gr3-clr { background-color: #333; }
	.bg-gr3-clr-hov:hover { background-color: #333; }
	
	/* CUSTOM COLORS */
	
	.fs-clr { color: <?php echo $fs_clr; ?>; } 
	.fs-clr-hov:hover { color: <?php echo $fs_clr; ?>; } 
	.bg-fs-clr { background-color: <?php echo $fs_clr; ?>; }
	.bg-fs-clr-hov:hover { background-color: <?php echo $fs_clr; ?>; } 
	.bg-fs-alpha { background-color: <?php echo $fs_alpha; ?>; }
	.brd-fs-clr { border-color: <?php echo $fs_clr; ?>; }
	.brd-fs-clr-hov:hover { border-color: <?php echo $fs_clr; ?>; }
		
	.nd-clr { color: <?php echo $nd_clr; ?>; } 
	.nd-clr-hov:hover { color: <?php echo $nd_clr; ?>; } 
	.bg-nd-clr { background-color: <?php echo $nd_clr; ?>; }
	.bg-nd-clr-hov:hover { background-color: <?php echo $nd_clr; ?>; }
	.bg-nd-alpha { background-color: <?php echo $nd_alpha; ?>; }
	.brd-nd-clr { border-color: <?php echo $nd_clr; ?>; }
	.brd-nd-clr-hov:hover { border-color: <?php echo $fs_clr; ?>; }
		
	/* Preloader */
	
	#jpreBar {
		background: <?php echo $fs_clr; ?>;
	}
	
	#jprePercentage {
		border-color: <?php echo $fs_clr; ?>;
		color: <?php echo $fs_clr; ?>;
	}
	
	/* Standard Menu/Submenu */
		
	.main-menu li:hover a  {
		color: <?php echo $nd_clr; ?>;
	}
	
	.header-dark .sub-menu li a {
		background-color: <?php echo $nd_clr; ?> !important;
	}
	
	.header-dark .sub-menu li a:hover {
		background-color: #fff !important;
		color: <?php echo $nd_clr; ?>
	}
	
	.sub-menu li:hover a {
		color: <?php echo $nd_clr; ?> !important;
	}
	
	/* Sticky Menu/Submenu */
	
	.sticky .main-menu li, .sticky .main-menu li a {
		color: <?php echo $nd_clr; ?>;
	}
	
	.sticky .main-menu li:hover a {
		background-color: <?php echo $nd_clr; ?>;
	}
	
	.sticky .sub-menu li a {
		background-color: <?php echo $fs_clr; ?> !important;
	}
	
	.sticky .sub-menu li:hover a {
		background-color: <?php echo $nd_clr; ?> !important;
	}
	
	/* Sticky Quick Icons */
	
	.sticky #quick-icons li {
		color: <?php echo $nd_clr; ?>;
	}
	
	.sticky #quick-icons li:hover {
		border-color: <?php echo $nd_clr; ?>;
	}
	
	/* Sticky Nav Icons */
	
	.sticky-icons li{
		color: <?php echo $nd_clr; ?> !important;
	}
		
	/* Filters */
 	
	.port-filter li.selected {
		background-color: <?php echo $fs_clr; ?>;
	}
	
	/* Slills */
	
	.team-skills li .bar-val {
   		background: <?php echo $fs_clr; ?>;
	}
	
	/* Mobile Menu */
	
	#mobile-menu {
		background-color: <?php echo $nd_clr; ?>;
	}
	
	#mobile-menu li:hover {
		background: <?php echo $fs_clr; ?>;
	}
	
	/* Video */
	
	#volume { position: absolute; left: 0; bottom: 0; background: <?php echo $nd_clr; ?>; z-index:9999; color: #fff; padding: 10px; display: block; opacity: 0.2; font-size: 16px; cursor: pointer; }
	
	#volume:hover { opacity: 1; }
	
	#internal-video:after { content: ''; display: block; width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: <?php echo $fs_alpha; ?>; }
	
	/* Typography */
	
	blockquote { 
		border-color: <?php echo $fs_clr; ?>;
		color: <?php echo $fs_clr; ?>; 
	}
	
	h1, h2, h3 { color: <?php echo $fs_clr; ?>; }
	
	.ui-tabs .ui-tabs-nav li.ui-tabs-active {
		background: <?php echo $fs_clr; ?>;
		color: #fff;
	}

</style>

</head>

<body>
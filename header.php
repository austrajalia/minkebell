<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package minkebell
 */

?>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- animate.css -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.css" rel="stylesheet">
    
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    
    <!-- font awesome -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 

	<!-- custom css -->
	<link href="<?php bloginfo('stylesheet_directory');?>/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
	 
	  <header id="top">
  		<nav class="container">
	  		<a class="site-title" href="index.html">Minkebell</a> 
	  		
		  		<button class="pull-right menu-toggle" onclick="openNav()">
		  			<div class="burger "></div>
		  			<div class="burger"></div>
		  			<div class="burger"></div>
		  		</button>
		  		
		  		<div id="sideNavigation" class="nav-toggle sidenav">						 			 <?php /* Primary navigation */
		  					wp_nav_menu( array(
		  						'theme_location' => 'primary',
		  						'container_id' => '#sideNav-inner',
		  						) );
		    		?>
				</div>

  		</nav>
  </header>
  
		  		
    
  
 </div>
 </nav>
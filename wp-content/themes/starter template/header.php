<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SplashomnimediaTheme
 */

    if(get_permalink() != wp_login_url() && !is_user_logged_in()){
        wp_redirect( wp_login_url($redirect) ); exit;
    }
    

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<nav class="navbar navbar-inverse">
		<div class="container">
		  <ul class="nav navbar-nav">
		    <li><a href="#">Dashboard</a></li>
		    <li><a href="#">Coupons</a></li>
		    <li><a href="#">Invoices</a></li>
		    <li><a href="#">Restaurants</a></li>
		    <li><a href="#">Users</a></li>
		    <li><a href="#">Orders</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
		      <li><a href="#">User</a></li>
		   </ul>
		</div>   
	</nav>
	<div id="content">
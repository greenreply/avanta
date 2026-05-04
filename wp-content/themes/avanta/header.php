<?php
/**
 * Header file for the Avanta WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Avanta
 * @since Avanta 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="preconnect" href="https://fonts.googleapis.com"/>
		<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garant:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,600&family=Jost:wght@200;300;400;500;600&display=swap" rel="stylesheet"/>

		<!--  Main CSS File -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

		<!-- TOP BAR -->
		<div class="top-bar" id="topBar">
		  	<div class="top-bar-left">
			    <?php if( function_exists('have_rows') && have_rows('top_bar_annoucement', 'option') ): ?>
				    <?php while( have_rows('top_bar_annoucement', 'option') ): the_row(); 
				        $announcement_text = get_sub_field('announcement_text');
				        $announcement_icon = get_sub_field('announcement_icon');
				        $is_static = get_sub_field('announcement_static_line'); ?>
			            <div class="dynamic-item">
			                <div class="tb-icon-img"><?php echo $announcement_icon; ?></div>
			                <span class="dynamic-content"><?php echo esc_html($announcement_text); ?></span>
			            </div>   
				    <?php endwhile; ?>
				<?php endif; ?>

				<div class="dynamic-text" id="dynamicText"></div>
			</div>
		  	<div class="top-bar-right">
		    	<div class="tb-clock">
			      	<div class="tb-clock-icon">
			        	<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
			      	</div>
			      	<div class="tb-clock-time-inner">
			        	<div class="tb-clock-time" id="liveTime">00:00:00</div>
			        	<div class="tb-clock-label">IST</div>
			      	</div>
			    </div>
		    	<div class="tb-separator"></div>
			    <div class="tb-weather" id="weatherWidget">
			      	<span class="tb-weather-icon">⛅</span>
			      	<div class="tb-weather-inner">
				        <div class="tb-weather-temp" id="weatherTemp">--°C</div>
				        <div class="tb-weather-loc">Srinagar</div>
			      	</div>
			    </div>
		  	</div>
		</div>

		<!-- NAVBAR -->
		<nav class="nav" id="navbar">
			<?php $avanta_logo_image = get_field('avanta_logo_image', 'option'); ?>
			<?php if(!empty($avanta_logo_image)) { ?>
				<a href="<?php echo site_url(); ?>" class="nav-logo"><img src="<?php echo $avanta_logo_image['url']; ?>" alt="<?php echo $avanta_logo_image['alt']; ?>" width="<?php echo $avanta_logo_image['width']; ?>" height="<?php echo $avanta_logo_image['height']; ?>"></a>
			<?php } else { ?>
				<a href="<?php echo site_url(); ?>" class="nav-logo"><?php echo get_field('avanta_logo_text', 'option'); ?></a>
			<?php } ?>
			<div class="nav-inner">
				<?php
					wp_nav_menu(array(
					    'theme_location' => 'header_menu',
					    'container'      => false,
					    'menu_class'     => 'nav-links',
					    'menu_id'        => 'navLinks',
					));
				?>
				<button class="menu-close" id="menuClose">✕</button>
			  	<button class="mobile-toggle" id="mobileToggle" aria-label="Menu">
			    	<span></span><span></span><span></span>
			  	</button>
			  	<div class="tb-account" id="accountToggle" onclick="toggleAccountMenu()">
					<div class="tb-account-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
					</div>
		      		<span class="tb-account-label">Account</span>
		      		<div class="tb-dropdown" id="accountDropdown">
						<a href="guest-login.html"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg>Sign In / Register</a>
		        		<a href="guest-login.html"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>Manage Booking</a>
		        		<a href="guest-login.html"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>Membership</a>
		        		<a href="guest-login.html"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>Rewards</a>
		      		</div>
		    	</div>
		    </div>
		</nav>
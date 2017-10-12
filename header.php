<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package rootstrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- favicon -->

<?php if ( rootstrap_get_option( 'custom_favicon' ) ) { ?>
<link rel="icon" href="<?php echo rootstrap_get_option( 'custom_favicon' ); ?>" />
<?php } ?>

<!--[if IE]><?php if ( rootstrap_get_option( 'custom_favicon' ) ) { ?><link rel="shortcut icon" href="<?php echo rootstrap_get_option( 'custom_favicon' ); ?>" /><?php } ?><![endif]-->

<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>
<?php do_action( 'before' ); ?>
<div id="page" class="hfeed site">
<?php do_action( 'nav-before' ); ?>
		<nav class="navbar navbar-default " role="navigation">
			<div class="container">
		        <div class="navbar-header">
		            <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>	-->
					<div id="logo" <!-- Your site title as branding in the menu -->
				    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if(rootstrap_get_option('logo_uploader')=='') {
						echo bloginfo( 'name' ); ?>
						<span id="site-description"><?php bloginfo( 'description' ); ?></span>
					 <?php } else { ?>
						<img src="<?php echo rootstrap_get_option('logo_uploader'); ?>">
					<?php } ?>
					</a>
					</div>




<!-- <button  onclick="location.href='http://www.kinderhospice.commdesign-demo.nl/doneren/';" class="donate-btn donate-btn--stripe donate-btn--radius">Doneer <span class="glyphicon glyphicon-heart" aria-hidden="true"></span></button> -->
<a href="http://www.kinderhospice.commdesign-demo.nl/doneren/" class=" btn btn-sm animated-button gibson-one">Doneer nu <span class="glyphicon glyphicon-heart" aria-hidden="true" style="color:#339933;"></span></a>

		        </div>
				<?php// rootstrap_header_menu(); ?>
				<?php//  wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

		    </div>
				<div class="ult-vc-seperator bottom_seperator ult-cloud-seperator uvc-seperator-4663208826636 header-seperator" style="
			  background-color: #fff!important;" data-full-width="true" data-border="undefined" data-border-width="undefined"><div class="ult-main-seperator-inner"><svg class="cloud-inner-seperator uvc-cloud-seperator" style="background-color: #fff!important;" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="#42a0d6" width="100%" height="80" viewBox="0 0 2.23333 0.1" preserveAspectRatio="none" style="height: 50px;"><path class="fil0" d="M2.23281 0.0372047c0,0 -0.0261929,-0.000389764 -0.0423307,-0.00584252 0,0 -0.0356181,0.0278268 -0.0865354,0.0212205 0,0 -0.0347835,-0.00524803 -0.0579094,-0.0283701 0,0 -0.0334252,0.0112677 -0.0773425,-0.00116929 0,0 -0.0590787,0.0524724 -0.141472,0.000779528 0,0 -0.0288189,0.0189291 -0.0762362,0.0111535 -0.00458268,0.0141024 -0.0150945,0.040122 -0.0656811,0.0432598 -0.0505866,0.0031378 -0.076126,-0.0226614 -0.0808425,-0.0308228 -0.00806299,0.000854331 -0.0819961,0.0186969 -0.111488,-0.022815 -0.0076378,0.0114843 -0.059185,0.0252598 -0.083563,-0.000385827 -0.0295945,0.0508661 -0.111996,0.0664843 -0.153752,0.019 -0.0179843,0.00227559 -0.0571181,0.00573622 -0.0732795,-0.0152953 -0.027748,0.0419646 -0.110602,0.0366654 -0.138701,0.00688189 0,0 -0.0771732,0.0395709 -0.116598,-0.0147677 0,0 -0.0497598,0.02 -0.0773346,-0.00166929 0,0 -0.0479646,0.0302756 -0.0998937,0.00944094 0,0 -0.0252638,0.0107874 -0.0839488,0.00884646 0,0 -0.046252,0.000775591 -0.0734567,-0.0237087 0,0 -0.046252,0.0101024 -0.0769567,-0.00116929 0,0 -0.0450827,0.0314843 -0.118543,0.0108858 0,0 -0.0715118,0.0609803 -0.144579,0.00423228 0,0 -0.0385787,0.00770079 -0.0646299,0.000102362 0,0 -0.0387559,0.0432205 -0.125039,0.0206811 0,0 -0.0324409,0.0181024 -0.0621457,0.0111063l-3.93701e-005 0.0412205 2.2323 0 0 -0.0627953z"></path></svg></div><div class="separator-icon"></div></div>

		</nav>

		<!-- .site-navigation -->
		<?php do_action( 'nav-after' ); ?>

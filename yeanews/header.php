<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script>

<script type="text/javascript">
  VK.init({apiId: 5078499, onlyWidgets: true});
</script>
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<script src="//yeager.ru/wp-content/themes/yeanews/assets/js/likely.js"></script>
<script src="//yeager.ru/wp-content/themes/yeanews/assets/js/emerge.js"></script>
<link rel='stylesheet' href='//yeager.ru/wp-content/themes/yeanews/assets/css/likely.css' type='text/css' media='all' />
</head>

<body <?php body_class(); ?>>
	
	<?php $header_orientation_class = gridlove_get_option( 'header_orientation' ) == 'wide' ? 'gridlove-header-wide' : ''; ?>
	<?php $shadow_class = gridlove_get_option('header_shadow') ? 'gridlove-header-shadow' : ''; ?>

	<header id="header" class="gridlove-site-header hidden-md-down <?php echo esc_attr( $header_orientation_class ); ?> <?php echo esc_attr( $shadow_class ); ?>">
			
			<?php if( gridlove_get_option( 'header_top' ) ): ?>
				<?php get_template_part( 'template-parts/header/topbar' ); ?>
			<?php endif; ?>

			<?php get_template_part('template-parts/header/layout-'.gridlove_get_option( 'header_layout' )); ?>

			<?php if ( gridlove_get_option( 'header_sticky' ) ): ?>
				<?php get_template_part( 'template-parts/header/sticky' ); ?>
			<?php endif; ?>

	</header>

	<?php get_template_part( 'template-parts/header/responsive' ); ?>
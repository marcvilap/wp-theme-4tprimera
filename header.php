<?php
/**
 * Header
 *
 * @package WordPress
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="absolute top-0 inset-x-0 py-8 z-10 text-white border-b border-white/20 overflow-hidden">
	<div class="flex items-center px-8 xl:px-20">
		<nav id="nav" class="max-lg:fixed max-lg:inset-0 max-lg:bg-black/90 max-lg:z-20 max-lg:p-8 max-lg:flex max-lg:items-center lg:flex-1 max-lg:transition-all max-lg:duration-300 max-lg:opacity-0 max-lg:invisible">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header',
					'container'      => false,
					'fallback_cb'    => false,
					'depth'          => 2,
					'menu_class'     => 'header-menu',
				)
			);
			?>
			<button class="absolute top-8 right-8 toggle-nav lg:hidden">
				<i class="icon-close w-8"></i>
			</button>
		</nav>
		<a class="w-40 absolute left-1/2 -ml-20" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img class="w-full" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/logo.png' ) ); ?>" alt="">
		</a>
		<button class="ml-auto toggle-nav lg:hidden">
			<i class="icon-menu w-8"></i>
		</button>
	</div>
	<ul class="languages absolute top-1 right-8 flex gap-4 text-sm uppercase xl:right-20">
		<?php
		pll_the_languages(
			array(
				'display_names_as' => 'slug',
				'dropdown'         => false,
			)
		);
		?>
	</ul>
</header>

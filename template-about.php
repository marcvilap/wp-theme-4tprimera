<?php
/**
 * Template name: Quiénes somos
 *
 * @package WordPress
 */

get_header();
?>
<main class="overflow-hidden">

	<div class="h-[26rem] text-white text-center flex items-center bg-center bg-cover bg-banner-about">
		<div class="container">
			<h1 class="mt-20 font-light font-serif text-5xl"><?php the_title(); ?></h1>
		</div>
	</div>

	<div class="py-20 bg-stone-50">
		<div class="container gap-y-8 grid md:grid-cols-2">
			<div data-effect="fade-right">
				<h2 class="mb-4 font-cursive text-bronze-400 text-7xl lg:text-8xl">Vanesa Lafuente</h2>
				<div class="prose">
					<?php
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
					?>
				</div>
			</div>
			<div data-effect="fade-left" class="md:pl-8 xl:pl-20">
				<img class="w-full" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/about-01.jpg' ) ); ?>" alt="">
			</div>
		</div>
	</div>

	<div class="py-20">
		<div data-effect="fade-up" class="container">
			<div class="swiper swiper-gallery mb-4">
				<div class="swiper-wrapper">
					<?php foreach ( get_field( 'gallery' ) as $image ) : ?>
					<div class="swiper-slide">
						<img class="w-full" src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="">
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="swiper swiper-thumbs">
				<div class="swiper-wrapper">
					<?php foreach ( get_field( 'gallery' ) as $image ) : ?>
					<div class="swiper-slide cursor-pointer">
						<img class="w-full aspect-square object-cover" src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="">
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

</main>
<?php
get_footer();

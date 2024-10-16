<?php
/**
 * Template name: Blog
 *
 * @package WordPress
 */

get_header();
?>
<main>

	<div class="h-[26rem] text-white text-center flex items-center bg-center bg-cover bg-banner-about">
		<div class="container">
			<h1 class="mt-20 font-light font-serif text-5xl"><?php the_title(); ?></h1>
		</div>
	</div>

	<div class="py-20 bg-stone-50">
		<div class="container Xgap-y-8 Xgrid Xmd:grid-cols-2">
			<div data-effect="fade-right">
				<div class="prose">
					<?php
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
					?>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();

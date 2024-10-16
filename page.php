<?php
/**
 * Page
 *
 * @package WordPress
 */

get_header();
?>
<div class="bg-black h-28"></div>
<main class="py-20">
	<div class="container">
		<h1 class="text-center font-serif text-4xl mb-8"><?php the_title(); ?></h1>
		<div class="prose">
			<?php
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
			?>
		</div>
	</div>
</main>
<?php
get_footer();

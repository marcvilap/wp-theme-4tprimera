<?php
/**
 * Page
 *
 * @package WordPress
 */

get_header();

// Configurar paginación
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Argumentos para WP_Query
$args = array(
   
    'posts_per_page' => 10,         // Número de posts por página
    'paged'          => $paged,     // Página actual en la paginación
    
);

$custom_query = new WP_Query($args);

?>
<main>

    <div class="h-[26rem] text-white text-center flex items-center bg-center bg-cover bg-banner-property">
        <div class="container">
            <h1 class="mt-20 font-light font-serif text-5xl"><?php esc_html_e( 'Inmuebles', 'wp' ); ?></h1>
        </div>
    </div>

    <div class="py-20 bg-stone-50">
        <div class="container">
            <div class="grid gap-8">
                <?php
                if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) :
                        $custom_query->the_post();
                        ?>
                        <article data-effect="fade-up" class="bg-white grid lg:grid-cols-2">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full aspect-[4/3] object-cover')); ?>
                            </a>
                            <div class="p-8">
                                <div class="text-right text-bronze-400 font-serif uppercase">
                                    <?php echo esc_html(get_field('type')['label']); ?></div>
                                <div class="mb-4 font-bold text-bronze-400 font-serif text-3xl"><?php the_field('price'); ?></div>
                                <h3 class="mb-4 font-serif text-2xl">
                                    <a class="hover:underline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="text-bronze-400 text-sm"><?php the_field('address'); ?></div>
                                <ul class="text-bronze-400 text-sm font-bold mb-4 flex flex-wrap gap-x-6">
                                    <li><?php the_field('area'); ?> m²</li>
                                    <li><?php the_field('bedrooms'); ?> <?php esc_html_e('hab.', 'wp'); ?></li>
                                    <li><?php the_field('bathrooms'); ?> <?php esc_html_e('baños', 'wp'); ?></li>
                                </ul>
                                <div class="mb-4"><?php the_excerpt(); ?></div>
                                <a class="flex items-center gap-4 hover:underline" href="<?php the_permalink(); ?>">
                                    <strong><?php esc_html_e('Saber más', 'wp'); ?></strong>
                                    <span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
                                        <i class="icon-plus-circle m-auto w-6"></i>
                                    </span>
                                </a>
                            </div>
                        </article>
                        <?php
                    endwhile;
				
				
                    // Función para mostrar la paginación
                    $total_pages = $custom_query->max_num_pages;
                    if ($total_pages > 1){
						echo "<div class='pagination'>";
                        $current_page = max(1, get_query_var('paged'));
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => '/page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                        ));
						echo "</div>";
                    }
                    wp_reset_postdata();
                else :
                    echo '<p>No hay inmuebles disponibles que cumplan los criterios.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>

    <div class="h-[26rem] bg-center bg-cover bg-banner-property2 py-20 flex items-center">
        <div class="container">
            <h3 data-effect="fade-up" class="text-center font-serif mx-auto max-w-3xl text-3xl lg:text-4xl">
                <?php esc_html_e('Disponemos de propiedades que no están anunciadas y con las que trabajamos con discreción para mantener la confidencialidad de algunos clientes propietarios que así lo solicitan, no dudes en', 'wp'); ?>
                <a class="underline"
                   href="<?php the_permalink(pll_get_post(23)); ?>"><?php esc_html_e('contactar con nosotros', 'wp'); ?></a>
            </h3>
        </div>
    </div>

</main>
<?php

get_footer();
?>

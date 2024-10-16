<?php
/**
 * Page
 *
 * @package WordPress
 */

get_header();

?>
<main class="overflow-hidden">

    <div class="h-[26rem] text-white text-center flex items-center bg-center bg-cover bg-banner-property">
        <div class="container">
            <h1 class="mt-20 font-light font-serif text-5xl"><?php esc_html_e( 'Inmuebles', 'wp' ); ?></h1>
        </div>
    </div>

    <div class="py-20 bg-stone-50">
        <div class="container">
            <div data-effect="fade-up">
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
                            <img class="w-full aspect-square object-cover"
                                src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="">
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="my-8 text-bronze-400 font-serif uppercase"><?php echo esc_html( get_field('type')['label'] ); ?>
            </div>

            <div class="grid gap-8 lg:grid-cols-2 xl:gap-x-20">
                <div data-effect="fade-right">
                    <div class="mb-4 font-bold text-bronze-400 font-serif text-3xl"><?php the_field( 'price' ); ?></div>
                    <h3 class="mb-4 font-serif text-2xl"><?php the_title(); ?></h3>
                    <div class="text-bronze-400 text-sm"><?php the_field( 'address' ); ?></div>
                    <ul class="text-bronze-400 text-sm font-bold mb-8 flex flex-wrap gap-x-6">
                        <li><?php the_field( 'area' ); ?> m²</li>
                        <li><?php the_field( 'bedrooms' ); ?> <?php esc_html_e( 'hab.', 'wp' ); ?></li>
                        <li><?php the_field( 'bathrooms' ); ?> <?php esc_html_e( 'baños', 'wp' ); ?></li>
                    </ul>
                    <div class="prose">
                        <?php
						while ( have_posts() ) :
							the_post();
							the_content();
						endwhile;
						?>
                    </div>
                </div>
                <div data-effect="fade-left">
                    <form class="p-8 bg-white"
                        data-ajax="<?php echo esc_url( admin_url( 'admin-ajax.php?action=contact_form' ) ); ?>">
                        <?php wp_nonce_field(); ?>
                        <h3 class="font-cursive text-bronze-400 text-7xl">
                            <?php esc_html_e( 'Solicitar información', 'wp' ); ?></h3>
                        <label class="block mb-8">
                            <span
                                class="font-bold uppercase text-sm"><?php esc_html_e( 'Nombre y apellidos', 'wp' ); ?></span>
                            <input class="input-text" type="text" name="first_name"
                                placeholder="<?php esc_html_e( 'Escribe aquí', 'wp' ); ?>" required>
                        </label>
                        <label class="block mb-8">
                            <span class="font-bold uppercase text-sm"><?php esc_html_e( 'Teléfono', 'wp' ); ?></span>
                            <input class="input-text" type="tel" name="phone"
                                placeholder="<?php esc_html_e( 'Escribe aquí', 'wp' ); ?>" required>
                        </label>
                        <label class="block mb-8">
                            <span class="font-bold uppercase text-sm"><?php esc_html_e( 'Email', 'wp' ); ?></span>
                            <input class="input-text" type="email" name="email"
                                placeholder="<?php esc_html_e( 'Escribe aquí', 'wp' ); ?>" required>
                        </label>
                        <label class="block mb-8">
                            <span class="font-bold uppercase text-sm"><?php esc_html_e( 'Mensaje', 'wp' ); ?></span>
                            <textarea class="input-text" name="comment" rows="2"
                                placeholder="<?php esc_html_e( 'Escribe aquí', 'wp' ); ?>" required></textarea>
                        </label>
                        <label class="block mb-4">
                            <input type="checkbox" required>
                            <span class="text-sm"><?php esc_html_e( 'Acepto la', 'wp' ); ?> <a class="underline"
                                    target="_blank"
                                    href="<?php the_permalink( pll_get_post( 14 ) ); ?>"><?php esc_html_e( 'política de privacidad', 'wp' ); ?></a></span>
                        </label>
                        <button class="button"><?php esc_html_e( 'Enviar mensaje', 'wp' ); ?></button>
                        <div class="alert"></div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="h-[26rem] bg-center bg-cover bg-banner-property2 py-20 flex items-center">
        <div class="container">
            <h3 data-effect="fade-up" class="text-center font-serif mx-auto max-w-3xl text-3xl lg:text-4xl">
                <?php esc_html_e( 'Disponemos de propiedades que no están anunciadas y con las que trabajamos con discreción para mantener la confidencialidad de algunos clientes propietarios que asi lo solicitan, no dudes en', 'wp' ); ?>
                <a class="underline"
                    href="<?php the_permalink( pll_get_post( 23 ) ); ?>"><?php esc_html_e( 'contactar con nosotros', 'wp' ); ?></a>
            </h3>
        </div>
    </div>

</main>
<?php

get_footer();
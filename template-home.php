<?php
/**
 * Template name: Inicio
 *
 * @package WordPress
 */

get_header();
?>
<main class="overflow-hidden">

    <div class="bg-center bg-cover bg-banner-home text-white text-center">
        <div data-effect="fade-up" class="container pt-28 pb-8 min-h-screen flex flex-col items-center">
            <h1 class="max-w-4xl mt-auto font-serif text-6xl lg:text-8xl">
                <?php esc_html_e( 'Gestión Inmobiliaria en Granollers', 'wp' ); ?></h1>
            <h2 class="max-w-3xl font-cursive text-bronze-300 text-5xl lg:text-7xl">
                <?php esc_html_e( 'Nuestra prioridad es conocer y atender los sueños de nuestros clientes.', 'wp' ); ?>
            </h2>
            <a class="button mb-8" href="<?php the_permalink( pll_get_post( 21 ) ); ?>">
                <span><?php esc_html_e( 'Ver servicios', 'wp' ); ?></span>
                <i class="icon-plus-circle"></i>
            </a>
            <span class="w-10 h-10 bg-bronze-400 rounded-full">
                <i class="icon-lock mt-auto bg-black w-10 scale-105"></i>
            </span>
            <p><?php esc_html_e( 'Entra, tenemos el secreto', 'wp' ); ?></p>
        </div>
    </div>

    <div class="pt-20 pb-40 text-center">
        <div class="container">
            <div class="flex flex-wrap gap-4 justify-between items-start">
                <img data-effect="fade-right" class="w-full lg:w-96 lg:-ml-20"
                    src="<?php echo esc_url( get_theme_file_uri( '/assets/images/home-01.jpg' ) ); ?>" alt="">
                <img data-effect="fade-left" class="w-full lg:w-56"
                    src="<?php echo esc_url( get_theme_file_uri( '/assets/images/home-02.jpg' ) ); ?>" alt="">
            </div>
            <h2 data-effect="fade-up"
                class="text-bronze-400 font-cursive text-7xl mt-20 lg:-mt-40 lg:-mb-8 lg:text-[11rem]">
                <?php esc_html_e( 'Te acompañamos', 'wp' ); ?></h2>
            <p data-effect="fade-up" class="relative z-10 font-serif mx-auto mb-20 max-w-3xl text-2xl lg:text-3xl">
                <?php esc_html_e( '4rt PRIMERA te ofrece una atención de primera clase, global y personalizada, con la tranquilidad que te garantiza un equipo de profesionales cualificado, asesorándote a lo largo de todas las etapas de la venta, alquiler o cualquier otra gestión que te ofrecemos.', 'wp' ); ?>
            </p>
            <a class="inline-flex items-center gap-4 hover:underline"
                href="<?php the_permalink( pll_get_post( 19 ) ); ?>">
                <strong><?php esc_html_e( 'Quiénes somos', 'wp' ); ?></strong>
                <span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
                    <i class="icon-plus-circle m-auto w-6"></i>
                </span>
            </a>
            <div class="flex flex-wrap gap-4 justify-between items-start max-lg:mt-20 lg:-mt-40">
                <img data-effect="fade-right" class="w-full lg:w-80"
                    src="<?php echo esc_url( get_theme_file_uri( '/assets/images/home-03.jpg' ) ); ?>" alt="">
                <img data-effect="fade-left" class="w-full lg:w-[32rem] lg:-mr-20"
                    src="<?php echo esc_url( get_theme_file_uri( '/assets/images/home-04.jpg' ) ); ?>" alt="">
            </div>
        </div>
    </div>

    <div class="py-20 bg-neutral-100">
        <div class="container grid lg:grid-cols-3">
            <div data-effect="fade-right" class="text-center lg:pr-20">
                <div class="text-center mb-8">
                    <i class="icon-hand w-16 bg-bronze-400"></i>
                </div>
                <h2 class="font-cursive text-bronze-400 text-6xl"><?php esc_html_e( 'Consulta nuestros', 'wp' ); ?></h2>
                <h3 class="mb-8 font-serif text-5xl"><?php esc_html_e( 'Servicios', 'wp' ); ?></h3>
            </div>
            <div data-effect="fade-left" class="lg:col-span-2">
                <div class="flex h-[32rem] lg:-mr-20 lg:-mt-40">
                    <div
                        class="accordion-item cursor-pointer relative transition-all duration-300 min-w-[4rem] w-full bg-[#F3EFE7]">
                        <img class="absolute left-0 top-0 w-full h-full object-cover transition-opacity duration-300"
                            src="<?php echo esc_url( get_theme_file_uri( '/assets/images/services-01.png' ) ); ?>"
                            alt="">
                        <div class="absolute inset-y-0 right-0 w-16 flex pb-16 justify-center items-end">
                            <span
                                class="writing-mode-vertical whitespace-nowrap text-lg rotate-180"><?php esc_html_e( 'Asesoramiento personalizado', 'wp' ); ?></span>
                            <span class="bg-black w-8 h-8 rounded-full flex text-white absolute bottom-4">
                                <i class="icon-plus-circle m-auto w-5"></i>
                            </span>
                        </div>
                        <div
                            class="description opacity-0 lg:opacity-100 absolute inset-0 p-8 text-white bg-gradient-to-b from-black/50 to-transparent">
                            <p class="mb-4">
                                <?php esc_html_e( 'Te acompañamos en todo momento para garantizarte plena satisfacción.', 'wp' ); ?>
                            </p>
                            <a class="inline-flex items-center gap-4 hover:underline"
                                href="<?php the_permalink( pll_get_post( 21 ) ); ?>#service-01">
                                <strong><?php esc_html_e( 'Saber más', 'wp' ); ?></strong>
                                <span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
                                    <i class="icon-plus-circle m-auto w-6"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div
                        class="accordion-item cursor-pointer relative transition-all duration-300 min-w-[4rem] w-16 bg-[#CEC5B2]">
                        <img class="absolute left-0 top-0 w-full h-full object-cover transition-opacity duration-300 opacity-0"
                            src="<?php echo esc_url( get_theme_file_uri( '/assets/images/services-02.jpg' ) ); ?>"
                            alt="">
                        <div class="absolute inset-y-0 right-0 w-16 flex pb-16 justify-center items-end">
                            <span
                                class="writing-mode-vertical whitespace-nowrap text-lg rotate-180"><?php esc_html_e( 'Financiación a medida', 'wp' ); ?></span>
                            <span class="bg-black w-8 h-8 rounded-full flex text-white absolute bottom-4">
                                <i class="icon-plus-circle m-auto w-5"></i>
                            </span>
                        </div>
                        <div
                            class="description opacity-0 lg:opacity-100 hidden absolute inset-0 p-8 text-white bg-gradient-to-b from-black/50 to-transparent">
                            <p class="mb-4">
                                <?php esc_html_e( 'Te ayudamos a conseguir las mejores condiciones hipotecarias  del mercado.', 'wp' ); ?>
                            </p>
                            <a class="inline-flex items-center gap-4 hover:underline"
                                href="<?php the_permalink( pll_get_post( 21 ) ); ?>#service-02">
                                <strong><?php esc_html_e( 'Saber más', 'wp' ); ?></strong>
                                <span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
                                    <i class="icon-plus-circle m-auto w-6"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div
                        class="accordion-item cursor-pointer relative transition-all duration-300 min-w-[4rem] w-16 bg-[#F2F2F2]">
                        <img class="absolute left-0 top-0 w-full h-full object-cover transition-opacity duration-300 opacity-0"
                            src="<?php echo esc_url( get_theme_file_uri( '/assets/images/services-03.jpg' ) ); ?>"
                            alt="">
                        <div class="absolute inset-y-0 right-0 w-16 flex pb-16 justify-center items-end">
                            <span
                                class="writing-mode-vertical whitespace-nowrap text-lg rotate-180"><?php esc_html_e( 'Administración de pisos', 'wp' ); ?></span>
                            <span class="bg-black w-8 h-8 rounded-full flex text-white absolute bottom-4">
                                <i class="icon-plus-circle m-auto w-5"></i>
                            </span>
                        </div>
                        <div
                            class="description opacity-0 lg:opacity-100 hidden absolute inset-0 p-8 text-white bg-gradient-to-b from-black/50 to-transparent">
                            <p class="mb-4">
                                <?php esc_html_e( 'Nos encargamos de todo para que no tengas que encargarte de nada..', 'wp' ); ?>
                            </p>
                            <a class="inline-flex items-center gap-4 hover:underline"
                                href="<?php the_permalink( pll_get_post( 21 ) ); ?>#service-03">
                                <strong><?php esc_html_e( 'Saber más', 'wp' ); ?></strong>
                                <span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
                                    <i class="icon-plus-circle m-auto w-6"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div
                        class="accordion-item cursor-pointer relative transition-all duration-300 min-w-[4rem] w-16 bg-[#DDCEAD]">
                        <img class="absolute left-0 top-0 w-full h-full object-cover transition-opacity duration-300 opacity-0"
                            src="<?php echo esc_url( get_theme_file_uri( '/assets/images/services-05b.jpg' ) ); ?>"
                            alt="">
                        <div class="absolute inset-y-0 right-0 w-16 flex pb-16 justify-center items-end">
                            <span
                                class="writing-mode-vertical whitespace-nowrap text-lg rotate-180"><?php esc_html_e( 'Trámites, valoraciones y tasaciones', 'wp' ); ?></span>
                            <span class="bg-black w-8 h-8 rounded-full flex text-white absolute bottom-4">
                                <i class="icon-plus-circle m-auto w-5"></i>
                            </span>
                        </div>
                        <div
                            class="description opacity-0 lg:opacity-100 hidden absolute inset-0 p-8 text-white bg-gradient-to-b from-black/50 to-transparent">
                            <p class="mb-4">
                                <?php esc_html_e( 'Un servicio más que te ofrecemos para la venta o alquiler de tu vivienda..', 'wp' ); ?>
                            </p>
                            <a class="inline-flex items-center gap-4 hover:underline"
                                href="<?php the_permalink( pll_get_post( 21 ) ); ?>#service-05">
                                <strong><?php esc_html_e( 'Saber más', 'wp' ); ?></strong>
                                <span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
                                    <i class="icon-plus-circle m-auto w-6"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div
                        class="accordion-item cursor-pointer relative transition-all duration-300 min-w-[4rem] w-16 bg-[#F3EFE7]">
                        <img class="absolute left-0 top-0 w-full h-full object-cover transition-opacity duration-300 opacity-0"
                            src="<?php echo esc_url( get_theme_file_uri( '/assets/images/services-06.jpg' ) ); ?>"
                            alt="">
                        <div class="absolute inset-y-0 right-0 w-16 flex pb-16 justify-center items-end">
                            <span
                                class="writing-mode-vertical whitespace-nowrap text-lg rotate-180"><?php esc_html_e( 'Interiorismo y reformas', 'wp' ); ?></span>
                            <span class="bg-black w-8 h-8 rounded-full flex text-white absolute bottom-4">
                                <i class="icon-plus-circle m-auto w-5"></i>
                            </span>
                        </div>
                        <div
                            class="description opacity-0 lg:opacity-100 hidden absolute inset-0 p-8 text-white bg-gradient-to-b from-black/50 to-transparent">
                            <p class="mb-4">
                                <?php esc_html_e( 'Nos encargamos del desarrollo de proyectos de viviendas particulares y espacios comerciales.', 'wp' ); ?>
                            </p>
                            <a class="inline-flex items-center gap-4 hover:underline"
                                href="<?php the_permalink( pll_get_post( 21 ) ); ?>#service-06">
                                <strong><?php esc_html_e( 'Saber más', 'wp' ); ?></strong>
                                <span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
                                    <i class="icon-plus-circle m-auto w-6"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-20">
        <div class="container relative lg:grid lg:grid-cols-3">
            <span class="lg:absolute lg:inset-y-0 lg:right-full lg:w-[999rem] lg:bg-white lg:z-10 lg:-mr-24"></span>
            <div data-effect="fade-right" class="bg-white relative z-10 text-center lg:pr-20">
                <div class="mb-8">
                    <i class="icon-diamond w-16 bg-bronze-400"></i>
                </div>
                <h2 class="mb-8 font-serif text-5xl"><?php esc_html_e( 'Promociones exclusivas', 'wp' ); ?></h2>
                <div class="flex justify-center gap-4 mb-8">
                    <button class="text-gray-300 hover:text-bronze-400 prev-carousel"><i
                            class="icon-arrow-left w-8"></i></button>
                    <button class="text-gray-300 hover:text-bronze-400 next-carousel"><i
                            class="icon-arrow-right w-8"></i></button>
                </div>
                <a class="inline-flex items-center gap-4 hover:underline"
                    href="<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>">
                    <strong><?php esc_html_e( 'Saber más', 'wp' ); ?></strong>
                    <span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
                        <i class="icon-plus-circle m-auto w-6"></i>
                    </span>
                </a>
            </div>
            <div data-effect="fade-left" class="max-lg:mt-20 lg:col-span-2">
                <div class="swiper swiper-carousel overflow-visible">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="w-full"
                                src="<?php echo esc_url( get_theme_file_uri( '/assets/images/home-slide-01.jpg' ) ); ?>"
                                alt="">
                            <div class="absolute top-0 inset-x-0 p-8 text-center bg-black text-white">
                                <span
                                    class="text-2xl"><?php esc_html_e( 'Ático, exclusivitat al Centre, en Centre Granollers', 'wp' ); ?></span>
                                <span
                                    class="bg-stone-100 text-black w-10 h-10 rounded-full flex absolute left-1/2 -ml-5 -bottom-5">
                                    <i class="icon-plus-circle m-auto w-6"></i>
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                src="<?php echo esc_url( get_theme_file_uri( '/assets/images/home-slide-02.jpg' ) ); ?>"
                                alt="">
                            <div class="absolute top-0 inset-x-0 p-8 text-center bg-black text-white">
                                <span class="text-2xl">Ático, exclusivitat al Centre, en Centre Granollers</span>
                                <span
                                    class="bg-stone-100 text-black w-10 h-10 rounded-full flex absolute left-1/2 -ml-5 -bottom-5">
                                    <i class="icon-plus-circle m-auto w-6"></i>
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                src="<?php echo esc_url( get_theme_file_uri( '/assets/images/home-slide-03.jpg' ) ); ?>"
                                alt="">
                            <div class="absolute top-0 inset-x-0 p-8 text-center bg-black text-white">
                                <span class="text-2xl">Ático, exclusivitat al Centre, en Centre Granollers</span>
                                <span
                                    class="bg-stone-100 text-black w-10 h-10 rounded-full flex absolute left-1/2 -ml-5 -bottom-5">
                                    <i class="icon-plus-circle m-auto w-6"></i>
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full"
                                src="<?php echo esc_url( get_theme_file_uri( '/assets/images/home-slide-04.jpg' ) ); ?>"
                                alt="">
                            <div class="absolute top-0 inset-x-0 p-8 text-center bg-black text-white">
                                <span class="text-2xl">Ático, exclusivitat al Centre, en Centre Granollers</span>
                                <span
                                    class="bg-stone-100 text-black w-10 h-10 rounded-full flex absolute left-1/2 -ml-5 -bottom-5">
                                    <i class="icon-plus-circle m-auto w-6"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-20 mb-20">
        <div class="container relative grid lg:grid-cols-2">
            <span class="absolute -inset-y-20 right-full w-[999rem] bg-stone-50 -mr-80"></span>
            <div data-effect="fade-right" class="relative">
                <h2 class="font-serif text-6xl lg:text-8xl"><?php esc_html_e( 'Inmuebles', 'wp' ); ?></h2>
                <h3 class="font-cursive text-right -mt-6 mb-8 text-bronze-400 text-9xl">
                    <?php esc_html_e( 'disponibles', 'wp' ); ?></h3>
                <p class="mb-4">
                    <strong><?php esc_html_e( 'Encontramos el hogar que mejor se adapta a ti.', 'wp' ); ?></strong>
                </p>
                <p class="mb-8 max-w-sm">
                    <?php esc_html_e( 'Échale un vistazo a todos nuestros inmuebles disponibles en', 'wp' ); ?> <a
                        class="underline text-bronze-400" target="_blank"
                        href="https://www.habitaclia.com/inmobiliaria-4rt_primera_11843_1/">habitaclia.com</a>.</p>
                <a class="button" href="<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>">
                    <span><?php esc_html_e( 'Ver inmuebles en exclusiva', 'wp' ); ?></span>
                    <i class="icon-plus-circle"></i>
                </a>
            </div>
            <div data-effect="fade-left">
                <img class="w-full relative"
                    src="<?php echo esc_url( get_theme_file_uri( '/assets/images/home-05.png' ) ); ?>" alt="">
            </div>
        </div>
    </div>

</main>
<?php
get_footer();
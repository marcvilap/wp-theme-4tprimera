<?php
/**
 * Template name: Contacto
 *
 * @package WordPress
 */

get_header();
?>
<main>

	<div class="h-[26rem] text-white text-center flex items-center bg-center bg-cover bg-banner-contact">
		<div class="container">
			<h1 class="mt-20 font-light font-serif text-5xl"><?php the_title(); ?></h1>
		</div>
	</div>

	<div class="py-20">
		<div class="container grid gap-8 lg:grid-cols-12 xl:gap-x-20">
			<div data-effect="fade-right" class="py-20 relative lg:col-span-4">
				<span class="absolute inset-y-0 right-32 bg-stone-50 w-[999rem]"></span>
				<img class="w-full relative" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/contact.jpg' ) ); ?>" alt="">
			</div>
			<div data-effect="fade-left" class="lg:col-span-8">
				<h2 class="font-cursive text-bronze-400 text-7xl lg:text-8xl"><?php esc_html_e( '¿Hablamos?', 'wp' ); ?></h2>
				<form data-ajax="<?php echo esc_url( admin_url( 'admin-ajax.php?action=contact_form' ) ); ?>">
					<?php wp_nonce_field(); ?>
					<div class="grid gap-x-8 md:grid-cols-2">
						<label class="block mb-8">
							<span class="font-bold uppercase text-sm"><?php esc_html_e( 'Nombre', 'wp' ); ?></span>
							<input class="input-text" type="text" name="first_name" placeholder="<?php esc_html_e( 'Escribe aquí', 'wp' ); ?>" required>
						</label>
						<label class="block mb-8">
							<span class="font-bold uppercase text-sm"><?php esc_html_e( 'Apellidos', 'wp' ); ?></span>
							<input class="input-text" type="text" name="last_name" placeholder="<?php esc_html_e( 'Escribe aquí', 'wp' ); ?>" required>
						</label>
						<label class="block mb-8">
							<span class="font-bold uppercase text-sm"><?php esc_html_e( 'Teléfono', 'wp' ); ?></span>
							<input class="input-text" type="tel" name="phone" placeholder="<?php esc_html_e( 'Escribe aquí', 'wp' ); ?>" required>
						</label>
						<label class="block mb-8">
							<span class="font-bold uppercase text-sm"><?php esc_html_e( 'Email', 'wp' ); ?></span>
							<input class="input-text" type="email" name="email" placeholder="<?php esc_html_e( 'Escribe aquí', 'wp' ); ?>" required>
						</label>
					</div>

					<?php if ( isset( $_GET['target'] ) && 'service' === $_GET['target'] ) : ?>

					<label class="block mb-4">
						<span class="font-bold uppercase text-sm"><?php esc_html_e( '¿En qué servicios estás interesado/a?', 'wp' ); ?></span>
					</label>
					<div class="grid gap-3 text-center text-bronze-400 leading-none mb-8 grid-cols-2 md:grid-cols-5">
						<label>
							<input class="peer absolute opacity-0" type="radio" name="options" value="<?php esc_attr_e( 'Asesoramiento', 'wp' ); ?>" required>
							<span class="bg-stone-50 flex items-center justify-center h-16 rounded cursor-pointer p-4 border border-transparent peer-checked:border-bronze-400"><?php esc_html_e( 'Asesoramiento', 'wp' ); ?></span>
						</label>
						<label>
							<input class="peer absolute opacity-0" type="radio" name="options" value="<?php esc_attr_e( 'Financiación', 'wp' ); ?>">
							<span class="bg-stone-50 flex items-center justify-center h-16 rounded cursor-pointer p-4 border border-transparent peer-checked:border-bronze-400"><?php esc_html_e( 'Financiación', 'wp' ); ?></span>
						</label>
						<label>
							<input class="peer absolute opacity-0" type="radio" name="options" value="<?php esc_attr_e( 'Administración de pisos', 'wp' ); ?>">
							<span class="bg-stone-50 flex items-center justify-center h-16 rounded cursor-pointer p-4 border border-transparent peer-checked:border-bronze-400"><?php esc_html_e( 'Administración de pisos', 'wp' ); ?></span>
						</label>
						<label>
							<input class="peer absolute opacity-0" type="radio" name="options" value="<?php esc_attr_e( 'Trámites, valoraciones y tasaciones', 'wp' ); ?>">
							<span class="bg-stone-50 flex items-center justify-center h-16 rounded cursor-pointer p-4 border border-transparent peer-checked:border-bronze-400"><?php esc_html_e( 'Trámites, valoraciones y tasaciones', 'wp' ); ?></span>
						</label>
						<label>
							<input class="peer absolute opacity-0" type="radio" name="options" value="<?php esc_attr_e( 'Servicio jurídico', 'wp' ); ?>">
							<span class="bg-stone-50 flex items-center justify-center h-16 rounded cursor-pointer p-4 border border-transparent peer-checked:border-bronze-400"><?php esc_html_e( 'Servicio jurídico', 'wp' ); ?></span>
						</label>
					</div>

					<?php else : ?>

					<label class="block mb-4">
						<span class="font-bold uppercase text-sm"><?php esc_html_e( '¿En que podemos ayudarte?', 'wp' ); ?></span>
					</label>
					<div class="grid gap-3 text-center text-bronze-400 leading-none mb-8 grid-cols-2 md:grid-cols-5">
						<label>
							<input class="peer absolute opacity-0" type="radio" name="options" value="<?php esc_attr_e( 'Quiero comprar', 'wp' ); ?>" required>
							<span class="bg-stone-50 flex items-center justify-center h-16 rounded cursor-pointer p-4 border border-transparent peer-checked:border-bronze-400"><?php esc_html_e( 'Quiero comprar', 'wp' ); ?></span>
						</label>
						<label>
							<input class="peer absolute opacity-0" type="radio" name="options" value="<?php esc_attr_e( 'Quiero vender', 'wp' ); ?>">
							<span class="bg-stone-50 flex items-center justify-center h-16 rounded cursor-pointer p-4 border border-transparent peer-checked:border-bronze-400"><?php esc_html_e( 'Quiero vender', 'wp' ); ?></span>
						</label>
						<label>
							<input class="peer absolute opacity-0" type="radio" name="options" value="<?php esc_attr_e( 'Quiero alquilar', 'wp' ); ?>">
							<span class="bg-stone-50 flex items-center justify-center h-16 rounded cursor-pointer p-4 border border-transparent peer-checked:border-bronze-400"><?php esc_html_e( 'Quiero alquilar', 'wp' ); ?></span>
						</label>
					</div>

					<?php endif; ?>

					<label class="block mb-8">
						<span class="font-bold uppercase text-sm"><?php esc_html_e( 'Mensaje', 'wp' ); ?></span>
						<textarea class="input-text" name="comment" rows="2" placeholder="<?php esc_html_e( 'Escribe aquí', 'wp' ); ?>" required></textarea>
					</label>
					<div class="flex flex-wrap items-center justify-between gap-8">
						<label>
							<input type="checkbox" required>
							<span class="text-sm"><?php esc_html_e( 'Acepto la', 'wp' ); ?> <a class="underline" target="_blank" href="<?php the_permalink( pll_get_post( 14 ) ); ?>"><?php esc_html_e( 'política de privacidad', 'wp' ); ?></a></span>
						</label>
						<button class="button"><?php esc_html_e( 'Enviar mensaje', 'wp' ); ?></button>
					</div>
					<div class="alert"></div>
				</form>
			</div>
		</div>
	</div>

</main>
<?php
get_footer();

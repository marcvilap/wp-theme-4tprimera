<?php
/**
 * Footer
 *
 * @package WordPress
 */

?>
<footer class="bg-black text-white text-center">
	<div class="container py-20">
		<img class="block mx-auto mb-8 w-40" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/logo.png' ) ); ?>" alt="">
		<div class="grid gap-4 grid-cols-2 md:grid-cols-4 lg:grid-cols-7">
			<div>
				<div class="flex justify-center items-center text-black bg-bronze-400 rounded-full w-12 h-12 mx-auto mb-6">
					<i class="icon-email w-7"></i>
				</div>
				<div class="font-serif"><?php esc_html_e( 'Email', 'wp' ); ?></div>
				<a class="text-sm text-stone-400 hover:underline" href="mailto:info@4primera.com">info@4primera.com</a>
			</div>
			<div>
				<div class="flex justify-center items-center text-black bg-bronze-400 rounded-full w-12 h-12 mx-auto mb-6">
					<i class="icon-phone w-7"></i>
				</div>
				<div class="font-serif"><?php esc_html_e( 'Teléfono', 'wp' ); ?></div>
				<a class="text-sm text-stone-400 hover:underline" href="tel:930040276">93 004 02 76</a>
			</div>
			<div>
				<div class="flex justify-center items-center text-black bg-bronze-400 rounded-full w-12 h-12 mx-auto mb-6">
					<i class="icon-instagram w-7"></i>
				</div>
				<div class="font-serif">Instagram</div>
				<a class="text-sm text-stone-400 hover:underline" target="_blank" href="https://www.instagram.com/4rtprimera">@4rtprimera</a>
			</div>
			<div>
				<div class="flex justify-center items-center text-black bg-bronze-400 rounded-full w-12 h-12 mx-auto mb-6">
					<i class="icon-facebook w-7"></i>
				</div>
				<div class="font-serif">Facebook</div>
				<a class="text-sm text-stone-400 hover:underline" target="_blank" href="https://www.facebook.com/4rtprimera">@4rtprimera</a>
			</div>
			<div>
				<div class="flex justify-center items-center text-black bg-bronze-400 rounded-full w-12 h-12 mx-auto mb-6">
					<i class="icon-habitaclia w-7"></i>
				</div>
				<div class="font-serif">Habitaclia</div>
				<a class="text-sm text-stone-400 hover:underline" target="_blank" href="https://www.habitaclia.com/inmobiliaria-4rt_primera_11843_1/">@4rtprimera</a>
			</div>
			<div>
				<div class="flex justify-center items-center text-black bg-bronze-400 rounded-full w-12 h-12 mx-auto mb-6">
					<i class="icon-fotocasa w-7"></i>
				</div>
				<div class="font-serif">Fotocasa</div>
				<a class="text-sm text-stone-400 hover:underline" target="_blank" href="https://www.fotocasa.es/">@4rtprimera</a>
			</div>
			<div>
				<div class="flex justify-center items-center text-black bg-bronze-400 rounded-full w-12 h-12 mx-auto mb-6">
					<i class="icon-pointer w-7"></i>
				</div>
				<div class="font-serif"><?php esc_html_e( 'Visítanos', 'wp' ); ?></div>
				<span class="text-sm text-stone-400"><?php esc_html_e( 'C/ de l’Enginyer 1, 1º Piso (08402) Granollers. BARCELONA', 'wp' ); ?></span>
			</div>
		</div>
	</div>
	<hr class="border-stone-700">
	<div class="container py-8 text-stone-500 flex flex-wrap gap-x-8 justify-center text-sm">
		<span>&copy; 4rtPRIMERA. <?php esc_html_e( 'Todos los derechos reservados.', 'wp' ); ?></span>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'container'      => false,
				'fallback_cb'    => false,
				'depth'          => 1,
				'menu_class'     => 'flex flex-wrap gap-x-4 justify-center',
			)
		);
		?>
		<img  style="width:20rem" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/logos-kit.png' ) ); ?>" />
		
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

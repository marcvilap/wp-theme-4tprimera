<?php
/**
 * Template name: Servicios
 *
 * @package WordPress
 */

get_header();
?>
<main class="overflow-hidden">

	<div class="h-[26rem] text-white text-center flex items-center bg-center bg-cover bg-banner-services">
		<div class="container">
			<h1 class="mt-20 font-light font-serif text-4xl md:text-5xl"><?php the_title(); ?></h1>
		</div>
	</div>

	<div id="service-01" class="py-20 bg-stone-50">
		<div class="container grid gap-8 items-center lg:grid-cols-2 xl:gap-x-20">
			<div data-effect="fade-right">
				<h2 class="mb-8 font-serif text-4xl md:text-5xl"><?php esc_html_e( 'Asesoramiento personalizado', 'wp' ); ?></h2>
				<div class="prose mb-8 text-bronze-500">
					<p><?php esc_html_e( 'Ofrecemos valoraciones presenciales y gratuitas a nuestros clientes y futuros, teniendo en cuenta todos los factores y variables que puedan afectar al inmueble (estado de conservación, ubicación, etc…) de manera que podemos ofrecer la valoración más precisa y así poder llevar a cabo una estrategia de comercialización concreta para maximizar su valor.', 'wp' ); ?></p>
					<p><?php esc_html_e( 'Tanto si dispone de una pequeña propiedad, como de una cartera de inmuebles, en 4rt PRIMERA le proporcionaremos la tranquilidad que necesita.', 'wp' ); ?></p>
				</div>
				<a class="flex items-center gap-4 hover:underline" href="<?php the_permalink( pll_get_post( 23 ) ); ?>?target=service">
					<strong><?php esc_html_e( 'Consúltanos', 'wp' ); ?></strong>
					<span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
						<i class="icon-plus-circle m-auto w-6"></i>
					</span>
				</a>
			</div>
			<div data-effect="fade-left">
				<img class="w-full" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/services-01.png' ) ); ?>" alt="">
			</div>
		</div>
	</div>

	<div id="service-02" class="py-20">
		<div class="container">
			<h2 data-effect="fade-up" class="font-serif text-center text-4xl md:text-5xl"><?php esc_html_e( 'Financiación a medida', 'wp' ); ?></h2>
			<h3 data-effect="fade-up" class="font-cursive text-center text-bronze-400 -mt-5 mb-8 text-7xl"><?php esc_html_e( '¿Qué necesitas?', 'wp' ); ?></h3>
			<div class="grid lg:grid-cols-2">
				<div data-effect="fade-right" class="lg:pt-20">
					<img class="w-full" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/services-02.jpg' ) ); ?>" alt="">
				</div>
				<div data-effect="fade-left">
					<div class="bg-gray-100 p-8 lg:-ml-32 xl:p-16">
						<h3 class="font-serif mb-8 uppercase text-2xl"><?php esc_html_e( '¿Qué necesitas?', 'wp' ); ?></h3>
						<p class="mb-8"><?php esc_html_e( 'Te ayudamos a conseguir la financiación con las mejores condiciones. Especialistas hipotecarios te acompañan en todo el proceso de la financiación, bien seas particular o empresa.', 'wp' ); ?></p>
						<a class="flex items-center gap-4 hover:underline" href="<?php the_permalink( pll_get_post( 23 ) ); ?>?target=service">
							<strong><?php esc_html_e( 'Consultar financiación', 'wp' ); ?></strong>
							<span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
								<i class="icon-plus-circle m-auto w-6"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="service-03" class="py-20 bg-stone-50">
		<div class="container">
			<h2 data-effect="fade-up" class="mb-8 font-serif text-4xl md:text-5xl"><?php esc_html_e( 'Administración de Inmuebles', 'wp' ); ?></h2>
			<p  data-effect="fade-up"class="mb-16 max-w-2xl"><?php esc_html_e( 'Un servicio dedicado a los propietarios de inmuebles de alquiler. Buscamos que se despreocupen de la gestión mientras nosotros nos ocupamos de las siguientes tareas y documentación:', 'wp' ); ?></p>
			<div class="grid mb-20 gap-y-8 lg:grid-cols-2">
				<div data-effect="fade-right">
					<h3 class="mb-8 font-serif text-bronze-400 text-4xl md:text-5xl"><?php esc_html_e( 'Tareas', 'wp' ); ?></h3>
					<ul class="mb-8 grid gap-4">
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Selección/filtrado de arrendatarios y futuros inquilinos.', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Realización de inventario de mobiliario, si es necesario.', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Revisión y puesta a punto de la vivienda.', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Cambio de titularidad de suministros y liquidación de consumos.', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Cuidarse de las pequeñas reparaciones que surjan (con presupuesto y autorización de la propiedad).', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Cobro de rentas al inquilino y abono a la propiedad.', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Depósito y control de llaves.', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Tarifas especiales para la tramitación de desahucios, ocupaciones ilegales y/o cualquier otra incidencia legal que se precise, a través de nuestro equipo de Asesoría Legal.', 'wp' ); ?></li>
					</ul>
					<a class="flex items-center gap-4 hover:underline" href="<?php the_permalink( pll_get_post( 23 ) ); ?>?target=service">
						<strong><?php esc_html_e( 'Consúltanos', 'wp' ); ?></strong>
						<span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
							<i class="icon-plus-circle m-auto w-6"></i>
						</span>
					</a>
				</div>
				<div data-effect="fade-left" class="lg:pl-20">
					<img class="w-full" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/services-03.jpg' ) ); ?>" alt="">
				</div>
			</div>
			<div id="service-04" class="grid gap-y-8 lg:grid-cols-2">
				<div data-effect="fade-right" class="lg:lg:">
					<h3 class="mb-8 font-serif text-bronze-400 text-4xl md:text-5xl"><?php esc_html_e( 'Documentación', 'wp' ); ?></h3>
					<ul class="mb-8 grid gap-4">
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Redacción, registro y formalización de contratos de alquiler.', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Redacción y trámite de cancelación/resolución de contratos de alquiler.', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Ingreso de fianzas en el INCASÒL.', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Preparación del ITP (Impuesto sobre Transmisiones Patrimoniales) de los inquilinos.', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Tramitación de seguros para cubrir el impago de rentas.', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Modificaciones y renovaciones de contratos.', 'wp' ); ?></li>
					</ul>
					<a class="flex items-center gap-4 hover:underline" href="<?php the_permalink( pll_get_post( 23 ) ); ?>?target=service">
						<strong><?php esc_html_e( 'Consúltanos', 'wp' ); ?></strong>
						<span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
							<i class="icon-plus-circle m-auto w-6"></i>
						</span>
					</a>
				</div>
				<div data-effect="fade-left" class="lg:pr-20">
					<img class="w-full" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/services-04.jpg' ) ); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div  id="service-05" class="py-20">
		<div class="container">
			<div class="grid gap-y-8 lg:grid-cols-2">
				<div data-effect="fade-right">
					<h3 class="mb-8 font-serif text-4xl md:text-5xl"><?php esc_html_e( 'Trámites, valoraciones y tasaciones', 'wp' ); ?></h3>
					<h3 class="mb-8 font-serif text-bronze-400 text-4xl md:text-5xl"><?php esc_html_e( 'Tramitamos Certificados Energéticos y Cédulas de habitabilidad.', 'wp' ); ?></h3>
					<p class="mb-8"><?php esc_html_e( 'Ayudamos a los propietarios a realizar todos los trámites y a tener toda la documentación necesaria y obligatoria y/o alquilar sus inmuebles:', 'wp' ); ?></p>
					<ul class="mb-8 grid gap-4">
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Cédula de habitabilidad', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Certificado de eficiencia energética (CEE)', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Inspección técnica de edificios (ITE)', 'wp' ); ?></li>
						<li class="relative pl-8"><i class="icon-plus w-4 absolute left-0 top-1 bg-bronze-400"></i><?php esc_html_e( 'Planos…', 'wp' ); ?></li>
					</ul>
					<a class="flex items-center gap-4 hover:underline" href="<?php the_permalink( pll_get_post( 23 ) ); ?>?target=service">
						<strong><?php esc_html_e( 'Consúltanos', 'wp' ); ?></strong>
						<span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
							<i class="icon-plus-circle m-auto w-6"></i>
						</span>
					</a>
				</div>
				<div data-effect="fade-left" class="relative pt-10 pb-20 lg:pl-20">
					<span class="absolute inset-y-0 left-full -ml-40 w-[999rem] bg-neutral-100"></span>
					<img class="w-full relative" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/services-05b.jpg' ) ); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div id="service-06" class="py-20 bg-gray-100">
		<div class="container">
			<div class="grid gap-y-8 lg:grid-cols-2">
				<div data-effect="fade-left" class="lg:order-2">
					<h3 class="font-serif text-4xl md:text-5xl"><?php esc_html_e( 'Interiorismo', 'wp' ); ?></h3>
					<h3 class="font-cursive text-center text-bronze-400 -mt-6 mb-8 text-7xl"><?php esc_html_e( 'y reformas', 'wp' ); ?></h3>
					<p class="mb-4"><?php _e( '<strong>4rt PRIMERA</strong> colabora con <strong>OXYGEN</strong>, una prestigiosa y reconocida empresa de interiorismo. Juntos procuramos ofrecer a nuestros clientes soluciones integrales para sus proyectos de diseño de interiores dentro de los estándares más altos de calidad. Combinamos nuestra amplia experiencia y conocimientos para crear espacios únicos y personalizados que reflejen el estilo y la visión de cada cliente.', 'wp' ); ?></p>
					<p class="mb-8"><?php _e( 'Nuestra colaboración también nos permite ofrecer una amplia gama de servicio; desde la planificación y el diseño hasta la ejecución y la planificación del proyecto. Trabajamos mano a mano con nuestros clientes y con el equipo de <strong>OXYGEN</strong> para garantizar que cada detalle se tenga en cuento y se cumpla con los estándares más altos de calidad.', 'wp' ); ?></p>
					<a class="flex items-center gap-4 hover:underline" href="<?php the_permalink( pll_get_post( 23 ) ); ?>?target=service">
						<strong><?php esc_html_e( 'Consúltanos', 'wp' ); ?></strong>
						<span class="bg-bronze-400 w-10 h-10 rounded-full flex text-white">
							<i class="icon-plus-circle m-auto w-6"></i>
						</span>
					</a>
				</div>
				<div data-effect="fade-right" class="lg:pr-20">
					<img class="w-full" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/services-06.jpg' ) ); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="h-[26rem] bg-center bg-cover bg-banner-property2 py-20 flex items-center">
		<div class="container">
			<h3 data-effect="fade-up" class="text-center font-serif mx-auto max-w-3xl text-3xl lg:text-4xl"><?php esc_html_e( 'Disponemos de propiedades que no están anunciadas y con las que trabajamos con discreción para mantener la confidencialidad de algunos clientes propietarios que asi lo solicitan', 'wp' ); ?></h3>
		</div>
	</div>

</main>
<?php
get_footer();

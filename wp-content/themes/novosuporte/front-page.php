<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
	<div class="hero-container">
		<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

			<div class="carousel-inner" role="listbox">
				<!-- Slide -->
				<?php if (get_option('portal_input_111') != "") { ?>
					<div class="carousel-item active" style="background-image: url('<?php echo get_option('portal_input_111'); ?>');">
					</div>
				<?php } ?>

			</div>
		</div>
	</div>
</section><!-- End Hero -->

<main id="main">
	
	<!-- ======= About ======= -->
	<section id="About" class="about">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Sobre</h2>
			</div>
			<div class="row">
				<div class="col-lg-12 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="100">
					<?php
					echo get_option('portal_input_7');
					?>
				</div>
			</div>
		</div>
		</div>
	</section><!-- End About Section -->

</main><!-- End #main -->
<?php get_footer(); ?>
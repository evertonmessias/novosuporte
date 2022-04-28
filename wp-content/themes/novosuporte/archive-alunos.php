<?php get_header(); ?>
<main id="main" class="post" data-aos="fade-up">
	<!-- ======= Breadcrumbs ======= -->
	<section class="breadcrumbs">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<h2>Alunos</h2>
				<ol>
					<li><a href="/">home</a></li>
					<li>
						<?php
						if (url_active()[2] == "") echo url_active()[1];
						else echo "<a href='/" . url_active()[1] . "'>" . url_active()[1] . "</a>";
						?>
					</li>
				</ol>
			</div>
		</div>
	</section><!-- Breadcrumbs Section -->

	<!-- ======= Portfolio Section ======= -->
	<section id="alunos" class="portfolio">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<?php
				$args = array(
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'alunos',
					'posts_per_page' => 50
				);
				$loop = new WP_Query($args);
				while ($loop->have_posts()) {
					$loop->the_post();
				?>
					<div class="col-3 portfolio-item">
						<a href="<?php the_permalink() ?>">
							<img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid" title="<?php the_title() ?>">
							<br>
							<h5><?php echo get_the_title() ?></h5>
						</a>
					</div>
				<?php }
				wp_reset_postdata(); ?>
			</div>
		</div>
	</section><!-- End Portfolio Section -->

</main><!-- End #main -->
<?php get_footer(); ?>
<?php get_header(); ?>

<main id="main" class="page alunos" data-aos="fade-up">
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h2><b><?php the_title() ?></b></h2>
            <ol>
               <li><a href="/">home</a></li>
               <li><a href="/alunos">alunos</a></li>
            </ol>
         </div>
      </div>
   </section><!-- Breadcrumbs Section -->
   <!-- ======= Portfolio Details Section ======= -->
   <section class="portfolio-details">
      <div class="container">         
         <br>         
         <?php the_content(); ?>
         <br>   
      </div>
   </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
<?php get_footer(); ?>
<?php get_header(); 


		while ( have_posts() ) :
			the_post();

?>


<div class="servicesTitle">
  <div class="container">
    <h1 class="tilte text-center">
      <?php the_title(); ?>						
    </h1>
  </div>
</div>

<div class="singlePage">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="singleServiceContent">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="singleServiceThumbnail">
                    <?php the_post_thumbnail("full", array('class' => 'img-fluid')); ?>
                </div>
            </div>
        </div>
        <?php// comments_template(); ?>
    </div>
</div>

<?php 
endwhile;
			// If comments are open or we have at least one comment, load up the comment template.
// 			if ( comments_open() || get_comments_number() ) :
// 				comments_template();
			//endif;
get_sidebar();
get_footer();

?>

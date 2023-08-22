<?php get_header(); ?>


<div class="servicesTitle">
  <div class="container-fluid">
    <h1 class="tilte text-center">
      <?php echo get_the_archive_title(); ?>						
    </h1>
  </div>
</div>


<div class="container">
<div class="serviceSlider slider">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="main_service">
                    <div class="service_innerMain">
                        <div class="serviceContent">
                            <h4><?php the_title(); ?></h4>
                            <div class="conten">
                                <?php echo wp_trim_words( get_the_content(),80 , '...'); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="postBtn">View More</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>


<?php get_footer();

?>
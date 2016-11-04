<?php get_header(); ?>
<div class="container">
  <div class="blog-header">
      <h1 class="blog-title"><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
      <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
  </div>
  <div class="row">

    <div class="col-sm-8 blog-main">

      <?php 
      if ( have_posts() ) : while ( have_posts() ) : the_post();
    
        get_template_part( 'content', get_post_format() );
  
      endwhile; endif; 
      ?>

    </div> <!-- /.blog-main -->

    <?php get_sidebar(); ?>

  </div> <!-- /.row -->
</div>

<?php get_footer(); ?>
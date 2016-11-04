<?php get_header(); ?>
  <div class="blog-header">
    <div class="container">
      <h1 class="blog-title"><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
      <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
    </div>
  </div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );

					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->
</div>
<?php get_footer(); ?>
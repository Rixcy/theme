<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->
</div>
<?php get_template_part( 'contactsection' ); ?>
<?php get_footer(); ?>
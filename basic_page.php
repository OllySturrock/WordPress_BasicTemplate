<?php
/*
Template Name: basic_page
*/
get_header();
?>
<div id="page">
	<div>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;
	endif;
	?>
	</div>
</div>
<?php get_footer(); ?>

<?php get_header(); ?>
<div class="main-wrapper">
	<header></header>
	<section class="main-content">
		<div class="page">
			<?php
			    // Start the loop.
			    while (have_posts()) : the_post(); ?>
			        <?php get_template_part('content-page');
			    endwhile;
		    ?>
	    </div>
	</section>
</div>
<?php get_footer(); ?>
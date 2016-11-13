<?php get_header(); ?>
<div class="main-wrapper">
	<header></header>
	<section class="main-content">
		<div class="post-entry">
			<?php
			    // Start the loop.
			    while (have_posts()) : the_post(); ?>

			        <?php get_template_part('content');

			        if (comments_open() || get_comments_number()) :
			            comments_template();
			        endif;

			    endwhile;
		    ?>
	    </div>
	    <aside>
	    	<?php get_sidebar(); ?>
	    </aside>
	</section>
</div>
<?php get_footer(); ?>
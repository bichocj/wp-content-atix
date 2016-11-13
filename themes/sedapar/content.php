<h3 class="title-entry">
	<a href="#"><?php the_title(); ?></a>
</h3>
<div class="post-meta">
	<span>
		<i aria-hidden="true" class="fa fa-calendar"></i>
		<?php echo get_the_date('F j, Y'); ?>
	</span>
    <small>/</small>
    <span><i aria-hidden="true" class="fa fa-comments"></i><?php comments_number(); ?></span>
    <small>/</small>
    <span class="category"><i aria-hidden="true" class="fa fa-folder"></i><?php
        $categories = get_the_category();
        foreach ( $categories as $category ) {
            printf( '<a href="%1$s">%2$s</a> | ',
                get_category_link($category->id),esc_html( $category->cat_name )
            );
        }
        ?>
    </span>
</div>
<div class="post-media"><?php the_post_thumbnail('single-post-thumbnail'); ?></div>
<div class="post-content">
    <?php the_content() ?>
    <div class="post-more">Compartir
        <a href="#" title="Compártelo en Facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a>
        <a href="#" title="Compártelo en Twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a>
        <a href="#" title="Compártelo en Google Plus"><i aria-hidden="true" class="fa fa-google"></i></a>
    </div>
</div>

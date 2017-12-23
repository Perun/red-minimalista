<?php get_header(); ?>

            <div id="inhalt">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        	 <h2 class="beitrags-titel">
             <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
             </h2>
        	<div class="beitrags-info"><?php the_time('l, d. F Y'); ?> von <?php the_author() ?> <?php edit_post_link('**', '&nbsp;&nbsp;', ''); ?></div>

        	<div class="beitrag">
        		<?php the_content(__('(more...)')); ?>
        	</div>

        	<div class="feedback">
                <?php wp_link_pages(); ?>
                <div class="beitrags-info2"><?php _e("Category:"); ?> <?php the_category(',') ?> | <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?></div>
        	</div>

            <?php comments_template(); /*Get wp-comments.php template*/ ?>

            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

            <?php
            if (function_exists('wp_pagebar')) {
            wp_pagebar(array('before'=>'', 'tooltip_text'=>'Seite', 'next'=>'&raquo;', 'prev'=>'&laquo;'));
            }
            else { ?>
            <div class="center"><?php posts_nav_link('&nbsp;&ndash;&nbsp;', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?></div>
            <?php } ?>

            </div><!-- /inhalt -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

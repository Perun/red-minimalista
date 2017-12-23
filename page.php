<?php get_header(); ?>

            <div id="inhalt">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        	 <h2><?php the_title(); ?></h2>

        	<div class="beitrag">
        		<?php the_content(__('(more...)')); ?>
        	</div>

            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

            </div><!-- /inhalt -->

<?php get_sidebar(); ?>  

<?php get_footer(); ?>

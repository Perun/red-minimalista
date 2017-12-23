<?php get_header(); ?>

            <div id="inhalt">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        	 <h2 class="beitrags-titel"><?php the_title(); ?><?php edit_post_link('**', '&nbsp;<span class="kleiner">', '</span>'); ?></h2>
            <?php if (function_exists('the_post_keytags')) {?><div class="beitrags-info">Tags: <?php the_post_keytags(); ?></div><?php } ?>

        	<div class="beitrag">
        		<?php the_content(__('(more...)')); ?>
        	</div>

        	<div class="feedback">
                <?php wp_link_pages(); ?>
        	</div>

            <div id="beitrag-info-box">Dieser Beitrag wurde am <?php the_time('l, d. F Y'); ?> um <?php the_time('H:i'); ?> Uhr ver&ouml;ffentlicht und wurde unter der Kategorie <?php the_category(', ') ?> abgelegt. Du kannst die Kommentare zu diesen Eintrag durch den <?php comments_rss_link('RSS-Feed'); ?> verfolgen. <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) { ?>Du hast die M&ouml;glichkeit einen <a href="#comments">Kommentar</a> zu hinterlassen, oder einen <a href="./trackback/">Trackback</a> von deinem Weblog zu senden.<?php } ?><?php if (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {?>Du hast die M&ouml;glichkeit einen <a href="#respond">Kommentar</a> zu hinterlassen.<?php } ?></div>

            <p class="center"><?php previous_post_link(); ?>&nbsp;&ndash;&nbsp;<?php next_post_link(); ?></p>

            <?php comments_template(); ?>

            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

            </div><!-- /inhalt -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

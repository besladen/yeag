<?php if( gridlove_get_option('single_headline') && has_excerpt() ): ?>
	<div class="entry-headline h5">
		<?php the_excerpt(); ?>
	</div>
<?php endif; ?>

<?php get_template_part('template-parts/ads/above-single'); ?>

<div class="entry-content">
                            
    <?php the_content(); ?>

    <?php wp_link_pages(array('before' => '<div class="gridlove-link-pages">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
<div class="likely likely-big likely_visible likely_ready">
  <div class="twitter">Твитнуть</div>
  <div class="vkontakte">Поделиться</div>
  <div class="facebook"></div>
  <div class="gplus"></div>  
  <div class="telegram"></div>
  <div class="odnoklassniki"></div>
</div>
    <?php if( gridlove_get_option('single_tags') && has_tag() ) : ?>
        <div class="entry-tags">
            <?php the_tags( false, ' ', false ); ?>
        </div>
		
    <?php endif; ?>

</div>

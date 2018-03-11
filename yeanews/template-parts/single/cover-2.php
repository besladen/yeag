<div class="gridlove-cover-item emerge gridlove-cover-2" data-effect="relax" data-scale=".5" data-origin="bottom">
    <?php if( $fimg = gridlove_get_featured_image('cover') ) : ?>
    <div class="gridlove-cover-bg">
        <span class="gridlove-cover">
        <?php echo $fimg; ?>
        <?php if( gridlove_get_option( 'single_fimg_cap' ) && $caption = get_post( get_post_thumbnail_id())->post_excerpt) : ?>
                <figure class="wp-caption-text"><?php echo wp_kses_post( $caption );  ?></figure>
        <?php endif; ?>  
        <span class="gridlove-hidden-overlay"></span> 
        </span>
    </div>
    <?php endif; ?>
    <div class="gridlove-cover-content gridlove-cover-reset">
        <div class="overlay-vh-center">
            <div class="entry-header">
                <div class="entry-category">
                    <?php if( $icon = gridlove_get_option('single_icon') ): ?>
                        <?php echo gridlove_get_format_icon(); ?>
                    <?php endif; ?>

                    <?php if( gridlove_get_option('single_cat') ) : ?>
                        <?php echo gridlove_get_category(); ?>
                    <?php endif; ?>
                </div>
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>
            <?php if( $meta = gridlove_get_meta_data('single') ) : ?>
                <div class="entry-meta"><?php echo $meta; ?></div>
				<div class="likely likely-big likely-light likely_visible likely_ready">
  <div class="vkontakte">Поделиться</div>
  <div class="twitter">Твитнуть</div>
  <div class="facebook"></div>
  <div class="telegram"></div>
  <div class="odnoklassniki"></div>
  <div class="whatsapp"></div>
</div>
            <?php endif; ?>
        </div>
    </div>
</div>

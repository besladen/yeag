<article <?php post_class('gridlove-post gridlove-post-c gridlove-box ' . gridlove_highlight_post_class() ); ?> style="background: #e1f0fb;">

    <div class="box-inner-p">
    	<div class="box-inner">
	        <div class="entry-category">
                <?php if( $icon = gridlove_get_option('lay_c_icon') ): ?>
                    <?php echo gridlove_get_format_icon(); ?>
                <?php endif; ?>

                <?php if( gridlove_get_option('lay_c_cat') ) : ?>
                    <?php echo gridlove_get_category(); ?>
                <?php endif; ?>
            </div>
	        <?php the_title( sprintf( '<h2 class="entry-title h3"><a href="%s" style="font-size: 17px;">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	        <div class="entry-content" style="font-size: 0.9em;"><?php echo gridlove_get_excerpt(); ?></div>
        </div>
        <?php if( $meta = gridlove_get_meta_data('c') ) : ?>
            <div class="entry-meta"><?php echo $meta; ?></div>
        <?php endif; ?>
    </div>    
	


</article>
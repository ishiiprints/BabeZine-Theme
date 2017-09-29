<footer class="entry-footer">
<p class="cat-links"><?php the_category( ', ' ); ?>
<?php the_tags('<span class="meta-sep"> | </span> Tags: ', '', '')?>
</p>
<?php $previous = get_previous_post(); $next = get_next_post(); ?>
<div class="wrapperdiv">
    <div class="float--left">
        <a title="<?php echo esc_attr($previous->post_title); ?>" href="<?php echo get_permalink($previous->ID); ?>">
            <h5>< previous post</h5>
            <?php echo get_the_post_thumbnail($previous->ID, 'thumbnail'); ?>
            <h4><?php echo esc_attr($previous->post_title); ?></h4>
        </a>
    </div>
    <div class="float--right">
        <a title="<?php echo esc_attr($next->post_title); ?>" href="<?php echo get_permalink($next->ID); ?>">
            <h5>next post ></h5>
            <?php echo get_the_post_thumbnail($next->ID, 'thumbnail'); ?>
            <h4><?php echo esc_attr($next->post_title); ?></h4>
        </a>
    </div>
</div>

</footer>

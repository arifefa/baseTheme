<?php 
// register css
function versioning_style(){
	wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'), null);
}
add_action('wp_print_styles', 'versioning_style');

// enable menu and widget in apperance
add_theme_support( 'menus' );
add_theme_support( 'widgets');

add_shortcode('show_bestarticle',function(){
    $args = array(
        'post_type'=> 'post',
        'orderby'    => 'ID',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'posts_per_page' => -1 // this will retrive all the post that is published 
    );
    $result = new WP_Query( $args );
    if ( $result-> have_posts() ) : ?>
        <div class="wrap-post">
        <?php
        while ( $result->have_posts() ) : $result->the_post();
            ?>
            <a href="<?= get_permalink(); ?>">
                <div class="item-post">
                    
                    <?php the_title();?>
                </div>
            </a>
            <?php
        endwhile;
        ?>
        </div>
        <?php
    endif;
});
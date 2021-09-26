<?php
/**
 * Adds a view to the post being viewed
 *
 * Finds the current views of a post and adds one to it by updating
 * the postmeta. The meta key used is "awepop_views".
 *
 * @global object $post The post object
 * @return integer $new_views The number of views the post has
 *
 */

function awepop_add_view() {
//    if(is_single()) {
      global $post;
      $current_views = get_post_meta($post->ID, "awepop_views", true);
      if(!isset($current_views) OR empty($current_views) OR !is_numeric($current_views) ) {
         $current_views = 0;
      }
      $new_views = $current_views + 1;
      update_post_meta($post->ID, "awepop_views", $new_views);
      return $new_views;
//    }
}

add_action("wp_head", "awepop_add_view");

function my_load_scripts() {
 
    // create my own version codes
    $my_js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'scripts.js' ));
     
    wp_enqueue_script( 'custom_js', plugins_url( 'scripts.js', __FILE__ ), array(), $my_js_ver );
}
add_action('wp_enqueue_scripts', 'my_load_scripts');

// Create Shortcode related_posts_
// Shortcode: [related_posts number="5"]
function relatedposts_shortcode($atts) {
    $atts = shortcode_atts(
        array(
           'number' => '5',
        ), $atts, 'related_posts'
    );

    // Custom WP query relatedposts
    $args_relatedposts = array(
        'post_type'=> 'brewer',
        'posts_per_page' => $atts['number'],
        'order' => 'DESC',
    );

    $relatedposts = new WP_Query( $args_relatedposts );

    if ($relatedposts->have_posts()) :
        while ( $relatedposts->have_posts() ) : $relatedposts->the_post(); ?>
            <div class="item">
                <span class="date flex items-center justify-center flex-col"><?php the_time( 'M j <br> Y' ); ?></span>
                <div class="content">
                    <h6><?php the_title(); ?></h6>
                    <span>By: <?php echo get_the_author(); ?> </span>
                    <div class="excerpt"><?= get_the_excerpt(); ?></div>
                    <a href="<?php echo get_the_permalink(); ?>">View Details</a>
                </div>
            </div>	
        <?php endwhile; ?>
        
    <?php endif; wp_reset_postdata();

}
add_shortcode( 'related_posts', 'relatedposts_shortcode' );
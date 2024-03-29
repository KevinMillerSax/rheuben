<?php
/**
 * The template part for displaying content
 * @package Ecommerce Solution
 * @subpackage ecommerce_solution
 * @since 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>    
  <h3><?php the_title();?></h3>  
  <div class="box-image">
    <?php 
      if(has_post_thumbnail()) { 
        the_post_thumbnail(); 
      }
    ?>
  </div>
  <div class="new-text">
    <p><?php the_excerpt();?></p>
  </div>
	<div>
		<p>
			<?php the_excerpt();
			;?>
		</p>
    <p><?php echo wp_trim_words(get_the_content(), 18) ?>
    <p><b> Posted by <?php the_author_posts_link();?> on <?php the_time('n.j.y');?> </b></p>
	</div>
  <div class="postbtn">
    <a href="<?php the_permalink(); ?>"><?php esc_html_e('View More','ecommerce-solution'); ?></a>
  </div>
</div>
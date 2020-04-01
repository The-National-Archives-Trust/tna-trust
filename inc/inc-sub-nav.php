<?php

if ( is_404() || is_page_template( 'profiles.php' || is_page_template( 'news.php' ) ) ) {

}else{

global $post;



if ($post->post_parent ) {
    $parent_id = wp_get_post_parent_id($post->ID);

} else {
    $parent_id = $post->ID;
}




$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $parent_id,
    'order'          => 'ASC',
    'orderby'        => 'menu_order title'
 );


$parent = new WP_Query( $args );

$total = $parent->found_posts;

if ($total > 0 ){
?>

<div class="trust-sub-nav">
<ul>


  <?php

if ( $parent->have_posts() ) : 


 
?>

    <?php while ( $parent->have_posts() ) : $parent->the_post(); 



      ?>


        <li><a href="<?php the_permalink(); ?>" 

<?php 
$post_slug = get_post_field( 'post_name' );

if ($post_slug == $thispage){?>


          class="current"

<?php }?>
          ><?php the_title(); ?></a></li>



    <?php endwhile; ?>

<?php endif; wp_reset_postdata(); 
?>
   </ul>
</div>

<?php }}

?>
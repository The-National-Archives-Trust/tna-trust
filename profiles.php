<?php
/*
Template Name: Profiles
*/
?>
 <?php get_header(); ?>	
 
<main>
 <?php   if ( have_posts() ) :
  while ( have_posts() ) : the_post();
?>


<div class="container">
    <div class="row pt-4">
      <main class="col-md-12" role="main">
        <article>
          <div class="tna-page__entry">

<h1><?php the_title();?></h1>
            <?php $subheading = get_post_meta($post->ID, 'subheading', true);

if ($subheading) {?>
<div class="label tna-color--pink"><?php echo $subheading; ?></div>
 <?php }


?>
<?php 


    if (has_post_thumbnail($the_post->ID ) ): 
          $bgimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID ), 'large' );

          ?>
<img src="<?php echo $bgimage[0]; ?>" alt="Photo of <?php the_title();?>" class="alignright">

          <?php
      endif;

      ?>

<?php the_content();?>



<!-- profiles go here -->

<?php if (is_page("our-board") || is_page("our-people")){?>

<div class="row">



<?php

 $parent_id = get_the_ID();


$pargs = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $parent_id,
    'order'          => 'ASC',
'orderby' => 'menu_order title'
 );

$profiles = new WP_Query( $pargs );



if ( $profiles->have_posts() ) : 


 while ( $profiles->have_posts() ) : $profiles->the_post(); 



    if (has_post_thumbnail($the_post->ID ) ): 
          $bgimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID ), 'large' );
      endif;

?>


  <div class="col-md-4">
    <div class="tna-card">
      <a href="<?php the_permalink();?>">
        <div style="background-image:url(<?php   if (has_post_thumbnail($the_post->ID ) ): echo $bgimage[0];  endif; ?>);"  class="tna-card__image tna-card__image__portrait">
     
        </div>
        <div class="tna-card__content">
          <h3><?php the_title();?></h3>
        <?php $subheading = get_post_meta($post->ID, 'subheading', true);

if ($subheading) {?>
<div class="label tna-color--pink"><?php echo $subheading; ?></div>
 <?php }


?>
          <p>  <?php the_excerpt();?></p>
        </div>
      </a>
    </div>


  </div>


    <?php endwhile; ?>

<?php endif; wp_reset_postdata(); 
?>
  

</div>
<?php }?>

<!-- profiles go here -->

<?php if (is_page("our-people") || is_page("our-board")){?>

<?php }else{?>

<a href="/our-board/" class="cta">Back to Our board</a>
<?php }?>
          </div>
        </article>
      </main>

    </div>
</div>



<?php




 endwhile;
else :
?>
<!-- show the 404 message -->
<div class="container">
      <div class="row">
      	     <div class="col-md-12 no-padding">
       <h1>Sorry, we couldn’t find that page</h1>

       <p>The page may have been moved, updated or deleted. We may have a missing page or an incorrect link. Please <a href="/contact-us/">contact us</a> to let us know so we can correct our mistake.</p>

       <p><a href="/about-us/">About The National Archives Trust</a></p>
</div></div>
</div>
 <!-- show the 404 message -->
    <?php
    
endif;


?>
</main>
 <?php get_footer(); ?>	
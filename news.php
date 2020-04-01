<?php
/*
Template Name: News
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
	<h2><i><?php echo $subheading; ?></i></h2>
 <?php }


?>


<?php the_content();?>



<!-- news go here -->


<div class="row">



<?php



$nargs = array(
    'post_type'      => 'post',
    'category_name' => 'news-and-press',
    'posts_per_page' => -1,
    'order'          => 'DESC',
    'orderby'        => 'date'
 );

$news = new WP_Query( $nargs );



if ( $news->have_posts() ) : 


 while ( $news->have_posts() ) : $news->the_post(); 



    if (has_post_thumbnail($the_post->ID ) ): 
          $bgimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID ), 'large' );
      endif;

?>


  <div class="col-md-4">
    <div class="tna-card">
      <a href="<?php the_permalink();?>">
        <div style="background-image:url(<?php   if (has_post_thumbnail($the_post->ID ) ): echo $bgimage[0];  endif; ?>);"  class="tna-card__image">
     
        </div>
        <div class="tna-card__content">
          <h3><?php the_title();?></h3>
          <p class="card-meta"><?php the_time( 'F j Y' ); ?></p>
          <p><?php the_excerpt();?></p>
        </div>
      </a>
    </div>


  </div>


    <?php endwhile; ?>

<?php endif; wp_reset_postdata(); 
?>
  

</div>


<!-- news go here -->

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
<?php
/*
Template Name: Posts
*/
?>
 <?php get_header(); ?>	
 
<main>
 <?php   if ( have_posts() ) :
  while ( have_posts() ) : the_post();

    if (!in_category("news-and-press")):
if (has_post_thumbnail($the_post->ID ) ):
$bgimage = wp_get_attachment_image_src(get_post_thumbnail_id($the_post->ID ), 'full' );?>




<!-- hero -->
<div  style="background-image:url(<?php echo $bgimage[0]; ?>);" class="hero img-border">
    <div class="hero-overlay">
  <div class="container">
        <div class="row">
     <div class="col-md-12 hero-title"><h1><?php the_title();?></h1>

     	<?php $subheading = get_post_meta($post->ID, 'subheading', true);

if ($subheading) {?>
	<h2><i><?php echo $subheading; ?></i></h2>
 <?php }?>

     </div>


 </div>
</div>
  </div>
</div>
<!-- hero -->


	<?php
endif;
endif;
?>


<div class="container">
    <div class="row pt-4">
      <main class="col-xs-12 col-sm-8" role="main">
        <article>
          <div class="tna-page__entry">
<?php if (!has_post_thumbnail($the_post->ID ) ):?>
<h1><?php the_title();?></h1>
     	<?php $subheading = get_post_meta($post->ID, 'subheading', true);

if ($subheading) {?>
	<h2><i><?php echo $subheading; ?></i></h2>
 <?php }

endif;
?>
      <?php     if (in_category("news-and-press")):?>
   <h1><?php the_title();?></h1>
          <p class="card-meta"><?php the_time( 'F j Y' ); ?></p>

<?php endif;?>
<?php the_content();?>
          </div>
        </article>
      </main>

      <aside class="col-xs-12 col-sm-4" role="complementary">
        <div class="tna-page__sidebar">




      <?php     if (!in_category(array('news-and-press','support-us'))) :?>
       
<div class="tna-color--green p-3 <?php if (has_post_thumbnail($the_post->ID ) ):?> call-out <?php endif;?>">
 <?php 

if (get_field('support_message','option')){

 the_field('support_message', 'option'); 


}?>
</div>
<?php
endif;
?>


    <?php     if (in_category("news-and-press")):?>
       
<div class="tna-color--yellow-peach p-3">
 <h2>More news</h2>
<ul>
<?php

$nargs = array(
       'post_type'      => 'post',
    'category_name' => 'news-and-press',
    'posts_per_page' => 10,
    'order'          => 'DESC',
    'orderby'        => 'date'
 );



$news = new WP_Query( $nargs );


if ( $news->have_posts() ) : 


 while ( $news->have_posts() ) : $news->the_post(); 


?>



<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>



    <?php endwhile; ?>

<?php endif; wp_reset_postdata(); 

?>
</ul>
</div>
<?php
endif;
?>


        </div>
      </aside>





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
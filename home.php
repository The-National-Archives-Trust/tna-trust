<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>	





<main>

   <?php   if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        if (has_post_thumbnail($the_post->ID ) ): 
          $bgimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID ), 'full' );
      endif;

      ?>


      <!-- hero and video -->
      <div  style="background-image:url(<?php echo $bgimage[0]; ?>);" class="hero img-border">
        <div class="hero-overlay">
          <div class="container">
            <div class="row">
                <div class="col-md-8 hero-title-home"><h1><?php the_title();?></h1></div>
               <div class="col-md-4 hero-highlight">
<!--
                <div class="tna-icon tna-icon__circle tna-icon--bg-green tna-icon--bl-video float-left"></div>

                <div class="float-left align-left px-2">
                  <p><b>Learn more about us</b><br>
                  Watch our video</p>
              </div>
-->
          </div>

      </div>
  </div>
</div>
</div>
<!-- hero and video -->

<!-- introduction -->
<div class="container">
  <div class="row">
   <div class="col-md-12 tna-color--green p-3 call-out">

    <?php the_content();?>


</div>

</div>
</div>
<!-- introduction -->
<div class="clear-both"></div>
<!-- support-->

<div class="container">
  <div class="row">
   <div class="col-md-6 no-padding">

    <img src="<?php bloginfo('template_directory'); ?>/img/tna-building-vision.jpg" class="img-fluid img-border">

</div>
<div class="col-md-6">

 <?php 

if (get_field('support_message','option')){

 the_field('support_message', 'option'); 


}?>

</div>

</div>
</div>

<!-- support -->

<?php




endwhile;
else :
    ?>
    <!-- show the 404 message -->
    <div class="container">
      <div class="row">
       <h1>Sorry, we couldn’t find that page</h1>

       <p>The page may have been moved, updated or deleted. We may have a missing page or an incorrect link. Please <a href="/contact-us/">contact us</a> to let us know so we can correct our mistake.</p>

       <p><a href="/about-us/">About The National Archives Trust</a></p>
   </div>
</div>
<!-- show the 404 message -->
<?php

endif;


?>

</main>



<?php get_footer(); ?>	
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<?php

error_reporting(0);
?>

<?php wp_head(); ?>
  <!-- TNA Grid core CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/navi.0.0.4.css">

<!-- TNA Trust CSS -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/tna-trust.css">

<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet"> 

<!-- icons-->

<script src="https://kit.fontawesome.com/8fe6749214.js" crossorigin="anonymous"></script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TRWBPTQ');</script>
<!-- End Google Tag Manager -->

<!-- Favicons -->

<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon-16x16.png" sizes="16x16" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/vnd.microsoft.icon" /> 


<title><?php bloginfo('name'); ?> - <?php the_title();?></title>


<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />




</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRWBPTQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
    <div class="container">
        <div class="row">
            <div class="col-1">
               <a href="/" title="The National Archives Trust homepage"> <img src="<?php bloginfo('template_directory'); ?>/img/tna-trust-logo.png" class="img-fluid logo"></a>
            </div>
            <div class="col-11">  <div class="trust-nav-bars float-right" onClick="doExpandNav();"><i class="fa fa-bars fa-2x" id="nav-menu"></i></div>
                <nav class="trust-nav">
                    <ul>
                        <li ><a href="/about-us/" <?php if (is_page("about-us") or in_category("about-us")){?> class="current"<?php }?>>About us</a></li>
                        <li><a href="/our-work/"<?php if (is_page("our-work") or in_category("our-work")){?> class="current"<?php }?>>Our work</a></li>
                         <li><a href="/our-board/" <?php if (is_page("our-board") or in_category("our-people")){?> class="current"<?php }?>>Our board</a></li>
                             <!-- <li><a href="/our-policies/" <?php if (is_page("our-policies") or in_category("our-policies")){?> class="current"<?php }?>>Our policies</a></li>-->
                                   <li><a href="/news-and-press/" <?php if (is_page("news-and-press") or in_category("news-and-press")){?> class="current"<?php }?>>News and press</a></li>
                                       <li><a href="/contact-us/" <?php if (is_page("contact-us")){?> class="current"<?php }?>>Contact us</a></li>
                        <li><a class="tna-button" href="/support-us/" role="button">Support Us</a></li>
                    </ul>

                </nav>



            </div>

            <div class="trust-nav-expand">
         <ul>
   <li ><a href="/about-us/" onClick="doExpandNav();" <?php if (is_page("about-us") or in_category("about-us")){?> class="trust-nav-expand-current"<?php }?>>About us</a></li>
   <li ><a href="/our-work/" onClick="doExpandNav();" <?php if (is_page("our-work") or in_category("our-work")){?> class="trust-nav-expand-current"<?php }?>>Our work</a></li>
   <li ><a href="/our-board/" onClick="doExpandNav();" <?php if (is_page("our-board") or in_category("our-people")){?> class="trust-nav-expand-current"<?php }?>>Our board</a></li>
 <!--  <li ><a href="/our-policies/" onClick="doExpandNav();" <?php if (is_page("our-policies") or in_category("our-policies")){?> class="trust-nav-expand-current"<?php }?>>Our policies</a></li> -->
   <li ><a href="/news-and-press/" onClick="doExpandNav();" <?php if (is_page("news-and-press") or in_category("news-and-press")){?> class="trust-nav-expand-current"<?php }?>>News and press</a></li>
   <li ><a href="/contact-us/" onClick="doExpandNav();" <?php if (is_page("contact-us")){?> class="trust-nav-expand-current"<?php }?>>Contact us</a></li>
      <li ><a href="/support-us/" onClick="doExpandNav();" class="support-link">Support us</a></li>
       </ul>
</div>




<?php 

global $post;

$thispage = get_the_title($post->ID);
$thispage = sanitize_title($thispage);

//echo $thispage;

include 'inc/inc-sub-nav.php';?>






        </div>
    </div>
</header>

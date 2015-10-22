<?php
/**
 * Template Name: Front-new
 */

the_post();
//$currentcolor=$post->post_name;
get_header();
get_sidebar('mainnew');
get_header('nav');
?>

<!--START CAROUSEL-->
<?php get_template_part('blocks/carousel'); ?>

<!--PAGE-NEW-->
<div id="page-new" >

  <!--PAGE-CONTAINER -->
  <div id="page-container" class="homecols">

    <!--QUARTERS-->
<?php get_template_part('blocks/quarter-blocks'); ?>




  <!--CLEAR-->
  <div class="clear">&nbsp;</div>

  <!--END PAGE-CONTAINER -->
  </div>

  <!--END PAGE-NEW-->
</div>
<script src="//load.sumome.com/" data-sumo-site-id="796039e81af1fd6d9f69625f4904b3d2a74c34856b8d641782b35b0f165dc9d1" async="async"></script>

<?php get_footer(); ?>
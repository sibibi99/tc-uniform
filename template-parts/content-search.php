<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tctheme
 */

?>
<div class="row single-promo-hover">
      <div class="col-md-6">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php the_post_thumbnail_url();?>" alt="" class="img-responsive w-100 rounded-sm rounded img-thumbnail">
        </a>
      </div>
      <div class="col-md-6">
        <h4><a href="#"><?php the_title()?></a></h4>
        <button class="btn btn-outline-success"><?php the_category()?></button>
        <span class="ti-timer ml-4"></span> <b class="ml-2"><?php the_date()?></b>
        <span class="ti-eye ml-4"></span> <b class="ml-2"><?php echo getPostViews(get_the_ID()); ?></b>
        <div class="trichdan">
          <p><?php the_excerpt();?></p>
        </div>
      </div>
    </div>
    <hr>
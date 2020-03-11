

<?php
get_header('tintuc');
?>


<div class="container">
  <div class="_4tin ">
    <?php
      wp_reset_postdata();
      $_4tinnho = new WP_Query(array(
        'post_type'=> 'post',
        'category_name'=>'huong-dan',
      ));
      while($_4tinnho->have_posts()) { 
        $_4tinnho->the_post();
      ?>
    <div class="row single-promo-hover wow bounceInUp">
      <div class="col-md-6">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php the_post_thumbnail_url();?>" alt="Bảng màu, bảng đo size đồng phục" class="img-responsive w-100 rounded-sm rounded img-thumbnail">
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
    <?php }?>
  </div>
</div>
<hr>

<?php
get_footer();
?>
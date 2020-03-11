<?php
get_header('tintuc');
?>

<?php
  $tinso1 = new WP_Query(array(
    'post_type'=> 'post',
    'category_name'=>'danh-sach-tin-tuc',
    'posts_per_page'=> 1
  ));
?>

<div class="container">
  <div class="tinto">
    <?php while($tinso1->have_posts()) { 
      $tinso1->the_post();
    ?>
    <div class="row rounded bg-light p-2 single-promo-hover">
      <div class="col-md-8">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php the_post_thumbnail_url();?>" alt="" class="img-responsive w-100 rounded-sm rounded img-thumbnail">
        </a>
      </div>
      <div class="col-md-4">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h3>
        <button class="btn btn-outline-success"><?php the_category()?></button>
        <span class="ti-timer ml-4"></span> <b class="ml-2"><?php the_date()?></b>
        <span class="ti-eye ml-4"></span> <b class="ml-2"><?php echo getPostViews(get_the_ID()); ?></b>
        <div class="trichdan"><?php the_excerpt();?></div>
      </div>
    </div>
  </div>
  <!-- End Tin to -->
  <?php }?>
  <hr>
  <div class="_3tin">
    <div class="row  p-2">
      <?php
      wp_reset_postdata();
      $_3tinnho = new WP_Query(array(
        'post_type'=> 'post',
        'category_name'=>'danh-sach-tin-tuc',
        'posts_per_page'=> 3,
        'offset'=> 1
      ));

      while($_3tinnho->have_posts()) { 
        $_3tinnho->the_post();
      ?>
      <div class="col-sm-4 single-promo-hover">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php the_post_thumbnail_url();?>" alt="" class="img-responsive w-100 rounded-sm rounded img-thumbnail">
        </a>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h4>
        <button class="btn btn-outline-success"><?php the_category()?></button>
        <span class="ti-timer ml-4"></span> <b class="ml-2"><?php the_date()?></b>
        <span class="ti-eye ml-4"></span> <b class="ml-2"><?php echo getPostViews(get_the_ID()); ?></b>
        <div class="trichdan">
          <p><?php the_excerpt();?></p>
        </div>
      </div>
      <?php }?>
    </div>
  </div>
  <hr>
  <!-- End 3tin -->
  <div class="_4tin ">
    <?php
      wp_reset_postdata();
      $_4tinnho = new WP_Query(array(
        'post_type'=> 'post',
        'category_name'=>'danh-sach-tin-tuc',
        'posts_per_page'=> 4,
        'offset'=> 4
      ));
      while($_4tinnho->have_posts()) { 
        $_4tinnho->the_post();
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
    <?php }?>
  </div>
</div>
<hr>

<?php
get_footer();
?>
<?php
get_header('tintuc');
?>

<?php
  $tinso1 = new WP_Query(array(
    'post_type'=> 'post',
    'category_name'=>'xuong-may-mu-non-quang-cao',
    // 'posts_per_page'=> 1
  ));
?>

<div class="container">
  <div class="tinto">
    <?php while($tinso1->have_posts()) { 
      $tinso1->the_post();
    ?>
    <div class="row">
      <div class="col-md-6 wow bounceInLeft">
      <a href="<?php the_permalink(); ?>">
          <img src="<?php the_post_thumbnail_url();?>" alt="Công ty may Nón đồng phục, sự kiện, du lịch giá rẻ tại tp hcm" class="img-responsive w-100 rounded-sm rounded img-thumbnail">
        </a>
      </div>
      <div class="col-md-6 wow bounceInRight">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h3>
        <button class="btn btn-outline-success"><?php the_category()?></button>
        <span class="ti-timer ml-4"></span> <b class="ml-2"><?php the_date()?></b>
        <span class="ti-eye ml-4"></span> <b class="ml-2">1000</b>
        <div class="trichdan"><?php the_excerpt();?></div>
      </div>
    </div>
    <?php }?>
  </div>
  <!-- End Tin to -->
</div>

<?php
get_footer();
?>
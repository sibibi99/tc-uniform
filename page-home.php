<?php
/*
 Template Name: TRANG CHỦ
*/
?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tctheme
 */

get_header();
?>

<!--hero section start-->
<section class="hero-section hero-section-3 ptb-100 wow bounceInDown bg-light " data-wow-delay="0.4">
  <!--animated circle shape start-->
  <div class="circles">

    <div class="point animated-point-1"></div>
    <div class="point animated-point-2"></div>
    <div class="point animated-point-3"></div>
    <div class="point animated-point-4"></div>
    <div class="point animated-point-5"></div>
    <div class="point animated-point-6"></div>
    <div class="point animated-point-7"></div>
    <div class="point animated-point-8"></div>
    <div class="point animated-point-9"></div>
  </div>
  <!--animated circle shape end-->
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-md-6 col-lg-6 ">
        <div class="hero-content-left pt-5">
          <h1 class="animation-TC">Cung Cấp Đồng Phục<br> <span>Chuyên Nghiệp</span></h1>
          <p class="lead ">Nhà cung cấp đồng phục hàng đầu tại TP Hồ Chí Minh, Bình Dương và các Tỉnh
            lân cận.</p>
          <!--core feature list start-->

          <h1 class="animation-TC"> Chất lượng <br> <span>Tạo Nên Niềm Tin</span></h1>
          <p class="lead">Nhà cung cấp đồng phục hàng đầu tại TP Hồ Chí Minh, Bình Dương và các Tỉnh
            lân cận.</p>
          <button class="btn secondary-btn animation-TC">
            <h4 class="text-warning d-inline "><a href="tel:0978915515" class="text-warning">Hotline: 09789.15515</a>
            </h4>
          </button>
          <!--core feature list end-->
        </div>
      </div>
      <div class="col-md-6 col-lg-5">
        <div class="hero-animation-img pt-lg-4">
          <img class="img-fluid img-baner d-block m-auto animation-one"
            src="<?php bloginfo('stylesheet_directory')?>/img/may-dong-phuc-ho-chi-minh-binh-duong-long-an.webp"
            alt="animation image" width="600">
        </div>
      </div>
    </div>
  </div>
  <!--shape image start-->
  <img src="<?php bloginfo('stylesheet_directory')?>/img/hero-bg-shape-2.svg" class="shape-image" alt="may dong phuc">
  <!--shape image end-->
</section>
<!--hero section end-->



<!--products 3 KHOI MENU start-->
<?php 
get_template_part('content', '3khoimenu');
?>
<!--products 3 KHOI MENU end-->
<!--products TOP start-->
<?php 
get_template_part('content', 'topcty');
?>
<!--products TOP end-->
<!--products DONG PHUC SO MI start-->
<?php 
get_template_part('content', 'somi');
?>
<!--products SO MI end-->

<!--products DONG PHUC BAO HO LAO DONG start-->
<?php 
get_template_part('content', 'baoho');
?>
<!--products BAO HO LAO DONG end-->
<!--products DONG PHUC AO BEP start-->
<?php 
get_template_part('content', 'aobep');
?>
<!--products Ao Bep end-->
<!--products DONG PHUC TAP DE start-->
<?php 
get_template_part('content', 'tapde');
?>
<!--products TAP DE end-->

<!--products DONG PHUC AO THUN start-->
<?php 
get_template_part('content', 'aothun');
?>
<!--products DONG PHUC AO THUN end-->
<!--products DONG PHUC NÓN start-->
<?php 
get_template_part('content', 'nonquangcao');
?>
<!--products DONG PHUC NÓN end-->
<!--products KH Noi gi start-->
<?php 
get_template_part('content', 'khnoigi');
?>
<!--products KH Noi gi end-->
<!--products DS KH start-->
<?php 
get_template_part('content', 'khachhang');
?>
<!--products DS KH gi end-->
<!--products DS KH start-->
<?php 
get_template_part('content', 'cauhoi');
?>
<!--products DS KH gi end-->



<div class="container mt-4">
  <div class="row justify-content-center wow bounceInRight" data-wow-delay="0.1"">
          <div class=" col-md-12">
    <div class="section-heading text-center mb-4">
      <h2>Tin Tức <span>Mới Nhất</span></h2>
    </div>
  </div>
  <h4 class="text-danger">
    <a href="tin-tuc">Xem Tất Cả</a>
  </h4>
</div>
<hr>
<div class="_3tin wow bounceInUp">
  <div class="row  p-2">
    <?php
      wp_reset_postdata();
      $_3tinnho = new WP_Query(array(
        'post_type'=> 'post',
        'posts_per_page'=> 4,        
      ));

      while($_3tinnho->have_posts()) { 
        $_3tinnho->the_post();
      ?>
      <div class="col-sm-3 single-promo-hover">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php the_post_thumbnail_url();?>" alt="" class="img-responsive w-100 rounded-sm rounded">
          <h5><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h5>
          <button class="btn btn-outline-success"><?php the_category()?></button>
          <span class="ti-timer ml-4"></span> <b class="ml-2"><?php the_date()?></b>
          <span class="ti-eye ml-4"></span> <b class="ml-2"><?php echo getPostViews(get_the_ID()); ?></b>
          <div class="trichdan">
            <p><?php the_excerpt();?></p>
          </div>
      </a>
      </div>
      <?php }?>
  </div>
</div>
<hr>
<!-- End 3tin -->
</div>
<!--products HO TRO start-->
<?php 
get_template_part('content', 'hotro');
?>
<!--products HO TRO end-->


<?php

get_footer();
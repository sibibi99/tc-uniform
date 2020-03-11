<?php
/* Template Name: TRANG GIỚI THIỆU */
?>

<?php
get_header('tintuc');
?>

<!--TAI SAO CHON CHUNG TOI-->
<?php 
get_template_part('content', 'lydochon');
?>
<div class="container wow bounceInUp mt-4">
  <img src="<?php the_post_thumbnail_url()?>" alt="Giới thiệu Công Ty May Đồng Phục Áo Thun Thành Công" class="img-ressponsive rounded w-100 img-thumbnail">
</div>

<!-- Mô tả ngắn -->
<div class="container pl-100 mt-4">
  <ul class="list-creative">
    <li>
      <dl class="list-terms-medium address">
        <h5>
          <span class="ti-flag-alt"></span>
         <abbr>
          Với hơn 10 năm Kinh nghiệm trong lĩnh vực may đồng phục. Công ty chúng tôi xin giới thiệu đến quý khách hàng những dịch vụ nỗi bậc như sau: May Đồng Phục Sơ Mi, Đồng Phục Áo Thun, Nhà hàng, Khách Sạn, Quán ăn, Đồng Phục Bảo Hộ Lao Động, May In Thêu, Đồng phục giá rẻ Hồ Chí Minh, Bình Dương, Long An. Chuyên may Áo Thun Sự Kiện Giá Rẻ, Áo Nhóm, Team Buiding.
          </abbr>
        </h5>
      </dl>
    </li>
  </ul>
</div> 

<div class="container tintuc_style border rounded p-4 bg-light mt-4">
  <?php while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile;  ?>
  <hr>
  <div class="lienhe ml-4">
    <h5>ĐỒNG PHỤC THÀNH CÔNG</h5>
    <a>Email: <strong>kd.tcuniform@gmail.com</strong>  <br>
    Hotline: <strong>0978915515</strong> <br>
    Trụ Sở : 10/5M, Ấp Mỹ Hòa 1, Xã Trung Chánh, Huyện Hóc Môn, TP. HCM <br>
    Xưởng : Tân Thới Hiệp, Quận 12, TP. HCM
    </a> <hr>

  </div>

</div>

<div class="container my-4 ">
  <div class="row py-4 breadcrumb wow bounceInUp " data-wow-delay="0.5">
    <div class="col-md-4 text-center">
      <div class="row info">
        <div class="col-sm-2">
          <img src="<?php bloginfo('stylesheet_directory')?>/img/free.svg" alt="">
        </div>
        <div class="col-sm-10  noidung text-center">
          <h4>Thiết kế mẫu Free</h4>
        </div>
      </div>
      <!-- end Info -->
    </div>
    <div class="col-md-4 text-center">
      <div class="row info">
        <div class="col-sm-2">
          <img src="<?php bloginfo('stylesheet_directory')?>/img/ship.svg" alt="">
        </div>
        <div class="col-sm-10  noidung text-center">
          <h4>Giao hàng tận nơi</h4>
        </div>
      </div>
      <!-- end Info -->
    </div>
    <div class="col-md-4 text-center">
      <div class="row info">
        <div class="col-sm-2">
          <img src="<?php bloginfo('stylesheet_directory')?>/img/247.svg" alt="">
        </div>
        <div class="col-sm-10  noidung">
          <h4 class="text-center">Hỗ Trợ 24/7</h4>
        </div>
      </div>
      <!-- end Info -->
    </div>
  </div>
</div>

<?php
get_footer();
?>
<?php
/* Template Name: Danh Sách Sản Phẩm */
?>

<?php
get_header('tintuc');
?>

<section class="ds_sanpham">
  <div class="container">

    <!--products 3 KHOI MENU start-->
    <?php 
get_template_part('content', '3khoimenu');
?>
    <!--products 3 KHOI MENU end-->

    <div class="khoi_sanpham">

      <div class="row _1ds_sanpham">
        <div class="col-md-6">
          <div class="tieude">
            <h3>ÁO SƠ MI</h3>
          </div>
        </div>
      </div>

      <section id="product" class="">
        <div class="container">
          <!--start product carousel-->
          <div class="product-wrap  wow bounceInUp" data-wow-delay="0.9">
            <div class="product-carousel owl-carousel owl-theme dot-indicator">
              <?php 
                $aosomi = new WP_Query(array('post_type' => 'so_mi'));
                while($aosomi->have_posts()) {
                    $aosomi->the_post();
                    $masanpham = get_field('ma_san_pham')                
            ?>
              <div class="item">
                <div class="single-product rounded border single-promo-hover">
                  <a href="<?php the_permalink();?>">
                    <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="Danh sách đồng phục sơ mi" />
                  </a>
                  <div class="product-info text-center mt-2 pb-4 px-3">
                    <h4 class="mb-1"><?php the_title()?></h4>
                    <h5 class="product-price">
                      <span>Mã: <?php echo $masanpham;?></span></h5>
                    <a href="<?php the_permalink();?>" class="btn secondary-btn">Xem Chi Tiết</a>
                  </div>
                </div>
              </div>
              <?php } wp_reset_query()?>
            </div>
            <div class="co-md-12 text-center mt-4 ">
              <a href="so_mi" class="text-danger h5 font-weight-bold text-center">XEM TẤT CẢ</a>
            </div>
          </div>
          <!--end product carousel-->
        </div>
      </section>
      <hr>
    </div>
    <!-- End_Khoi San Pham -->
    <div class="khoi_sanpham">

      <div class="row _1ds_sanpham">
        <div class="col-md-6">
          <div class="tieude">
            <h3>ÁO THUN</h3>
          </div>
        </div>
      </div>

      <section id="product" class="">
        <div class="container">
          <!--start product carousel-->
          <div class="product-wrap  wow bounceInUp" data-wow-delay="0.9">
            <div class="product-carousel owl-carousel owl-theme dot-indicator">
              <?php 
                $aothun = new WP_Query(array('post_type' => 'ao_thun'));
                while($aothun->have_posts()) {
                    $aothun->the_post();
                    $masanpham = get_field('ma_san_pham')                
            ?>
              <div class="item">
                <div class="single-product rounded border single-promo-hover">
                  <a href="<?php the_permalink();?>">
                    <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="danh sách đồng phục áo thun" />
                  </a>
                  <div class="product-info text-center mt-2 pb-4 px-3">
                    <h4 class="mb-1"><?php the_title()?></h4>
                    <h5 class="product-price">
                      <span>Mã: <?php echo $masanpham;?></span></h5>
                    <a href="<?php the_permalink();?>" class="btn secondary-btn">Xem Chi Tiết</a>
                  </div>
                </div>
              </div>
              <?php } wp_reset_query()?>
            </div>
            <div class="co-md-12 text-center mt-4 ">
              <a href="ao_thun" class="text-danger h5 font-weight-bold text-center">XEM TẤT CẢ</a>
            </div>
          </div>
          <!--end product carousel-->
        </div>
      </section>
      <hr>
    </div>
    <!-- End_Khoi San Pham -->

    <div class="khoi_sanpham">

      <div class="row _1ds_sanpham">
        <div class="col-md-6">
          <div class="tieude">
            <h3>BẢO HỘ LAO ĐỘNG</h3>
          </div>
        </div>
      </div>

      <section id="product" class="">
        <div class="container">
          <!--start product carousel-->
          <div class="product-wrap  wow bounceInUp" data-wow-delay="0.9">
            <div class="product-carousel owl-carousel owl-theme dot-indicator">
              <?php 
                $aobaoho = new WP_Query(array('post_type' => 'bao_ho_lao_dong'));
                while($aobaoho->have_posts()) {
                    $aobaoho->the_post();
                    $masanpham = get_field('ma_san_pham')                
            ?>
              <div class="item">
                <div class="single-product rounded border single-promo-hover">
                  <a href="<?php the_permalink();?>">
                    <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="danh sách đồng phục bảo hộ lao động" />
                  </a>
                  <div class="product-info text-center mt-2 pb-4 px-3">
                    <h4 class="mb-1"><?php the_title()?></h4>
                    <h5 class="product-price">
                      <span>Mã: <?php echo $masanpham;?></span></h5>
                    <a href="<?php the_permalink();?>" class="btn secondary-btn">Xem Chi Tiết</a>
                  </div>
                </div>
              </div>
              <?php } wp_reset_query()?>
            </div>
            <div class="co-md-12 text-center mt-4 ">
              <a href="bao_ho_lao_dong" class="text-danger h5 font-weight-bold text-center">XEM TẤT CẢ</a>
            </div>
          </div>
          <!--end product carousel-->
        </div>
      </section>
      <hr>
    </div>
    <!-- End_Khoi San Pham -->

    <div class="khoi_sanpham">
      <div class="row _1ds_sanpham">
        <div class="col-md-6">
          <div class="tieude">
            <h3>TẠP DỀ QUÁN CAFE, NHÀ HÀNG-KS</h3>
          </div>
        </div>
      </div>

      <section id="product" class="">
        <div class="container">
          <!--start product carousel-->
          <div class="product-wrap  wow bounceInUp" data-wow-delay="0.9">
            <div class="product-carousel owl-carousel owl-theme dot-indicator">
              <?php 
                $tapde = new WP_Query(array('post_type' => 'tap_de'));
                while($tapde->have_posts()) {
                    $tapde->the_post();
                    $masanpham = get_field('ma_san_pham')                
            ?>
              <div class="item">
                <div class="single-product rounded border single-promo-hover">
                  <a href="<?php the_permalink();?>">
                    <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="danh sách đồng phục nhà hàng, quán cafe" />
                  </a>
                  <div class="product-info text-center mt-2 pb-4 px-3">
                    <h4 class="mb-1"><?php the_title()?></h4>
                    <h5 class="product-price">
                      <span>Mã: <?php echo $masanpham;?></span></h5>
                    <a href="<?php the_permalink();?>" class="btn secondary-btn">Xem Chi Tiết</a>
                  </div>
                </div>
              </div>
              <?php } wp_reset_query()?>
            </div>
            <div class="co-md-12 text-center mt-4 ">
              <a href="tap_de" class="text-danger h5 font-weight-bold text-center">XEM TẤT CẢ</a>
            </div>
          </div>
          <!--end product carousel-->
        </div>
      </section>
      <hr>
    </div>
    <!-- End_Khoi San Pham -->
    <div class="khoi_sanpham">
      <div class="row _1ds_sanpham">
        <div class="col-md-6">
          <div class="tieude">
            <h3>ĐỒNG PHỤC BẾP - ÁO ĐẦU BẾP - TẠP DỀ - NÓN BẾP</h3>
          </div>
        </div>
      </div>

      <section id="product" class="">
        <div class="container">
          <!--start product carousel-->
          <div class="product-wrap  wow bounceInUp" data-wow-delay="0.9">
            <div class="product-carousel owl-carousel owl-theme dot-indicator">
              <?php 
                $aobep = new WP_Query(array('post_type' => 'ao_bep'));
                while($aobep->have_posts()) {
                    $aobep->the_post();
                    $masanpham = get_field('ma_san_pham')                
            ?>
              <div class="item">
                <div class="single-product rounded border single-promo-hover">
                  <a href="<?php the_permalink();?>">
                    <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="danh sách đồng phục đầu bếp" />
                  </a>
                  <div class="product-info text-center mt-2 pb-4 px-3">
                    <h4 class="mb-1"><?php the_title()?></h4>
                    <h5 class="product-price">
                      <span>Mã: <?php echo $masanpham;?></span></h5>
                    <a href="<?php the_permalink();?>" class="btn secondary-btn">Xem Chi Tiết</a>
                  </div>
                </div>
              </div>
              <?php } wp_reset_query()?>
            </div>
            <div class="co-md-12 text-center mt-4 ">
              <a href="ao_bep" class="text-danger h5 font-weight-bold text-center">XEM TẤT CẢ</a>
            </div>
          </div>
          <!--end product carousel-->
        </div>
      </section>
      <hr>
    </div>
    <!-- End_Khoi San Pham -->

  </div>
</section>
</div>

<?php
get_footer();
?>
<section id="product" class="pb-100 mt-2">
  <div class="container">
      <div class="row justify-content-center wow bounceInRight" data-wow-delay="0.1"">
        <div class=" col-md-12">
          <div class="section-heading text-center mb-4">
              <h2>Đồng Phục <span>Đầu Bếp, Nhà Hàng Khách Sạn</span></h2>
              <p class="lead ">May In Thêu <span class="text-danger">Đồng Phục Đầu Bếp Nhà Hàng, Quán Cafe</span> Cao Cấp. Với
                  Thiết kế thanh lịch cùng chất liệu được đặt dệt, nhuộm từ các đối tác lớn tại Việt Nam sẽ đem lại
                  cảm giác thoải mái và phong cách trẻ trung nhưng cũng không kém phần lịch sự cho người mặc.</p>
          </div>
      </div>
      <h4 class="text-danger">
          <a href="ao_bep">Xem Tất Cả</a>
      </h4>
  </div>
  <hr>
  <!--start product carousel-->
  <div class="product-wrap pt-4 wow bounceInUp" data-wow-delay="0.9">
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
                      <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="may đồng phục bếp, áo bếp trưởng, tạp dề" />
                  </a>
                  <div class="product-info text-center pb-4 px-3 mt-4">
                      <h4 class="mb-1"><?php the_title()?></h4>
                      <h5 class="product-price">
                          <span>Mã: <?php echo $masanpham;?></span></h5>
                      <a href="<?php the_permalink();?>" class="btn secondary-btn">Xem Chi Tiết</a>
                  </div>
              </div>
          </div>
          <?php }?>

      </div>
  </div>
  <!--end product carousel-->
  </div>
</section>
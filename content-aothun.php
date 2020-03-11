<section id="product" class="pb-100 " >
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="section-heading text-center mb-4 wow bounceInRight" data-wow-delay="0.4">
                  <h2>Đồng Phục <span>Áo Thun</span></h2>
                  <p class="lead">May In Thêu <span class="text-danger">Đồng Phục Công Ty, Áo Thun Sự Kiện, Đồng Phục Nhà Hàng, Cafe</span>. Mẫu áo thun Độc quyền, Chuyên nghiệp sẽ giúp doanh nghiệp làm nổi bật thương hiệu của mình.</p>
              </div>
          </div>
          <h4 class="text-danger">
            <a href="ao_thun">Xem Tất Cả</a>
        </h4>
    </div>
    <hr>
      <!--start product carousel-->
      <div class="product-wrap pt-4 wow bounceInUp" data-wow-delay="0.4">
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
                        <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="may đồng phục áo thun giá rẻ tại tp hcm" />
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
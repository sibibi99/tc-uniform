<section id="product" class="pb-100 mt-4">
    <div class="container">
        <div class="row justify-content-center wow bounceInRight" data-wow-delay="0.1"">
          <div class=" col-md-12">
            <div class="section-heading text-center mb-4">
                <h2>Mũ Nón Quảng Cáo <span>Nón Kết - Nón Sự Kiện - Nón Du Lịch</span></h2>
                <p class="lead ">May In Thêu <span class="text-danger">Các Loại Nón Du Lịch, Nón Sự Kiện, Nón Mùa Hè Xanh, Nón Tai Bèo</span> Văn Phòng Cao Cấp. Với
                    Nhiều chất liệu lựa chọn, từ giá thành rẻ phải chăng đến chất lượng Cao cấp nhất. Thỏa mãn tất cả nhu cầu của khách hàng.</p>
            </div>
        </div>
        <h4 class="text-danger">
            <a href="so_mi">Xem Tất Cả</a>
        </h4>
    </div>
    <hr>
    <!--start product carousel-->
    <div class="product-wrap pt-4 wow bounceInUp" data-wow-delay="0.9">
        <div class="product-carousel owl-carousel owl-theme dot-indicator">
            <?php 
                $non = new WP_Query(array('post_type' => 'non_quang_cao'));
                while($non->have_posts()) {
                    $non->the_post();
                    $masanpham = get_field('ma_san_pham')                
            ?>
            <div class="item">
                <div class="single-product rounded border single-promo-hover">
                    <a href="<?php the_permalink();?>">
                        <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="Công ty may đồng phục Sơ mi uy tín tại tp hcm" />
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
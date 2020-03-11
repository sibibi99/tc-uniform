<?php
/* Template Name: CHI TIẾT - TẠP DỀ */
?>

<?php
get_header('tintuc');
?>
<?php 
    $masanpham = get_field('ma_san_pham')                
?>
<div class="container chitiet-somi">
<?php setPostViews(get_the_ID()); ?>
  <div class="row">
    <div class="col-md-4 wow bounceInLeft" data-wow-delay="0.1">
      <img class="w-100" src="<?php the_post_thumbnail_url();?>" alt="">
    </div>
    <div class="col-md-8 wow bounceInRight" data-wow-delay="0.1">
    <h2><?php the_title()?></h2>
    <div class="rating d-flex">
      <img src="<?php bloginfo('stylesheet_directory')?>/img/star.png" alt="">
      <img src="<?php bloginfo('stylesheet_directory')?>/img/star.png" alt="">
      <img src="<?php bloginfo('stylesheet_directory')?>/img/star.png" alt="">
      <img src="<?php bloginfo('stylesheet_directory')?>/img/star.png" alt="">
      <img src="<?php bloginfo('stylesheet_directory')?>/img/star.png" alt="">
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-6">
        <h4>Mã Sản Phẩm</h4>
        <button class="btn btn-danger mb-2 font-weight-bold"><?php echo $masanpham;?></button>
      </div>
      <div class="col-sm-6">
        <h4>Giá</h4>
        <button class="btn btn-success mb-2 font-weight-bold">Liên Hệ Để Có Giá Tốt Nhất</button>
      </div>
    </div>
    <hr>
    <p>Thiết kế thanh lịch và trang nhã cùng chất liệu được đặt dệt, nhuộm từ các đối tác lớn tại Việt Nam sẽ đem lại cảm giác thoải mái và phong cách trẻ trung nhưng cũng không kém phần lịch sự cho người mặc.</p>
    <hr>
    <div class="row d-flex">
      <div class="col-md-7">
        <h4>Loại Vải</h4>
        <button class="btn btn-warning mb-2">Kaki XI CN</button>
        <button class="btn btn-warning mb-2">Kaki 65-35</button>
        <button class="btn btn-warning mb-2">Kaki Thành Công</button>
        <button class="btn btn-warning mb-2">Kaki Thun Cao Cấp</button>
      </div>
      <div class="col-md-5">
        <h4>Loại Nón</h4>
        <button class="btn btn-danger mb-2">Nón Kết</button>
        <button class="btn btn-danger mb-2">Nón Không Nóc</button>
        <button class="btn btn-danger mb-2">Nón Tai Bèo</button>
      </div>
    </div>
    <hr>
    <h4>Đặt hàng (Zalo: 24/7)</h4>
    <h3><a  class="text-danger" href="tel:+0978915515">09.789.15515</a></h3>
    </div> 
  </div>
  <hr>
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
  </div> <hr>
  <div class="row chitiet-somi_thongtin wow bounceInUp" data-wow-delay="0.1">
    <div class="col-md-12">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Chi Tiết Nón</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Bảng Thông Số Đo Size</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-bangmau" role="tab" aria-controls="nav-bangmau" aria-selected="false">Bảng Màu Vải</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active px-4 pt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
         <!-- Chi Tie Tin -->
         <h4>Đồng Phục Thành Công chuyên sản xuất và May Nón Quảng Cáo - Nón Sự Kiện - Nón Du Lịch đảm báo uy tín, chất lượng giá rẻ. </h4>
         Công ty chúng tôi Chuyên <span> may nón lưỡi trai, công ty may nón kết, công ty may mũ lưỡi trai, công ty may mũ kết, xưởng may mũ nón giá rẻ, cơ sở may mũ nón, cơ sở may nón kết giá rẻ, cơ sở may nón lưỡi trai, công ty may nón giá rẻ, công ty may nón theo yêu cầu, xưởng may nón giá rẻ, đặt may nón theo yêu cầu, thêu nón theo yêu cầu, công ty may nón snapback, xưởng may nón snapback, cơ sở may nón snapback, may nón nữa đầu, may nón bucket, may nón bảo vệ, may nón đồng phục theo yêu cầu, may nón nhóm, nhận may nón mũ theo yêu cầu, sản xuất nón mũ theo yêu cầu </span>
          
          <ul class="list-group list-group-flush mt-2">
            <li class="list-group-item"> <b>• Kinh doanh luôn luôn bao:</b>  gồm các yêu tố như thương hiệu, chất lượng, dịch vụ và giá thành sản phẩm… Vì vậy đặt mũ in logo là giải pháp hiệu quả và tương đối tiết kiệm chi phí cho bạn để xây dựng thương hiệu, tạo hình ảnh công ty của bạn một cách tự nhiên và hữu ích nhất.</li>
            <li class="list-group-item"> <b>• Logo thương hiệu trên từng chiếc nón</b>  có in ấn những hoạ tiết, hình ảnh hay đơn giản là các câu slogan, khẩu hiệu của công ty mình. Là công cụ mang lại hiệu quả tuyệt đối, gây ấn tượng đến mọi người.</li>
            <li class="list-group-item"> <b>• Tạo ấn tượng:</b> ấn tượng ban đầu rất qua trọng, nhân viên luôn gọn gàng
              và thanh lịch trong những chiếc đồng phục tạo sự chuyên nghiệp trong mắt mọi người</li>
            <li class="list-group-item"> <b>•	Quảng bá thương hiệu: </b> Những chiếc áo có logo và tên công ty sẽ nó sẽ giúp nhiều người biết đến công
              ty của bạn mà không mất quá nhiều chi phí quảng cáo như những cách quảng bá thương hiệu khác.</li>
            <li class="list-group-item"><b>• Tính thẩm mỹ:</b> Đồng phục cho Quán Cafe hay Nhà hàng mang tính thẩm mỹ cao, bởi sự đơn giản
              nhưng vẫn đảm bảo sang trọng, chỉn chu và thanh lịch.</li>
          </ul>
          <h4 class="mt-2">
          Nếu bạn đang phân vân chưa biết lựa chọn chất liệu nón? đặt làm nón như thế nào? thiết kế logo ra sao trên chiếc nón? Vậy hãy cùng chúng tôi tìm hiểu thêm về các thông tin dưới đây nhé!
          </h4>
          
          <h4 class="mt-2">
          Giúp bạn lựa chọn đặt nón Đẹp & Phù hợp với nhu cầu
          </h4>
          Bạn đặt hàng mũ nón lần đầu tiên và bạn chưa có kinh nghiệm nên sẽ gặp nhiều khó khăn trong việc lựa chọn sản phẩm như thế nào. Chúng tôi sẽ tư vân để giúp bạn có thể lựa sản phẩm chất lượng cùng việc in ấn như thế nào là phù hợp. Hơn hết, bạn cần đặt nón kết theo yêu cầu giá tốt nhất, với chất liệu đảm bảo để tăng hiệu quả trong kinh doanh <br>
          Trên thị trường có rất nhiều loại vải có thể sử dụng để may <span>Nón Sự Kiện, Quảng Cáo</span> , nhưng chúng ta cần cân nhắc nhiều yếu
          tố để đưa ra sự lựa chọn. Nếu bạn vẫn chưa biết nên chọn loại vải nào thì chúng tôi gợi ý cho bạn một số mẫu
          vải Bảo Hộ thường gặp như: Kaki Thành Công, Kaki Thun, Kaki 65-35, Kaki SI với nhiều mực giá lựa chọn.

          <p>Phương châm hoạt động của chúng tôi: <b>"UY TÍN - CHẤT LƯỢNG TẠO NIỀM TIN".</b></p>
          <!-- End Chi tiet tin -->
          
        </div>
        <div class="tab-pane fade px-4 pt-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="btn btn-warning">Nón Lưỡi Trai</div>
        <div class="btn btn-warning">Nón Tai Bèo</div>
        <div class="btn btn-warning">Nón Hiphop</div>
        </div>
        <div class="tab-pane fade px-4 pt-4" id="nav-bangmau" role="tabpanel" aria-labelledby="nav-profile-tab">
        <h2>Bảng Màu Kaki Thun Cao Cấp</h2>
          <div class="row">
            <div class="col-md-6">
              <img class="w-100" src="<?php bloginfo('stylesheet_directory')?>/img/bang mau/kaki thun 1.jpg"
                alt="bảng màu vải Kaki thun Cao Cấp">
            </div>
            <div class="col-md-6">
              <img class="w-100" src="<?php bloginfo('stylesheet_directory')?>/img/bang mau/kaki thun 2.jpg"
                alt="bảng màu vải Kaki thun Cao Cấp">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <hr>
  <!-- End Thong tin CT -->
</div> 

<section id="product" class="pb-100 mt-4 " data-wow-delay="0.4">
  <div class="container">
      <div class="row justify-content-center  wow bounceInLeft" data-wow-delay="0.1">
          <div class="col-md-8">
              <div class="section-heading text-center mb-4">
                  <h2>Mẫu <span >Nón Quảng Cáo - Sự Kiện - Du Lịch</span></h2>
              </div> <hr>
          </div>
      </div>
      <!--start product carousel-->
      <div class="product-wrap pt-4 wow bounceInUp" data-wow-delay="0.9">
          <div class="product-carousel owl-carousel owl-theme dot-indicator">
            <?php 
                $tapde = new WP_Query(array('post_type' => 'non_quang_cao'));
                while($tapde->have_posts()) {
                    $tapde->the_post();
                    $masanpham = get_field('ma_san_pham')                
            ?>
              <div class="item">
                  <div class="single-product rounded border single-promo-hover">
                      <a href="<?php the_permalink();?>">
                        <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="mẫu nón sự kiện, nón du lịch "/>
                    </a>
                      <div class="product-info text-center pb-4 px-3">
                          <h4 class="mb-1"><?php the_title()?></h4>
                          <h5 class="product-price">                              
                              <span>Mã: <?php echo $masanpham;?></span></h5>
                          <a href="<?php the_permalink();?>" class="btn secondary-btn">Xem Chi Tiết</a>
                      </div>
                  </div>
              </div>
              <?php } wp_reset_query()?>

          </div>
      </div>
      <!--end product carousel-->
  </div>
</section>

<?php
get_footer();
?>
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
        <h4>Form Tạp Dề</h4>
        <button class="btn btn-danger mb-2">Tạp Dề Dài</button>
        <button class="btn btn-danger mb-2">Tạp Dề Ngắn</button>
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
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Chi Tiết Sơ Mi</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Bảng Thông Số Đo Size</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-bangmau" role="tab" aria-controls="nav-bangmau" aria-selected="false">Bảng Màu Vải</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active px-4 pt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
         <!-- Chi Tie Tin -->
         <h4>Đồng Phục Thành Công chuyên sản xuất và May Đồng Phục Tạp Dề, Nhà hàng, khách sạn, Quán Cafe đảm báo uy tín, chất lượng giá rẻ. Các dịch vụ may đồng phục Bảo Hộ của chúng tôi gồm có : Đồng Phục Quán Cafe, Đồng Phục Nhà Hàng Khách Sạn, Đồng Phục Quán Ăn</h4>
          Đồng phục là các loại quần, áo giống nhau của nhân viên theo quy định, nội quy của một hội, nhóm, tổ chức nào
          đó... Đồng phục thể hiện sự đoàn kết của tổ chức đã có từ lâu đời và hiện nay đang được sử dụng rất phổ biến.
          Những bộ đồ đồng phục là sự thể hiện phong cách, cá tính… của một đội nhóm hay tổ chức cũng như tạo sự khác
          biệt giữa các tập thể với nhau.
          <span>Tạp dề</span>  là phụ kiện không thể thiếu đối với đầu bếp chuyên nghiệp trong nhà hàng, khách sạn. Khoác lên chiếc tạp dề đẹp không chỉ khiến đầu bếp thoải mái, hứng thú trong việc sáng tạo ra món ăn ngon mà còn hăng say hơn với công việc. Tạp dề bảo vệ cho quần áo sạch sẽ hơn khi làm việc.  <br>
          Với <span>Đồng Phục Tạp dề</span> sẽ mang đến rất nhiều lợi ích về mặt hình ảnh cũng như thẩm mỹ cho Nhà hàng hay Quán cafe chúng ta.
          
          <ul class="list-group list-group-flush mt-2">
            <li class="list-group-item"> <b>• Tác phong chuyên nghiệp:</b> Với đồng phục tạp dề khách hàng thấy được sự chu đáo, vệ sinh, cũng như tác phong phục vụ khách hàng rất là nghiêm túc.</li>
            <li class="list-group-item"> <b>• Sự tự tin:</b> một chiếc đồng phục sơ mi, kết hợp cùng quần tây hay chân
              váy ngắn luôn tạo nên sức quyến rũ và tự tin trong công việc cũng như giao tiếp với khách hàng được hiệu
              quả hơn.</li>
            <li class="list-group-item"> <b>• Tạo ấn tượng:</b> ấn tượng ban đầu rất qua trọng, nhân viên luôn gọn gàng
              và thanh lịch trong những chiếc đồng phục tạo sự chuyên nghiệp trong mắt mọi người</li>
            <li class="list-group-item"> <b>•	Quảng bá thương hiệu: </b> Những chiếc áo có logo và tên công ty sẽ nó sẽ giúp nhiều người biết đến công
              ty của bạn mà không mất quá nhiều chi phí quảng cáo như những cách quảng bá thương hiệu khác.</li>
            <li class="list-group-item"><b>• Tính thẩm mỹ:</b> Đồng phục cho Quán Cafe hay Nhà hàng mang tính thẩm mỹ cao, bởi sự đơn giản
              nhưng vẫn đảm bảo sang trọng, chỉn chu và thanh lịch.</li>
          </ul> <br>
          Với những lý do tuyệt vời mà đồng phục công ty đẹp mang lại thì đây đúng là sự lựa chọn tuyệt vời cho nhân
          viên công sở. Chần chờ gì mà không may đồng phục sơ mi ngay hôm nay nhận được những giá trị mà đồng phục mang
          lại. <br>
          <h4 class="mt-2">
            Những vấn đề cần lưu ý để sở hữu mẫu Tạp dề cho Quán cafe hay nhà hàng đẹp!
          </h4>
          Ai cũng muốn sở hữu đồng phục cho công ty thật đẹp, nhưng để đạt được điều đó thì cần cân nhắc cũng như đưa ra những lựa
          chọn phù hợp. Dưới đây là những điểm cần cân nhắc khi bắt tay vào việc may đồng phục công ty đúng ý. <br>
          <h4 class="mt-2">
            Chọn được loại vải thích hợp cho đồng phục Quán và phù hợp với nhu cầu thực tiễn.
          </h4>
          Trên thị trường có rất nhiều loại vải có thể sử dụng để may đồng phục, nhưng chúng ta cần cân nhắc nhiều yếu
          tố để đưa ra sự lựa chọn. Nếu bạn vẫn chưa biết nên chọn loại vải nào thì chúng tôi gợi ý cho bạn một số mẫu
          vải Bảo Hộ thường gặp như: Kaki Thành Công, Kaki Thun, Kaki 65-35, Kaki SI với nhiều mực giá lựa chọn.

          <p>Phương châm hoạt động của chúng tôi: <b>"UY TÍN - CHẤT LƯỢNG TẠO NIỀM TIN".</b></p>
          <!-- End Chi tiet tin -->
          
        </div>
        <div class="tab-pane fade px-4 pt-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <img src="<?php bloginfo('stylesheet_directory')?>/img/thong so bao ho.svg" alt=""class="img-responsive">
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
                  <h2>Đồng Phục <span >Tạp Dề Bếp - Quán Cafe - Nhà Hàng</span></h2>
              </div> <hr>
          </div>
      </div>
      <!--start product carousel-->
      <div class="product-wrap pt-4 wow bounceInUp" data-wow-delay="0.9">
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
                        <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="mẫu tạp dề bếp, tạp dề nhà hàng, quán cafe"/>
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
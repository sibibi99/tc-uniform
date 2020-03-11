<?php
/* Template Name: DS Nón Quảng Cáo */
?>

<?php
get_header('tintuc');
?>

<section class="ds_sanpham">
  <div class="container">

    <div class="row _1ds_sanpham">
      <div class="col-md-12">
        <div class="tieude">
          <h3>NÓN QUẢNG CÁO - NÓN SỰ KIỆN - NÓN DU LỊCH</h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h4>1/	Mũ, nón quảng cáo ( Nón thương hiệu) là gì?</h4>
        <p>Là vật dụng để che đầu thông  qua các chất liệu khác nhau như vải, da, nhựa tổng hợp (PVC, PE,..) hay các chất liệu tự nhiên khác. 
Công dụng để bảo vệ cá nhân người đội nón hoặc tránh các tác nhân khác bên ngoài ( ánh sáng, mưa, khói, bụi,..) .
 Vậy nón quảng cáo ( thương hiệu là gì)?
Ngoài  việc bảo vệ cho người sử dụng thương hiệu logo, thông điệp được may thêu,... lồng ghép vào một cách trực tiếp trên sản phẩm.</p>
        <h4>2/	Công dụng của Mũ, nón quảng cáo ( nón thương hiệu) </h4>
        <p>Đồng phục Thành Công là một trong những đơn vị uy tín chuyên cung cấp các loại nón quảng cáo cho doanh nghiệp nhằm phục vụ mục đích quảng bá thương hiệu cho doanh  nghiệp và cung cấp những sản phẩm chất lượng trong và ngoài nước.
</p>
<h4>SẢN PHẨM, CHẤT LIỆU & ĐẶC TÍNH SẢN PHẨM</h4>
<b>Các loại nón thường được sử dụng như nón lưỡi trai (nón kết), nón tai bèo, snapack, nón đánh golf,.. với nhiều chất liệu khác nhau như:</b>
<ul class="list-group list-group-flush mt-2">
          <li class="list-group-item"> <b>• Vải Kaki Việt Nam:</b> đặc tính mỏng và dày  thích hợp làm nón đồng phục du lịch hay dùng làm quà tặng khách, giá thành rẻ nên thường được sử dụng trong trường hợp cần thởi gian ngắn</li>
          <li class="list-group-item"> <b>• Vải Kaki Cotton:</b>có rất nhiều loại nhưng cơ bản đều thấm nước tốt, giá cả hợp lý, thích hợp dùng làm nón đồng phục công ty, quảng cáo tặng khách hàng, đồng phục trong các quán ăn. </li>
          <li class="list-group-item"> <b>• Vải Kaki Nhung:</b>là loại vải may nón Xịn nhất, vải dày mềm, dành cho xuất khẩu. Giá thành cao chất lượng cao cấp.</li>
        </ul> <br>
        <h4>3/	Công nghệ in, thêu linh hoạt </h4>
        <p>Tùy theo yêu cầu và nguồn chi phí doanh nghiệp mà đồng phục thành công có những công nghệ in, thêu,... sản phẩm nón thương hiệu một cách linh hoạt, đáp ứng mọi yêu cầu của Khách hàng đưa ra.</p>
        <h4>4/	Ứng dụng</h4>
        <p>Nón thương hiệu được ứng dụng cao trong việc tiếp cận Khách hàng mà doanh nghiệp nên ưu tiên lựa chọn làm quà tặng cho nhân viên hay company trip nhằm bảo vệ các tác nhân môi trường cho nhân viên và giới thiệu màu sắc, logo trực tiếp đến mọi người.
Vì là sản phẩm được sử dụng trong một khoản thời gian cần thiết nên quý Khách hàng cần lựa chọn một đơn vị uy tín như đồng phục Thành Công để tuân thủ đúng thời gian giao sản phẩm và xử  lý nhanh các đơn hàng kịp tiến độ cho chủ doanh nghiệp.
</p>
        </div>
    </div>

    
    <!-- Danh Sach Chi Tiet -->
    <div class="row">
      <?php
       $the_query = new WP_Query( array(
      'posts_per_page'=>12,
       'post_type'=>'non_quang_cao',
       'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
       );?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post();  $masanpham = get_field('ma_san_pham'); ?>

      <div class="col-sm-6 col-md-4 mb-4 contro">
        <div class="card w-100">
          <a href="<?php the_permalink();?>">
            <img class="card-img-top " src="<?php the_post_thumbnail_url();?>" alt="May in thêu nón quảng cáo, nón du lịch">
          </a>
          <div class="card-body bg-light">
            <h5 class="card-title text-danger"><?php the_title()?></h5>
            <h5 class="product-price">
              <span>Mã: <?php echo $masanpham;?></span></h5>
            <p><?php the_excerpt();?></p>
          </div>
        </div>
      </div>
      <!-- End_Item -->
      <?php endwhile; ?>
    </div>

    <div class="row m-2">
      <nav class="menu_phantrang ">
  <?php   
    $big = 999999999; // need an unlikely integer
    echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages
    ));
    wp_reset_postdata();
  ?>
      </nav>
    </div>

  </div>
</section>

<?php
get_footer();
?>
<?php
/* Template Name: DS Tap De */
?>

<?php
get_header('tintuc');
?>

<section class="ds_sanpham">
  <div class="container">

    <div class="row _1ds_sanpham">
      <div class="col-md-12">
        <div class="tieude">
          <h3>DANH SÁCH MẪU TẠP DỀ QUÁN CAFE - NHÀ HÀNG KS</h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h4>1/	Giới thiệu đồng phục nhà hàng, khách sạn, quán ăn,...</h4>
        <p>Trong bối cảnh kinh tế hóa toàn cầu thì nhu cầu ẩm thực, dịch vụ được xem là một trong những ngành phát triển nhanh nhất, với số lượng cửa hàng, dịch vụ liên tục mọc lên tại các thành phố lớn dẫn đến việc cạnh tranh trở nên khó khăn hơn. Vậy nên, làm cách nào để Khách hàng luôn nhớ đến mình luôn là bài toán khó mà doanh nghiệp luôn phải tìm kiếm.
Đồng phục cho cửa hàng, doanh nghiệp chính là phương pháp hữu hiệu để Khách hàng nhớ đến thương hiệu đó.
Tại đồng phục Thành Công chúng tôi cung cấp các mẫu thiết kế dựa trên từng ngành nghề khác nhau như nhà hàng, Khách sạn, quán ăn để giúp thương hiệu trở nên chuyên nghiệp trong mắt Khách hàng, đảm bảo vệ sinh & tính ứng dụng cho từng ngành nghề liên quan.
</p>
        <h4>2/ Tạp dề</h4>
        <p>là phụ kiện hết sức cần thiết cho nhân viên phục vụ, nhân viên chế biến, nhân viên pha chế…
Tạp dề không chỉ có tác dụng bảo vệ quần áo được sạch sẽ, tránh bám thức ăn, nước uống mà tạp dề còn là trang phục thời trang.
Có nguồn gốc từ các nhà hàng Âu sang trọng vì vậy nó giúp nâng cao giá trị thương hiệu mà các hàng quán Việt Nam vẫn chưa sử dụng rộng rãi.
Kết hợp với công nghệ, in thêu thương hiệu một cách linh hoạt mà Đồng phục Thành Công cung cấp sẽ giúp doanh nghiệp trở nên vô cùng chuyên nghiệp trong mắt người dùng.
</p>
<h4>CÁC LOẠI TẠP DỀ</h4>
        <ul class="list-group list-group-flush mt-2">
          <li class="list-group-item"> <b>-	Tạp dề nhà hàng</b></li>
          <li class="list-group-item"> <b>-	Tạp dề nội trợ</b></li>
          <li class="list-group-item"> <b>-	Tạp dề pha chế</b></li>
          <li class="list-group-item"> <b>-	Tạp dề phục vụ</b></li>
          <li class="list-group-item"> <b>-	Tạp dề bếp (làm bếp, nấu ăn)</b></li>
          <li class="list-group-item"> <b>-	Tạp dề bảo hộ (dùng trong các bệnh viện, trung tâm nghiên cứu...)</b></li>
          <li class="list-group-item"> <b>-	Tạp dề làm nail,...</b></li>
        </ul> <br>
<h4>3/	Chất liệu</h4>
<b>TẠI đồng phục Thành Công chúng tôi cung cấp nhiều mẫu tạp dề & đồng phục đi kèm với chất liệu như sau: </b>
<ul class="list-group list-group-flush mt-2">
          <li class="list-group-item">Tạp dề đồng phục được may với chất vải Kaki, cotton,... dày và đẹp, không bị nhăn nên sang trọng, thoáng mát khi mặc.</li>
          <li class="list-group-item">Chi tiết may sắc sảo, có 1 túi tiện bỏ oder, bút viết, vật dụng....</li>
          <li class="list-group-item">Size: Free size, có tăng đơ điều chỉnh cao thấp ở dây qua cổ phù hợp theo chiều cao từng người, dây cột eo tăng giảm theo vòng eo.</li>
          <li class="list-group-item">Màu sắc đa dạng.</li>
        </ul> <br> 
        <h4>Ngoài ra chúng tôi còn cung cấp đa dạng có loại áo thun, sơ mi đồng phục.</h4>  
      </div>
    </div>
    
    <!-- Danh Sach Chi Tiet -->
    <div class="row">
      <?php
       $the_query = new WP_Query( array(
      'posts_per_page'=>12,
       'post_type'=>'tap_de',
       'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
       );?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post();  $masanpham = get_field('ma_san_pham'); ?>

      <div class="col-sm-6 col-md-4 mb-4 contro">
        <div class="card w-100">
          <a href="<?php the_permalink();?>">
            <img class="card-img-top " src="<?php the_post_thumbnail_url();?>" alt="Đồng phục tạp dề nhà hàng, quán cafe">
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
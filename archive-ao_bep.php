<?php
/* Template Name: DS Áo Bếp */
?>

<?php
get_header('tintuc');
?>

<section class="ds_sanpham">
  <div class="container">

    <div class="row _1ds_sanpham">
      <div class="col-md-12">
        <div class="tieude">
          <h3>DANH SÁCH MẪU ÁO ĐẦU BẾP</h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
      <span>May đồng phục công ty không còn quá xa lạ đối với mọi người, nhưng đồng phục bếp thì chưa được nhiều người quan tâm. Đó có thể là sự thiếu xót đáng tiếc. Bên cạnh các bộ phận tiếp đón khách ra vào thì còn có thêm một bộ phận nhân viên phục vụ nhu cầu ăn uống của các nhà hàng, khách sạn đều cần trang bị đồng phục. Cùng tìm hiểu về loại đồng phục áo bếp để hiểu rõ hơn để nhận được những giá trị mà chúng mang lại.</span> <br>
        <h4>Đồng phục bếp là gì?</h4>
        Nhiều người vẫn đặc ra câu hỏi đồng phục bếp là gì? Đây là đồng phục dành cho đội ngũ đầu bếp của nhà hàng, khách sạn với màu trắng đặc trưng cùng kiểu dáng đơn giản. Đồng phục bao gồm nhiều bộ phận như:
        <h4>Áo đầu bếp</h4>
        Áo được thiết kế có 2 hàng cúc bằng vải ở phía trước được may hơi rộng rãi, thoải mái để người đầu bếp dễ dàng hoạt động, làm việc. Trên áo đầu bếp đều in logo, tên thương hiệu, hình ảnh công ty đồng bộ với những loại đồng phục khác trong toàn nhà hàng. <br>
        <h4>Mũ Đầu Bếp</h4>
        Mũ đầu bếp có nhiều loại khác nhau như: loại mũ cao, loại thấp, loại nhiều nếp gấp, loại lại phẳng… Chiều cao cũng như số lượng nếp gấp trên mũ thể hiện trình độ, cấp bậc, năng lực cũng như kinh nghiệm của người đầu bếp đó. Những người đội mũ cao, nhiều nếp gấp là những người có năng lực cao, nhiều năm kinh nghiệm. Không chỉ vậy, mũ còn giúp giữ cho tóc của họ được gọn gàng tránh việc tối kỵ là có tóc trong thức ăn.<br>
        <h4>Khăn trong đồng phục Bếp</h4>
        Khăn đầu bếp là chiếc khăn mềm được đầu bếp quấn trên cổ để giúp họ thấm mồ hôi trong quá trình làm việc vì đầu bếp làm việc trong môi trường nóng. Và nó cũng có thể dùng để lau tay khi cần
        <h4>Tạp Dề bếp</h4>
        Chiếc tạp dề tuy mỏng nhưng lại có tác dụng rất lớn giúp người đầu bếp tránh khói lửa, tránh bụi và dầu ăn bám lên trang phục. Thiết kế của tạp dề có túi nhỏ phía trước giúp các đầu bếp để đồ vật nhỏ, tiện dụng trong khi chế biến. Bên cạnh những trang phục cơ bản trên, đồng phục nhà bếp còn gồm cả quần dài trắng, giày dép. <br>
        <h4>Lý do không nên bỏ qua đồng phục cho đội ngũ đầu bếp?</h4>
        Nếu đã kinh doanh liên quan đến ngành ăn uống, thì không thể bỏ qua đồng phục bếp được. Chúng ta cùng tìm hiểu những giá trị tuyệt vời của mẫu đồng phục dành cho đội ngũ nhân viên nhà bếp mang lại. <br>
        <ul class="list-group list-group-flush mt-2">
          <li class="list-group-item"> <b>• Đối với một người đầu bếp</b> khi khoác lên mình chiếc áo đồng phục bếp là cả một trách nhiệm to lớn để hết mình để tạo ra những món ăn ngon cho khách hàng.</li>
          <li class="list-group-item"> <b>•	Đồng phục đầu bếp </b> tạo nên một hình ảnh chuyên nghiệp, sự tin tưởng của khách hàng về các món ăn được phục vụ</li>
          <li class="list-group-item"> <b>•	Cũng như những loại đồng phục khác </b> đồng phục đầu bếp luôn là cách quảng bá thương hiệu tự nhiên nhưng hiệu quả đem lại rất tuyệt vời</li>
          <li class="list-group-item"> <b>•	Quan trọng nhất là đồng phục </b> giúp đảm bảo vệ sinh, an toàn thực phẩm cho những món ăn cũng như bảo vệ người đầu bếp một cách hoàn hảo nhất.</li>
        </ul> <br>
        
      </div>
    </div>
    
    <!-- Danh Sach Chi Tiet -->
    <div class="row">
      <?php
       $the_query = new WP_Query( array(
      'posts_per_page'=>12,
       'post_type'=>'ao_bep',
       'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
       );?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post();  $masanpham = get_field('ma_san_pham'); ?>

      <div class="col-sm-6 col-md-4 mb-4 contro">
        <div class="card w-100">
          <a href="<?php the_permalink();?>">
            <img class="card-img-top " src="<?php the_post_thumbnail_url();?>" alt="May Đồng Phục áo nhà hàng | Bếp trưởng">
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
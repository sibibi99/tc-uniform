<?php
/* Template Name: DS Bảo Hộ */
?>

<?php
get_header('tintuc');
?>

<section class="ds_sanpham">
  <div class="container">

    <div class="row _1ds_sanpham">
      <div class="col-md-12">
        <div class="tieude">
          <h3>BẢO HỘ LAO ĐỘNG</h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
      <b>Trong các ngành công nghiệp hiện nay, có nhiều ngành luôn ẩn chứa nhiều nguy cơ nguy hiểm. Vì vậy, đồng phục bảo hộ dành cho công nhân được coi là những thứ cực kỳ quan trọng đối với bản thân mỗi người lao động.Cùng tìm hiểu những đặc điểm cơ bản về đồng phục bảo hộ công nhân để biết chi tiết hơn về loại trang phục này.</b> <br>
        <h4>1.	Đồng phục bảo hộ lao động là gì?</h4>
        <p>Trang phục bảo hộ lao động là một loại trang phục được thiết kế để dành riêng cho những người lao động đặc thù và chuyên nghiệp trong các lĩnh vực tương đối nguy hiểm như hóa chất, xây dựng,kỹ sư, cơ khí, hầm mỏ, vệ sinh môi trường, y tế… với mục đích nhằm hạn chế các tác động của bên ngoài, giảm thiểu tối đa tác dụng của các chất độc hại gây nguy hiểm đối với công nhân, những người đang làm việc và chính sức khỏe bản thân những người tiếp xúc thường xuyên với môi trường này. </p>
        <h4>2.	Tại sao phải sử dụng đồng phục  bảo hộ lao động trong sản xuất, kinh doanh</h4>
        <p>Trang phục bảo hộ không chỉ đem lại những khả năng tiện dụng, phong cách làm việc chuyên nghiệp mà trên hết nó đem lại tính AN TOÀN cực cao cho nhân lực doanh nghiệp.
Đối với người sử dụng nó góp phần giúp người làm việc an tâm hơn trong điều kiện môi trường không thuận lợi. Vì vậy, trang phục bảo hộ lao động của đồng phục Thành Công luôn được tin tưởng với chất lượng an toàn đạt chuẩn Quốc tế.</p>
<h4>3.	Chất liệu thường được sử dụng may đồng phục bảo hộ</h4>
<b>- Thông thường có 3 loại vải thường được sử dụng để làm trang phục bảo hộ công nhân như: Kaki 65-35, Kaki Thành Công và Kaki Thun</b>

        <ul class="list-group list-group-flush mt-2">
          <li class="list-group-item"> <b>• Kaki 65% Cotton hoặc Kaki Xi</b> là loại vải thường may dành cho công nhân, nhân viên với giá thành rẻ nhất trong các loại vải. Giá cả phải chăng, chất lượng trung bình đáp ứng được nhu cầu về chi phí thấp.</li>
          <li class="list-group-item"> <b>•	Kaki Thành Công </b> Vải dày, chắc chắc, bền thấm hút mồ hôi tốt. Đáp ứng điều kiện khắc nghiệt của thời tiết cũng như đặc thù công việc. Giá thành tầm Trung Bình chất lượng tương đối cao cấp.</li>
          <li class="list-group-item"> <b>•	Kaki Thun </b> Là loại vải Xịn nhất chuyên may cho Kỹ sư, Kỹ thuật và hàng xuất khẩu. Vải mềm mịn có độ co dãn không kích ứng da, thấm hút mồ hôi rất tốt. Giá thành cao nhất trong các loại vải đem đến chất lượng và đẳng cấp cao cho Đồng phục.</li>
        </ul> <br>
        <b>Tùy theo ngân sách và tính chất công việc mà đồng phục Thành Công sẽ luôn tư vấn tận tình và phù hợp cho danh nghiệp của bạn. Là đơn vị uy tín và kinh nghiệm lâu năm trong lĩnh vực may đo đồng phục bảo hộ lao động chúng tôi tin chắc những sản phẩm không chỉ làm hài lòng chủ doanh nghiệp mà còn an toàn, thoải mái cho người Kỹ Sư, Công nhân.</b>
        
      </div>
    </div>
    
    <!-- Danh Sach Chi Tiet -->
    <div class="row">
      <?php
       $the_query = new WP_Query( array(
      'posts_per_page'=>12,
       'post_type'=>'bao_ho_lao_dong',
       'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
       );?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post();  $masanpham = get_field('ma_san_pham'); ?>

      <div class="col-sm-6 col-md-4 mb-4 contro">
        <div class="card w-100">
          <a href="<?php the_permalink();?>">
            <img class="card-img-top " src="<?php the_post_thumbnail_url();?>" alt="May In Thêu đồng phục bảo hộ lao động">
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
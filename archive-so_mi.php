<?php
/* Template Name: DS Sơ Mi */
?>

<?php
get_header('tintuc');
?>
<section class="ds_sanpham">
  <div class="container">
    <div class="row _1ds_sanpham">
      <div class="col-md-12">
        <div class="tieude">
          <h3>ÁO SƠ MI</h3>
        </div>
      </div>
    </div>
    <!-- Danh Sach Chi Tiet -->
    <div class="row gioi_thieu my-4">
      <div class="col-md-12">
        <h3>Sơ mi là gì? Lý do nhiều người chọn đồng phục áo sơ mi</h3>
        Sơ mi là loại hàng may mặc bao bọc lấy thân mình và hai cánh tay của cơ thể. Ở thế kỷ 19, sơ mi là một loại áo
        lót bằng vải dệt mặc sát da thịt. Nhưng hiện nay đồng phục văn phòng là trang phục lịch sự cho cả nam và nữ có
        cổ áo, tay áo và hàng nút phía trước có thể có túi áo.
        Sơ mi luôn là sự lựa chọn hàng đầu cho đồng phục công sở. Khi nói đến đồng phục nhân viên văn phòng thì chắc
        chắn “Áo sơ mi đồng phục” sẽ là trang phục ưu tiên hàng đầu được nhắc đến. Đây là loại trang phục có lịch sử lâu
        đời, mang vẻ đẹp cổ điển đầy lịch sự và sang trọng. <br>
        <ul class="list-group list-group-flush mt-2">
          <li class="list-group-item"> <b>• Sự tự tin:</b> một chiếc đồng phục sơ mi, kết hợp cùng quần tây hay chân
            váy ngắn luôn tạo nên sức quyến rũ và tự tin trong công việc cũng như giao tiếp với khách hàng được hiệu
            quả hơn.</li>
          <li class="list-group-item"> <b>• Tạo ấn tượng:</b> ấn tượng ban đầu rất qua trọng, nhân viên luôn gọn gàng
            và thanh lịch trong những chiếc sơ mi đồng phục tạo sự chuyên nghiệp trong mắt mọi người</li>
          <li class="list-group-item"> <b>• Quảng bá thương hiệu: </b> Những chiếc áo có logo và tên công ty sẽ nó sẽ
            giúp nhiều người biết đến công
            ty của bạn mà không mất quá nhiều chi phí quảng cáo như những cách quảng bá thương hiệu khác.</li>
          <li class="list-group-item"><b>• Tính thẩm mỹ:</b> Đồng phục sơ mi mang tính thẩm mỹ cao, bởi sự đơn giản
            nhưng vẫn đảm bảo sang trọng, chỉn chu và thanh lịch dễ mặc, dễ mix đồ.</li>
        </ul> <br>
        Với những lý do tuyệt vời mà đồng phục công ty đẹp mang lại thì đây đúng là sự lựa chọn tuyệt vời cho nhân viên công sở. Chần chờ gì mà không may đồng phục sơ mi ngay hôm nay nhận được những giá trị mà đồng phục mang lại.
        <h3>Những vấn đề cần lưu ý để sở hữu mẫu sơ mi đẹp?</h3>
        Ai cũng muốn sở hữu đồng phục sơ mi đẹp, nhưng để đạt được điều đó thì cần cân nhắc cũng như đưa ra những lựa chọn phù hợp. Dưới đây là những điểm cần cân nhắc khi bắt tay vào việc may đồng phục công ty đúng ý
Chọn được loại vải thích hợp cho đồng phục sơ mi
Trên thị trường có rất nhiều loại vải có thể sử dụng để may đồng phục, nhưng chúng ta cần cân nhắc nhiều yếu tố để đưa ra sự lựa chọn. Nếu bạn vẫn chưa biết nên chọn loại vải nào thì chúng tôi gợi ý cho bạn một số mẫu vải may sơ mi không chỉ chất lượng mà còn đảm bảo tính thẩm mỹ vì không bị nhăn khi mặc. <br>
<h3>Vải Kate may sơ mi</h3>
Kate thật sự là một trong những loại vải may áo sơ mi đồng phục công sở nữ thông dụng nhất hiện nay. Kate là sản phẩm vải dệt thoi từ sợi TC cùng sự kết hợp giữa cotton và polyeste. Với sự kết hợp tuyệt vời này tạo được sản phẩm vải may sơ mi không chê vào đâu được. <br>
Vải không chỉ mềm mại, lại giữ màu rất tốt, tuyệt nhất là sơ mi không hề bị nhăn trong quá trình mặc hoặc giặt. Sản phẩm này có khả năng thấm mồ hôi cực tốt, nên người mặc luôn có cảm giác thoáng mát và dễ chịu. <br>
Cũng là vải kate nhưng có nhiều loại cho mọi người lựa chọn như: vải Kate Mỹ, vải Kate Ý, Kate Hàn,…cho mọi người có nhiều sự lựa chọn hơn. <br>
<hr>

      </div>
    </div>
    <div class="row">
      <?php
       $the_query = new WP_Query( array(
      'posts_per_page'=>12,
       'post_type'=>'so_mi',
       'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
       );?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); $masanpham = get_field('ma_san_pham'); ?>

      <div class="col-sm-6 col-md-4 mb-4 contro">
        <div class="card w-100">
          <a href="<?php the_permalink();?>">
            <img class="card-img-top " src="<?php the_post_thumbnail_url();?>" alt="may in thêu đồng phục sơ mi">
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
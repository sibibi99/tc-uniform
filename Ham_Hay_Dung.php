<!-- Các Hàm hay Dùng -->

<!-- Lấy Title -->
<?php the_title()?>

<!-- Lấy Ảnh chính -->
<?php the_post_thumbnail_url();?>

<!-- Lấy Tên Danh Mục  -->
<?php the_category()?>

<!-- Lấy Thiêu Đề Category -->
<?php single_cat_title(); ?>

<!-- Lấy Ngày Tháng  -->
<?php the_date()?>

<!-- Lấy Link -->
<?php the_permalink(); ?>

<!-- Lấy Trích Dẫn -->
<?php the_excerpt();?>

<!-- Reset Post Data -->
<?php wp_reset_postdata(); ?>


<?php
      wp_reset_postdata(); 
      $_3tinnho = new WP_Query(array(
        'post_type'=> 'post',
        'category_name'=>'danh-sach-tin-tuc',
        'posts_per_page'=> 3,   Lấy 3 tin
        'offset'=> 1  bõ qua 1 tin đầu tiên
      ));

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
    <div class="row">
      <div class="card-deck">
        <?php 
        $aosomi = new WP_Query(array('post_type' => 'so_mi'));
        while($aosomi->have_posts()) {
            $aosomi->the_post();
            $masanpham = get_field('ma_san_pham')                
        ?>

        <div class="col-sm-6 col-md-4 mb-4">
          <div class="card w-100">
            <img class="card-img-top " src="<?php the_post_thumbnail_url();?>"
              alt="May Đồng Phục Sơ Mi">
            <div class="card-body">
              <h5 class="card-title"><?php the_title()?></h5>
              <h5 class="product-price">
                <span>Mã: <?php echo $masanpham;?></span></h5>
              <a href="<?php the_permalink();?>" class="btn secondary-btn">Xem Chi Tiết</a>
            </div>
          </div>
        </div>
        <!-- End_Item -->
        <?php } wp_reset_query()?>
        
      </div>
      <hr>
      <!-- End Card Deck  -->
    </div>

  </div>
</section>

<?php
get_footer();
?>
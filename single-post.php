<?php
get_header('tintuc');
?>

<div class="noidungtin">
  <?php setPostViews(get_the_ID()); ?>
  <div class="container">
    <ul class="row my-4">
      <div class="col-md-9 cottrai wow bounceInLeft">
        <img src="<?php the_post_thumbnail_url()?>" alt="" class="img-ressponsive anhcttin w-100 img-thumbnail ">
        <h3 class="tieudecttin">
          <?php the_title()?>
        </h3>
        <div class="thongtinbaiviet">
          Viết bởi <b>Admin</b>
          <span class="ti-time ml-4"></span>
          <b class="ml-2">
            <?php echo get_the_date(); ?>
          </b>
        </div>
        <!-- Mô tả ngắn -->
        <div class="container mt-4">
          <ul class="list-creative">
            <li>
              <dl class="list-terms-medium address">
                <h5>
                  <span class="ti-flag-alt"></span>
                  <abbr>
                    <?php $gioithieungan = get_field('mo_ta_ngan');
                    echo $gioithieungan ;
                    ?>
                  </abbr>
                </h5>
              </dl>
            </li>
          </ul>
        </div>
        <div class="noidungchitiet tintuc_style border rounded p-4 mt-4">
          <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile;  ?>
        </div>
      </div>
      <div class="col-md-3 sidebar wow bounceInRight" data-spy="affix" data-offset-top="197">
        <?php get_sidebar()?>
      </div>
      <div class="col-md-12 wow bounceInUp">
        <hr>
        <h3>Tin bài liên quan</h3>
        <ul>
          <?php
          $args = array( 'numberposts' => '9' );
          $recent_posts = wp_get_recent_posts( $args );
          foreach( $recent_posts as $recent ){
              printf( '<li class="border-bottom w-50"><a href="%1$s">%2$s</a></li>',
                   esc_url( get_permalink( $recent['ID'] ) ),
                   apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
               );
          }
      ?>
        </ul>
      </div>
  </div>
</div>
</div>
</div>

<?php
get_footer();
?>
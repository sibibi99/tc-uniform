<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tctheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- SEO Meta description -->
  <meta name="description"
    content="Công Ty May Đồng Phục Sơ Mi, Đồng Phục Áo Thun, Nhà hàng, Khách Sạn, Quán ăn, Đồng Phục Bảo Hộ Lao Động, May In Thêu, Đồng phục giá rẻ Hồ Chí Minh, Bình Dương, Long An. Chuyên may Áo Thun Sự Kiện Giá Rẻ, Áo Nhóm, Team Buiding.">
  <link rel="canonical" href="https://aothunthanhcong.com"/>
  <meta name="author" content="Công Ty May Đồng Phục TC">
  <meta name="keywords" content="May Đồng Phục Sơ Mi, Đồng Phục Áo Thun, Nhà hàng, Khách Sạn, Quán ăn, Đồng Phục Bảo Hộ Lao Động, Đồng Phục Đầu Bếp, May In Thêu Tạp Dề, Khăn Bếp, Nón"/>

  <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
  <meta property="og:locale" content="vi_VN" />
  <meta property="og:site_name" content="Áo thun sự kiện, Áo thun công ty giá rẻ"> <!-- website name -->
  <meta property="og:site" content="In May Đồng Phục"> <!-- website link -->
  <meta property="og:title" content="May Đồng Phục Sơ Mi, Bảo Hộ Lao Động, Nhà hàng khách sạn, Áo thun sự kiện">
  <!-- title shown in the actual shared post -->
  <meta property="og:description" content="Mẫu đồng phục công ty, cafe, nhà hàng">
  <!-- description shown in the actual shared post -->
  <meta property="og:image" content="May đồng phục Hồ Chí Minh"> <!-- image link, make sure it's jpg -->
  <meta property="og:type" content="article">
  <meta name='dmca-site-verification' content='Y0lnSGFITVIzVURBazZIZU9oL3duaUlNT2NIM0FUNUNGdUF4MHowem1yOD01' />
  <!--title-->
  <title><?php the_title()?></title>

  <!--favicon icon-->
  <link rel="icon" href="<?php bloginfo('stylesheet_directory')?>/img/favicon.ico" type="image/png" sizes="16x16">

  <!--google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <!-- Add icon library -->

  <!--Bootstrap css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/bootstrap.min.css">
  <!--Magnific popup css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/magnific-popup.css">
  <!--Themify icon css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/themify-icons.css">
  <!--flaticon css-->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory')?>/fonts/flaticon.css">
  <!--animated css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/animate.min.css">
  <!--ytplayer css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/jquery.mb.YTPlayer.min.css">
  <!--Owl carousel css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/owl.theme.default.min.css">
  <!--custom css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/style.css">
  <!--responsive css-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/responsive.css">	
  
  
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159648633-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159648633-1');
</script>
<script language="JavaScript">
  /**
    * Disable right-click of mouse, F12 key, and save key combinations on page
    * By Arthur Gareginyan (arthurgareginyan@gmail.com)
    * For full source code, visit https://mycyberuniverse.com
    */
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e6577758d24fc22658671fd/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>

<body oncontextmenu="return false;" onmousedown="return false" onselectstart="return false"  >
<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav id="nav" class="navbar navbar-expand-lg fixed-top custom-nav white-bg">
      <div class="container">
        <a class="navbar-brand" href="<?php bloginfo('siteurl'); ?>"><img src="<?php bloginfo('stylesheet_directory')?>/img/logo thanh cong.svg" width="140" alt="logo Đồng Phục Thành Công"
            class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="ti-menu"></span>
        </button>
        <!-- Bat Dau Menu -->
      <?php 
        wp_nav_menu(array(
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse main-menu',
          'container_id' => 'navbarSupportedContent',
          'menu_class' => 'navbar-nav ml-auto'
        ));
      ?>        
         <!-- End Menu -->
      </div>
    </nav>
    <!--end navbar-->
  </header>
  <!--header section end-->

  <section class="hero-section ptb-100  background-img" style="background: url('<?php bloginfo('stylesheet_directory')?>/img/menu may dong phuc.webp')no-repeat bottom center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-4">
                <div class="col-md-12"> 
                                
                        <h2 class="text-white text-center  gioithieu pt-4">
                          <?php 
                            if(is_home()) {
                            echo get_post(get_option("page_for_posts"))->post_title;
                          }
                            else if(is_category('danh-sach-tin-tuc')) {
                            single_cat_title();
                          }
                            else {
                              the_title();
                          } ?>
                        </h2>
                        <h5 class="text-center text-white">
                        <?php 
                        if(is_home()) {
                          echo 'Khuyến Mãi - Sự Kiện - Tin Tức';
                        }
                        else if(is_category('danh-sach-tin-tuc')) {
                          echo 'Khuyến Mãi - Sự Kiện - Tin Tức Mới Cập Nhật';
                        }
                                            
                        ?>
                        </h5>
                </div>

            </div>
        </div>
    </section>
    <nav class="container my-4" aria-label="breadcrumb">
        <?php dimox_breadcrumbs(); ?>
    </nav> <hr>
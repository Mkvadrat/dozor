<!doctype html>
<html lang=ru>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="<?php echo get_option('alltuts_keywords'); ?>" />
<meta name="description" content="<?php echo get_option('alltuts_description'); ?>" />
<meta name="viewport" content="width=480" />
<meta name="yandex-verification" content="8b6df76d4f584ff4" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/images/544231.ico" rel="shortcut icon" type="image/x-icon">
<link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
<!— Global site tag (gtag.js) - Google Analytics —>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113806588-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-113806588-1');
</script>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
        $("a[href^='#']").click(function(){
                var _href = $(this).attr("href");
                $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
                return false;
        });
});
</script>


<?php wp_head(); ?>
</head>

<body <?php body_class($class); ?>>

  <header data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="cont w-container">
<div class="divl w-clearfix"><a href="/"><div class="glass"></div><div class="zagol">dozor-<span class="spa">rk</span></div><div class="zagol _2">Установка и модернизаця<br>ОПС, VIDEO, TV, СКУД, ОС по Крыму</div></a></div>
      
<div class="text-block-6" style="float:  left;position: relative;text-align: left;padding: 0 0 0 61px;width: auto;">
          <p style="color: #000;line-height:  16px;margin-bottom:  0;font-size: 20px;padding-top:  10px;">
          <a href="tel:+79881553064" style="color: #000;text-decoration: none;">+7 (988) 155-30-64</a> и <a href="tel:+79785689631" style="color: #000;text-decoration: none;">+7 (978) 568-96-31</a> или <a href="mailto:dozor-rk@mail.ru" style="color: #000;text-decoration: none;">dozor-rk@mail.ru</a>
          </p>
       </div>
      
      <nav role="navigation" class="nav-menu w-nav-menu"><?php if ( function_exists( 'wp_nav_menu' ) ){ wp_nav_menu( array( 'theme_location' => 'primary-menu','fallback_cb'=>'primarymenu') ); }else{ primarymenu();}?> </nav>
      <div class="burger w-nav-button"><div class="w-icon-nav-menu"></div>
      <?php if ( function_exists( 'wp_nav_menu' ) ){ wp_nav_menu( array( 'theme_location' => 'primary-menu','fallback_cb'=>'primarymenu') ); }else{ primarymenu();}?>
      </div>
	  
	  <div class="div-block-5">
	      <a href="#contact_form_pop_up" class="fancybox-inline  buttom _2 w-button">Консультация</a></div>
<div style="display:none" class="fancybox-hidden"><div id="contact_form_pop_up"><?php echo do_shortcode('[contact-form-7 id="67" title="Контактная форма 1"]'); ?></div></div>

</div>
      <div class="div-block-8"><div class="divmen w-clearfix"><?php if ( function_exists( 'wp_nav_menu' ) ){ wp_nav_menu( array( 'theme_location' => 'secondary-menu','fallback_cb'=>'secondarymenu') ); }else{ secondarymenu();}?></div></div>
  </header>

  <?php if ((is_front_page()) and (!is_paged())) { ?>
<div id="home" class="se1 glaw">
    <div class="div1">
      <h1 class="h1">ПРОЕКТИРОВАНИЕ<br><span class="mel">МОНТАЖ, МОДЕРНИЗАЦИЯ И ОБСЛУЖИВАНИЕ</span><br>СИСТЕМ В КРЫМУ:</h1>
      <div class="pod"><span class="sp">◉</span>   Видеонаблюдения<br>
        <span class="sp">◉</span>   Телевидения<br>
        <span class="sp">◉</span>   Пожарной и охранной сигнализации<br>
        <span class="sp">◉</span>   Контроля доступа</div><a href="#onas" class="buttom w-button">О компании ↷</a></div>
    <div class="poosa"></div>
  </div>
<?php } ?>

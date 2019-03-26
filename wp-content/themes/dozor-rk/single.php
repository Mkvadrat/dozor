<?php
get_header();
?>

<div id="lpblock">

<div class="breadcrumb">

<?php
          the_breadcrumb();
?>

</div>


</div>

<!-- Начало врапер -->
<section id="wrapper">
<div id="middle">
<div id="content">
<div id="colLeft">

<!-- Begin #colLeft -->
		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Begin .postBox -->

<article class="singlecont">
				
<h1><?php the_title(); ?></h1>

<div class="infocont"><span> <?php the_author(); ?> / <?php the_time('M') ?>.<?php the_time('j') ?>.<?php the_time('Y') ?>. / <?php comments_popup_link('Нет комментариев', '1 комментарий ', 'Комментариев: %'); ?></span></a></div>

<div class="cont">
<?php the_content(); ?>
</div>

<?php if(get_option('alltuts_show') == 'yes'){?>
<div class="nextpostlink"><?php next_post_link('%link','Следующий пост'); ?></div>
<div class="prepostlink"><?php previous_post_link('%link','Предыдущий пост'); ?></div>
<?php }?>

<div class="postTags"><?php the_tags($before, '', $sep, $after); ?></div>

<?php comments_template(); ?>		
	
</div>

<?php endwhile; else: ?>

		<p>Извините, но Вы ищете то чего здесь нет.</p>

	<?php endif; ?>

</article><!-- Конец .синглконтент -->
		
			
		<!-- Конец #colLeft -->

<?php get_sidebar(); ?>	
<?php get_footer(); ?>

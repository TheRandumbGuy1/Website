<?php
/*
Template Name: Home Landing Page
*/
?>
<?php get_header(); ?>
	<div id="contents">
		<div class="blog">
			<div class="home">
				<?php 
					if (function_exists('dynamic_sidebar') && dynamic_sidebar('home')) : 
					else : 
				endif; ?>
	<?php if(have_posts()) : ?>
		<?php query_posts( 'posts_per_page=1' ); ?>
        	<?php while(have_posts()) : the_post(); ?>
	<div class="post"><div class="post-content">
					<?php
					if ( has_post_thumbnail() ) {
						echo '<div class="thumbnail"><div class="drop-shadow curved curved-hz-1"><div class="featured">';
						the_post_thumbnail();
						echo '</div></div></div>';
					}
					else {
							
					}
					?><div class="entry">
	<fieldset style="margin-bottom:0;"><legend>Most Recent Post</legend></fieldset>
	<div class="time">
	Posted <?php the_time('F jS, Y') ?>
	</div>
	<fieldset><legend>
	<a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>">
	<?php the_title(); ?></a></legend></fieldset>
	<?php the_content();?>
	<div class="clear"></div>
	<a class="button" href="<?php echo get_permalink( get_option('page_for_posts' ) ); ?>" style="float:right;">Read More Posts &rarr;</a>
	<div class="clear"></div>
	</div>
	</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
</div>
	<div id="widget-4">
		<?php 
		if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_sidebar')) : 
		else : 
		?>
		<?php endif; ?>
	</div>
<div class="clear"></div>
	<div class="widgetwrapper">
            <div id="widget-1">
                <?php 
                if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_1')) : 
                else : 
                ?>
                <?php endif; ?>
            </div>
            <div id="widget-2">
                <?php 
                if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_2')) : 
                else : 
                ?>
                <?php endif; ?>
            </div>
            <div id="widget-3">
                <?php 
                if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_3')) : 
                else : 
                ?>
                <?php endif; ?>
            </div>
	</div>
<?php get_footer(); ?>
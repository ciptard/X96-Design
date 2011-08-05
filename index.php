<?php get_header(); ?>

<?php
if(have_posts()){
	while(have_posts()){
		the_post();
?>
			<article class="portfolio-entry <?php if(in_category('in-progress')): ?>still-in-progress<?php endif; ?>">
				<?php if(in_category('in-progress')): ?>
				<div class="inprogress">Coming Soon</div>
				<?php endif; ?>
				<div class="post-image">
					<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
				</div>
				<h2 class="entry-title"><?php if(!in_category('in-progress')): ?><a href="<?php the_permalink(); ?>"><?php endif; ?><?php the_title(); ?><?php if(!in_category('in-progress')): ?></a><?php endif; ?></h2>
				<div class="entry-content">
					<?php the_content('Case Study'); ?>
				</div>
			</article>
<?php
	}
}
?>

<?php get_footer(); ?>
<?php 
get_header(); 
echo "<section id='post-listing'>\n"; 
?>
	
<?php if ( ! have_posts() ) : ?>
	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<div class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</div>
	</article>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php $h = (is_single() || is_page()) ? 'h1' : 'h2'; ?>
		<<?php echo $h; ?> class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( 'Permalink to %s', the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></<?php echo $h; ?>>
		<div class="entry-meta">
		 Posted on <?php the_date(); ?> by <a href='<?php echo get_author_posts_url(); ?>'><?php the_author(); ?></a>
		</div>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>

<?php
echo "</section>\n";
get_sidebar();
get_footer();

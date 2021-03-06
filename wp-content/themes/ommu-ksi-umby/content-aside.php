<?php
/**
 * The template for displaying posts in the Aside post format on index and archive pages
 *
 * @package WordPress
 * @subpackage ommu_tugujogja
 * @since Ommu-KSI-TuguJogja 5.0.3
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="aside">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ommu_tugujogja' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ommu_tugujogja' ) ); ?>
			</div><!-- .entry-content -->
		</div><!-- .aside -->

		<footer class="entry-meta">
        	<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'aside' ) ); ?>"><i class="fa fa-lightbulb-o"></i> <?php echo get_post_format_string( 'aside' ); ?></a>
			<?php ommu_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'ommu_tugujogja' ), '<span class="edit-link"><i class="fa fa-pencil"></i> ', '</span>' ); ?>
			<?php get_template_part( 'content', 'author' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->

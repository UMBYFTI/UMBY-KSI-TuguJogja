<?php
/**
 * The template for displaying posts in the Status post format on index and archive pages.
 *
 * @package WordPress
 * @subpackage ommu_tugujogja
 * @since Ommu-KSI-TuguJogja 5.0.3
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-header">
			<header>
				<h1><?php the_author(); ?></h1>
			</header>
			<?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'ommu_status_avatar', '68' ) ); ?><br />
            <small><?php echo get_the_date(); ?> at <?php echo get_the_time(); ?></small>
		</div><!-- .entry-header -->
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ommu_tugujogja' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
        	<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'status' ) ); ?>"><i class="fa fa-bullhorn"></i> <?php echo get_post_format_string( 'status' ); ?></a>
			<?php ommu_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'ommu_tugujogja' ), '<span class="edit-link"><i class="fa fa-pencil"></i> ', '</span>' ); ?>
			<?php get_template_part( 'content', 'author' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->

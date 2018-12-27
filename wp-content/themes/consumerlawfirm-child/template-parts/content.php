<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tora
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
        <!--<h1><a href="https://consumerlawfirmcenter.com/are-you-receiving-harassing-phone-calls-from-801-438-8376-2/">Are you receiving Harassing Phone Calls from 801-438-8376?</a></h1>-->                                <a href="https://consumerlawfirmcenter.com/are-you-receiving-harassing-phone-calls-from-801-438-8376-2/"></a>
		<?php the_title( sprintf( '<h1><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</div><!-- .entry-content -->
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

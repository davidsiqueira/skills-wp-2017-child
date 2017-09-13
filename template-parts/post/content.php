<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
				if ( is_single() ) {
					twentyseventeen_posted_on();
				} else {
					echo twentyseventeen_time_link();
					twentyseventeen_edit_link();
				};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() && ! is_home() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div><!-- .entry-content -->

<!-- Call o action simples no fim da página baseado na categoria -->
	<div class="cta-category-large">
		<?php 
			if (in_category('contabilidade')){
				echo '<a class="cta contabilidade" href="http://pt.primaverabss.com/pt/certificacao-primavera-accounting-and-fiscal/">
						<div class="bloco-texto">
							Venda mais e compre melhor com a certificação PRIMAVERA
							Contabilidade
						</div>
					  </a>';
			}
			
			elseif (in_category('gestao-pessoas')){

				echo '<a class="cta pessoas" href="http://pt.primaverabss.com/pt/certificacao-primavera-human-resources/">
						<div class="bloco-texto">
							Venda mais e compre melhor com a certificação PRIMAVERA
							Recursos Humanos
						</div>
					  </a>';
			}
			elseif (in_category('tesouraria')){
				echo '<a class="cta tesouraria" href="http://pt.primaverabss.com/pt/certificacao-primavera-treasury/">
						<div class="bloco-texto">
							
							Venda mais e compre melhor com a certificação PRIMAVERA
							Tesouraria
						</div>
					  </a>';
			}
			elseif (in_category('compras-vendas')){
				echo '<div class="cta compras-vendas">
						<div class="bloco-texto">
							Venda mais e compre melhor com as certificações PRIMAVERA
							<a class="link-compra" href="http://pt.primaverabss.com/pt/certificacao-primavera-purchases-and-inventory/">Compras</a>
							<a href="http://pt.primaverabss.com/pt/certificacao-primavera-sales/">Vendas</a>
						</div>
					  </div>';
			}
			else {
				echo '<a class="cta certificacoes" href="http://pt.primaverabss.com/pt/certificacao-primavera/">
						<div class="bloco-texto">
							
							Conheça as Certificações PRIMAVERA
							</div>
						</a>';
			}
		?>
	</div><!-- cta-category-large -->

<!-- Bloco de rating -->

	<div class="rating-block">
		<div class="question">Este artigo foi útil?</div>
		<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
	</div>
	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->

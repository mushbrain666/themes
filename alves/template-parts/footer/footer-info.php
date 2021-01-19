<div class="site-info">
	<?php $blog_info = get_bloginfo( 'name' ); ?>
	<?php if ( ! empty( $blog_info ) ) : ?>
		<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span class="comma">,</span>
	<?php endif; ?>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'alves' ) ); ?>" class="imprint">
		<?php
		/* translators: %s: WordPress. */
		printf( __( 'proudly powered by %s.', 'alves' ), 'WordPress' );
		?>
	</a>
</div>
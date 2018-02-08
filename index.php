<?php

?><!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11"><?php

		wp_head();

	?></head>
	<body <?php body_class(); ?>>
		<header>
			<h1>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
					<img class="logo" src="http://www.ruggedbear.com/wp-content/themes/ruggedbear/Rugged_Bear_with_Bear_Logo_Blue.png" />
				</a>
			</h1>
		</header>
		<main>
			<p>
				Ruggedbear.com is hibernating. We will be back soon.
			</p>
		</main>
		<footer>
			<div class="copyright">&copy; 2018 Rugged Bear</div>
		</footer><?php

	wp_footer();

	?></body>
</html>

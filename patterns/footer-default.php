<?php
/**
 * Title: Default Footer
 * Slug: wp-fire/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"top"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:site-title {"level":6} /-->
			<!-- wp:paragraph -->
			<!-- {CHANGE:To your phone number with correct href} -->
			<p><a href="tel:+43724242420,122">Tel: +43 7242 / 42420-122</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:social-links -->
			<ul class="wp-block-social-links">
				<!-- {CHANGE:facebokk and instagram link} -->
				<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
				<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":6} -->
			<h6>Kontakt</h6>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph -->
			<p>
				<!-- {CHANGE:google maps link and address} -->
				<a href="https://goo.gl/maps/pzY4cafv16or5Yv29" style="text-decoration: none;" target="_blank" rel="noreferrer noopener">
				Freiwillige Feuerwehr Schleißheim<br>
				Dorfstraße 14<br>
				4600 Schleißheim<br>
				Oberösterreich
				</a>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":6} -->
			<h6>Rechtliches</h6>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><a href="?page_id=">Impressum</a></p>
			<!-- TODO: get Impressum page id and put it into the href -->
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator -->
	<hr class="wp-block-separator has-alpha-channel-opacity"/>
	<!-- /wp:separator -->
	<!-- wp:paragraph {"style":{"color":{"text":"#686872"}},"align":"right","fontSize":"small","align":"wide"} -->
	<p class="has-text-align-right has-small-font-size alignwide" style="color:#686872">
		<?php
			print "Copyright © 2022 - "; echo date("Y");
		?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

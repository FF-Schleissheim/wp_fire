<?php
/**
 * Title: Post Meta
 * Slug: wp-fire/post-meta
 * Categories: query
 * Keywords: post meta
 * Block Types: core/template-part/post-meta
 */
?>
<!-- wp:spacer {"height":"0"} -->
<div style="height:0" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)">
	<!-- wp:separator {"opacity":"css","align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-css-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"fontSize":"small"} -->
	<div class="wp-block-columns alignwide has-small-font-size" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:column {"style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.5ch"}},"layout":{"type":"flex"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p>
					<?php echo esc_html_x( 'Geteilt', 'Verb zum beschreiben des Veröffentlichungstatuses', 'wp-fire' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:post-date /-->

				<!-- wp:paragraph -->
				<p>
					<?php echo esc_html_x( 'in', 'Präposition um das Verhältnis zwischen Kategorien und Beintrag zu zeigen', 'wp-fire' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:post-terms {"term":"category"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.5ch"}},"layout":{"type":"flex"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p>
					<?php echo esc_html_x( 'von', 'Präposition um das Verhältnis zwischen Autor und Beintrag zu zeigen', 'wp-fire' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:post-author {"showAvatar":false} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

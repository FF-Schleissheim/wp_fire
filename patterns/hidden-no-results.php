<?php
/**
 * Title: Hidden No Results Content
 * Slug: wp-fire/hidden-no-results-content
 * Inserter: no
 */
?>
<!-- wp:paragraph -->
<p>
<?php echo esc_html_x( 'Keine passenden Ergebnisse für Ihre Suche. Versuchen Sie es mit einer anderen Vormulierung', 'Nachricht die erklärt, dass keine Suchergebnisse gefunden wurden', 'wp-fire' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Suche', 'Beschriftung', 'wp-fire' ); ?>","placeholder":"<?php echo esc_attr_x( 'Suche...', 'Platzhalter für das Suchfeld', 'wp-fire' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'wp-fire' ); ?>","buttonUseIcon":true} /-->

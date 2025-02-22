<?php
 /**
  * Title: 404 Header
  * Slug: high-life/404-header
  * Categories: high-life, header
  */
?>

<!-- wp:group {"align":"full","className":"no-margin-top header-media-inner-post","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull no-margin-top header-media-inner-post">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/inner-header-media.jpg' )); ?>","dimRatio":0,"overlayColor":"body-text","focalPoint":{"x":"0.52","y":"0.00"},"isDark":true} -->
		<div class="wp-block-cover is-dark">
			<span aria-hidden="true" class="wp-block-cover__background has-body-text-background-color has-background-dim-0 has-background-dim"></span>
			<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/inner-header-media.jpg' )); ?>" style="object-position:52% 0%" data-object-fit="cover" data-object-position="52% 0%"/>
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"className":"alignwide"} -->
					<div class="wp-block-group alignwide">
						<!-- wp:heading {"textAlign":"center","level":1} -->
						<h1 class="has-text-align-center">
								<?php esc_html_e ( '404 Nothing Found', 'high-life' ); ?>
						</h1>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"textAlign":"center"} -->
						<p class="has-text-align-center">
							<?php esc_html_e ( 'Oops! That page can\'t be found', 'high-life' ); ?>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

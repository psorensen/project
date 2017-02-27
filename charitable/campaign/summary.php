<?php
/**
 * Displays the campaign summary.
 *
 * Override this template by copying it to yourtheme/charitable/campaign/summary.php
 *
 * @author 	Studio 164a
 * @since 	1.0.0
 */

$campaign = $view_args['campaign'];

/**
 * @hook charitable_campaign_summary_before
 */
do_action( 'charitable_campaign_summary_before', $campaign );

?>
<div class="campaign-summary pt-3">
<h3 class="h4">Donate to this campaign</h3>
<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste ducimus cumque, explicabo minus veniam animi.</p>
	<?php

	/**
	 * @hook charitable_campaign_summary
	 */
	do_action( 'charitable_campaign_summary', $campaign );

	?>
	<div class="campaign-share">
		<h4 class="caps small">Share This Campaign</h4>
		<ul class="list-inline">
			<li class="list-inline-item"><a href="" class="facebook"><i class="fa fa-facebook"></i></a></li>
			<li class="list-inline-item"><a href="" class="twitter"><i class="fa fa-twitter"></i></a></li>
			<li class="list-inline-item"><a href="" class="google"><i class="fa fa-google-plus"></i></a></li>
		</ul>
	</div>
</div>
<?php

/**
 * @hook charitable_campaign_summary_after
 */
do_action( 'charitable_campaign_summary_after', $campaign );

<aside>
	<button class="btn btn-block btn-lg btn-primary" data-toggle="modal" data-target="#DownloadBrochureForm">
		<i class="fa fa-cloud-download"></i> &nbsp; Download Brochure
	</button>

	<?=do_shortcode('[gravityform id="1" title="true" description="false"]');?>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
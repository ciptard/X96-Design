<?php
if($type == "portfolio_entry" && !$page){
?>

	<article>
		<a class="wholeThing" href="<?php print($node_url); ?>">
			<div class="imgContainer">
				<img src="<?php print file_create_url(file_build_uri($node->field_thumb['und'][0]['filename'])); ?>" width="350" height="300" alt="<?php print $title; ?>">
			</div>
			<h2><?php print $title; ?></h2>
			<p><?php print $node->body['und'][0]['summary']; ?></p>
		</a>
	</article>

<?php
} elseif($type == "portfolio_entry" && $page){
?>

	<article class="single">
		<?php print render($content['body']); ?>
		<div class="clear"></div>
		<div class="mainContent gotoLink">
			<?php if(empty($node->field_liveurl['und'][0]['value'])): ?>
			<a class="button button-disabled" href="#">Coming Soon&hellip;</a>
			<?php else: ?>
			<a class="button" href="<?php print $node->field_liveurl['und'][0]['value']; ?>">Visit Live Site</a>
			<?php endif; ?>
		</div>
		<aside class="singleImgContainer secondaryContent">
			<img src="<?php print file_create_url(file_build_uri($node->field_preview['und'][0]['filename'])); ?>" width="100%" alt="<?php print $title; ?>">
		</aside>
	</article>

<?php
} else {
?>

<?php print render($content['body']); ?>

<p id="spacer" class="clear">&nbsp;</p>

<?php
}
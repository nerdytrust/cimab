<div class="col-md-12 compartir">
	<a class="btn btn-default" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" role="button">
		<img src="<?php echo bloginfo( 'template_url' ); ?>/img/face.png">
	</a>
	<a class="btn btn-default" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" role="button"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/twitter.png"></a>
	<a class="btn btn-default" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" role="button"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/g-plus.png"></a>
	<a class="btn btn-default" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" role="button"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/pinterest.png"></a>
	<a class="btn btn-default" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" role="button" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/lin.png"></a>
</div>
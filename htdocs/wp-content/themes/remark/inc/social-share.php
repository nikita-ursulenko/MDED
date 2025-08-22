<?php 
$title = get_the_title();
$permalink = get_the_permalink();
$thumbnail_url = get_the_post_thumbnail_url();
$tags = get_the_tags();
$hashtags = '';
if( $tags ){
	foreach ( $tags as $key => $value ) {
		if ( $key < 3 ) {
			$hashtags .= str_replace( ' ', '_', $value->name ) . ', ';	
		}
	}
}
$hashtags = rtrim( $hashtags, ', ' );
?>
<div class="social-share">
	
	<ul>
        <span class="share-label"> 
			<i class="fa-solid fa-share-nodes"></i>
			<span class="share-text"><?php echo esc_html( 'Share', 'remark' ); ?></span>
		</span>
		<li>
			<a class="share-link facebook" rel="nofollow noopener noreferrer" href="//www.facebook.com/sharer/sharer.php?<?php echo "caption={$title}&u={$permalink}&share=facebook"; ?>" target="_blank"
				title="Click to share on Facebook">
				<i class="fa-brands fa-facebook-f"></i>
			</a>
		</li>
		<li>
			<a class="share-link twitter" rel="nofollow noopener noreferrer" href='//twitter.com/intent/tweet?text=<?php echo $title; ?>&hashtags=<?php echo $hashtags;?>&via=weDevs&url=<?php echo wp_get_shortlink(); ?>&share=twitter' title="Click to share on Twitter">
                <i class="fa-brands fa-twitter"></i>
			</a>
		</li>
		<li>
			<a class="share-link linkedin" rel="nofollow noopener noreferrer" href='//www.linkedin.com/shareArticle?mini=true&<?php echo "url={$permalink}&title={$title}"; ?>&share=linkedin&amp;nb=1' target="_blank" title="Click to share on Linkedin">
                <i class="fa-brands fa-linkedin-in"></i>
			</a>
		</li>
        <li>
			<a class="share-link whatsapp" rel="nofollow noopener noreferrer" href='//api.whatsapp.com/send?text=<?php echo $title . ' ' . $permalink; ?>' target="_blank" title="Click to send on whatsapp">
                <i class="fa-brands fa-whatsapp"></i>
			</a>
		</li>
		<li>
			<a class="share-link pinterst" rel="nofollow noopener noreferrer" href='//pinterest.com/pin/create/button/?<?php echo "url={$permalink}&media={$thumbnail_url}&description={$title}"; ?>' target="_blank" title="Click to share on Pinterest">
                <i class="fa-brands fa-pinterest"></i>
			</a>
		</li>
	</ul>
</div>
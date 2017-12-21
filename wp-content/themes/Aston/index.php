<?php
get_header();
?>

<div class="content">
	<div class="grids">
		<div class="grid box"> 
			<?php
			if ( have_posts() ) :
			    while ( have_posts() ) : the_post(); ?>
		        <div class="grid-header">
			        <h3><?php the_title(); ?></h3>
			        <ul>
						<li>
							<span>Posté par <?php the_author(); the_date('j, M, Y'); ?> à <?php the_time('g:i'); ?></span>
						</li>
						<li><a href=""><?php  comments_popup_link( '0', '1 commentaire', '% commentaires');?></a>
						</li>
					</ul>
      		    </div>
			    <div class="grid-img-content">
			   		<div class="img">
			   			<?php the_post_thumbnail(); ?>
			   		</div>
			        <p><?php the_content('lire la suite'); ?></p>
			    </div>
			    <div class="comments">
					<ul>
						<li><a href="#"><img src="images/views.png" title="view" /></a></li>
						<li><a href="#"><img src="images/likes.png" title="likes" /></a></li>
						<li><a href="#"><img src="images/link.png" title="link" /></a></li>
						<li><a class="readmore" href="<?php the_permalink(); ?>">ReadMore</a></li>
					</ul>
				</div>

	<?php
		endwhile;
			else :
				 _e( 'Sorry, no posts were found.', 'textdomain' );
		endif;
	?>
		</div>
	</div>
</div>




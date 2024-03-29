<?php wp_get_header(); ?>
<div class="subhead">
	<div class="insubhead">
		<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
	</div>
</div>



</div><!--end masthead-->
<div class="stripe"></div>

<div id="casing">
<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>



<div class="post" id="post-<?php the_ID(); ?>">

<div class="entry">
<?php the_content('לקרוא את המשך הכתבה &raquo;'); ?>

<div class="clear"></div>
<?php wp_link_pages(array('before' => '<p><strong>עמודים: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>


<div class="singleinfo">
<span class="category">קטגוריות: <?php the_category(', '); ?> </span>
</div>

</div>

<?php if ( get_the_author_meta('description') ) : ?>
	<div class="author-bio ">
	 	<div id="author-avatar">
					<?php echo get_avatar( get_the_author_email(), '60' ); ?>
        </div><!-- author-avatar --> 
        <div id="author-text">
                <h4><?php _e('Post by','web2feel')?> <?php the_author_posts_link(); ?></h4>
                <p><?php the_author_description(); ?></p> 
        </div><!-- author-text --> 
		<div class="clear"></div>
	</div><!-- author-bio -->
	<?php endif; ?>

<?php comments_template(); ?>
<?php endwhile; else: ?>

		<h1 class="title">לא נמצא</h1>
		<p>I'm Sorry,  you are looking for something that is not here. Try a different search.</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php wp_get_footer(); ?>


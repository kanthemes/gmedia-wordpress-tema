<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="content col-md-8">
            <div class="row">
				<div class="content-area">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="entry entry-content">
						<h1 class="title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					</div>
					<div class="divider"></div>
					<?php comments_template(); ?>
					<?php endwhile; endif; ?>
				</div>
				<div class="clearfix"></div>
			</div>
        </div>
        <?php get_sidebar(); ?>
     </div>     
</div>
<?php get_footer(); ?>
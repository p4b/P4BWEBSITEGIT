<?php
get_header();
 ?>
    <!-- Page Content -->
    <div class="container">
    	<div class="con">
        <div class="row">
        	<h3  class="title"><?php the_archive_title()  ?></h3>
  
        	<div class="col-md-3">
<?php //get_template_part('sidebar');?>
</div>
     <div class="col-md-9">  


 <div class="row">
		<?php
		while (have_posts()) {
			the_post();?>  
			<div class="col-md-4">
                        <div class="thumbnail">
                        	<div class="thum">
                            <img src="<?php the_post_thumbnail_url('midum') ?>" alt="">
                            </div>
                            <div class="caption">
                                <h4><a href="<?php the_permalink()?>"><?php the_title()?></a>
                                </h4>
                                <?php the_excerpt() ?>
                            </div>
                        
                        </div>
                    </div>
                  
	<?php	}
		?>
	</div>
	</div>
<?php echo get_next_posts_link(); ?>
<?php echo get_previous_posts_link(); ?>
                 </div>
                   </div>
                  </div>
	
<?php
get_footer();?>
<?php 
get_header();
 ?>
    <!-- Page Content -->
<!-- .page-header -->
    <div class="container">

        <div class="row">
<?php get_template_part('sidebar');?>
     <div class="col-md-9">
	 
        			<header class="page-header">
    				<h1 class="page-title">
    					نتائج البحث عن <?php echo get_search_query() ?>
    				</h1>
    			</header><!-- .page-header -->

    			  <div class="row">
		<?php
		while (have_posts()) {
			the_post();
			get_template_part('content');
		}
		?>
	</div>
	</div>
	 </div>
                   </div>
	
<?php
get_footer();?>

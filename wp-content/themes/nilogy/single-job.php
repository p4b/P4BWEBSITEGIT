<?php 
get_header(); 
wp_reset_query();
?>


<body <?php body_class()?> >
<script type="text/javascript">
  document.getElementById('home-slider').style.height = '0px';
</script>

  <!-- Page Content -->
  <div class="container" style="position: relative; overflow: hidden; min-height: 587px;;">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          <?php the_title() ?>
        </h1>
      </div>
    </div>
      <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <?php the_content(); ?>  
      </div>
          <?php //echo do_shortcode('[wpdevart_facebook_comment curent_url="http://intesharsd.com/plugins/comments/" order_type="social" title_text=" " title_text_color="#000000" title_text_font_size="22" title_text_font_famely="monospace" title_text_position="left" width="100%" bg_color="#CCCCCC" animation_effect="random" count_of_comments="2" ]'); ?>
      </div>
    </div> 
    <!-- Related Projects Row -->
  </div>
</body>
<?php
get_footer();

?>
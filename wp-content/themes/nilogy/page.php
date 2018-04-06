<?php 
get_header(); 
wp_reset_query();

?>

<div class="container">
  <div style=" padding:50px; min-height: 600px;"><?php the_content(); ?></div>

</div>


<?php
get_footer();

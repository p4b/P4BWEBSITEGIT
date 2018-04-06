<?php 
get_header(); 
wp_reset_query();

?>
<script type="text/javascript">
  document.getElementById('home-slider').style.height = '0px';
</script>

<!-- Title section -->			
  <!-- Page Content -->
<!--   <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
 -->
         	<?php //if(qtranxf_getLanguage()=='ar'): ?>
                <!-- الوظائف المتاحة -->
            <?php //endif; ?>
            <?php //if(qtranxf_getLanguage()=='en'): ?>
              <!-- Jobs Available -->
            <?php //endif ?>
<!--         </h1>
      </div>
    </div>
						
    <div id="container-folio" class="row ufilter isotope" style="position: relative; overflow: hidden; height: 600px;"> --><!-- !important! => DONT REMOVE class="ufilter"--> 
        <!-- <div id="" class="row"> -->
          <?php
            // PHP Query to list all posts inside ppost type "work"
            // $query = new WP_Query(array(
            // 'post_type' => 'post',
            // 'category_name' => 'job',
            // 'posts_per_page' => -1,
            // 'post_status' => 'publish'
            // ));
            // while ($query->have_posts()) :
            // $query->the_post();
          ?>
          <!-- Work Item -->
<!--           <div class="col-md-4 wow fadeInDown text-center">
              <div class="thumbnail">
 -->                <?php //the_post_thumbnail('meduim'); ?>
                  <!-- <div class="caption">
                    <h3><?php //the_title(); ?></h3>
                    <p> <?php //echo get_the_excerpt(); ?> -->
                        <?php 
                          // $read_more =  "read more";
                          //   if(qtranxf_getLanguage()=='ar'){
                          //   $read_more = "اقرأ المزيد";
                          //   }
                          ?>
                        <!-- <a href=" <?php //the_permalink(); ?> " class="" role=""> <?php //echo $read_more; ?></a>  -->
                    <!-- </p>
                  </div>
              </div>
          </div>
                <?php
                  //endwhile; // End work while
                  //wp_reset_query();
              ?>
 -->            <!-- END: portfolio item -->
             <!--  </div>
            </div>
        </div>
   -->
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          <?php if(qtranxf_getLanguage()=='ar'): ?>
                فرص التدريب المتاحة
            <?php endif; ?>
            <?php if(qtranxf_getLanguage()=='en'): ?>
              Trainings Available
            <?php endif ?>
        </h1>
      </div>
    </div>
						
    <div id="container-folio" class="row ufilter isotope" style="position: relative; overflow: hidden; height: 600px;"><!-- !important! => DONT REMOVE class="ufilter"--> 
        <div id="" class="row">
          <?php
            // PHP Query to list all posts inside ppost type "work"
            $query = new WP_Query(array(
            'post_type' => 'post',
            'category_name' => 'training',
            'posts_per_page' => -1,
            'post_status' => 'publish'
            ));
            while ($query->have_posts()) :
            $query->the_post();
          ?>
          <!-- Work Item -->
          <a href=" <?php the_permalink(); ?> " class="" role="">
          <div class="col-md-4 wow fadeInDown text-center">
              <div class="thumbnail">
                <?php the_post_thumbnail('meduim'); ?>
                  <div class="caption">
                    <h3><?php the_title(); ?></h3>
                    </p>
                  </div>
              </div>
          </div>
          </a> 
                <?php
                  endwhile; // End work while
                  wp_reset_query();
              ?>
            <!-- END: portfolio item -->
              </div>
            </div>
        </div>
  

        

<script type="text/javascript" src="assets/js/modernizr.custom.28468.js"></script>
<?php
get_footer();

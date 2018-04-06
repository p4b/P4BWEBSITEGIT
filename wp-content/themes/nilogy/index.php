<?php get_header()?>
  <section id="services">
    <div class="container">
      <div class="contact_click_left left_transition">
        <div class="telephone_div">
          <img class="telephone_contact" src="<?php echo get_template_directory_uri() ?>/assets/images/Upper.png" title="Contact Telephone" alt="Contact Telephone">
          <img class="telephone_contact down" src="<?php echo get_template_directory_uri() ?>/assets/images/Down.png" title="Contact Telephone" alt="Contact Telephone">
        </div>
        <div class="numbers">
        <img class="whatsapp" src="<?php echo get_template_directory_uri()?>/assets/images/whatsapp.png">0123625005<br>
        <img class="whatsapp" src="<?php echo get_template_directory_uri()?>/assets/images/whatsapp.png">0123625007
        </div>
      </div>
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
          <?php if(qtranxf_getLanguage()=='ar'): ?>
                <h2>منتجاتنا</h2>
                <?php endif; ?>
              <?php if(qtranxf_getLanguage()=='en'): ?>
              <h2>Our Products</h2>
            <?php endif ?>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
        <?php
        // PHP Query to list all posts inside category "systems"
        $query = new WP_Query(array(
        'post_type' => 'post',
        'category_name' => 'systems',
        'posts_per_page' => -1,
        'post_status' => 'publish'
        ));
        while ($query->have_posts()) :
        $query->the_post();
      ?>
          <div class="col-sm-4 wow" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <?php the_excerpt()?>
            </div>
            <div class="service-info">
              <h3> <?php the_title()?></h3>
              <p> <?php the_content()?></p>
            </div>
          </div>
          <?php
                endwhile; // End system while
                wp_reset_query();
            ?>
        </div>
      </div>
    </div>
  </section><!--/#services-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <?php if(qtranxf_getLanguage()=='ar'): ?>
          <h2>عرض منتجاتنا </h2>
        <?php elseif(qtranxf_getLanguage()=='en'): ?>
          <h2>View Our Products</h2>
          <?php endif; ?>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
      <?php
                    // PHP Query to list all posts inside category "projects"
                    $query = new WP_Query(array(
                    'category_name' => 'projects',
                    'posts_per_page' => -1,
                    'post_status' => 'publish'));
                    while ($query->have_posts()) :
                    $query->the_post();
                  ?>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
                <?php the_post_thumbnail('medium',array('class'=>'img-responsive')); ?>
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3><?php the_title()?></h3>
                    <p><?php the_excerpt()?></p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="" href="<?php the_permalink(); ?>" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php the_post_thumbnail_url('large')?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        endwhile; // End of projects while
        wp_reset_query();
        ?>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  <section id="team" class="team-member-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title text-center">
                  <?php
                    $our_team =  "Our Team";
                      if(qtranxf_getLanguage()=='ar'){
                        $our_team = "فريق العمل";
                      }
                  ?>
                        <h3><?php echo $our_team; ?></h3>
                    </div>
            </div>
        </div>
            
        <div class="row">
            <div class="col-md-12">
                <div id="team-section">
                  <div class="our-team">

                    <?php
                    // PHP Query to list all posts inside ppost type "slider"
                    $query = new WP_Query(array(
                      'category_name' => 'team',
                      'posts_per_page' => -1,
                      'post_status' => 'publish'));
                      while ($query->have_posts()) :
                      $query->the_post();
                      ?>
                      <div class="team-member">
                        <img src="<?php echo the_post_thumbnail_url('medium');?>" class="img-responsive" alt="">
                        <div class="team-details">
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <p><?php the_excerpt();?></p>
                             <ul> 
                              <?php  //echo get_post_meta($post->ID, 'social', true);?>
                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul> 
                        </div>
                      </div>
                      <?php
                            endwhile; // End slider while
                            wp_reset_query();
                        ?>
                        </div>

                    
                    </div>
                </div>
            </div>
                
        </div>
    </section>
    <!-- End Team Member Section -->

<section id="about-us" class="parallax">
    <div class="layer">
      <div class="container">
        <div class="row">
          <div class="col-sm-offset-2 col-sm-8">
            <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <?php dynamic_sidebar( 'about-us' ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2><!-- Our Clients --></h2>
          <p><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam --></p>
        </div>
      </div>
      <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:100px;overflow:hidden;visibility:hidden;">
      <!-- Loading Screen -->
      <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      <div style="position:absolute;display:block;background:url('<?php echo get_template_directory_uri() ?>/assets/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
      </div>
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
        <?php
          // PHP Query to list all posts inside category "logo"
          $query = new WP_Query(array(
          'post_type' => 'post',
          'category_name' => 'logo',
          'posts_per_page' => -1,
          'post_status' => 'publish'
          ));
          while ($query->have_posts()) :
          $query->the_post();
        ?>
        <div>
          <img data-u="image" src="<?php echo the_post_thumbnail_url()?>" />
        </div>
        <a data-u="any" href="http://www.jssor.com" style="display:none">Scrolling Logo Thumbnail Slider</a>
        <?php
        endwhile; // End of logo while
        wp_reset_query();
        ?>
      </div>
    </div>           
  </div>
  </section><!--/#team-->

<section id="twitter" class="parallax">
    <div>
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
              <i class="fa fa-twitter"></i>
              <?php if(qtranxf_getLanguage()=='ar'): ?>
                <h4>نقاط أساسية</h4>
                <?php endif; ?>
              <?php if(qtranxf_getLanguage()=='en'): ?>
              <h4>Main points:</h4>
            <?php endif ?>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">

                <?php
                    // PHP Query to list all posts inside category "points"
                    $i=0;
                    $query = new WP_Query(array(
                    'category_name' => 'points',
                    'posts_per_page' => -1,
                    'post_status' => 'publish'));
                    while ($query->have_posts()) :
                    $query->the_post();
                    
                    if ($i=="0")
                    {
                        $x="active wow fadeIn";
                        $i++;
                    }
                    else
                    {
                      $x="";
                    }
                        ?>
                  <div class="item <?php echo $x ?>" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>
                  <?php the_title(); ?>
                  </p>
                  </div>
                <?php
                  endwhile; // End of points while
                  wp_reset_query();
                ?>
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->


<!--   <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-user"></i>
          <h3 class="timer">4000</h3>
          <p>Happy Clients</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fa fa-desktop"></i>
          <h3 class="timer">200</h3>                    
          <p>Modern Websites</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="fa fa-trophy"></i>
          <h3 class="timer">10</h3>                    
          <p>WINNING AWARDS</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-comment-o"></i>                    
          <h3>24/7</h3>
          <p>Fast Support</p>
        </div>                 
      </div>
    </div>
  </section>
  </#features-->
  
<!--   <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Pricing Table</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3>Basic</h3>
              <div class="price">
                $9<span>/Month</span>                          
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3>Standard</h3>
              <div class="price">
                $19<span>/Month</span>                                
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3>Featured</h3>
              <div class="price">
                $29<span>/Month</span>                                
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <h3>Professional</h3>
              <div class="price">
                $49<span>/Month</span>                    
              </div>
              <ul>
                <li>Free Setup</li>
                <li>10GB Storage</li>
                <li>100GB Bandwith</li>
                <li>5 Products</li>
              </ul>
              <a href="#" class="btn btn-lg btn-primary">Sign up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--/#pricing-->


  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <?php if(qtranxf_getLanguage()=='ar'): ?>
            <h2>آخر الأخبار</h2>
          <?php elseif(qtranxf_getLanguage()=='en'): ?>
            <h2>Latest news</h2>
          <?php endif; ?>
        </div>
      </div>     
    <div>

    <section class='galeria'>
      <input type="radio" id="uno" value="1" name="tractor" checked='checked' />    
      <input type="radio" id="dole" value="2" name="tractor" />      
      <input type="radio" id="tele" value="3" name="tractor" />
      <?php
        $i=0;
        // PHP Query to list all posts inside category "news"
        $query = new WP_Query(array(
        'category_name' => 'news',
        'posts_per_page' => 3,
        'post_status' => 'publish'));
        while ($query->have_posts()) :
          $query->the_post();
          if($i=="0")
            {
        ?>
        <article class='card una' style="background-image: url(data:image/png;base64), url('<?php echo the_post_thumbnail_url('large')?>')">
        <h2 class='entypo-tag'><?php the_title()?></h2>
          <a href="<?php the_permalink();?>"><?php the_content();?></a>
        <ul class='footer'>
          <?php if(qtranxf_getLanguage()=='ar'): ?>
            <a href="news"><li>رؤية المزيد من الأخبار</li></a>
          <?php elseif(qtranxf_getLanguage()=='en'): ?>
            <a href="news"><li>see more news ..</li></a>
          <?php endif; ?>
        </ul>
        <label for='dole' class='entypo-left-bold otra'></label>
        <label for='tele' class='entypo-right-bold otra'></label>
        <label for='uno' class='entypo-arrows-ccw afin'></label>  
        </article>
        <?php 
            }
          elseif($i=="1")
          {
        ?>
        <article class='card dos' style="background-image: url(data:image/png;base64), url('<?php echo the_post_thumbnail_url('large')?>')">
        <h2 class='entypo-feather'><?php the_title()?></h2>
          <a href="<?php the_permalink();?>"><?php the_content();?></a>
        <ul class='footer'>
          <?php if(qtranxf_getLanguage()=='ar'): ?>
            <a href="news"><li>رؤية المزيد من الأخبار</li></a>
          <?php elseif(qtranxf_getLanguage()=='en'): ?>
            <a href="news"><li>see more news ..</li></a>
          <?php endif; ?>
        </ul>
        <label for='tele' class='entypo-left-bold otra'></label>
        <label for='uno' class='entypo-right-bold otra'></label>
        <label for='dole' class='entypo-arrows-ccw afin'></label>  
        </article>
        <?php 
        }
        elseif($i=="2")
          {
        ?>
        <article class='card tres' style="background-image: url(data:image/png;base64), url('<?php echo the_post_thumbnail_url('large')?>')">
        <h2 class='entypo-address'><?php the_title()?></h2>
          <a href="<?php the_permalink();?>"><?php the_content();?></a>
        <ul class='footer'>
          <?php if(qtranxf_getLanguage()=='ar'): ?>
            <a href="news"><li>رؤية المزيد من الأخبار</li></a>
          <?php elseif(qtranxf_getLanguage()=='en'): ?>
            <a href="news"><li>see more news ..</li></a>
          <?php endif; ?>
        </ul>
        <label for='uno' class='entypo-left-bold otra'></label>
        <label for='dole' class='entypo-right-bold otra'></label>
        <label for='tele' class='entypo-arrows-ccw afin'></label>  
      </article>
      <?php 
    }
      $i++;
    endwhile; // End of news while
            wp_reset_query();
            ?>

    </section>
    </div>

        </div>
      </section><!--/#blog-->

  <section id="contact">
    <div id="google-map" class="wow fadeIn" data-latitude="15.604619" data-longitude="32.566684" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <?php if(qtranxf_getLanguage()=='ar'): ?>
                <h2>اتصل بنا</h2>
                <?php endif; ?>
              <?php if(qtranxf_getLanguage()=='en'): ?>
              <h2>Contact Us</h2>
            <?php endif ?>
            
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <?php if(qtranxf_getLanguage()=='ar'): ?>
                  <?php echo do_shortcode('[contact-form-7 id="135" title="contact form ar"]');?>
                <?php endif; ?>
                  <?php if(qtranxf_getLanguage()=='en'): ?>
                <?php echo do_shortcode('[contact-form-7 id="134" title="contact form ar"]'); ?>
                  <?php endif ?>  
            </div>
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
               <?php dynamic_sidebar('contact-us'); ?> 
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
        		
 <?php get_footer ()?>
<footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo2.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" target="_blank" href="https://p4binfo@gmail.com"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" target="_blank" href="https://twitter.com/p4binfo"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="youtube" target="_blank" href="https://www.youtube.com/channel/UCbTGDNpOJla5wy9TobTbrhA"><i class="fa fa-youtube"></i></a></li>
            <li><a class="facebook" target="_blank" href="https://www.facebook.com/p4bltd"><i class="fa fa-facebook"></i></a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2017 P4B.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.nilogy.com/">Nilogy</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDYg1PcAIcO_ukzMjJVjUaI33RYsjxZtSo&sensor=true"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/wow.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/mousescroll.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/smoothscroll.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
  <script>
  $(document).ready(function() {
  
    $(".our-team").owlCarousel({
          pagination: true,
          slideSpeed : 2500,
      stopOnHover: true,
        autoPlay: 3000,
          items: 4,
        //singleItem:true,
          itemsMobile : [550,1],
          itemsDesktopSmall : [991,2],
      transitionStyle : "fade",
      navigationText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>']
    });
  
  });
</script>

  <script type="text/javascript">
  jQuery(function(){
          $("li > a").each(function(index){	
          if(/#/.test($(this).attr('href')))
          {
            $(this).parent().removeClass("active");
          }
        });
      });

</script>
<?php wp_footer();?>

</body>
</html>
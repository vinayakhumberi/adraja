<!-- start in Header -->
<!-- </div> -->
</body>
</html>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script src="<?= base_url()?>assets/libraries/js/jquery-2.2.4.min.js"></script>
<script src="<?= base_url()?>assets/libraries/js/bootstrap.min.js"></script>
<!--dynamic table initialization -->
<script src="<?= base_url()?>assets/libraries/js/ripples.min.js"></script>
<script src="<?= base_url()?>assets/libraries/js/material.min.js"></script>
<script src="<?= base_url()?>assets/libraries/js/snackbar.min.js"></script>

<script src="<?= base_url()?>assets/js/trackEvent.js"></script>
<script src="<?= base_url()?>assets/js/common.js"></script>
<script src="<?= base_url()?>assets/js/bb_main.js"></script>
<script src="<?= base_url()?>assets/js/home.js"></script>
<?php   //$this->minify->js(array('home.js'));  $this->minify->deploy_js(TRUE,'minified_js/all.min.js');?>
<!--<script src="<?= base_url()?>assets/minified_js/all.min.js"></script> -->
<?php switch ($bb_page_name) {
  case 'HOME':
    break;
  case 'listing':
    echo '<script src="http://maps.googleapis.com/maps/api/js"></script><script src="'.base_url().'assets/js/listing.js"></script>';
  break;
  default:
    # code...
  break;
}
?>
<script>
jQuery(document).ready(function(){
  // Add scrollspy to <body>
  jQuery('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  jQuery("#myNavbar a.nav-link").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    jQuery('html, body').animate({
      scrollTop: (jQuery(hash).offset().top)
    }, 800, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
});
</script>
<!-- google analytics start-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53567376-2', 'auto');
  ga('send', 'pageview');

</script>
<!-- google analytics start-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Divine - Endowments</title>
    <!-- global level styles -->
    	<?php include_once("includes/global-styles.php"); ?>
    <!-- / global level styles end -->

    <!-- page level plugin styles -->
    <link href="css/cloudzoom.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
    <!-- / page level plugin styles end -->

    <!-- Website theme style sheet -->
    	<?php include_once("includes/website-theme.php"); ?>
    <!-- / Website theme style sheet end-->

    <!-- demo style start -->
      <style>
      .carousel-custom-control-container.static,.carousel-custom-control-container.static .carousel-custom-control
      {
      	position: static;
      	margin: 0
      }
      .carousel-custom-control.static
      {
      	position:static;
      }
      .carousel-custom-control.text-center
      {
      	width: 100%;
      }
      .carousel-custom-control.text-center a
      {
      	display: inline-block;
      	float: none;
      }
      </style>
    <!-- demo style end -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <!-- header section start-->
    <?php include_once("includes/header.php"); ?>
    <!-- / header section end-->
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <ul id="imageGallery">
            <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-1.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-1.jpg">
              <img  class="cloudzoom" data-cloudzoom="uriEscapeMethod:'encodeURI',zoomSizeMode: 'lens', startMagnification:4.2, maxMagnification:4, zoomImage: 'http://sachinchoolur.github.io/lightslider/img/cS-1.jpg'"  src="http://sachinchoolur.github.io/lightslider/img/cS-1.jpg" />
            </li>
            <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-2.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-2.jpg">
              <img  class="cloudzoom" data-cloudzoom="uriEscapeMethod:'encodeURI',zoomSizeMode: 'lens', startMagnification:4.2, maxMagnification:4, zoomImage: 'http://sachinchoolur.github.io/lightslider/img/cS-2.jpg'"  src="http://sachinchoolur.github.io/lightslider/img/cS-2.jpg" />
            </li>
          </ul>
          <div class="carousel-custom-control static text-center">
            <a href="#" id="zoom-prev">
              <img src="img/carousel-prev.png" />
            </a>
            <a href="#" id="zoom-next">
              <img src="img/carousel-next.png" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section start -->
   	<?php include_once("includes/footer.php"); ?>
   	<!-- / footer section end -->
	  <!-- global plugin scripts  -->
    <?php include_once("includes/global-scripts.php"); ?>
    <!-- / global plugin scripts end -->
    <!-- page level plugin scripts include -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.21/js/lightgallery-all.min.js"></script>
    <script src="js/cloudzoom.pack.js"></script>
    <!-- / page level plugin scripts include end -->

    <!-- page level scripts  -->
    <script>
    $(document).ready(function() {
       var zoomSlider = $('#imageGallery').lightSlider({
          gallery:true,
          item:1,
          loop:true,
          thumbItem:9,
          slideMargin:0,
          controls:false,
          enableDrag: false,
          currentPagerPosition:'left',
          onSliderLoad: function(el) {
              el.lightGallery({
                  selector: '#imageGallery .lslide'
              });
              CloudZoom.quickStart();
          },
          onBeforeSlide: function (el) {
              $('.cloudzoom').css('pointer-events','none');
          },
          onAfterSlide: function (el) {
              $('.cloudzoom').css('pointer-events','auto');
          }

      });
      $('#zoom-prev').click(function(){
          zoomSlider.goToPrevSlide();

      });
      $('#zoom-next').click(function(){
          zoomSlider.goToNextSlide();
      });
    });

    </script>
    <!-- page level scripts end-->
  </body>
</html>

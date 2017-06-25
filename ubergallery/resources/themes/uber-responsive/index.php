<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

  <!-- Metadata -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="KESA Website - site for pictures, past events and people involved with the University of Toronto (UofT) Korean Engineering Students' Association (KESA).">
  <meta name="author" content="Jemin Choi, ECE1T8">

  <title>KESA Photos</title>

  <link rel="shortcut icon" href="<?php echo THEMEPATH; ?>/img/favicon.png" />

  <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/css/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/css/bootstrap-responsive.min.css" />

  <!-- Bootstrap Core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="/css/clean.css" rel="stylesheet">


  <!-- Fonts -->
  <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="/text/css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="/text/css">
  <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="/text/css">

  <!-- Some more fonts from me ;) -->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

  <!-- Use: font-family: 'Muli', sans-serif; -->
  <link href="https://fonts.googleapis.com/css?family=Muli:200" rel="stylesheet">

  <?php echo $gallery->getColorboxStyles(1); ?>

  <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/bootstrap.min.js"></script>
  <?php echo $gallery->getColorboxScripts(); ?>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php file_exists('googleAnalytics.inc') ? include('googleAnalytics.inc') : false; ?>

  <style>
  h3 {
    font-family: 'Muli', sans-serif; font-size: large
    font-weight: 700;
    letter-spacing: 1px;
    text-align: center;
    text-decoration: underline;
  }
  </style>
</head>

<body>

  <!-- Start of Menu bar for navigation-->
  <div class="topnav" id="myTopnav">
    <a class="active" href="http://kesa.skule.ca">KESA</a>
    <a href="http://kesa.skule.ca/aboutus">About Us</a>
    <a href="http://kesa.skule.ca/events">Events</a>
    <a href="http://kesa.skule.ca/photogallery">Photos</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
  <!-- End of Menu bar for navigation-->
  <br/>
  <div class="row">
    <div class="box">
      <h3>KESA Photo Gallery</h3>
      <br/>

      <?php if($gallery->getSystemMessages()): ?>
        <?php foreach($gallery->getSystemMessages() as $message): ?>
          <div class="alert alert-<?php echo $message['type']; ?>">
            <a class="close" data-dismiss="alert">×</a>
            <?php echo $message['text']; ?>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

      <!-- Start UberGallery v<?php echo UberGallery::VERSION; ?> - Copyright (c) <?php echo date('Y'); ?> Chris Kankiewicz (http://www.ChrisKankiewicz.com) -->
      <?php if (!empty($galleryArray) && $galleryArray['stats']['total_images'] > 0): ?>
        <ul class="gallery-wrapper thumbnails">
          <?php foreach ($galleryArray['images'] as $image): ?>
            <li class="">
              <a href="<?php echo html_entity_decode($image['file_path']); ?>" title="<?php echo $image['file_title']; ?>" class="thumbnail" rel="colorbox">
                <img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['file_title']; ?>" />
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <!-- End UberGallery - Distributed under the MIT license: http://www.opensource.org/licenses/mit-license.php -->

      <hr/>


      <?php if ($galleryArray['stats']['total_pages'] > 1): ?>

        <div class="pagination pagination-centered">
          <ul>
            <?php foreach ($galleryArray['paginator'] as $item): ?>

              <?php

              switch ($item['class']) {

                case 'title':
                $class = 'disabled';
                break;

                case 'inactive':
                $class = 'disabled';
                break;

                case 'current':
                $class = 'active';
                break;

                case 'active':
                $class = NULL;
                break;

              }

              ?>

              <li class="<?php echo $class; ?>">
                <a href="<?php echo empty($item['href']) ? '#' : $item['href']; ?>"><?php echo $item['text']; ?></a>
              </li>

            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>


    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <ul class="icons">
            <li><a href="https://www.facebook.com/groups/112791958804537/" class="fa fa-facebook" target="_blank"></a></li>
            <li><a href="mailto:jake.kang%40mail.utoronto.ca" class="fa fa-envelope" target="_blank"></a></li>
          </ul>
          <div class="copyright">Copyright &copy; UTKESA 2017</div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Responsive side bar -->
  <script src="/js/navBar.js"></script>

  <!-- jQuery -->
  <script src="/js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="/js/bootstrap.min.js"></script>

  <!-- Analytics script -->
  <script src="/js/analytics.js"></script>


  <script type="application/ld+json">
  {
    "@context" : "http://schema.org",
    "@type" : "Organization",


    "name" : "UTKESA",



    "url" : "http:\/\/kesa.skule.ca",



    "sameAs" : [ "https:\/\/www.facebook.com\/groups\/112791958804537\/",         ]



  }
  </script>

</body>

<!-- Page template by, Chris Kankiewicz <http://www.chriskankiewicz.com> -->

</html>

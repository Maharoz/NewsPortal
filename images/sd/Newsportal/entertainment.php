<?php
include('Databaseconn.php');


?>

<!DOCTYPY HTML>

<html>
    
    
    
    <head>
        <title><?php echo $entertainment_page['title']; ?>| <?php echo $site_title; ?></title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <?php include('Bootstarp.php'); ?>
         <?php include('Jquery.php'); ?>
        
    </head>
    
    <body>
    
        
         <img src="Observer.jpg">
        
        <nav class="navbar navbar-default" role="navigation">

        <ul class="nav navbar-nav">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
             <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
           
            <li <?php if($pageid ==1) ?>><a href="home.php?page=1">Home</a></li>
            <li <?php if($sports_pageid==1) ?>><a href="Sports.php?page=1">Sports</a></li>
            <li <?php if($entertainment_pageid==1){echo 'class="active"';} ?>><a href="entertainment.php?page=1">Entertainment </a></li>
           
            <li <?php if($world_pageid==1) ?>><a href="world.php?page=1">World</a></li>
          
           
            
            <li><a href="#">Business</a></li>
            <li><a href="#">Culture</a></li>
        
        
         </ul>
      
            </nav><!--end main nav-->
            <marquee  height="6%" width="100%" bgcolor="yellow" font-size="25px" onmousedown="this.stop()" onmouseup="this.start()" > <?php echo $page['breaking']; ?></marquee>
            
             
<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
         
          <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h2><?php echo $entertainment_page['header1']; ?></h2>
              <p> <?php echo $entertainment_page['body1']; ?></p>
             <p<?php if($pageid_n==13) ?>><a class="btn btn-default" href="Newsshow.php?page_n=13"  role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2><?php echo $entertainment_page['header2']; ?></h2>
              <p> <?php echo $entertainment_page['body2']; ?></p>
              <p<?php if($pageid_n==14) ?>><a class="btn btn-default" href="Newsshow.php?page_n=14"  role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
                     <h2><?php echo $entertainment_page['header3']; ?></h2>
              <p> <?php echo $entertainment_page['body3']; ?></p>
              <p<?php if($pageid_n==15) ?>><a class="btn btn-default" href="Newsshow.php?page_n=15"  role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
               <h2><?php echo $entertainment_page['header4']; ?></h2>
              <p> <?php echo $entertainment_page['body4']; ?></p>
              <p<?php if($pageid_n==31) ?>><a class="btn btn-default" href="Newsshow.php?page_n=31"  role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Latest</a>
            <a<?php if($pageid_n==32)?> href="Newsshow.php?page_n=32" class="list-group-item"><?php echo $entertainment_page['header5']; ?></a>
           <a<?php if($pageid_n==33)?> href="Newsshow.php?page_n=33" class="list-group-item"><?php echo $entertainment_page['header6']; ?></a>
            <a <?php if($pageid_n==34)?> href="Newsshow.php?page_n=34" class="list-group-item"><?php echo $entertainment_page['header7']; ?></a>
            <a <?php if($pageid_n==35)?> href="Newsshow.php?page_n=35" class="list-group-item"><?php echo $entertainment_page['header8']; ?></a>
            <a href="#" class="list-group-item">Link</a>
       
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>

    </div><!--/.container-->


            
        
    </body>
</html>




















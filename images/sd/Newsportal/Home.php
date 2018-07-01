<?php
include('Databaseconn.php');


?>

<!DOCTYPY HTML>

<html>
    
    
    
    <head>
        <title><?php echo $page['title']; ?> | <?php echo $site_title; ?></title>
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
            <li <?php if($pageid ==1) {echo 'class="active"';} ?>><a href="home.php?page=1">Home</a></li>
            <li <?php if($sports_pageid==1)?>><a href="Sports.php?page=1">Sports</a></li>
            <li <?php if($entertainment_pageid==1) ?>><a href="entertainment.php?page=1">Entertainment </a></li>
           
            <li <?php if($world_pageid==1) ?>><a href="world.php?page=1">World</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Culture</a></li>
        
        
         </ul>
      
            </nav><!--end main nav-->
    <marquee  height="6%" width="100%" bgcolor="yellow" font-size="25px" onmousedown="this.stop()" onmouseup="this.start()" > <?php echo $page['breaking']; ?></marquee>
            
             
<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
              
              <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
            
    
          <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h2><?php echo $page['header1']; ?></h2>
              <p> <?php echo $page['body1']; ?></p>
              <p<?php if($pageid_n==1) ?>><a class="btn btn-default" href="Newsshow.php?page_n=1"  role="button">View details &raquo;</a></p>
              
           
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2><?php echo $page['header2']; ?></h2>
              <p><?php echo $page['body2']; ?> </p>
              <p <?php if($pageid_n==2)?>><a class="btn btn-default" href="Newsshow.php?page_n=2" role="button">View details &raquo;</a></p>
              
              
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2><?php echo $page['header3']; ?></h2>
              <p><?php echo $page['body3']; ?> </p>
        
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2><?php echo $page['header5']; ?></h2>
              <p><?php echo $page['body5']; ?> </p>
        
              <p <?php if($pageid_n==27)?>><a class="btn btn-default" href="Newsshow.php?page_n=27" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2><?php echo $page['header4']; ?></h2>
              <p><?php echo $page['body4']; ?> </p>
             <p <?php if($pageid_n==28)?>><a class="btn btn-default" href="Newsshow.php?page_n=28" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2><?php echo $page['header13']; ?></h2>
              <p><?php echo $page['body13']; ?> </p>
              <p <?php if($pageid_n==29)?>><a class="btn btn-default" href="Newsshow.php?page_n=29" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Link</a>
            <a<?php if($pageid_n==4)?> href="Newsshow.php?page_n=4" class="list-group-item"><?php echo $page['header8']; ?></a>
            <a <?php if($pageid_n==5)?> href="Newsshow.php?page_n=5" class="list-group-item"><?php echo $page['header9']; ?></a>
            <a <?php if($pageid_n==16)?> href="Newsshow.php?page_n=16" class="list-group-item"><?php echo $page['header10']; ?></a>
            <a <?php if($pageid_n==17)?> href="Newsshow.php?page_n=17" class="list-group-item"><?php echo $page['header11']; ?></a>
            <a <?php if($pageid_n==18)?> href="Newsshow.php?page_n=18" class="list-group-item"><?php echo $page['header12']; ?></a>
           <?php echo $page['header15']; ?>
          </div>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      
      <?php echo $page['header14']; ?>
      
      <footer>
        <p>Copyrights reserved by the developers</p>
      </footer>

    </div><!--/.container-->



            
            
        
    </body>
</html>




















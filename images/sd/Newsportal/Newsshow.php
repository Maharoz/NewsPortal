
<?php
include('Databaseconn.php');

?>
<html>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


</body>

</html>





<html>
    <head>
        
         <title><?php echo $page_n['title']; ?> | <?php echo $site_title; ?></title>
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
          <li ><a href="Home.php">Home</a></li>
           
          <li><a href="Sports.php">Sports</a></li>
          <li><a href="entertainment.php">Entertainment</a></li>
          <li><a href="world.php">World</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Culture</a></li>
        
        
         </ul>
               
        
            
            </nav><!--end main nav-->
        
        
            <div class="container" >
                <marquee  height="6%" width="100%" bgcolor="yellow" font-size="25px" onmousedown="this.stop()" onmouseup="this.start()" > <?php echo $page['breaking']; ?></marquee>
        
        <h1><?php echo $page_n['header']; ?></h1>
              
              <p><?php echo $page_n['body']; 
              
         
              
              
              ?></p>
              
            
            
            
            </div>
            

        
    </body>
</html>    
              
          
                

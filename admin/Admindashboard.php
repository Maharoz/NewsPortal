<?php

#start the session:

session_start();

if(!isset($_SESSION['username']))
{
    header('Location: login.php');
}

?>

<?php
include('Databaseconn.php');


?>




<!DOCTYPY HTML>

<html>
    
    
    
    <head>
        <title><?php echo $page_title; ?> | <?php echo $site_title; ?></title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <?php include('Bootstarp.php'); ?>
         <?php include('Jquery.php'); ?>
        
    </head>
     
 
    <body>
        <div class="container">
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
            
        
         </ul>
      
            </nav><!--end main nav-->
            
            <h1>Admin Dashboard</h1>
 
 <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Operations</a>
            <a href="updatenewsdetail.php?" class="list-group-item">Update News Detail table</a>
            <a href="updatehomepage.php" class="list-group-item">Update Home page</a>
            <a href="updatesportspage.php" class="list-group-item">Update sports page</a>
            <a href="updateworldpage.php" class="list-group-item">Update world page</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="login.php" class="list-group-item">LOG-OUT</a>
          </div>
        </div><!--/.sidebar-offcanvas-->
        </div>
            
        
    </body>
</html>









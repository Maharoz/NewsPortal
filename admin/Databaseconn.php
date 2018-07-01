<?php

//Databaseconn File:

#Database Connection Here...

$dbc = mysqli_connect('localhost', 'root', '', 'mysql') OR  die('Error: '. mysqli_connect_error());


include ('data.php');
$site_title='OBSERVER';

if(isset($_GET['page']))
{
    $pageid = $_GET['page'];
}
else
{
    $pageid=1;
}

#page_setup
$page = data_page($dbc,$pageid);

if(isset($_GET['page_n']))
{
    $pageid_n = $_GET['page_n'];
}
else
{
    $pageid_n=1;
}

#page_setup
$page_n = detail_page($dbc,$pageid_n);


if(isset($_GET['sports_page']))
{
    $sports_pageid = $_GET['sports_page'];
}
else
{
    $sports_pageid=1;
}

#page_setup
$sports_page = sports_page($dbc,$sports_pageid);


if(isset($_GET['entertainment_page']))
{
    $entertainment_pageid = $_GET['entertainment_page'];
}
else
{
    $entertainment_pageid=1;
}

#page_setup
$entertainment_page = entertainment_page($dbc,$entertainment_pageid);


if(isset($_GET['world_page']))
{
    $world_pageid = $_GET['world_page'];
}
else
{
    $world_pageid=1;
}

#page_setup
$world_page = world_page($dbc,$world_pageid);



?>
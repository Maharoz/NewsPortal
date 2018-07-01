<?php

function data_page($dbc,$id)

{
    $q="SELECT * FROM homepage  WHERE RowId= $id";
$r=  mysqli_query($dbc,$q);

$data = mysqli_fetch_assoc($r);

return $data;
}



function detail_page($dbc,$d_id)

{
    $q="SELECT * FROM newsdetails WHERE NewsId= $d_id";
$r=  mysqli_query($dbc,$q);

$datat = mysqli_fetch_assoc($r);

return $datat;
}




function sports_page($dbc,$sports_pageid)

{
    $q="SELECT * FROM sportspage  WHERE RowId= $sports_pageid";
$r=  mysqli_query($dbc,$q);

$data_sports = mysqli_fetch_assoc($r);

return $data_sports;
}


function entertainment_page($dbc,$entertainment_pageid)

{
    $q="SELECT * FROM entertainmentpage  WHERE RowId= $entertainment_pageid";
$r=  mysqli_query($dbc,$q);

$data_entertainment = mysqli_fetch_assoc($r);

return $data_entertainment;
}


function world_page($dbc,$world_pageid)

{
    $q="SELECT * FROM worldpage  WHERE RowId= $world_pageid";
$r=  mysqli_query($dbc,$q);

$data_world = mysqli_fetch_assoc($r);

return $data_world;
}



?>
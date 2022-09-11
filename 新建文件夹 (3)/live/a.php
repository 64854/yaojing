<?php
$img_array = glob("images/FM/*.{jpg,png,gif}",GLOB_BRACE);
$img = array_rand($img_array);
header("location:$img_array[$img]");
//echo $img_array[$img];
?>
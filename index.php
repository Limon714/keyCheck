<?php

$color = [
             "me1" => "white", 
             "me2" => "red",
             "me3" => "blue", 
             "me4" => "yellow", 
             "me5" => "brown"];
$new = ["shirt", "polo", "jacket"];

$mera = array_values($color);
$mera2 = key_exists( "me", $color);

echo "<pre>";
print_r($mera);
echo "</pre>";

if ($mera2) {
    
    echo "key exits";
}
else{
     echo " nothing is shown";
}

?>

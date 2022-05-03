<?php

$random_array = [];

for($i=0;$i<15;$i++)
{
    $rand_number = rand(1,200);
    if(!in_array($rand_number,$random_array))
    {
        $random_array[] = $rand_number;
    } 
}

echo "<pre>";
var_dump($random_array);
echo "</pre>";

?>
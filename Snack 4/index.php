<?php

$par = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat orci lacus, ut consequat metus convallis sit amet. Nulla nunc nunc, rhoncus quis faucibus et, vestibulum et nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam laoreet enim risus, eu viverra augue scelerisque non. Sed rhoncus tristique quam, ac commodo velit vehicula in. Maecenas quis elit justo. Pellentesque vitae nulla diam. Vivamus eu arcu ut risus fermentum feugiat. Nullam commodo aliquam odio in pulvinar. Praesent euismod velit quis ultrices blandit. Pellentesque ut metus sit amet quam rhoncus feugiat. Pellentesque vitae finibus leo, eget dignissim tortor. Proin risus felis, gravida id pretium sed, commodo vel nisi";

echo $par;
echo "<br/>";
echo "<br/>";

$sub_par = explode(".",$par);


echo "<pre>";
var_dump($sub_par);
echo "</pre>";

?>


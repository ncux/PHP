

<?php

$pattern = "/^color/im";

$text = "Color red is more visible than \ncolor blue in daylight.";

$matches = preg_match_all($pattern, $text, $array);

echo $matches . " matches were found."

?>


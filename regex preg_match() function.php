

<?php

$pattern = "/ca[kf]e/";

$text = "He was eating cake in the cafe.";

$match = preg_match($pattern, $text);

if($match){

    echo $match . " Match found!";

} else{

    echo "Match not found.";

}

?>


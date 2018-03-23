

<?php

$pattern = "/^J/";

$names = array("John Carter", "Clark Kent", "John Rambo");

$matches = preg_grep($pattern, $names);



// Loop through matches array and display matched names

foreach($matches as $match){

    echo $match . "<br>";

}

?>


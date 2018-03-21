
<?php

// Set error handler

set_error_handler("customError");



// Error handler function

function customError($errno, $errstr){

    echo "<b>Error:</b> [$errno] $errstr";

}



// Trigger error

echo($test);

?>


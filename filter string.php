

<?php

// Sample user comment

$comment = "<h1>Hey there! How are you doing today?</h1>";

echo $comment;



// Sanitize and print comment string

$sanitizedComment = filter_var($comment, FILTER_SANITIZE_STRING);

echo $sanitizedComment;

?>


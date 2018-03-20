
s
<?php

// Starting session

session_start();

?>



<?php

// Starting session

session_start();



// Storing session data

$_SESSION["firstname"] = "Peter";

$_SESSION["lastname"] = "Parker";

?>



<?php

// Starting session

session_start();



// Accessing session data

echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];

?>



<?php

// Starting session

session_start();



// Removing session data

if(isset($_SESSION["lastname"])){

    unset($_SESSION["lastname"]);

}

?>



<?php

// Starting session

session_start();



// Destroying session

session_destroy();

?>









<?php

// Setting a cookie

setcookie("username", "John Carter", time()+30*24*60*60);

?>



<?php

// Accessing an individual cookie value

echo $_COOKIE["username"];

?>





<?php

// Verifying whether a cookie is set or not

if(isset($_COOKIE["username"])){

    echo "Hi " . $_COOKIE["username"];

} else{

    echo "Welcome Guest!";

}

?>



<?php

// Deleting a cookie

setcookie("username", "", time()-3600);

?>




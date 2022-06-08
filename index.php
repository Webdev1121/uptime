<?php
//Get the status and decode the JSON
$status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/mc.1121dev.cf'));

//Show the version
echo $status->version;

?>
<p>If You See  Geyser = Up</p>

<?php
$content = file_get_contents('data.json');
$counters = json_decode($content, true);
echo '<table cellpadding = "5" cellspacing="0" border="1">';
foreach($counters as $key => $vol){
    echo "<tr>";
    foreach($vol as $data)
    echo "<td>".$data."</td>";
    echo "</tr>";
    echo "</table>";
}
?>
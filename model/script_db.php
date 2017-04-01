<?php
function get_script() {
    global $db;
    $result = mysql_query('SELECT message FROM script');  
    return $result;
}
?>
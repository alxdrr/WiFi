<?php 
require "db.php";
function get_query($sql)
{
    global $conn;
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo mysqli_errno($conn);
    }
    $arrQuery = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $arrQuery[] = $row;
    }
return $arrQuery;
}
<?php
function makeTitle ($conn, $thisPagename) {
    /*this will echo out the current page title fro mthe content table based on the page name in $thisPagename */
    $sql = "SELECT * FROM test.content where pagename = '$thisPagename'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row['pagename'];
}
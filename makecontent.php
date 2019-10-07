<?php
function makeContent($conn, $thisPagename){
    /* this creates the content from the content table based on the supplied $thisPagename variable.
    t will then loop through all the maching content records and export those individually. */
    $sql = "SELECT * FROM test.content WHERE pagename = '$thisPagename'";
    $result = $conn->query($sql);
    //fetch_assoc takes sql result and returns it into an array. it takes data from query and makes it a stack of plates that we can grab
    while($row = $result->fetch_assoc()){;
    echo $row['contenttitle'];
    echo $row['content'];
    }
}
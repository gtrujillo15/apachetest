<?php
//this creates the navigation from the navigation table
function makeNav($conn, $loggedIn){
    $sql = "SELECT pagename, pagetitle FROM test.Navigation";
    $result = $conn->query($sql);
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li><a class=\"link\" href='" . $row['pagename'] . "'>" .$row['pagetitle']. "</a></li>";
    }
    if ($loggedIn == "not logged in"){
    echo "<li><a href='login.php'>Log In</a></lli>"; 
    }
    echo "</ul>";
    
}

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


function makeTitle ($conn, $thisPagename) {
    /*this will echo out the current page title fro mthe content table based on the page name in $thisPagename */
    $sql = "SELECT * FROM test.content where pagename = '$thisPagename'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row['pagename'];
}
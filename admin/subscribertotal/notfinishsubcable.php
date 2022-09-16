<html lang="en">



<?php

// localhost is localhost
// servername is root
// password is empty
// database name is database
$con = mysqli_connect("localhost","root","","apsystem");

    // SQL query to display row count
    // in building table
    $sql = "SELECT status FROM costumercable WHERE status='NOT FINISH'";



    if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );

    // Display result
    printf($rowcount);
}

// Close the connection
mysqli_close($con);

?>

</html>

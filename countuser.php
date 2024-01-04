<?php
session_start();

// connect with database
$con = mysqli_connect("localhost", "root", "", "icare");

if (!$con) {
    die("Sorry, We are facing a technical issue");
}

// query to count the number of users
$sql = "SELECT COUNT(*) as totalUsers FROM `user`";

// execute the query against the database
$result = mysqli_query($con, $sql);

if ($result) {
    // Fetch the count from the result
    $row = mysqli_fetch_assoc($result);
    $totalUsers = $row['totalUsers'];

    // Store the count in the session
    session_start();
    $_SESSION["totalUsers"] = $totalUsers;

    // close the database connection
    mysqli_close($con);
}

?>
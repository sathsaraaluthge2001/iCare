<?php
$con = mysqli_connect("localhost", "root", "", "icare");

if (!$con) {
    die("Sorry, We are facing a technical issue");
}

$sql = "SELECT COUNT(*) as totalUsers FROM `user`";
$result = mysqli_query($con, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalUsers = $row['totalUsers'];
    echo "Total users in the database: " . $totalUsers;
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>

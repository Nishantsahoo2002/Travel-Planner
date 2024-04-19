<?php
$dbhost = "127.0.0.1:3307";
$dbuser = "tpp";
$dbpass = "Tpp@2324";
$db = "travelplanner";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if ($conn) {
    ?>
    <!-- <script>alert("Connected Successfully!")</script> -->
    <?php
    $sql = "CREATE TABLE IF NOT EXISTS USERIDS(
    U_ID INTEGER NOT NULL,
    username VARCHAR(20) NOT NULL,
    email TEXT NOT NULL PRIMARY KEY,
    passwrd TEXT NOT NULL)";
    try{
        $result = mysqli_query($conn, $sql);
    if ($result === TRUE) { ?>
        <!-- <script>alert("Tables created successfully")</script> -->
        <?php
    }}
    catch(Exception $e){?>
    <!-- <script>alert("Table already created")</script> -->
    <?php 
}
} ?>
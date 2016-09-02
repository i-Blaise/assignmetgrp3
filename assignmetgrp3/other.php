<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group3project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO personalinfo (Firstname, Lastname, DOB, EmailAddress, PhoneNo, ResidentialAddress, PostalAddress, ProgramLevel, KinName, KinEmail, KinRelationship)
                          VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[dateob]', '$_POST[email]', '$_POST[phonenum]', '$_POST[raddress]', '$_POST[paddress]', '$_POST[plevel]', '$_POST[kinsname]', '$_POST[kinsemail]', '$_POST[kinsrelation]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
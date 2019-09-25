<?php
$servername = "localhost";
$username = "root";
$password = "Adya@7814";
$dbname = "missingdirectory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Name, DOB , MissingFromDate,LastSeenLocation,EyeColor,Ethnicity, AadharNumber,Photo,Video FROM savedetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["Name"]. " DOB: " . $row["DOB"]. "MissingFromDate: " . $row["MissingFromDate"]. "LastSeenLocation: " . $row["LastSeenLocation"]."EyeColor: " . $row["EyeColor"]."Ethnicity: " . $row["Ethnicity"]."AadharNumber: " . $row["AadharNumber"]"<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
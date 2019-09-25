<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "Adya@7814", "missingdirectory");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$DOB = mysqli_real_escape_string($link, $_REQUEST['DOB']);
$MissingFromDate = mysqli_real_escape_string($link, $_REQUEST['MissingFromDate']);
$Lastseenlocation = mysqli_real_escape_string($link, $_REQUEST['LastSeenLocation']);
$Eyecolor = mysqli_real_escape_string($link, $_REQUEST['EyeColor']);
$Ethnicity= mysqli_real_escape_string($link, $_REQUEST['Ethnicity']);
$Aadharnumber= mysqli_real_escape_string($link, $_REQUEST['AadharNumber']);
$image = mysqli_real_escape_string($link, $_REQUEST['Photo']);
$video = mysqli_real_escape_string($link, $_REQUEST['Video']);
// Attempt insert query execution
$sql = "INSERT INTO persons (Name, DOB , MissingFromDate,LastSeenLocation,EyeColor,Ethnicity, AadharNumber,Photo,Video) VALUES ('$Name', '$DOB', '$MissingFromDate','$Lastseenlocation','$Eyecolor','$Ethnicity','$Aadharnumber','$image','$video')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
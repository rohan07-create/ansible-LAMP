<!DOCTYPE html>
<html>
<body>

<?php

// Create connection
$conn = mysqli_connect('192.168.42.128', 'root', '','db_connect');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Id, fldName, fldEmail, fldPhone, fldMessage FROM tbl_contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
	echo "<br> Id: ". $row["Id"]. " - Name: ". $row["fldName"]. " Email: ". $row["fldEmail"]. " Phone: ". $row["fldPhone"]. " Message: ". $row["fldMessage"]. " <br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>

<!-- process_form.php -->
<?php
// Assuming you have a MySQL database
$servername = "localhost";
$username = "root";
$password = "root@123";
$dbname = "donation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$mobileNumber = $_POST['mobileNumber'];
$address = $_POST['address'];
$city = $_POST['city'];
$Postcode = $_POST['Postcode'];

$Chair = $_POST['Chair'];
$centertable = $_POST['centertable'];
$toys = $_POST['toys'];
$tvunit = $_POST['tvunit'];
$fridge = $_POST['fridge'];
$washingmachine = $_POST['washingmachine'];


// SQL query to insert data into the database
$sql = "INSERT INTO request_form (firstname, lastName, mobileNumber, address, city, Postcode, Chair, centertable, toys, tvunit,fridge,washingmachine) VALUES ('$firstName','$lastName','$mobileNumber','$address','$city','$Postcode','$Chair','$centertable','$toys','$tvunit', '$fridge', '$washingmachine')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "
<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

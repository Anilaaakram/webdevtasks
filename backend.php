<?php
$servername = "localhost";
$username = "host"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "registration_form_db"; // Change to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$occupation = $_POST['occupation'];
$idType = $_POST['id-type'];
$idNumber = $_POST['id-number'];
$issueAuthority = $_POST['issue-authority'];
$issueDate = $_POST['issue-date'];
$issueState = $_POST['issue-state'];
$expiryDate = $_POST['expiry-date'];

$sql = "INSERT INTO task1 (name, Date of Birth, email, mobile, gender, occupation, id_type, id_number, issue_authority, issue_date, issue_state, expiry_date) 
VALUES ('$name', '$dob', '$email', '$mobile', '$gender', '$occupation', '$idType', '$idNumber', '$issueAuthority', '$issueDate', '$issueState', '$expiryDate')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php

// Database credentials
$servername = "localhost";
$email = "root";
$password = "";
$database = "SE";

// Create a connection
$conn = mysql_connect($servername, $email, $password, $database);

// Check the connection
if($conn) {
    echo "success"; 
} 
else {
    die("Error". mysqli_connect_error()); 
} 
?>

<!-- // Retrieve the form data using the $_POST superglobal
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$stmt->close();


// Close the database connection
$conn->close();


// Perform any necessary validation or processing here
// For example, you can check if the username or email already exists in the database
function isEmailExists($email)
{
    global $conn;
    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $count = $stmt->num_rows;
    $stmt->close();
    
    return $count > 0;
}

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Perform validation
if (isEmailExists($email)) {
    // Email already exists, display an error message or take appropriate action
    echo "Email already exists";
    // You can redirect back to the sign-up page or display an error message
    header("Location: SignUp.html");
    exit();

} else {
    // Email is unique, proceed with storing the user data in the database
    // Prepare and execute the SQL query
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $stmt->close();
}



// Redirect the user to a success page or display a success message
header("Location: homepage.html");
exit();
?> -->
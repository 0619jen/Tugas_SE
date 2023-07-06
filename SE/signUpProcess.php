<?php
$showAlert = false; 
$showError = false; 
$exists = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';   
    
    $email = $_POST["email"]; 
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"];
            
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result); 

    if ($num == 0) {
        if (($password == $cpassword) && $exists == false) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`email`, `password`, `date`) VALUES ('$email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $showAlert = true; 

                // Redirect the user to the homepage
                header("Location: homepage.html");
                exit();
            }
        } else { 
            $showError = "Passwords do not match"; 
        }      
    }

    if ($num > 0) {
        $exists = "Email not available"; 
    } 
}
?>

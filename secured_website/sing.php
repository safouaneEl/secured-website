<?php 
/* email */ 

if (isset($_POST['submit'])) {
    // Collect form data
    $email = $_POST['email'];
    $subject = $_POST['object'];
    $message = $_POST['message'];

    // Email details
    $to = 'elkhadirsafouane@gmail.com';
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "MIME-Version: 1.0\r\n" .
               "Content-Type: text/plain; charset=UTF-8\r\n";

    // Attempt to send the email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect with success message
        header("Location: contact.html?status=success");
    } else {
        // Redirect with failure message
        header("Location: contact.html?status=failure");
    }
    exit();
}



/* inscription */ 
if (isset($_POST["button"])) {
    $host = 'localhost';
    $user = 'safouane';
    $password = 'safphpmyadmi';
    $db = "s'inscrire";

    // Correct the function name
    $conn = mysqli_connect($host, $user, $password, $db);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the SQL statement
    $insert = "INSERT INTO secured_website_members (nom , email,  motdepass) 
               VALUES ('$name', '$email', '$password')";

    // Execute the query
    $query = mysqli_query($conn, $insert);

    // Check if the query was successful
    if ($query) {
        // Optionally redirect to the thank index.html with a query parameter
        header("Location: index.html?signup=success");
        exit();
    } else {
        echo "re-inscrir";
    }

    
}
?>
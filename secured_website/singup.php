<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';



if (isset($_POST['submit'])) {
    session_start(); // Start the session
    include "includes/information.php"; // Database connection info

    // Connect to the database
    $conn = mysqli_connect($host, $user, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Collect form data
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $object = mysqli_real_escape_string($conn, $_POST['object']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Try to insert data into the database
    $insert = "INSERT INTO email (email, objet, message) VALUES ('$email', '$object', '$message')";
    
    if (mysqli_query($conn, $insert)) {
        // Data inserted successfully, now send the email
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'elkhadirsafouane@gmail.com'; 
            $mail->Password = 'tsnlctwrgziayfrn'; // Use your actual app password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            // Sender and recipient
            $mail->setFrom($email); 
            $mail->addAddress('safouane.fas@gmail.com'); 

            // Email content
            $mail->isHTML(true);
            $mail->Subject = $object;
            $mail->Body = $message;

            $mail->send();

            // Email sent successfully
            $_SESSION['email_success'] = true;

        } catch (Exception $e) {
            // Email sending failed
            $_SESSION['email_success'] = false;
        }
    } else {
        // If data insertion failed, set email success to false
        $_SESSION['email_success'] = false;
    }

    // Close the database connection
    mysqli_close($conn);

    // Redirect back to index.php with the session success/failure
    header("Location: contact.php");
    exit();
}


/* inscription */ 
if (isset($_POST["button"])) {
    session_start();
    include "includes/information.php";

   
    $conn = mysqli_connect($host, $user, $password, $db);

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $insert = "INSERT INTO secured_website_members (nom , email,  motdepass) 
               VALUES ('$name', '$email', '$password')";

    
    $query = mysqli_query($conn, $insert);

    
    if ($query) {
        $_SESSION['famille_success'] = true; // Set session variable
    } else {
        $_SESSION['famille_success'] = false; // Set session variable
    }
    sleep(3);
    header("Location: contact.php");
    exit();
    

    
}

// first command:
if (isset($_POST["1commandbutton"])) {
    session_start();
    include "includes/information.php";

    $conn = mysqli_connect($host, $user, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['commandnom'];
    $email = $_POST['commandemail'];

    $insert = "INSERT INTO first_command (nom , email) VALUES ('$name', '$email')";

    $query = mysqli_query($conn, $insert);

    if ($query) {
        $_SESSION['command1_success'] = true; // Set session variable for success
    } else {
        $_SESSION['command1_success'] = false; // Set session variable for failure
    }
    header("Location: service.php");
    exit();
}

// devis pop up form :

if (isset($_POST["popupbutton"])) {
    session_start();
    include "includes/information.php";
    
       
    $conn = mysqli_connect($host, $user, $password, $db);
    
        
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
        
    $popupnom = $_POST['popupnom'];
    $popupemail = $_POST['popupemail'];
    $popuptel = $_POST['popuptel'];
    $popuppays = $_POST['popuppays'];
    $popupprojet = $_POST['popupprojet'];
    $popupbudget = $_POST['popupbudget'];
    $popupdetail = $_POST['popupdetail'];
        
    
    $insert = "INSERT INTO devis (nom, email, numero, pays, projet, budget, detail) 
                VALUES ('$popupnom', '$popupemail', '$popuptel', '$popuppays', '$popupprojet', '$popupbudget', '$popupdetail')";
    
        
    $query = mysqli_query($conn, $insert);
    
    if ($query) {
        $_SESSION['form_success'] = true; // Set session variable
    } else {
        $_SESSION['form_success'] = false; // Set session variable
    }
    header("Location: index.php");
    exit();        
}
?>
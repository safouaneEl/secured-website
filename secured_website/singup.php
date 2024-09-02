<?php 
/* email */ 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'elkhadirsafouane@gmail.com'; 
        $mail->Password = 'tsnlctwrgziayfrn'; // motdepass de l'app 
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom($_POST['email']); 
        $mail->addAddress('safouane.fas@gmail.com'); 

        $mail->isHTML(true);
        $mail->Subject = $_POST['object'];
        $mail->Body = $_POST['message'];

        $mail->send();

        echo '<script>
            alert("Message est envoyé avec succès!");
            window.location.href = "contact.php?status=success";
        </script>';
        exit();

    } catch (Exception $e) {
        echo '<script>
            alert("Échec de l\'envoi du message. Veuillez réessayer.");
            window.location.href = "index.php?status=failure";
        </script>';
        exit();
    }
}

/* inscription */ 
if (isset($_POST["button"])) {

    include_once "includes/information.php";

   
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
        echo "<script>
            alert('Inscription a été effectué avec succès!');
            window.location.href='index.php?signup=success';
        </script>";
        exit();
    } else {
        echo "<script>
            alert('Réessayez l\'inscription!');
        </script>";
    }

    
}
?>
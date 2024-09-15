<?php
include "includes/information.php";

$conn = new mysqli($host, $user, $password);

if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $db";
if ($conn->query($sql) !== TRUE) {
    die("<script>alert('Erreur lors de la création de la base de données: " . $conn->error . "');</script>");
}

$conn->select_db($db);

$sql = "CREATE TABLE IF NOT EXISTS email (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(30) NOT NULL,
    objet VARCHAR(30) NOT NULL,
    message TEXT(500) NOT NULL
)";
if ($conn->query($sql) !== TRUE) {
    die("<script>alert('Erreur lors de la création de la table \'email\': " . $conn->error . "');</script>");
}

$sql = "CREATE TABLE IF NOT EXISTS localisation (
    numero_de_bureau INT(10) AUTO_INCREMENT PRIMARY KEY,
    pays VARCHAR(50) NOT NULL DEFAULT 'Maroc',
    ville VARCHAR(50) NOT NULL DEFAULT 'Oujda',
    rue VARCHAR(50) NOT NULL DEFAULT 'Rue Al Boughaz',
    localisation LONGTEXT NOT NULL
)";
if ($conn->query($sql) !== TRUE) {
    die("<script>alert('Erreur lors de la création de la table \'localisation\': " . $conn->error . "');</script>");
}

$sql = "CREATE TABLE IF NOT EXISTS devis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL ,
    email VARCHAR(30) NOT NULL,
    numero INT(14) NOT NULL,
    pays TEXT(15) NOT NULL,
    projet VARCHAR(50) NOT NULL,
    budget VARCHAR(10) NOT NULL,
    detail TEXT NOT NULL

)";
if ($conn->query($sql) !== TRUE) {
    die("<script>alert('Erreur lors de la création de la table \'devis\': " . $conn->error . "');</script>");
}

$sql = "CREATE TABLE IF NOT EXISTS first_command (
    nom VARCHAR(50) NOT NULL ,
    email VARCHAR(30) NOT NULL PRIMARY KEY
)";
if ($conn->query($sql) !== TRUE) {
    die("<script>alert('Erreur lors de la création de la table \'first_command\': " . $conn->error . "');</script>");
}

$sql = "CREATE TABLE IF NOT EXISTS secured_website_members (
    nom VARCHAR(50) NOT NULL ,
    email VARCHAR(30) NOT NULL,
    motdepass VARCHAR(100) NOT NULL PRIMARY KEY
)";
if ($conn->query($sql) !== TRUE) {
    die("<script>alert('Erreur lors de la création de la table \'secured_website_members\': " . $conn->error . "');</script>");
}

$sql_check = "SELECT * FROM localisation LIMIT 1";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows == 0) {
    $sql_insert = "INSERT INTO localisation (pays, ville, rue, localisation) VALUES 
    ('Maroc', 'Oujda', 'Rue Al Boughaz', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13124.087122545492!2d-1.930267452157943!3d34.679399755872915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7864b0284f7e0f%3A0x2ff68030e6f626e8!2sTrocadero!5e0!3m2!1sen!2sma!4v1725027050577!5m2!1sen!2sma')";
    
    if ($conn->query($sql_insert) !== TRUE) {
        echo "<script>alert('Erreur lors de l\'insertion des données dans \'localisation\': " . $conn->error . "');</script>";
    }
}

$conn->close();
?>

<?php
// vos infos:
include "includes/information.php";

$conn = new mysqli($host, $user, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $db";
if ($conn->query($sql) === TRUE) {
    // Database created successfully
} else {
    die("<script>alert('Error creating database:');</script> " . $conn->error);
}

$conn->select_db($db);

// Create 'comments' table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS comments (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(30) NOT NULL,
    commentaire TEXT NOT NULL,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    // Table 'comments' created successfully
} else {
    die("<script>alert('Error creating table \'comments\':');</script> " . $conn->error);
}

// Create 'localisation' table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS localisation (
    numero_de_bureau INT(10) AUTO_INCREMENT PRIMARY KEY,
    pays VARCHAR(50) NOT NULL DEFAULT 'Maroc',
    ville VARCHAR(50) NOT NULL DEFAULT 'Oujda',
    rue VARCHAR(50) NOT NULL DEFAULT 'Rue Al Boughaz',
    localisation LONGTEXT NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    // Table 'localisation' created successfully
} else {
    die("<script>alert('Error creating table \'localisation\':');</script> " . $conn->error);
}

// Create 'secured_website_members' table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS secured_website_members (
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(30) NOT NULL,
    motdepass VARCHAR(100) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    // Table 'secured_website_members' created successfully
} else {
    die("<script>alert('Error creating table \'secured_website_members\':');</script> " . $conn->error);
}

// Insert default data into 'localisation' table
$sql = "INSERT INTO localisation (pays, ville, rue, localisation) VALUES 
('Maroc', 'Oujda', 'Rue Al Boughaz', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13124.087122545492!2d-1.930267452157943!3d34.679399755872915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7864b0284f7e0f%3A0x2ff68030e6f626e8!2sTrocadero!5e0!3m2!1sen!2sma!4v1725027050577!5m2!1sen!2sma')";
if ($conn->query($sql) === TRUE) {
    // Default data inserted into 'localisation' table successfully
} else {
    echo "<script>alert('Error inserting data into \'localisation\':');</script> " . $conn->error;
}

$conn->close();
?>
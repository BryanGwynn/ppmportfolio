<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

require 'vendor/autoload.php'; // Autoload Composer dependencies

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Load environment variables from .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Database configuration using environment variables
$host = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];

// Create a new PDO instance to connect to the database
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize form data
        $fullName = htmlspecialchars($_POST['full_name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Insert data into the contacts table
        $sql = "INSERT INTO contacts (full_name, email, message) VALUES (:full_name, :email, :message)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':full_name', $fullName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->execute();

        // Send the email using PHPMailer
        $mail = new PHPMailer(true);
        
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = $_ENV['GMAIL_USERNAME'];
            $mail->Password   = $_ENV['GMAIL_PASSWORD'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Recipients
            $mail->setFrom($_ENV['GMAIL_USERNAME'], 'Your Name');
            $mail->addAddress($_ENV['GMAIL_USERNAME'], 'Your Name');

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body    = "<h3>New message from the contact form:</h3>
                              <p><strong>Name:</strong> $fullName</p>
                              <p><strong>Email:</strong> $email</p>
                              <p><strong>Message:</strong> $message</p>";

            // Send email
            $mail->send();
            echo "<script>alert('Thank you! Your message has been sent.'); window.location.href = 'http://localhost/bryangwynnppm/index.html';</script>";

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
} catch (PDOException $e) {
    echo "Database Error: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>
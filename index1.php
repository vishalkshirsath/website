<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>

<?php
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace these values with your actual database credentials
   
    $conn = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "vishal.mysql.database.azure.com", "vishal", "Vigo@4242", "info", 3306, MYSQLI_CLIENT_SSL);

    // Create connection
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Insert data into database
    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

<h2>Contact Us</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Subject: <input type="text" name="subject" required><br>
    Message: <textarea name="message" required></textarea><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>

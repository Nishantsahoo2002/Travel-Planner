<?php

// Include necessary files (replace with your actual paths)
require_once 'connectdb.php'; // Configuration file with database credentials
require_once 'mailer.php';  // Class or function for sending emails

// Function to generate a random reset token
function generateRandomToken($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['emailid']);

    // Validate email address (add your own validation logic)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // Connect to database
        // $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to check if email exists
        $sql = "SELECT * FROM userids WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {

            $user_id = $result->fetch_assoc()["id"];

            // Generate a random reset token
            $reset_token = generateRandomToken(32);

            // Update user table with reset token and expiry time
            $sql = "UPDATE users SET reset_token = ?, reset_token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $reset_token, $user_id);
            $stmt->execute();

            // Create a reset link (replace with your domain)
            $reset_link = "http://127.0.0.1:80/touristvenues/Travel_Planner/reset.php?token=" . $reset_token;

            // Prepare email content
            $subject = "Reset Password for Your Account";
            $body = "Click on the following link to reset your password:\n" . $reset_link;

            // Send email using your preferred method (replace with your mailer function)
            send_email($email, $subject, $body);

            $message = "A password reset link has been sent to your email address.";
        } else {
            $message = "The email address is not registered.";
        }

        $conn->close();
    } else {
        $message = "Invalid email address.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
</body>
</html>

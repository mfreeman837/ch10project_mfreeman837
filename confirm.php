<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <!-- Fancy MacOS Style Gradient Background -->
    <div class="splotch splotch1"></div>
    <div class="splotch splotch2"></div>
    <div class="splotch splotch3"></div>
    <div class="splotch splotch4"></div>

    <div class="main">
        <?php
        // Form submission check
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Create variables
            $firstName = trim($_POST["fname"]);
            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
            $message = trim($_POST["message"]);
            $success = true;
            $errorMsg = "";

            // Validation
            if (empty($firstName) || empty($email) || empty($message)) {
                $success = false;
                $errorMsg = "All fields are required.";
            }

            // Submission message
            if ($success) {
                echo "<div class='success'>Thank you, $firstName! Your message has been delivered.</div>";
                echo "<div class='output'>
                        <p><strong>Name:</strong> $firstName</p>
                        <p><strong>Email:</strong> $email</p>
                        <p><strong>Message:</strong> $message</p>
                    </div>";
            } else {
                echo "<div class='error'>$errorMsg</div>";
            }
        }
        ?>
    </div>
</body>
</html>
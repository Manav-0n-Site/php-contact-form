<?php
// Handle form submission
$name = "";
$message = "";
$response = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $message = htmlspecialchars($_POST["message"]);

    if (!empty($name) && !empty($message)) {
        $response = "✅ Thanks <b>$name</b>! Your message was received: <i>$message</i>";
    } else {
        $response = "⚠️ Please fill in all fields!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Contact Form</h1>
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Your Name" value="<?php echo $name; ?>"><br>
            <textarea name="message" placeholder="Your Message"><?php echo $message; ?></textarea><br>
            <button type="submit">Send</button>
        </form>

        <?php if ($response): ?>
            <div class="response"><?php echo $response; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>

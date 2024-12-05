<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot Spam Protection
    if (!empty($_POST['honeypot'])) {
        die('Spam detected.');
    }
    
    // Step 1: Sanitize Input Data
    $fname = htmlspecialchars(strip_tags(trim($_POST['fname'])));
    $lname = htmlspecialchars(strip_tags(trim($_POST['lname'])));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(strip_tags(trim($_POST['phone'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));
    $subject = htmlspecialchars(strip_tags(trim($_POST['subject']))); // Sanitize subject
    
    // Step 2: Validate Input Data
    if (empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($message) || empty($subject)) {
        die('All fields are required.');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email address.');
    }
    // Optional: Validate phone number format (simple check)
    if (!preg_match('/^\+?[0-9\s\-\(\)]{7,20}$/', $phone)) {
        die('Invalid phone number.');
    }

    // Step 3: Prepare Email
    $to = 'info@taystan.design'; // Replace with your email address
    $subjectEmail = 'New Contact Form Submission: ' . $subject; // Use selected subject for the email subject
    $headers = [
        'From' => $email,
        'Reply-To' => $email,
    ];
    $body = "First Name: $fname\nLast Name: $lname\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage:\n$message";

    // Step 4: Send Email
    if (mail($to, $subjectEmail, $body, $headers)) {
        // echo 'Thank you for your message. We will get back to you soon.';
        header('Location: thankyou');
        exit();
    } else {
        echo 'Sorry, something went wrong. Please try again later.';
    }
}

$secretKey = '6LfJvZIqAAAAAPrSJThO-u0mEICVADKGlNjDUqcT';
$captchaResponse = $_POST['g-recaptcha-response'];

// Make a request to Google to verify the reCAPTCHA response
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captchaResponse}");
$responseKeys = json_decode($response, true);

if ($responseKeys['success']) {
    // CAPTCHA verified; process the form
    echo "Form submitted successfully!";
} else {
    // CAPTCHA failed
    echo "Please complete the CAPTCHA.";
}

?>


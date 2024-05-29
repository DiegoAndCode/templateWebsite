<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $phone = $_POST['txtPhone'];
    $option = $_POST['rblOption'];

    // Verify if file was uploaded
    $fileUploaded = false;
    if (isset($_FILES['fileUpload']) && $_FILES['fileUpload']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['fileUpload']['tmp_name'];
        $fileName = $_FILES['fileUpload']['name'];
        $fileType = $_FILES['fileUpload']['type'];
        $fileUploaded = true;
    }

    // Basic validation
    if (empty($name) || empty($email) || empty($phone) || empty($option)) {
        header('Location: index.php?success=0');
        exit;
    }

    // e-mail configuration
    $to = 'email1@email.com';
    $email_copy = 'email2@email.com.br';
    $subject = 'Subject Example';
    $encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
    $emailsender = 'contact@email.com.br';
    $boundary = "XYZ-" . date("dmYis") . "-ZYX";

    // formatting message in HTML
    $messageBody = '<h2>Form Website.</h2>' .
        '<p><b>Name:</b><br />' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</p>' .
        '<p><b>E-mail:</b><br />' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '</p>' .
        '<p><b>Phone:</b><br />' . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . '</p>' .
        '<p><b>Option:</b><br />' . htmlspecialchars($option, ENT_QUOTES, 'UTF-8') . '</p>';

    // head configuration
    $headers = "MIME-Version: 1.0\n";
    $headers .= "From: $emailsender\n";
    $headers .= "Return-Path: $emailsender\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\n";
    $headers .= "Cc: $email_copy\n";

    // body of message
    $message = "--$boundary\n";
    $message .= "Content-Transfer-Encoding: 8bits\n";
    $message .= "Content-Type: text/html; charset=UTF-8\n\n";
    $message .= $messageBody . "\n";

    if ($fileUploaded) {
        $attachment = chunk_split(base64_encode(file_get_contents($fileTmpPath)));

        $message .= "--$boundary\n";
        $message .= "Content-Type: $fileType; name=\"$fileName\"\n";
        $message .= "Content-Disposition: attachment; filename=\"$fileName\"\n";
        $message .= "Content-Transfer-Encoding: base64\n\n";
        $message .= $attachment . "\n";
    }

    $message .= "--$boundary--";

    // Send e-mail using Postfix
    if (mail($to, $encodedSubject, $message, $headers, "-r$emailsender")) {
        header('Location: index.php?success=1');
    } else {
        error_log("Error sending e-mail.");
        header('Location: index.php?success=0');
    }
} else {
    header('Location: index.php');
}
?>

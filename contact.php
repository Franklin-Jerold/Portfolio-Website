<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $emailContent = [
        "personalizations" => [
            [
                "to" => [["email" => "franklinjerold.15@gmail.com"]],
                "subject" => "New Contact Form Message"
            ]
        ],
        "from" => ["email" => $email],
        "content" => [
            [
                "type" => "text/plain",
                "value" => "Name: $name\nEmail: $email\nMessage:\n$message"
            ]
        ]
    ];

    $apiKey = "E2EF2X189SKXY39QRH5JHRCY";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $apiKey",
        "Content-Type: application/json"
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($emailContent));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    if ($response) {
        echo "Message sent successfully!";
        header("Location: index.html");
        exit();
    } else {
        echo "Failed to send the message. Please try again.";
    }
}
?>
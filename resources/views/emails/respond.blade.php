<!DOCTYPE html>
<html>
<head>
    <title>Newsletter Subscription</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #343a40;
            color: #ffffff;
        }
        .container {
            margin-top: 50px;
        }
        .logo {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo text-center">
            <!-- Place your logo here -->
            <img src="path/to/your/logo.png" alt="Logo" width="150">
        </div>
        <div class="card bg-dark text-white">
            <div class="card-body">
                <h1 class="card-title">Thank you for subscribing to our newsletter!</h1>
                <p>Hi {{ $name }},</p>
                <p>Thank you for subscribing to our newsletter. We are excited to have you on board.</p>
                <p>We will keep you updated with the latest news and updates.</p>
                <p>If you have any questions, feel free to contact us at any time.</p>
                <p>Best regards,</p>
                <p>The Team</p>
            </div>
        </div>
    </div>
</body>
</html>
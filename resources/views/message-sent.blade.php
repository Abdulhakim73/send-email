<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .message-container {
            text-align: center;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .message-container h1 {
            color: #333;
        }

    </style>
    <script>
        // Redirect to the welcome page after 3 seconds
        setTimeout(function() {
            window.location.href = "{{ route('welcome') }}";
        }, 3000); // 5000 milliseconds = 5 seconds
    </script>
</head>
<body>
<div class="message-container">
    <h1> Message sent successfully </h1>
</div>
</body>
</html>

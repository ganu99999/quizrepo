<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>| Online Quiz System |</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="shortcut icon" type="image/png" href="image/logo.png" />
    <style>
        body {
            width: 100%;
            background: url(image/book.png);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            overflow-x: hidden; /* Hide horizontal overflow */
        }
        .intro {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        #chatbot {
            display: none; /* Initially hide the chatbot */
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            height: 500px;
            border: none;
        }
    </style>
</head>
<body>
    <center>
        <div class="intro">
            <h1>online quiz system</h1>
            <a href="login.php" class="btn">login</a> &emsp;
            <a href="register.php" class="btn">register</a>
            <button id="toggleChatbot" class="btn">Toggle Chatbot</button>
            <h2>Good Luck.</h2>
        </div>
    </center>
    <!-- Add the iframe code -->
    <iframe id="chatbot" src="https://webchat.botframework.com/embed/quizz-bot?s=3TkArRXAA48.RwvCrtZKmwjtQrkGufIc6iI2FuOGgDPxZbmrmcoqbs8"></iframe>

    <script>
        // JavaScript to toggle the visibility of the chatbot iframe
        const toggleChatbotButton = document.getElementById('toggleChatbot');
        const chatbotIframe = document.getElementById('chatbot');

        toggleChatbotButton.addEventListener('click', function() {
            if (chatbotIframe.style.display === 'none') {
                chatbotIframe.style.display = 'block';
            } else {
                chatbotIframe.style.display = 'none';
            }
        });
    </script>
</body>
</html>

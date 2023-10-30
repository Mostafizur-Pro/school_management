<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            text-align: center;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .logo {
            max-width: 150px;
        }

        h1 {
            font-size: 2.5em;
            color: #333;
        }

        p {
            font-size: 1.2em;
            color: #555;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="/">
            <img src="{{asset('fontend')}}/assets/images/logo/logo-2.png" alt="School Logo">
        </a>
        <h1>404 - Not Found</h1>
        <p>The page you are looking for does not exist.</p>
        <p>Go back to <a href="/">home</a> or contact our <a href="/contact">support team</a> for assistance.</p>
    </div>


 
</body>

</html>
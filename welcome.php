<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">

    <!-- css -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        :root {
            --primary: black;
            --second: #D9D9D9;
            --bg: white;
            --font: black;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
        }

        body {
            background-color: var(--bg);
            color: var(--font);
        }

        .container-logo {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container-logo .logo {
            font-weight: 800;
            font-size: 200px;
            color: var(--bg);
            text-shadow: 3px 3px 0 var(--primary), -3px -3px 0 var(--primary), 3px -3px 0 var(--primary), -3px 3px 0 var(--primary);
        }

        .container-logo .logo span {
            color: var(--primary);
        }
    </style>
</head>

<body>
    
    <div class="container-logo">
        <div class="logo">
            Calc<span>Trix.</span>
        </div>
    </div>
    

</body>

</html>
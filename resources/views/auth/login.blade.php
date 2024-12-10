<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Management System Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+One&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 60%;
            max-width: 1000px;
            display: flex;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        @media screen and (min-width: 768px) {
        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #F6F6F6;
            padding: 20px;
            border: none;
            border-radius: 10px;
            width: 400px;
            text-align: center;
        }

        .modal img {
            width: 100px;
            margin-bottom: 1px;
        }

        .modal h3 {
            font-family: Arial, sans-serif;
            font-weight: bold;
            color: #333;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .modal p {
            font-family: Arial, sans-serif;
            color: #666;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .modal-button {
            padding: 12px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            border: none;
            width: 100px;
        }

        .yes-button {
            background-color: #33805C;
            color: white;
        }

        .no-button {
            background-color: white;
            color: #33805C;
            border: 2px solid #33805C;
        }

        .no-button:hover {
            background-color: #f2f2f2;
        }


        .left-section,
        .right-section {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left-section {
            background-color: #f0f0f0;
            text-align: center;
        }

        .left-section h1 {
            font-size: 48px;
            color: #FFB300;
            margin-bottom: 20px;
        }

        .left-section p {
            font-size: 18px;
            color: #2E6380;
        }

        .right-section {
            text-align: center;
        }

        .logo img {
            width: 150px;
            height: auto;
            margin-bottom: 20px;
        }

        .right-section h1 {
            font-size: 35px;
            color: #33805C;
            margin: 10px 0;
        }

        .right-section h2 {
            font-size: 20px;
            color: #FFB300;
            margin: 10px 0 20px 0;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 14px;
        }

        .input-container {
            width: 100%;
            max-width: 300px;
            margin-bottom: 20px;
        }

        .input-container label {
            display: block;
            font-weight: bold;
            text-align: left;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        .input-container input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .login-form button {
            font-size: 16px;
            color: #fff;
            background-color: #FFB300;
            border: none;
            padding: 12px 8px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            max-width: 150px;
            font-family: 'Rubik One', sans-serif;
        }

        .login-form button:hover {
            background-color: #e0a800;
        }

        footer {
            text-align: center;
            font-size: 12px;
            color: #aaa;
            margin-top: 20px;
            width: 100%;
            position: absolute;
            bottom: 10px;
        }
    }


    </style>
</head>

<body>
    <div class="container">
        <div class="left-section">
            <h1>Login</h1>
            <p>Enter your credentials to access the system</p>
        </div>
        <div class="right-section">
            <div class="logo">
                <img src="<?php echo asset('images/LOALOA.png'); ?>" alt="College of Computer Studies" style="height: 200px; width: 200px;">
            </div>
            <h1>Lyceum of Alabang</h1>
            <h2>Document Management System</h2>

            <form method="POST" class="login-form" action="{{ route('login') }}">
                @csrf

                <div class="input-container">
                    <label for="email">Email</label>
                    <input type="email" id="username" name="email" placeholder="Enter your email" :value="__('Email')" required autofocus autocomplete="username" >
                </div>
                <div class="input-container">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required autofocus autocomplete="password">
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="alertModal" class="modal">
        <div class="modal-content">
            <img src="<?php echo asset('images/warning.png'); ?>" alt="Warning">
            <h3>Login Fail</h3>
            <p id="alertMessage">Incorrect email or password!</p>
            <div class="button-container">
                <button class="modal-button yes-button" onclick="closeModal()">OK</button>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2024 Lyceum of Alabang. All Rights Reserved.</p>
    </footer>
</body>

</html>

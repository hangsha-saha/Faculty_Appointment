<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="./img/login.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .registration-form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"] {
            width: 85%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .registration-form {
            border: 1px solid #ccc;
        }

        .form-group input[type="text"]:focus {
            border-color: #4CAF50;
        }

        #mybutton {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            display: block;
            margin: 0 auto;
            transition: background-color 0.3s ease;
        }

        #mybutton:hover {
            background-color: #3e8e41;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #4CAF50;
            color: white;
        }

        .navbar a.active {
            background-color: #4CAF50;
            color: white;
        }

        .navbar {
            display: flex;
            justify-content: center;
        }

        .navbar a {
            margin: 0 10px;
        }


        .navbar a.active {
            border-bottom: 2px solid white;
        }

        @media screen and (max-width: 600px) {
            .navbar {
                flex-direction: column;
            }

            .navbar a {
                margin: 5px 0;
            }
        }

    </style>
</head>

<body>
    <div class="navbar">
        <a href="./appointment.php">Book Appointment</a>
        <a href="./f_view.php">Faculty Members</a>
        <a href="./std_view.php">Student Details</a>
        <a href="./show_app.php">Appointment Details</a>
    </div>
    <h3></h3>
    <div class="registration-form">

        <form method="post" action="login_data.php" autocomplete="off">

            <div class="form-group">
                <label for="roll">Roll:<sup style="color:red">*</sup></label>
                <input type="text" id="roll" name="roll" placeholder="Enter Your Roll Number" required>
            </div>

            <div class="form-group">
                <button type="submit" id="mybutton">Login</button>
            </div>
        </form>
    </div>

</body>

</html>
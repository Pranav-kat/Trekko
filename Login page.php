<?php
$error = false;
if (isset($_POST['login'])) {
    $username = preg_replace('/[^A-Za-z]/', '', $_POST['email']);
    $password = md5($_POST['password']);
    if (file_exists('users/' . $username . '.xml')) {
        $xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
        if ($password == $xml->password) {
            session_start();
            $_SESSION['email'] = $username;
            header('Location:home page.php');
            die;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trek Tour Travel</title>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/128/619/619010.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="ajaxlink.js"></script>
</head>

<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>


        <div class="box">
            <br><br>
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>Login Form</h2>
                    <form method="post" action="">
                        <div class="inputBox">
                            <input type="text" name="email" id="email" class="first" placeholder="Email ID" />

                            <br><br>
                            <input type="password" id="password" name="password" class="pass" placeholder="Password" autocomplete="off">
                            <?php
                            if ($error) {
                                echo '<p> Invalid Email or password </p>';
                            }
                            ?>
                            <br><br>
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>
                        <p class="forget">Forgot Password? &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="http://google.com">Click Here</a>
                        </p>
                        <p class="forget"> Create a new account &nbsp;&nbsp;
                            <a href="registration form.php">Sign Up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
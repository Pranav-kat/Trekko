<?php
$errors = array();
if (isset($_POST['submit'])) {
    $username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if (file_exists('users/' . $username . '.xml')) {
        $errors[] = "Username already exists";
    }
    if ($username == "") {
        $errors[] = "Username is empty";
    }
    if ($email == "") {
        $errors[] = "Email is empty";
    }
    if ($password == "" || $repassword == "") {
        $errors[] = "Password is empty";
    }
    if ($password != $repassword) {
        $errors[] = "Password dont match";
    }
    if (count($errors) == 0) {
        $xml = new SimpleXMLElement('<user></user>');
        $xml->addChild('password', md5($password));
        $xml->addChild('email', $email);
        $xml->asXML('users/' . $username . '.xml');
        header('Location: Login page.php');
        die();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Trek Tour Travel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/128/619/619010.png">
    <link rel="stylesheet" type="text/css" href="hstyle.css">
</head>

<body style="background-image: url( 'https://images.pexels.com/photos/358457/pexels-photo-358457.jpeg?auto=compress&cs=tinysrgb&w=600'); border-image-width: 2;">
    <header style=" background-color:rgb(216, 255, 162)">
        <div class="container">
            <div class="col-div-67">
                <img src="mountain.png" height="35px " alt=" "><br><br>
                <p class="logo" style="color:rgb(255, 136, 0)"><span>TREKK</span>O</p>
                <!-- main name -->
            </div>
            <div class="col-div-678">
                <ul class="nav">
                    <li><a href="home page.php">Home</a></li>
                    <li><a href="login page.php">Login</a></li>
                    <!-- <li><a href="">Join|Host</a></li> -->
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </header>
    <div style="align-items:center; padding-top:2rem;">
        <div style="background-color:rgb(242, 248, 244); border:rgb(168, 78, 252);border-style: dashed; border-width:2.1px; width:65%; padding:3%;padding-bottom:5%; padding-left:5rem; padding-top:2rem; margin-left:11rem; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:14; font-weight:600; color:rgb(14, 49, 146);background-image: url( 'https://img.freepik.com/free-vector/hand-painted-watercolor-nature-background_23-2148941600.jpg?w=740&t=st=1659246809~exp=1659247409~hmac=c945ca9fb8386debdb530110acc18322ea7961846fe84bd8b9f84ec451cea267')">
            <b>
                <h1 style="text-align:center; color:rgba(157, 0, 255, 0.86);">Registration Form</h1>
            </b><br>

            <form action="" method="post" name="reg_form">

                <div class="register"><label style="font-size:32" for="firstname">First name:</label>
                    <input type="text" id="firstname" name="username" placeholder="First name"><br><br>


                    <label for="lastname">Last name:</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Last name"><br><br>
                </div>

                <div class="ph"><label for="phone">Phone: &nbsp&nbsp&nbsp&nbsp&nbsp</label>
                    <select id="country_code" name="code">
                        <option value="IND">+91</option>
                        <option value="NPL">+961</option>
                        <option value="SNP">+966</option>
                        <option value="UAE">+977</option>


                        <input type="tel" name="phone" size="10" placeholder="9678854328" pattern="[0-9]{10}" title="Must contain 10 digits" /> <br> <br>

                        <label for="email">Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                        <input type="email" id="email" name="email" placeholder="abc@gmail.com" /> <br> <br>
                </div>

                <label for="gender">Gender:</label><br>
                <input type="radio" id="gender" name="male" /> Male
                <input type="radio" id="gender" name="female" /> Female
                <input type="radio" id="gender" name="other" /> Other
                <br> <br>

                <label for="birthday">Birthday: </label>
                <input type="date" id="birthday" name="birthday">
                <br> <br>




                <label for="add">Address: </label> <br>
                <textarea id="add" name="add" rows="5" cols="50" placeholder="House Number, Street, Town, State, Country"></textarea><br> <br>


                <label for="uniname"> University: &nbsp &nbsp &nbsp &nbsp </label>
                <input type="text" id="uniname" name="uniname" placeholder="College name"><br><br>

                <label for="ld">LinkedIn Profile: </label>
                <input type="url" id="ld" name="ld" placeholder="LinkedIn Profile"><br><br>

                <label for="gh">Github Profile: &nbsp</label>
                <input type="url" id="gh" name="gh" placeholder="Github Profile"><br><br>


                <label for="course">Course :</label>
                <select id="course" name="course">
                    <option value="Course">Course</option>
                    <option value="BCA">BCA</option>
                    <option value="BSC">BSC</option>
                    <option value="BBA">BBA</option>
                    <option value="B.Tech">B.Tech</option>
                    <option value="MBA">MBA</option>
                    <option value="MCA">MCA</option>
                    <option value="M.Tech">M.Tech</option>
                    <option value="PhD">PhD</option>
                </select>
                <br><br>

                <label for="branch">Branch :</label>
                <select id="branch" name="branch">
                    <option value="Branch">Branch</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Chemical Engineering">Chemical Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                </select>
                <br><br>

                <label for="hobby">Hobbies:</label> <br> Cycling &nbsp &nbsp&nbsp&nbsp
                <input type="checkbox" name="Hobby_Cycling" value="Cycling" /><br> Swimming
                <input type="checkbox" name="Hobby_Swimming" value="Swimming" style="margin-right: 100px" /><br> Dancing &nbsp&nbsp&nbsp
                <input type="checkbox" name="Hobby_Dancing" value="Dancing" /><br> Cooking &nbsp&nbsp&nbsp
                <input type="checkbox" name="Hobby_Cooking" value="Cooking" /><br>Skating &nbsp &nbsp&nbsp
                <input type="checkbox" name="Hobby_Skating" value="Skating" /><br> Others &nbsp &nbsp &nbsp
                <input type="checkbox" name="Hobby_Other" value="Other">
                <input type="text" name="Other_Hobby" />
                <br> <br>

                <label for="myPhoto">Upload photo:</label> <br>
                <input type="file" id="myPhoto" name="photoname">
                <br><br> Password:&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <input type="Password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at
                least one number and one uppercase and lowercase letter, and at least 8
                or more characters" style="margin-right: 10px" />
                <br> <br> Confirm password: &nbsp
                <input type="Password" id="repassword" name="repassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at
                least one number and one uppercase and lowercase letter, and at least 8 or more characters"> <br><br>
                <br><br>

                <input type="submit" value="Submit" name="submit" style=" background-color: #c6f2b8;
            color: rgba(4, 95, 1, 0.979);
            font-size :16px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight:bold;
            width: 100px;
            height: 30px;
            text-align: center;
            cursor: pointer;
            border: 2px solid #2c974b;
          "> &nbsp; &nbsp &nbsp &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="reset" style=" background-color: #f6e3c7;
          color: #f14107;
          font-size :16px;
          font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          font-weight:bold;
          width: 100px;
          height: 30px;
          text-align: center;
          cursor: pointer;
          border: 2px solid #f14107;
        ">
        </div>
    </div>
    </form>
    <script src="script.js"></script>
</body>

</html>
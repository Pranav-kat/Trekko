

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Trek Tour Travel</title>
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/128/619/619010.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="hstyle.css" />
    <link rel="stylesheet" type="text/css" href="jstyle.css" />
</head>
<style type="text/css">
    .ff {
        background-image: url('img/grass.jpg');
    }
    
    .ff h1 {
        text-align: center;
        color: white;
        /* text-decoration: underline white; */
    }
</style>

<body>
    <header style=" background-color:rgb(216, 255, 162)">
        <div class="container">
            <div class="col-div-67">
                <img src="mountain.png" height="35px " alt=" "> <br><br>
                <p class="logo" style="color:rgb(255, 136, 0)"><span>TREKK</span>O</p>
                <!-- main name -->
            </div>
            <div class="col-div-678">
                <ul class="nav">
                    <li><a href="home page.php">Home</a></li>
                    <li><a href="login page.php">Login</a></li>
                    <li><a href="Registration Form.php">Sign Up</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </header>
    <div class="ff"><br>
        <br>
        <h1>JOIN US</h1>
        <section class="contact-page-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marked"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>UTTARAKHAND </h2>
                                    <span>RUPIN PASS TREK </span>
                                    <span>21 - 29 August 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>LADAKH</h2>
                                    <span>Markha Valley Trek</span>
                                    <span>02 - 09 September 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>HIMACHAL PRADESH</h2>
                                    <span>Beas Kund Trek</span>
                                    <span>15 - 25 August 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marked"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>UTTARAKHAND </h2>
                                    <span>RUPIN PASS TREK </span>
                                    <span>21 - 29 August 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>LADAKH</h2>
                                    <span>Markha Valley Trek</span>
                                    <span>02 - 09 September 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h2>HIMACHAL PRADESH</h2>
                                    <span>Beas Kund Trek</span>
                                    <span>15 - 25 August 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-page-form">
                            <h1> </h1>
                            <form method="post" action="xmlconnect.php">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="text" name="name" placeholder="Your Name" id="txt" onkeydown="myTxt()" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="email" name="email" placeholder="E-mail" id="email" onkeydown="myMail()" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="text" name="phone" placeholder="Phone Number" id="phone" onkeydown="myPhone()" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="text" name="venue" placeholder="Venue" id="venue" onkeydown="myVenue()" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="number" name="charge" placeholder="Estimated Trekking Charges" id="price" onkeydown="myPrice()" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-12 message-input">
                                        <div class="single-input-field">
                                            <textarea name="details" placeholder="Trek Details: Date, Time, Duration" id="details" onkeydown="myDetails()"></textarea>
                                        </div>
                                    </div>
                                    <div class="single-input-fieldsbtn">
                                        <input type="submit" name="add_event" value="Start Adventure" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
    <div class="container ">
<p>Made with 💖 by TREKKO</p>
</div>
    </footer>
    <script src="script.js"></script>
</body>

</html>
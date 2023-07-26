



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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body onload="loadPage()" style="background-image: url('img/grass.jpg');">
    <header style=" opacity: 1; background-color:rgb(216, 255, 162) ">
        <div class="container ">
            <div class="col-div-67 ">
                <img src="mountain.png" height="35px " alt=" "> <br><br>
                <p class="logo " style="color:rgb(255, 136, 0) "><span>TREKK</span>O</p>
            </div>
            <div class="col-div-678 ">
                <ul class="nav">
                    <li><a href="home page.php ">Home</a></li>
                    <li><a href="Registration form.php ">Register</a></li>
                    <li><a href="join.php ">Join|Host</a></li>
                    <li><a href="Logout page.php">Logout</a></li>
                </ul>
            </div>
            <div class="clearfix "></div>
        </div>
    </header>
    <section class="banner-section ">
        <div class="container ">
            <div class="col-div-6 ">
                <h1 class="heading ">A place where you can host <br> & join amazing adventures</h1><br><br><br><br><br><br><br><br><br>
                <a href="join.php "><button class="btn-1 ">Join now</button></a>
            </div>
            <div class="col-div-6 ">
                <br><br><br><br>
                <div style="text-align: center; "> </div>
            </div>
            <div class="clearfix "></div>
        </div>
    </section>
    <section>
        <div class="container ">
            <br><br>
            <div class="col-div-6 ">
                <div class="box-1 ">
                    <div style="text-align:center"><img id="img" onclick="myFun()" src="img/himalayas.jpg" class="b-img "></div>
                    <h3 class="heading1 ">Trek of the Year</h3>
                    <p class="blog-heading ">Perfect Location For Trekking - HIMALAYAS
                    </p>
                    <p class="text ">The Himalayas, or Himalaya, are a mountain range in Asia, separating the plains of the Indian subcontinent from the Tibetan Plateau. The range has some of the planet's highest peaks, including the very highest, Mount Everest. Over
                        100 peaks exceeding 7,200 m in elevation lie in the Himalayas.</p>

                </div>
            </div>
            <div class="col-div-6 ">
                <div class="lr-box ">
                    <div class="col-div-6 ">
                        <h3 class="heading1 ">NEPAL</h3>
                        <p class="blog-heading-1 ">Manasarovar Lake
                        </p>
                        <p class="text ">Lake Manasarovar and Mount Kailash are believed to be the abode of Shiva. This is where the holy river the Ganges is believed to be tamed by Shiva and sent to nourish the fertile valleys below the Himalayas. </p>
                    </div>
                    <div class="col-div-6 ">
                        <img src="img/manasarovar.jpg" class=" b-img-1 ">
                    </div>
                    <div class="clearfix "></div>
                    <hr class="line ">
                </div>
                <div class="lr-box ">
                    <div class="col-div-6 ">
                        <h3 class="heading1 ">LADAKH</h3>
                        <p class="blog-heading-1 ">A place for Mental Peace
                        </p>
                        <p class="text ">Walking on the ice-covered river of Zanskar is an ultimate experience for adventurers who are keen to enjoy trekking in the Ladakh Himalayas. </p>
                    </div>
                    <div class="col-div-6 ">
                        <img src="img/ladakh.jpg" class="b-img-1 ">
                    </div>
                    <div class="clearfix "></div>
                    <hr class="line ">
                </div>
                <div class="lr-box ">
                    <div class="col-div-6 ">
                        <h3 class="heading1 ">UTTARAKHAND</h3>
                        <p class="blog-heading-1 ">Valley of Flowers Trek</p>
                        <p class="text ">One of the best trekking tours in India, the Valley of Flowers trek in Uttarakhand takes you to the UNESCO world heritage site and also the Sikh pilgrimage site of Hemkund Sahib. </p>
                    </div>
                    <div class="col-div-6 ">
                        <img src="img/flowervalley.jpg" class="b-img-1 ">
                    </div>
                    <div class="clearfix "></div>
                    <hr class="line ">
                </div>
            </div>
            <div class="clearfix "></div>
        </div>
    </section>
    <br><br>
    <section>
        <div class="container " style="text-align:center; ">
            <h2><?php echo $_COOKIE[$cookie_name]; ?></h2>
            <br>
            <div class="box-2 ">
                <img src="img/Rajmachi.jpg" class="b-img-1 ">
                <h3 class="heading1 ">MAHARASHTRA</h3>
                <p class="blog-heading-1 ">Rajmachi Trek
                </p>
                <p class="text ">Rajmachi Fort Trek is one of the many historical forts in the rugged hills of Sahyadri mountains (Western Ghats).</p>
            </div>
            <div class="box-2 ">
                <img src="img/Sandakphu.jpg" class="b-img-1 ">
                <h3 class="heading1 ">WEST BENGAL</h3>
                <p class="blog-heading-1 ">Sandhakphu Trek
                </p>
                <p class="text ">Sandakphu Phalut Trek is one of the few treks on earth from which you can see 8,000-meter peaks. </p>
            </div>
            <div class="box-2 ">
                <img src="img/parvati.jpg" class="b-img-1 ">
                <h3 class="heading1 ">HIMACHAL PRADESH</h3>
                <p class="blog-heading-1 ">Pin Parvati Pass Trek
                </p>
                <p class="text ">The Pin Parvati trek starts at Kaza, a beautiful town along the Spiti River river. Snow capped ranges and clear streams surround the town.</p>
            </div>
            <div class="clearfix "></div>

            <div class="clearfix "></div>
        </div>
    </section>
    <?php if (isset($_REQUEST['info'])) {
        if ($_REQUEST['info'] == "added") {
            echo '<script>alert("New Trek Adventure Added")</script>';
        } else if ($_REQUEST['info'] == "updated") {
            echo '<script>alert("Adventure Event Updated")</script>';
        } else if ($_REQUEST['info'] == "deleted") {
            echo '<script>alert("Adventure Event Deleted")</script>';
        }
    } ?>
    <div class="row" style="width:80%; text-align: center; margin-left:10%;">
        <?php foreach ( $query as $q) { ?>
            <div class="col-12 col-lg-4 d-flex justify-content-center">
                <div class="card" style="width:25rem;background: rgb(10, 37, 16);
    padding: 30px 0px;  color: #fff;
    font-size: 16px;
    display: inline-block;
    width: 100%;
    cursor: pointer;
    opacity: 0.75;">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $q['venue'];
                                                ?></h3>
                        <h5><p class="card-text"><?php echo "Host: " .
                                                    $q['name']; ?></p></h5>
                        <p class="card-text"><?php
                                                    echo $q['phone']; ?></p>
                        <!-- <p class="card-text"><?//php echo $q['details']; ?></p> -->
                        <p class="card-text"><?php echo
                                                substr($q['details'], 0, 50); ?>...</p>
                        <a href="viewpage.php?id=<?php echo $q['id'] ?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <br>
    <section class="foot-section ">
        <div class="container ">
            <div class="foot-inner ">
                <h2 class="heading" style="color: #fff;"><?php echo $cookie_name." the adventures now!!!"; ?></h2>
                <div class="input-box ibox2 ">
                    <a href="Registration Form.php "><button>Sign up</button></a>
                </div>
                <br><br>
            </div>
        </div>
    </section>
    <footer>
    <div class="container ">
<p>Made with 💖 by TREKKO</p>
</div>
    </footer>
    <script src="script.js"></script>
</body>


</html>
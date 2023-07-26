<?php
include "configure.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="bstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css
" integrity="sha384-
JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body style="background-image: url('img/grass.jpg');">
    <div class="container mt-5" style="background: rgb(10, 37, 16);cursor: pointer;
    opacity: 0.75;">
        <?php foreach ($query as $q) { ?>
            <div class="bg-green p-5 rounded-lg text-white text-center">
                <h1><?php echo $q['venue']; ?></h1>
                <div class="d-flex mt-2 justify-content-center align-items-center">
                    <a href="editpage.php?id=<?php echo $q['id'] ?>" class="btn btn-success" name="edit">Edit Event</a>
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id'] ?>' name="id"> &nbsp; &nbsp;
                        <button class="btn btn-danger" name="delete">Delete Event</button>
                    </form>
                </div>
            </div>
            <h5>
                <p class="mt-2 border-left text-white border-dark pl-3"><?php echo "Name: 
" . $q['name']; ?></p>
                <p class="mt-2 border-left text-white border-dark pl-3"><?php echo "Email ID: 
" . $q['email']; ?></p>
                <p class="mt-2 border-left text-white border-dark pl-3"><?php echo
                                                                        "Phone: " . $q['phone']; ?></p>
                <p class="mt-2 border-left text-white border-dark pl-3"><?php echo "Charges: ₹ 
" . $q['charge']  . " /-"; ?></p>
                <p class="mt-5 border-left text-white border-dark pl-3"><?php echo
                                                                        $q['details']; ?></p>
            </h5>
        <?php } ?>
        <br>
        <a href="home page.php" class="btn btn-success">Go Home</a><br>
        <br>
    </div>
    <footer style="
    position: fixed;
    bottom: 0;
    background: #145e0d;
    padding: 0px;
    width: 100%; color: white;
    text-align: center;">
        <div class="container ">
            <p><?php echo $_SESSION["tagline"] ?></p>
        </div>
    </footer>
</body>

</html>
<?php
include "configure.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css
" integrity="sha384-
JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title></title>
</head>

<body style="background-image: url('img/grass.jpg');">
    <div class="container mt-5" style="background: rgb(10, 37, 16);cursor: pointer;
    opacity: 0.75;">
        <?php foreach ($query as $q) { ?>
            <form method="POST">
                <br>
                <input type="text" hidden value='<?php echo $q['id'] ?>' name="id">
                <label for="phone" style="color:white; justify-content: center;"> Tourist Destination: </label>
                <br>
                <input type="text" style="background: #f9f9f9;
    opacity: 0.95;
    border: 1px solid #f9f9f9; 
    color: black;
    font-size:large;
    text-align: center;
    margin-bottom:5px;
    width:100%;
    padding: 12px 16px;
    border-radius: 4px;" placeholder="Venue" name="venue" value="<?php echo $q['venue'] ?>" required>
                <label for="phone" style="color:white; justify-content: center;"> Host Details: </label>
                <br>
                <input type="text" style="background: #f9f9f9;
    opacity: 0.95;
    border: 1px solid #f9f9f9; 
    color: black;
    font-size:large;
    text-align: center;
    margin-bottom:5px;
    width:25%;
    padding: 12px 16px;
    border-radius: 4px;" placeholder="Name" name="name" value="<?php echo $q['name'] ?>" required>
                <input type="text" style="background: #f9f9f9;
    opacity: 0.95;
    border: 1px solid #f9f9f9; 
    color: black;
    font-size:large;
    text-align: center;
    margin-bottom:5px;
    width:49%;
    padding: 12px 16px;
    border-radius: 4px;" placeholder="Email" name="email" value="<?php echo $q['email'] ?>" required>
                <input type="text" style="background: #f9f9f9;
    opacity: 0.95;
    border: 1px solid #f9f9f9; 
    color: black;
    width:25%;
    font-size:large;
    text-align: center;
    margin-bottom:5px;
    padding: 12px 16px;
    border-radius: 4px;" placeholder="Phone Number" name="phone" value="<?php echo $q['phone'] ?>" required>
                <label for="phone" style="color:white; justify-content: center;"> Travel Charges: (in ₹ ) </label>
                <br>
                <input type="number" placeholder="Charge" style="background: #f9f9f9;
    opacity: 0.95;
    border: 1px solid #f9f9f9; 
    color: black;
    font-size:large;
    width:100%;
    text-align: center;
    margin-bottom:5px;
    padding: 12px 16px;
    border-radius: 4px;" name="charge" value="<?php echo $q['charge'] ?>" required>
                <label for="phone" style="color:white; justify-content: center;"> Location Details: </label>
                <br>
                <textarea style="background: #f9f9f9 none repeat scroll 0 0;
    opacity: 0.95;
    border: 1px solid #f9f9f9;
    width: 100%;
    color: black;
    font-size:large;
    height: 150px;
    padding: 12px 16px;
    border-radius: 4px;" placeholder="Description" name="details" cols="30" rows="10" required><?php echo $q['details'] ?></textarea>
                <br><br>
                <button class="btn btn-success" name="update">Update</button>
                <br>
            </form>
            <br>
        <?php } ?>
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

</html
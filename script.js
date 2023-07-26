function userLogin() {
    var uname = document.getElementById("username").value;
    var pwd = document.getElementById("password").value;
    var filter =
        /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var pasfil = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
    if (uname == "") {
        alert("Please enter user name.");
    } else if (pwd == "") {
        alert("Enter the password");
    } else if (!filter.test(uname)) {
        alert("Enter valid email id.");
    } else if (!pasfil.test(pwd)) {
        alert(
            "Password should be between 7 to 15 characters with at least one number,special character and alphabets."
        );
    } else {
        alert("Thank You for Login");
    }
}

function validate() {
    var fname = document.reg_form.firstname;
    var lname = document.reg_form.lastname;
    var address = document.reg_form.add;
    var email = document.reg_form.email;
    var int = document.reg_form.branch;
    var password1 = document.reg_form.password;
    var password2 = document.reg_form.repassword;
    if (fname.value.length <= 0) {
        alert("Name is required");
        fname.focus();
        return false;
    }
    if (lname.value.length <= 0) {
        alert("Last Name is required");
        lname.focus();
        return false;
    }
    if (email.value.length <= 0) {
        alert("Enter valid email id.");
        email.focus();
        return false;
    }
    if (add.value.length <= 0) {
        alert("Address is required");
        add.focus();
        return false;
    }
    if (int.value == "Branch") {
        alert("Branch is required");
        int.focus();
        return false;
    }
    var pasfil = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
    if (password1.value != password2.value) {
        alert("Password must match");
        return false;
    } else {
        alert("Thank you for registering");
    }
}

function loadPage() {
    alert("✨✨ Welcome to TREKKO ✨✨");
}
document.getElementById("demo").addEventListener("mouseover", mouseOver);
document.getElementById("demo").addEventListener("mouseout", mouseOut);

function mouseOver() {
    document.getElementById("demo").style = "opacity:0.5; cursor:pointer;";
}

function mouseOut() {
    document.getElementById("demo").style = "opacity:1;";
}


function myTxt() {

    document.getElementById("txt").style = "background-color: black; color: white;";
}

function myMail() {

    document.getElementById("email").style = "background-color: black; color: white;";
}

function myPhone() {

    document.getElementById("phone").style = "background-color: black; color: white;";
}

function myVenue() {

    document.getElementById("venue").style = "background-color: black; color: white;";
}

function myPrice() {

    document.getElementById("price").style = "background-color: black; color: white;";
}

function myDetails() {

    document.getElementById("details").style = "background-color: black; color: white;";
}


function myFun() {
    document.getElementById("img").src = "https://images.unsplash.com/photo-1571401835393-8c5f35328320?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8aGltYWxheWFzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60";
}

/*var image = document.getElementById("img");
    if (image.src.match())*/
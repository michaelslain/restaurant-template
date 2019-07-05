<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
<meta content="width=device-width, initial-scale=1" name="viewport">
<title>The Fresh Way</title>
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
        border: 0;
    }
    html {
        animation: fadein 0.5s ease;
    }
    @keyframes fadein {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    header {
        width: 100%;
        height: 10vh;
        line-height: 10vh;
        position: fixed;
        background: white;
        z-index: 3;
        top: 0;
    }
    .logo {
        margin-left: 18%;
        width: 4%;
        margin-top: 2vh;
    }
    .tab {
        font-family: 'Varela Round', sans-serif;
        float: right;
        margin-right: 2em;
        font-size: 0.7vw;
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .tab:hover {
        color: #f46b42;
    }
    .tab.right {
        margin-right: 18%;
    }
    .main {
        position: absolute;
        width: 90%;
        height: 82vh;
        left: 5%;
        top: 10vh;
        background: url("images/contact.jpg") center center no-repeat;
        background-size: cover;
    }
    h1 {
        font-family: 'Amatic SC', cursive;
        position: absolute;
        color: white;
        letter-spacing: 0.05em;
        font-size: 3vw;
        width: 100%;
        text-align: center;
        top: 5vh;
    }
    form {
        position: absolute;
        left: 30vw;
        bottom: 30vh;
        height: 32vh;
        width: 30vw;
    }
    .form-content {
        position: absolute;
        font-size: 0.7vw;
    }
    .box {
        height: 5vh;
        width: 46%;
        padding-left: 2%;
    }
    .name {
        left: 0;
        top: 0;
    }
    .mail {
        right: 0;
        top: 0;
    }
    .comment {
        left: 0;
        top: 7vh;
        width: 98%;
        padding-top: 1vh;
        height: 19vh;
        resize: none;
    }
    .button {
        width: 15%;
        height: 3vh;
        background: white;
        text-align: center;
        line-height: 3vh;
        color: rgba(0,0,0,0.7);
    }
    .button:hover {
        background: lightgrey;
    }
    .send {
        left: 0;
        bottom: 0;
    }
    .reset {
        left: 18%;
        bottom: 0;
    }
    .error {
        position: absolute;
        font-family: 'Varela Round', sans-serif;
        color: rgb(231, 75, 75);
        font-size: 0.7vw;
        font-weight: bold;
    }
    .name-error {
        top: 5.4vh;
        left: 0;
    }
    .mail-error {
        top: 5.4vh;
        left: 52%;
    }
    .form-error {
        bottom: 3.1vh;
        left: 0;
    }
    @media only screen 
    and (max-width: 1024px)
    and (orientation: portrait) {
        header {
            background: white;
            text-align: center;
            line-height: 10vh;
        }
        .logo {
            margin-left: 0;
            height: 3vh;
            width: auto;
        }
        .tab {
            display: none;
        }
        .mobile-nav{
            display: none;
            position: absolute;
            width: 100%;
            height: 90vh;
            top: 7vh;
            background: white;
            opacity: 0;
            z-index: 3;
        }
        @keyframes fadein {
            0% {
                opacity: 0;
                display: none;
            }
            100% {
                opacity: 1;
                display: block;
            }
        }
        @keyframes fadeout {
            0% {
                opacity: 1;
                display: block;
            }
            100% {
                opacity: 0;
                display: none;
            }
        }
        .mobile-tab {
            text-decoration: none;
            color: black;
            width: 100%;
            text-align: center;
            display: block;
            line-height: 3em;
            font-size: 1.8vw;
        }
        .mobile-tab.top {
            margin-top: 5em;
        }
        h1 {
            font-size: 5vw;
            top: 10vh;
        }
        form {
            width: 90%;
            left: 5%;
            top: 25vh;
        }
        .form-content {
            font-size: 2vw;
        }
        .error {
            font-size: 2vw;
        }
    }
    @media only screen
    and (max-width: 414px) 
    and (orientation: portrait) {
        .logo {
            height: 7vw;
        }
        .mobile-tab {
            font-size: 3vw;
        }
        h1 {
            font-size: 8vw;
        }
        .form-content {
            font-size: 3vw;
        }
        .error {
            font-size: 2.5vw;
        }
        .mail-error {
            left: 55%;
        }
    }
</style>
</head>
<header>
    <img src="images/logo.svg" class="logo">
    <a class="tab right">CONTACT</a>
    <a class="tab" href="gallery.php">GALLERY</a>
    <a class="tab" href="menu.php">MENU</a>
    <a class="tab" href="about.php">ABOUT</a>
    <a class="tab" href="index.php">HOME</a>
</header>
<body>
    <div class="main">
        <h1>Feel free to contact us.</h1>
        <form>
            <input class="form-content box name" type="text" name="name" placeholder="Name"><br>
            <p class="error name-error"></p>
            <input class="form-content box mail" type="text" name="mail" placeholder="Email"><br>
            <p class="error mail-error"></p>
            <textarea class="form-content box comment" type="text" name="comment" placeholder="Comment"></textarea><br><br>
            <p class="error form-error"></p>
            <a class="form-content button send">Send</a>
            <a class="form-content button reset">Reset</a>
        </form>
    </div>
    <div class="mobile-nav">
        <a class="mobile-tab top" href="index.php">HOME</a>
        <a class="mobile-tab" href="about.php">ABOUT</a>
        <a class="mobile-tab" href="menu.php">MENU</a>
        <a class="mobile-tab" href="gallery.php">GALLERY</a>
        <a class="mobile-tab" style="color:#f46b42;">CONTACT</a>
    </div>
    <script>
        let send = document.querySelector(".send");
        let reset = document.querySelector(".reset");
        let name = document.querySelector(".name");
        let mail = document.querySelector(".mail");
        let comment = document.querySelector(".comment");
        let nameError = document.querySelector(".name-error");
        let mailError = document.querySelector(".mail-error");
        let formError = document.querySelector(".form-error");

        reset.addEventListener("click", function() {
            name.value = "";
            mail.value = "";
            comment.value = "";
        });

        function validate() {
            let emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(mail.value.match(emailformat)) {
                return true;
            }
            else {
                return false;
            }
        }

        send.addEventListener("click", function() {
            nameError.innerHTML = "";
            mailError.innerHTML = "";
            formError.innerHTML = "";

            if(name.value.length >= 5 && validate() && comment.value.length >= 20) {
                var params = "name=" + name.value + "&email=" +  mail.value + "&comment=" + comment.value;

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "mail.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xhr.onload = function() {
                    if(this.status == 200) {
                        formError.innerHTML = "<font color='limegreen'>Email Sent. Thank you.</font>";
                    }
                    else {
                        formError.innerHTML = "Error:" + this.status + ". There has been a connection error.";
                    }
                }

                xhr.send(params);
            }
            else {
                if(name.value.length < 5) {
                    nameError.innerHTML = "Name must be at least 5 characters.";
                }
                if(validate() == false) {
                    mailError.innerHTML = "Email is invalid.";
                }
                if(comment.value.length < 20) {
                    formError.innerHTML = "Message must be at least 20 characters.";
                }
            }
        });

        var toggle = true;
        let logo = document.querySelector(".logo");
        let nav = document.querySelector(".mobile-nav");
        logo.addEventListener("click", function() {
            if(window.innerHeight > window.innerWidth) {
                if(toggle == true) {
                    nav.style.animation = "fadein 0.1s ease-in-out";
                    setTimeout(function() {
                        nav.style.opacity = 1;
                        nav.style.display = "block";
                    }, 100);
                }
                if(toggle == false) {
                    nav.style.animation = "fadeout 0.1s ease-in-out";
                    setTimeout(function() {
                        nav.style.opacity = 0;
                        nav.style.display = "none";
                    }, 100);
                }
                toggle = ! toggle;
            }
        });
    </script>
</body>
</html>
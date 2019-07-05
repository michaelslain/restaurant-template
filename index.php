<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
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
        .hero {
            position: absolute;
            width: 40%;
            left: 10%;
            top: 10vh;
            height: 80vh;
        }
        h1 {
            font-family: 'Sue Ellen Francisco', cursive;
            letter-spacing: 0.08em;
            left: 15%;
            position: absolute;
            top: 15vh;
            font-size: 5vw;
        }
        h2 {
            font-family: 'Amatic SC', cursive;
            width: 60%;
            position: absolute;
            left: 16.5%;
            top: 30vh;
            line-height: 2em;
            letter-spacing: 0.05em;
            font-size: 1.4vw;
        }
        .reserve {
            font-family: 'Amatic SC', cursive;
            height: 3vh;
            width: 17%;
            font-size: 1.4vw;
            text-align: center;
            line-height: 3vh;
            padding: 0.6vw;
            border-radius: 5px;
            border-color: #f46b42;
            border-width: 0.3vw;
            border-style: solid;
            position: absolute;
            left: 16.5%;
            top: 42.5vh;
            transition: border 0.2s ease;
            letter-spacing: 0.05em;
            font-weight: bold;
        }
        .reserve:hover {
            border-color: rgba(0,0,0,0.2);
        }
        .img {
            position: absolute;
            width: 40%;
            top: 10vh;
            right: 10%;
            height: 80vh;
            background: url(images/background.jpg);
            background-size: cover;
        }
        .socials {
            position: absolute;
            top: 52vh;
            left: 16.5%;
            width: inherit;
        }
        .socials-mobile {
            display: none;
        }
        .social-img {
            display: inline-block;
            margin-right: 7%;
            height: 2vw;
        }
        .error {
            font-family: 'Varela Round', sans-serif;
            position: absolute;
            color: green;
            top: 59.5vh;
            left: 16.5%;
            font-size: 0.8vw;
        }
        .mobile-nav {
            display: none;
        }
        /* Responsive for tablets */
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
            .hero {
                left: 0;
                width: auto;
                height: auto;
                top: 0;
            }
            h1 {
               top: 15vh;
               font-size: 10vw;
               left: 0; 
               color: white;
               z-index: 2;
               width: 100vw;
               text-align: center;
            }
            h2 {
                width: 90vw;
                height: 30vh;
                left: 5vw;
                top: 40vh;
                font-size: 4vw;
                text-align: center;
            }
            .img {
                background: url("images/backgroundmobile.jpg") center center no-repeat;
                background-size: cover;
                left: 5%;
                width: 90vw;
                height: 30vh;
                top: 8vh;
            }
            .reserve {
                width: 30vw;
                left: 15vw;
                top: 48vh;
                font-size: 3vw;
            }
            .reserve:hover {
                border-color: #f46b42;
            }
            .socials {
                display: none;
            }
            .socials-mobile {
                display: block;
                position: absolute;
                width: 30vw;
                height: auto;
                left: 65vw;
                top: 49vh;
            }
            .social-img {
                height: 3vh;
                margin-right: 10%;
            }
            .error {
                font-size: 2vw;
                left: 0;
                top: 55vh;
                width: 100%;
                text-align: center;
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
        }
        /* Responsive for phones */
        @media only screen
        and (max-width: 414px) 
        and (orientation: portrait) {
            .logo {
                height: 7vw;
            }
            h1 {
                font-size: 15vw;
            }
            h2 {
                font-size: 7vw;
                line-height: 1.5em;
            }
            .reserve {
                top: 55vh;
                font-size: 6vw;
                width: 30vw;
                height: 5vh;
                line-height: 5vh;
                left: 15vw;
            }
            .socials-mobile {
                top: 56vh;
                width: 40vw;
                left: auto;
                left: 55vw;
            }
            .social-img {
                height: 4vh;
            }
            .error {
                top: 64vh;
                font-size: 4vw;
                width: 90vw;
                left: 5vw;
            }
            .mobile-tab {
                font-size: 3vw;
            }
        }
        @media only screen
        and (width: 375px)
        and (orientation: portrait) {
            .social-img {
                height: 7.5vw;
            }
        }
    </style>
</head>
<header>
    <img src="images/logo.svg" class="logo">
    <a class="tab right" href="contact.php">CONTACT</a>
    <a class="tab" href="gallery.php">GALLERY</a>
    <a class="tab" href="menu.php">MENU</a>
    <a class="tab" href="about.php">ABOUT</a>
    <a class="tab" style="color:#f46b42">HOME</a>
</header>
<body>
    <div class="hero">
        <h1>The Fresh Way</h1>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo,</h2>
        <a class="reserve">Reserve a Table</a>
        <nav class="socials">
            <a class="social-link"><img src="images/instagram.svg" class="social-img"></a>
            <a class="social-link"><img src="images/facebook.svg" class="social-img"></a>
            <a class="social-link"><img src="images/twitter.svg" class="social-img twitter"></a>
        </nav>
        <nav class="socials-mobile">
            <a class="social-link"><img src="images/instagram.svg" class="social-img"></a>
            <a class="social-link"><img src="images/facebook.svg" class="social-img"></a>
            <a class="social-link"><img src="images/twitter.svg" class="social-img twitter"></a>
        </nav>
    </div>
    <div class="img"></div>
    <div class="error"></div>
    <div class="mobile-nav">
        <a class="mobile-tab top" style="color:#f46b42;">HOME</a>
        <a class="mobile-tab" href="about.php">ABOUT</a>
        <a class="mobile-tab" href="menu.php">MENU</a>
        <a class="mobile-tab" href="gallery.php">GALLERY</a>
        <a class="mobile-tab" href="contact.php">CONTACT</a>
    </div>
    <script>
        function displayError(error) {
            let txt = document.querySelector(".error");
            txt.innerHTML = "You can't " + error + " because this is a template :D";
        }
        
        let button = document.querySelector(".reserve");
        let socials = document.querySelectorAll(".social-img");

        button.addEventListener("click", function() {
            displayError("reserve a table");
        });
        socials.forEach(function(social) {
            social.addEventListener("click", function() {
                displayError("open link");
            });
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
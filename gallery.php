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
        .arrow {
            position: absolute;
            width: 3vw;
            height: 3vw;
            top: 55vh;
            margin-top: -5vw;
        }
        .arrow:hover {
            opacity: 0.5;
        }
        .arrow.left {
            left: 1%;
        }
        .arrow.right {
            right: 1%;
        }
        .window {
            position: absolute;
            background: grey;
            height: 90vh;
            width: 90%;
            left: 5%;
            overflow: hidden;
        }
        .reel {
            position: relative;
            height: 90vh;
            width: 540%;
            transition: all 0.3s ease-in-out;
            right: 0;
        }
        .photo {
            height: 90vh;
            width: 90vw;
            float: left;
        }
        .photo.one {
            background: url(images/photo1.jpg) center center no-repeat;
            background-size: cover;
            
        }
        .photo.two {
            background: url(images/photo2.jpg) center center no-repeat;
            background-size: cover;
        }
        .photo.three {
            background: url(images/photo3.jpg) center center no-repeat;
            background-size: cover;
        }
        .photo.four {
            background: url(images/photo4.jpg) center center no-repeat;
            background-size: cover;
        }
        .photo.five {
            background: url(images/photo5.jpg) center center no-repeat;
            background-size: cover;
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
        }
    </style>
</head>
<header>
    <img src="images/logo.svg" class="logo">
    <a class="tab right" href="contact.php">CONTACT</a>
    <a class="tab">GALLERY</a>
    <a class="tab" href="menu.php">MENU</a>
    <a class="tab" href="about.php">ABOUT</a>
    <a class="tab" href="index.php">HOME</a>
</header>
<body>
    <img src="images/arrowleft.svg" class="arrow left" alt="">
    <img src="images/arrowright.svg" class="arrow right" alt="">
    <div class="window">
        <div class="reel">
            <a class="photo one"></a>
            <a class="photo two"></a>
            <a class="photo three"></a>
            <a class="photo four"></a>
            <a class="photo five"></a>
        </div>
    </div>
    <div class="mobile-nav">
        <a class="mobile-tab top" href="index.php">HOME</a>
        <a class="mobile-tab" href="about.php">ABOUT</a>
        <a class="mobile-tab" href="menu.php">MENU</a>
        <a class="mobile-tab" style="color:#f46b42;">GALLERY</a>
        <a class="mobile-tab" href="contact.php">CONTACT</a>
    </div>
    <script>
        let img = document.querySelector(".photo");
        let reel = document.querySelector(".reel");
        var position = 0;

        function moveReel() {
            reel.style.right = position + "px";
        }
        function moveLeft() {
            if(position > 0) {
                position -= img.offsetWidth;
                moveReel();
            }
        }
        function moveRight() {
            if(position < img.offsetWidth * 4) {
                position += img.offsetWidth;
                moveReel();
            }
        }
        document.querySelector(".arrow.left").addEventListener("click", function() {
            reel.style.transitionDuration = "0.3s";
            moveLeft();
        });
        document.querySelector(".arrow.right").addEventListener("click", function() {
            reel.style.transitionDuration = "0.3s";
            moveRight();
        });
        var touchRec = [0,0];
        window.addEventListener("touchstart", function(e) {
            touchRec[1] = e.touches[0].clientX;
        }, false);
        window.addEventListener("touchend", function(e) {
            touchRec[2] = e.changedTouches[0].clientX;
            reel.style.transitionDuration = "0.1s";
            if(touchRec[1] > touchRec[2]) {
                if(touchRec[1] - touchRec[2] > 20) {
                    moveRight();
                }
            }
            if(touchRec[1] < touchRec[2]) {
                if(touchRec[2] - touchRec[1] > 20) {
                    moveLeft();
                }
            }
        }, false);
        
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
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
        body {
            position: relative;
            top: 10vh;
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
            height: 40vh;
            background: url("images/about.jpg") center bottom no-repeat;
            background-size: cover;
            background-attachment: fixed;
            left: 5%;
            color: white;
        }
        h1 {
            position: absolute;
            width: 100%;
            text-align: center;
            left: 0;
            top: 8vh;
            font-family: 'Amatic SC', cursive;
            letter-spacing: 0.05em;
            font-size: 10vh;
        }
        h2 {
            position: absolute;
            width: 100%;
            text-align: center;
            left: 0;
            font-family: 'Roboto', sans-serif;
            top: 20vh;
            font-size: 2vh;
            letter-spacing: 0.05em;
        }
        .letter {
            position: absolute;
            width: 70%;
            height: 90vh;
            top: 58vh;
            left: 5%;
        }
        .rating {
            position: absolute;
            width: 10%;
            top: 0;
            left: 10%;
        }
        .letter-title {
            position: absolute;
            top: 5vh;
            font-size: 3vw;
            font-weight: lighter;
            left: 10%;
            width: 40%;
            font-family: 'Amatic SC', cursive;
        }
        .letter-content {
            position: absolute;
            left: 10%;
            top: 22vh;
            width: 40%;
            font-size: 1vw;
            font-family: 'Roboto', sans-serif;
            line-height: 2em;
        }
        .author {
            position: absolute;
            font-family: 'Roboto', sans-serif;
            font-size: 1vw;
            color: grey;
            top: 54vh;
            left: 10%;
        }
        .img {
            position: absolute;
            width: 30%;
            background: url("images/chef.png") center center no-repeat;
            background-size: cover;
            width: 45%;
            height: 90vh;
            right: 5%;
            top: 58vh;
            z-index: 2;
        }
        .review {
            position: absolute;
            background: url("images/review.jpg") center center no-repeat;
            background-size: cover;
            width: 90%;
            left: 5%;
            top: 121vh;
            height: 27vh;
        }
        .review-button {
            position: absolute;
            display: inline-block;
            color: white;
            font-family: 'Amatic SC', cursive;
            width: 13%;
            border-radius: 5px;
            border-color: #f46b42;
            border-width: 0.3vw;
            border-style: solid;
            height: 4vh;
            line-height: 4vh;
            font-size: 1.4vw;
            text-align: center;
            letter-spacing: 0.05em;
            font-weight: bold;
            transition: border 0.2s ease;
            top: 50%;
            margin-top: -4vh;
            left: 7.5%;
        }
        .review-button:hover {
            border-color: darkgrey;
        }
        .review-content {
            font-family: 'Amatic SC', cursive;
            position: absolute;
            display: inline-block;
            margin-top: -2.2vw;
            color: white;
            top: 50%;
            left: 25%;
            font-size: 2.2vw;
            letter-spacing: 0.05em;
            font-weight: bold;
        }
        .reviews {
            position: absolute;
            width: 80%;
            left: 10vw;
            top: 10vw;
            height: 120%;
            background: lightgrey;
            z-index: 3;
            border-radius: 5px;
            overflow: scroll;
        }
        .mobile-tab {
            display: none;
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
                height: 152vh;
                top: -3vh;
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
            .letter {
                width: 90vw;
                left: 5vw;
            }
            .rating {
                width: 20vw;
                top: -10vh;
            }
            .letter-title {
                font-size: 7vw;
                width: 90%;
                top: -5vh;
            }
            .letter-content {
                font-size: 3vw;
                width: 80%;
                top: 13vh;
            }
            .author {
                font-size: 2.8vw;
                top: 58vh;
            }
            .img {
                display: none;
            }
            .review {
                top: 130vh;
            }
            .review-button {
                left: 5vw;
                width: 33vw;
                height: 7vw;
                line-height: 7vw;
                font-size: 5vw;
                top: 15vh;
            }
            .review-button:hover {
                border-color: #f46b42;
            }
            .review-content {
                left: auto;
                right: 5vw;
                font-size: 5vw;
            }
        }
        @media only screen
        and (max-width: 414px) 
        and (orientation: portrait) {
            .logo {
                height: 7vw;
            }
            .rating {
                width: 30vw;
            }
            .letter-title {
                font-size: 10vw;
            }
            .letter-content {
                font-size: 4.5vw;
            }
            .author {
                top: 87vh;
                font-size: 4vw;
            }
            .review {
                top: 160vh;
            }
            .review-button {
                font-size: 6vw;
                height: 9vh;
                padding-top: 1vh;
                top: 12vh;
                left: 8vw;
            }
            .review-content {
                font-size: 6vw;
                height: 9vh;
                width: 33vw;
                top: 10vh;
                right: 8vw;
            }
            .mobile-tab {
                font-size: 3vw;
            }
        }
        @media only screen
        and (width: 375px)
        and (orientation: portrait) {
            .author {
                top: 75vh;
            }
            .review {
                top: 145vh;
            }
        }
    </style>
</head>
<header>
    <img src="images/logo.svg" class="logo">
    <a class="tab right" href="contact.php">CONTACT</a>
    <a class="tab" href="gallery.php">GALLERY</a>
    <a class="tab" href="menu.php">MENU</a>
    <a class="tab" style="color:#f46b42">ABOUT</a>
    <a class="tab" href="index.php">HOME</a>
</header>
<body>
    <div class="main">
        <h1>About Us</h1>
        <h2>A little bit of something about our restaurant</h2>
    </div>
    <div class="letter">
        <img src="images/rating.svg" class="rating">
        <p class="letter-title">The finest Spanish restaurant in Bay Area.</p>
        <p class="letter-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum commodi corporis modi quod dolore, dignissimos libero, sit tempore laborum quisquam explicabo culpa aut distinctio possimus eos debitis rerum ipsum repellat autem dolor veniam nulla! Non, ut. Inventore dolores laboriosam est enim, quo cupiditate voluptatem possimus libero delectus odio distinctio asperiores hic itaque modi. Modi perspiciatis ea adipisci dolorum dicta quod.
        </p>
        <p class="author">Lionel Planche, Chef</p>
    </div>
    <div class="img"></div>
    <div class="review">
        <a class="review-button">Check our reviews</a>
        <p class="review-content">What people say about us?</p>
    </div>
    <div class="mobile-nav">
        <a class="mobile-tab top" href="index.php">HOME</a>
        <a class="mobile-tab" style="color:#f46b42;">ABOUT</a>
        <a class="mobile-tab" href="menu.php">MENU</a>
        <a class="mobile-tab" href="gallery.php">GALLERY</a>
        <a class="mobile-tab" href="contact.php">CONTACT</a>
    </div>
    <script>
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
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
            scroll-behavior: smooth;
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
        .main {
            position: absolute;
            text-align: right;
            right: 20%;
            top: 10vh;
        }
        h1 {
            font-family: 'Amatic SC', cursive;
            letter-spacing: 0.05em;
            font-size: 10vh;
        }
        h2 {
            font-family: 'Roboto', sans-serif;
            font-size: 2vh;
            letter-spacing: 0.05em;
        }
        .menu-nav {
            position: fixed;
            background: #f46b42;
            width: 15%;
            height: 25vh;
            border-radius: 5px;
            margin-left: 15%;
            margin-top: 20vh;
            line-height: 2.4em;
        }
        .menu-tab {
            position: relative;
            font-family: 'Amatic SC', cursive;
            color: white;
            font-weight: bold;
            margin-left: 20%;
            top: 2vh;
            font-size: 2.5vh;
            letter-spacing: 0.05em;
            text-decoration: none;
        }
        .menu-tab:hover {
            color: black;
        }
        .menu {
            position: absolute;
            right: 20%;
            top: 30vh;
            width: 45%;
            height: 100vh;
        }
        .menu-title {
            width: 100%;
            height: 30vh;
            text-align: center;
            line-height: 30vh;
            font-size: 7vh;
            font-family: 'Amatic SC', cursive;
            font-weight: bold;
            letter-spacing: 0.05em;
            color: white
        }
        .appetizers {
            background: url("images/appetizers.jpg") center center no-repeat;
            background-size: cover;
        }
        .entrees {
            margin-top: 10vh;
            background: url("images/entrees.jpg") center center no-repeat;
            background-size: cover;
        }
        .seafood {
            margin-top: 10vh;
            background: url("images/seafood.jpg") center center no-repeat;
            background-size: cover;
        }
        .vegan {
            margin-top: 10vh;
            background: url("images/vegan.jpg") center center no-repeat;
            background-size: cover;
        }
        .drinks {
            margin-top: 10vh;
            background: url("images/drinks.jpg") center center no-repeat;
            background-size: cover;
        }
        .dessert {
            margin-top: 10vh;
            background: url("images/dessert.jpg") center center no-repeat;
            background-size: cover;
        }
        .menu-item-nav {
            height: 40vh;
            width: 100%;
        }
        .menu-item {
            height: 10vh;
            width: 100%;
            border-bottom-width: 0.3vh;
            border-bottom-color: darkgrey;
            border-bottom-style: solid;
        }
        .menu-item-name {
            font-family: 'Roboto', sans-serif;
            position: relative;
            font-size: 1.3vw;
            left: 10%;
            top: 2vh;
        }
        .menu-item-content {
            font-family: 'Roboto', sans-serif;
            position: relative;
            font-size: 1vw;
            left: 10%;
            top: 3vh;
            color: grey;
        }
        .menu-item-price {
            position: relative;
            font-family: 'Amatic SC', cursive;
            letter-spacing: 0.05em;
            font-weight: bold;
            font-size: 2vw;
            left: 85%;
            bottom: 1.8vh;
            width: 0;
        }
        .mobile-nav {
            display: none;
        }
        @media only screen 
        and (min-width : 768px) 
        and (max-width : 1024px)
        and (orientation : landscape) {
            .menu-nav {
                height: 25vw;
            }
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
            .main {
                right: 25vw;
            }
            .menu-nav {
                width: 20vw;
                line-height: 3vh;
            }
            .menu-item-name {
                font-size: 2.5vw;
            }
            .menu-item-content {
                font-size: 2.2vw;
            }
            .menu-item-price {
                top: auto;
                left: 40vw;
                font-size: 3vw;
            }
            .menu-item-price.even {
                bottom: 4vh;
            }
        }
        @media only screen
        and (max-width: 414px) 
        and (orientation: portrait) {
            .logo {
                height: 7vw;
            }
            .menu-title {
                margin-top: 20vh;
            }
            .appetizers {
                margin-top: 0;
            }
            .menu-item {
                height: 15vh;
            }
            .menu-item-name {
                font-size: 4vw;
                width: 30vw;
            }
            .menu-item-content {
                font-size: 3vw;
            }
            .menu-item-price {
                font-size: 5vw;
                left: 37vw;
                top: -5vh;
            }
            .menu-item-price.odd {
                top: -7vh;
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
    <a class="tab" href="gallery.php">GALLERY</a>
    <a class="tab">MENU</a>
    <a class="tab" href="about.php">ABOUT</a>
    <a class="tab" href="index.php">HOME</a>
</header>
<body>
    <div class="main">
        <h1>Menu</h1>
        <h2>All menu items are organic and fresh.</h2>
    </div>
    <div class="menu-nav">
        <a class="menu-tab" href="#appetizers">Appetizers</a><br>
        <a class="menu-tab" href="#entrees">Entrees</a><br>
        <a class="menu-tab" href="#seafood">Seafood</a><br>
        <a class="menu-tab" href="#vegan">Vegan</a><br>
        <a class="menu-tab" href="#drinks">Drinks</a><br>
        <a class="menu-tab" href="#dessert">Dessert</a>
    </div>
    <div class="menu">
        <div class="menu-title appetizers" id="appetizers">Appetizers</div>
        <div class="menu-item-nav">
            <div class="menu-item">
                <div class="menu-item-name">Espinacas con Garbanzos</div>
                <div class="menu-item-content">Spinach, garlic, onion, and garbanzo beans.</div>
                <div class="menu-item-price odd">$2.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Patatas Bravas</div>
                <div class="menu-item-content">Fried potato cubes served with a spicy dipping sauce</div>
                <div class="menu-item-price even">$3.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Avacado and Tuna Tapas</div>
                <div class="menu-item-content">Avacado halves filled with tuna salad.</div>
                <div class="menu-item-price odd">$3.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Pipirrana Salad</div>
                <div class="menu-item-content">Potatos, bell peppers, tomatos, green olives, and tuna.</div>
                <div class="menu-item-price even">$3.99</div>
            </div>
        </div>
        <div class="menu-title entrees" id="entrees">Entrees</div>
        <div class="menu-item-nav">
            <div class="menu-item">
                <div class="menu-item-name">Espinacas con Garbanzos</div>
                <div class="menu-item-content">Spinach, garlic, onion, and garbanzo beans.</div>
                <div class="menu-item-price odd">$2.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Patatas Bravas</div>
                <div class="menu-item-content">Fried potato cubes served with a spicy dipping sauce</div>
                <div class="menu-item-price even">$3.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Avacado and Tuna Tapas</div>
                <div class="menu-item-content">Avacado halves filled with tuna salad.</div>
                <div class="menu-item-price odd">$3.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Pipirrana Salad</div>
                <div class="menu-item-content">Potatos, bell peppers, tomatos, green olives, and tuna.</div>
                <div class="menu-item-price even">$3.99</div>
            </div>
        </div>
        <div class="menu-title seafood" id="seafood">Seafood</div>
        <div class="menu-item-nav">
            <div class="menu-item">
                <div class="menu-item-name">Espinacas con Garbanzos</div>
                <div class="menu-item-content">Spinach, garlic, onion, and garbanzo beans.</div>
                <div class="menu-item-price odd">$2.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Patatas Bravas</div>
                <div class="menu-item-content">Fried potato cubes served with a spicy dipping sauce</div>
                <div class="menu-item-price even">$3.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Avacado and Tuna Tapas</div>
                <div class="menu-item-content">Avacado halves filled with tuna salad.</div>
                <div class="menu-item-price odd">$3.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Pipirrana Salad</div>
                <div class="menu-item-content">Potatos, bell peppers, tomatos, green olives, and tuna.</div>
                <div class="menu-item-price even">$3.99</div>
            </div>
        </div>
        <div class="menu-title vegan" id="vegan">Vegan</div>
        <div class="menu-item-nav">
            <div class="menu-item">
                <div class="menu-item-name">Espinacas con Garbanzos</div>
                <div class="menu-item-content">Spinach, garlic, onion, and garbanzo beans.</div>
                <div class="menu-item-price odd">$2.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Patatas Bravas</div>
                <div class="menu-item-content">Fried potato cubes served with a spicy dipping sauce</div>
                <div class="menu-item-price even">$3.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Avacado and Tuna Tapas</div>
                <div class="menu-item-content">Avacado halves filled with tuna salad.</div>
                <div class="menu-item-price odd">$3.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Pipirrana Salad</div>
                <div class="menu-item-content">Potatos, bell peppers, tomatos, green olives, and tuna.</div>
                <div class="menu-item-price even">$3.99</div>
            </div>
        </div>
        <div class="menu-title drinks" id="drinks">Drinks</div>
        <div class="menu-item-nav">
            <div class="menu-item">
                <div class="menu-item-name">Espinacas con Garbanzos</div>
                <div class="menu-item-content">Spinach, garlic, onion, and garbanzo beans.</div>
                <div class="menu-item-price odd">$2.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Patatas Bravas</div>
                <div class="menu-item-content">Fried potato cubes served with a spicy dipping sauce</div>
                <div class="menu-item-price even">$3.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Avacado and Tuna Tapas</div>
                <div class="menu-item-content">Avacado halves filled with tuna salad.</div>
                <div class="menu-item-price odd">$3.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Pipirrana Salad</div>
                <div class="menu-item-content">Potatos, bell peppers, tomatos, green olives, and tuna.</div>
                <div class="menu-item-price even">$3.99</div>
            </div>
        </div>
        <div class="menu-title dessert" id="dessert">Dessert</div>
        <div class="menu-item-nav">
            <div class="menu-item">
                <div class="menu-item-name">Espinacas con Garbanzos</div>
                <div class="menu-item-content">Spinach, garlic, onion, and garbanzo beans.</div>
                <div class="menu-item-price odd">$2.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Patatas Bravas</div>
                <div class="menu-item-content">Fried potato cubes served with a spicy dipping sauce</div>
                <div class="menu-item-price even">$3.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Avacado and Tuna Tapas</div>
                <div class="menu-item-content">Avacado halves filled with tuna salad.</div>
                <div class="menu-item-price odd">$3.99</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">Pipirrana Salad</div>
                <div class="menu-item-content">Potatos, bell peppers, tomatos, green olives, and tuna.</div>
                <div class="menu-item-price even">$3.99</div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div class="mobile-nav">
        <a class="mobile-tab top" href="index.php">HOME</a>
        <a class="mobile-tab" href="about.php">ABOUT</a>
        <a class="mobile-tab" style="color:#f46b42;">MENU</a>
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
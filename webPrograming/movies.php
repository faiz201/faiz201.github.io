<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKKO</title>
    <link rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="movies.css">

    <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>
        .hamburger {
            cursor: pointer;
        }

        .hamburger input {
            display: none;
        }

        .hamburger input:checked~.menu {
            display: block;
        }

        .menu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 1;
        }
        /* SECTION */
        section{
            height: 100vh;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            display: flex;

        }
        .wrap{
            width: max-content;
        }
        .typing{
            overflow: hidden;
            white-space: nowrap;
            border-right: 2px solid white;
            padding-right: 5px;
            animation: ping 3s steps(100) infinite alternate,
                    blink 0.7s infinite;
        }
        .wrap .typing p{
            color: white;
            font-size: 55px;
            font-style: italic;
            font-weight: 900;
            letter-spacing: .7rem;
        }
        .wrap .typing span{
            color: red;
            font-size: 100px;
        }
        @keyframes ping {
            0% {
                width: 0%;
                visibility: hidden;
            }
            100% {
                width: 100%;
            }
        }
        @keyframes blink {
            50% {
                border-color: transparent;
            }
            100% {

                border-color: white;
            }
        }
        .wrap P{
            color: red;
        }
        .wrap .ping p{
            font-size: 18px;
            font-style: italic;
            font-weight: bold;
        }
        .wrap .ping span{
            color: white;
            font-size: 50px;
        }
    </style>
</head>

<body>
    <header>
        <a href="home.php" class="logo">TOKKO</a>

        <ul class="navlist">
            <li><a href="movies.php" class="active">HOME</a></li>
            <li><a href="home.php">MOVIES</a></li>
            <li><a href="itemshop.php">ITEMSHOP</a></li>
        </ul>

        <!-- <input type="text" name="text" placeholder="Search..." class="input"> -->

        <div class="bx bx-menu" id="menu-icon"></div>

        <label class="hamburger">
            <input type="checkbox">
            <svg viewBox="0 0 32 32">
                <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                <path class="line" d="M7 16 27 16"></path>
            </svg>
            <div class="menu">
                <p><a href="aboutus.html"><b>ABOUT US</b></a></p>
                <p><a href="https://github.com/isallls/webPrograming.git"><b>CONTACT</b></a></p>
                <p>
                    <button class="Btn">
                        <div class="sign"><svg viewBox="0 0 512 512">
                                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                            </svg></div>
                        <div class="text">
                            <a href="loginpage.html">Logout</a></li>
                        </div>
                    </button>
                </p>
            </div>
        </label>
    </header>
    <!-- SECTION -->
    <section>
        <div class="wrap">
            <div class="typing">
                <p><span>S</span>elamat <span>D</span>atang...</p>
            </div>
            <div class="ping">
                <p><span>L</span>orem ipsum dolor sit <span>A</span>met consectetur adipisicing elit. <span>E</span>xcepturi esse porro</p>
            </div>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>

</html>
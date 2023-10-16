<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Including other files / library's  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="scripts/script.js"></script>
    <script src="../scripts/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/829a0ee9ed.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- The portfolio -->
    <!-- Including the navigation circle -->
    <?php include "includes/header.php"; ?>

    <!-- creating the first section of the website -->
    <div class="po-landing-opening">
        <!-- Creating the text with my name and what i do -->
        <div class="po-landing-text">
            <h3>Jaimy</h3>
            <h3><span class="po-last-name">Mathon</span></h3>
            <div class="po-landing-name-box">
                <h2>Hi, my name is</h2>
                <span class="po-landing-name"> Jaimy Mathon</span>
            </div>
            <!-- Creating the animation of different things i'll do -->
            <div class="po-landing-animation">
                <h1 class="po-landing-animation-text">
                    <a href="" class="typewrite" data-period="2000" data-type='[ "Web Developer", "Designer", "Hacker" ]'>
                        <span class="wrap"></span>
                    </a>
                </h1>
                <h2><span class="po-landing-animation-header-text">I specialize in web development, crafting interactive and <br> user-friendly websites. My passion lies in coding, creating <br> seamless online experiences for clients and users alike.</span></h2>
            </div>
            <div class="po-contact-button">
                <a href="#">Contact Me</a>
            </div>
        </div>
        <!-- Creating the mac look a like window what my information contains -->
        <div class="po-mac-window">
            <div class="po-mac-window-header">
                <div class="po-mac-window-controls">
                    <i class="fa fa-circle" style="color:#f96058;"></i>
                    <i class="fa fa-circle" style="color:#fdc12a;"></i>
                    <i class="fa fa-circle" style="color:#2aca42;"></i>
                </div>
            </div>
            <!-- Content of the mac window -->
            <div class="po-mac-window-content">
                <?php
                    $phpTagOpen = "&lt;?php";
                    $phpTagClose = "&lt;?php";
                    $fullName = "\$fullName = \"Jaimy Mathon\";";
                    $age = "\$age = \"18\";";
                    $email = "\$email = \"jaimy.mathon@gmail.com\";";
                    $number = "\$phone = \"0653443431\";";
                    echo "<p class='open'>$phpTagOpen</p>";
                    echo "<p class='content'>$fullName</p>";
                    echo "<p class='content'>$age</p>";
                    echo "<p class='content'>$email</p>";
                    echo "<p class='content'>$number</p>";
                ?>
            </div>
        </div>
    </div>
    <div class="po-landing-icons">
            <div class="po-landing-icon">
                <a href="#"><i class="fa-solid fa-layer-group" style="color: #bcfd4c;"></i></a>
            </div>
        </div>
</body>
</html>
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
                    echo "<p class='tag'>&lt;?php</p>";
                    echo "<p class='content'><span class='variable_color'>\$fullName</span> = <span class='data'>\"Jaimy Mathon\"</span>;</p>";
                    echo "<p class='content'><span class='variable_color'>\$age</span> = <span class='data'>\"18\"</span>;</p>";
                    echo "<p class='content'><span class='variable_color'>\$email</span> = <span class='data'>\"jaimy.mathon@gmail.com\"</span>;</p>";
                    echo "<p class='content'><span class='variable_color'>\$phone</span> = <span class='data'>\"06-53443431\"</span>;</p>";
                    echo "<p class='tag'>?&#62;</p>";
                ?>
            </div>
        </div>
    </div>
    <!-- Create the 3 icons with text inside it -->
    <div class="po-landing-icons">
        <div class="po-landing-icon">
            <i class="fa-solid fa-layer-group" style="color: #bcfd4c;"></i>
        </div>
        <div class="po-landing-icon">
            <i class="fa-solid fa-graduation-cap" style="color: #bcfd4c;"></i>
        </div>
        <div class="po-landing-icon">
            <i class="fa-solid fa-layer-group" style="color: #bcfd4c;"></i>
        </div>
    </div>
    <!-- Create the about me page -->
    <div class="po-about-me">
        <div class="po-about-me-header">
            <p class="line-1 anim-typewriter">About Me</p>
        </div>
        <div class="po-about-me-body">
            <div class="po-about-me-picture">
                <img src="images/IMG_2632.jpg" alt="Placeholder-Profile-pic">
            </div>
            <div class="po-about-me-text">
                <p class="po-about-me-text-question">Who is Jaimy?</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quisquam reiciendis voluptate earum maxime 
                    laborum ex fuga minus asperiores tempore, est nihil consequatur debitis? Recusandae quam repellendus voluptatum facilis inventore.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quisquam reiciendis voluptate earum maxime 
                    laborum ex fuga minus asperiores tempore, est nihil consequatur debitis? Recusandae quam repellendus voluptatum facilis inventore.
                </p>
                <div class="po-about-me-buttons">
                    <div class="po-about-me-info" onmouseover="changeIconContent(this)" onmouseout="resetIconContent(this)">
                        <div class="po-about-me-icon">
                            <a href="#"><i id="infoIcon" class="fa-solid fa-circle-info" style="color: #bcfd4c;"></i></a>
                        </div>
                        <div class="po-about-me-button-text">
                            <span class="po-about-me-title">Information</span>
                            <span class="po-about-me-title-text">About Jaimy Mathon</span>
                        </div>
                    </div>
                    <div class="po-about-me-projects" onmouseover="changeIconContent(this)" onmouseout="resetIconContent(this)">
                        <div class="po-about-me-icon">
                            <a href="#"><i id="infoIcon" class="fa-solid fa-circle-info" style="color: #bcfd4c;"></i></a>
                        </div>
                        <div class="po-about-me-button-text">
                            <span class="po-about-me-title">My CV<br></span>
                            <span class="po-about-me-title-text">Download here</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</body>
</html>
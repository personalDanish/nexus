<?php
$logo = '../images/logo.png';
$name = '../images/name.png';
$nameTag = '../images/nameTag.png';
$scene = '../images/scene.png';
$scene2 = '../images/scene2.png';
$emp1 = '../images/emp1.png';
$emp2 = '../images/emp2.jpg';
$emp3 = '../images/emp3.png';
$emp4 = '../images/emp4.jpg';
$emp5 = '../images/emp5.jpg';
$feaEdit = '../images/cursor-fea.gif';
$feaIdea = '../images/idea-fea.gif';
$feaMonitor = '../images/monitor-fea.gif';
$feaMoney = '../images/money-fea.gif';
$feaWeb = '../images/web-fea.gif';
$feaTime = '../images/time-fea.gif';
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus - Webiste Builder</title>
    <link rel="icon" href="../images/nexus-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/index.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="App">
        <!-- Navbar -->
        <nav class="navbar">
            <img src="../images/logo.png" alt="Logo" class="logo" />
            <ul class="nav-list">
                <li class="nav-list"><a class="nav-link" href="./index.php">Home</a></li>
                <li class="nav-list"><a class="nav-link" href="./about.php">About Us</a></li>
                <li class="nav-list"><a class="nav-link" href="./features.php">Features</a></li>
                <li class="nav-list"><a class="nav-link" href="./faq.php">FAQ</a></li>
            </ul>
        </nav>

        <!-- Header -->
        <div class='con-head'>
            <div class='con-name'>
                <img src="../images/name.png" alt="Name" class="name" />
                <img src="../images/nameTag.png" alt="Name Tag" class="nameTag" />
            </div>
            <div class='features-div'>
                <img src="<?php echo $feaEdit; ?>" alt="Feature Edit" class="fea-vid" />
                <img src="<?php echo $feaIdea; ?>" alt="Feature Idea" class="fea-vid" />
                <img src="<?php echo $feaMonitor; ?>" alt="Feature Monitor" class="fea-vid" />
                <img src="<?php echo $feaMoney; ?>" alt="Feature Money" class="fea-vid" />
                <img src="<?php echo $feaWeb; ?>" alt="Feature Web" class="fea-vid" />
                <img src="<?php echo $feaTime; ?>" alt="Feature Time" class="fea-vid" />
            </div>
            <div class='btnStart-div'>
                <button class='btnStart' onclick="window.location.href = '../pages/login.php' ">Start Building</button>
            </div>
        </div>

        <!-- Scene Image -->
        <div class='scene-div'>
            <img src="../images/scene.png" alt="Scene" class="scene" />
            <div class="p-text">
                <h2>Welcome to <span class="highlight">Your Website Builder</span></h2>
                <p>Build stunning, responsive websites in minutes without any coding skills.<br /> Our intuitive, drag-and-drop interface makes it easier than ever to bring your ideas to life.</p>
                <p><span class="highlight">Key Features:</span></p>
                <ul>
                    <li>Customizable templates for various industries</li>
                    <li>Easy-to-use drag-and-drop editor</li>
                    <li>Responsive design for mobile and desktop</li>
                    <li>SEO tools to improve online visibility</li>
                    <li>24/7 support to help you succeed</li>
                </ul>
            </div>
        </div>

        <!-- Ads Section -->
        <div class='ads1-div'>
            <div class='side1'>
                <h1 class='side1-text'>Easily create a no-code website page using an editor</h1>
                <h2 class='side1-text-h2'>Transform your form into a stunning website. Stay on-brand, capture insights, and streamline workflows—all without any coding required.</h2>
                <button class='btnStart-ads' onclick="window.location.href = '../pages/login.php'">Let's Start</button>
            </div>
            <div class='side2'>
                <div class='bubble-obj'></div>
                <img src="../images/scene2.png" alt="Interactive Scene" class="scene2" />
            </div>
        </div>

        <!-- Template Section -->
        <div class='template-body'>
    <div class='div-text'>Try our professionally crafted template</div>
    <div class="scroll-container">
        <img src="<?php echo $emp1; ?>" alt="Employee 1" class="emp" loading="lazy" />
        <img src="<?php echo $emp2; ?>" alt="Employee 2" class="emp" loading="lazy" />
        <img src="<?php echo $emp3; ?>" alt="Employee 3" class="emp" loading="lazy" />
        <img src="<?php echo $emp4; ?>" alt="Employee 4" class="emp" loading="lazy" />
        <img src="<?php echo $emp5; ?>" alt="Employee 5" class="emp" loading="lazy" />
        <!-- Duplicate images for smooth looping -->
        <img src="<?php echo $emp1; ?>" alt="Employee 1" class="emp" loading="lazy" />
        <img src="<?php echo $emp2; ?>" alt="Employee 2" class="emp" loading="lazy" />
        <img src="<?php echo $emp3; ?>" alt="Employee 3" class="emp" loading="lazy" />
        <img src="<?php echo $emp4; ?>" alt="Employee 4" class="emp" loading="lazy" />
        <img src="<?php echo $emp5; ?>" alt="Employee 5" class="emp" loading="lazy" />
    </div>
</div>



        <!-- Footer -->
        <div class='footer-div'>
            <div class='footer-con'>
                <h5 class='footer-text-h5'>Sign Up</h5>
                <h1 class='footer-text'>Take your business to the next level</h1>
                <h3 class='footer-text-h3'>Your customers are waiting for you—start your 14-day free trial to find them.</h3>
                <a href="./login.php">
                    <button class='btnStart-footer'>Start Journey</button>
                </a>
                <footer>
                    <p>© 2025 NexusTech. All rights reserved.<br/> Developed by Danish Irwan.</p>
                </footer>
            </div>
        </div>

        <!-- Background Shapes -->
        <div class="background-shape circle-1"></div>
        <div class="background-shape circle-2"></div>
        <div class="background-shape circle-3"></div>
        <div class="background-shape circle-4"></div>
        <div class="background-shape oval-1"></div>
        <div class="background-shape oval-2"></div>
        <div class="background-shape oval-3"></div>
        <div class="background-shape oval-4"></div>
        <div class="background-shape round-1"></div>
        <div class="background-shape round-2"></div>
        <div class="background-shape round-3"></div>
        <div class="background-shape round-4"></div>
    </div>
</body>
</html>

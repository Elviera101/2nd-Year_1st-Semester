?<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = $_POST['fullname'] ?? '';
    $email   = $_POST['email'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    $data = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message\n-------------------------\n";
    
    file_put_contents("messages.txt", $data, FILE_APPEND);

    echo "<script>alert('Message sent successfully!'); window.location.href='MARTIN_ANGELA_FINALS.php#contact';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">



    <title>MARTIN ANGELA PORTFOLIO</title>
</head>

<body>

    <!-- Header Section-->

    <header class="header">
        <a href="home" class="logo"> Angela Martin</a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#resume">Resume</a>
            <a href="#contact">Contacts</a>
        </nav>
    </header>

    <!-- Home Section-->

    <section class="home" id="home">
        <div class="home-img">
            <img src="assets/ange.png" alt="Profile Image">
        </div>

        <div class="home-content">
            <h3> Hello, I'm</h3>
            <h1>Angela Martin</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>Driven Information Technology student at Universidad de Dagupan with a genuine interest in the
                ever-evolving world of technology. Currently pursuing a Bachelor of Science degree and actively seeking
                opportunities to apply learned concepts in a professional setting. A collaborative team player with a
                strong desire to contribute to meaningful technological solutions.</p>

            <div class="social-media">
                <a href="https://www.facebook.com/profile.php?id=100075426852661"><i
                        class='bx bxl-facebook-circle'></i></a>
                <a href="https://www.instagram.com/gelamrtn_/"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://myaccount.google.com/?hl=en&gar=WzEyMF0&pli=1"><i class='bx bxl-gmail'></i></a>
                <a href="https://www.tiktok.com/@123456789.a1016"><i class='bx bxl-tiktok'></i></a>
            </div>
            <a href="assets/Martin Angela Resume.pdf" class="btn">Download CV</a>
        </div>
    </section>

    <!--About Section-->

    <section class="about" id="about">
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>I'm a <span>BSIT Student</span></h3>
            <p>Driven Information Technology student at Universidad de Dagupan with a genuine interest in the
                ever-evolving world of technology. Currently pursuing a Bachelor of Science degree and actively seeking
                opportunities to apply learned concepts in a professional setting. A collaborative team player with a
                strong desire to contribute to meaningful technological solutions.</p>
            <a href="assets/Martin Angela Resume.pdf" class="btn">Read More</a>
        </div>

        <div class="about-img">
            <img src="assets/gela.jpg" alt="About Image">
        </div>
    </section>

    <!--Skills Section-->
    <section class="skills" id="skills">
        <h2 class="heading">My <span>Skills</span></h2>
        <h3 class="description">I am continuously growing my technical and soft skills—from Java and web development to creative design and
            effective communication. With a solid foundation in tools like MS Office and Canva, and strong teamwork and
            communication abilities, I’m passionate about blending creativity and tech to build meaningful projects.
        </h3>
        <br>
        <div class="skills-container">
            <div class="skill">
                <h3>Java</h3>
                <div class="progress-bar">
                    <div class="progress" style="width: 50%;">50%</div>
                </div>
            </div>
            <div class="skill">
                <h3>Basic HTML, CSS & JavaScript</h3>
                <div class="progress-bar">
                    <div class="progress" style="width: 65%;">65%</div>
                </div>
            </div>
            <div class="skill">
                <h3>MS Office</h3>
                <div class="progress-bar">
                    <div class="progress" style="width: 85%;">85%</div>
                </div>
            </div>
            <div class="skill">
                <h3>Canva Design</h3>
                <div class="progress-bar">
                    <div class="progress" style="width: 70%;">70%</div>
                </div>
            </div>
            <div class="skill">
                <h3>Figma</h3>
                <div class="progress-bar">
                    <div class="progress" style="width: 80%;">80%</div>
                </div>
            </div>
            <div class="skill">
                <h3>PHP</h3>
                <div class="progress-bar">
                    <div class="progress" style="width: 95%;">95%</div>
                </div>
            </div>
        </div>
    </section>

    <!--Resume Section-->
    <section class="resume" id="resume">
        <h2 class="heading">My <span>Resume</span></h2>

        <div class="resume-container">
            <div class="resume-item">
                <h3>🎓 Education</h3>
                <p><strong>Primary Level</strong><br>
                    San Marcos Elementary School<br>
                    2012 – 2015</p>
                <br>
                Guesang Elementary School<br>
                2015 – 2017</p>
                <br>
                <p><strong>Secondary Level</strong><br>
                    Mangaldan National High School<br>
                    2017 – 2024</p>
                <br>
                <p><strong>Bachelor of Science in Information Technology</strong><br>
                    Universidad De Dagupan<br>
                    2024 – Present</p>

            </div>

            <div class="resume-item">
                <h3>💼 Experience</h3>
                <p><strong>Intern</strong><br>
                    LGU Mangaldan Pangasinan<br>
                    March 2024 <br>
                    • Supported troubleshooting of office hardware and software issues.<br>
                    • Helped configure and maintain network and internet connectivity across departments.<br>
                    • HParticipated in system documentation and assisted in encoding for government databases.
                </p>
                <br>
                <p><strong>Co-Chairman - Multimedia Sub-org</strong><br>
                    Computer Science Information Technology Society<br>
                    October 2024 - 2025 <br>
                    • Leads the multimedia sub-organization in planning and creating digital content for events,
                    promotions, and announcements<br>
                    • Ensures branding and visual consistency for CSITS-related activities.
                </p>
            </div>

            <div class="resume-item">
                <h3>🛠 Skills Summary</h3>
                <p>Introduction to Java <br>
                    Basic HTML, CSS, and JavaScript <br>
                    MS Office <br>
                    Canva Design <br>
                    Figma <br>
                    PHP</p>
            </div>

            <a href="assets/Martin Angela Resume.pdf" class="btn" download>Download CV</a>
        </div>
    </section>

    <!--Contact Section-->
<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me</span></h2>

    <form id="contactForm" action="MARTIN_ANGELA_FINALS.php" method="POST">
        <div class="input-box">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="input-box">
            <input type="number" name="phone" placeholder="Phone Number" required>
            <input type="text" name="subject" placeholder="Email Subject" required>
        </div>

        <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>

        <button type="submit" class="btn">Submit</button>
    </form>
</section>

    <!--Footer Section-->
    <footer class="footer">
        <div class="social">
            <a href="https://www.facebook.com/profile.php?id=100075426852661"><i class='bx bxl-facebook-circle'></i></a>
            <a href="https://www.instagram.com/gelamrtn_/"><i class='bx bxl-instagram-alt'></i></a>
            <a href="https://myaccount.google.com/?hl=en&gar=WzEyMF0&pli=1"><i class='bx bxl-gmail'></i></a>
            <a href="https://www.tiktok.com/@123456789.a1016"><i class='bx bxl-tiktok'></i></a>
        </div>
        <p class="copyright">
            &copy;Angela Martin - All Rights Reserved
        </p>
    </footer>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

    <script src="script.js"></script>

</body>
</html>
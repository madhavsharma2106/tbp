<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Big Push :: Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri|Roboto" rel="stylesheet">
    <script src="main.js"></script>
</head>

<body class="team-html">
    <section id="landing-container">
    <header class="container flex sb">
        <nav class="flex sb">
                <p>
                    <a href="index.php">HOME</a>
                </p>
                <p>
                    <a href="services.php">SERVICES</a>
                </p>
                <p>
                    <a href="team.php">TEAM</a>
                </p>
                <p>
                    <a href="work.php">WORK</a>
                </p>
                
                <p>
                    <a href="#contact-container">CONTACT</a>
                </p>
            </nav>
            <a href="index.php"> <img class="pointer" src="./assets/home/logo-header.svg" alt="logo"></a>
        </header>
                <img class="dots-image-1" src="assets/team/dots-line-02.svg">
                <div class="container flex">
            <div class="info white flex-1">
                <h1>This is us.</h1>
                <div class="line-image-team"></div>
            </div>
            <div class="flex-1 white">
            <img class="dotted-line" src="assets/team/dots-line-02.svg">
            <div class="">
                    <div class="line-image-team"></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, ipsa. Corporis recusandae exercitationem repellendus! Laborum eligendi</p>
            </div>
            <img src="assets/team/arrows.svg" class="arrow-image-team">
            <button class="secondary">Say Hi!</button>
            </div>
        </div>

    </section>
    <section id="section-team-member">
        <div class="container">        <div class="container back-white">
                <div></div>
        </div>
            <div class="right members">
                <span>The Boss</span>
                <img src="assets/team/kairav.png" class="team-image">
                <h1>Kairav <br/>Sharma</h1>
                <h3>Founder & CEO</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium rerum molestiae modi corporis qui assumenda animi quidem illum vero, porro ab neque nihil quia, minus, laboriosam consequuntur magni nam aut.Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium rerum molestiae modi corporis qui assumenda animi quidem illum vero, porro ab neque nihil quia, minus, laboriosam consequuntur magni nam aut.Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium rerum molestiae modi corporis qui assumenda animi quidem illum vero, porro ab neque nihil quia, minus, laboriosam consequuntur magni nam aut.</p>
                <img class="line-image" src="assets/team/white-scale-03.svg">
            </div>

        </div>
        <div class="members left">
                    <div>
                        <img src="assets/team/slide-dash-05.svg">
                    </div>
                    <span>The Dude</span>
                <img src="assets/team/anshul.png" class="team-image">
                <h1>Anshul<br/> Mishra</h1>
                    <h3>CFO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium rerum molestiae modi corporis qui assumenda animi quidem illum vero, porro ab neque nihil quia, minus, laboriosam consequuntur magni nam aut.Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium rerum molestiae modi corporis qui assumenda animi quidem illum vero, porro ab neque nihil quia, minus, laboriosam consequuntur magni nam aut.Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium rerum molestiae modi corporis qui assumenda animi quidem illum vero, porro ab neque nihil quia, minus, laboriosam consequuntur magni nam aut.</p>
                </div>
                <div class="members left">
                    <div>
                            <img src="assets/team/slide-dash-05.svg">
                    </div>
                <span>The Cool</span>
                <img src="assets/team/puneet.png" class="team-image">
                        <h1>Puneet <br/> Batra</h1>
                        <h3>CTO</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium rerum molestiae modi corporis qui assumenda animi quidem illum vero, porro ab neque nihil quia, minus, laboriosam consequuntur magni nam aut.Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium rerum molestiae modi corporis qui assumenda animi quidem illum vero, porro ab neque nihil quia, minus, laboriosam consequuntur magni nam aut.Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium rerum molestiae modi corporis qui assumenda animi quidem illum vero, porro ab neque nihil quia, minus, laboriosam consequuntur magni nam aut.</p>
                    </div>
    </section>
    

    <section id="contact-container" class="white">
        <div class="container">
            <div class="title-area text-center">
                <h1 class="title white">Talk to us </h1>
                <p>Get the push you deserve.</p>
            </div>

            <div class="content-area">
                <div class="address-area">
                    <div class="info-heading">
                        <h1>Our Address</h1>
                        <img class="deco" src="./assets/home/slide-dash.svg" alt="Dash">
                    </div>

                    <div class="info-body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                        <p>E-MAIL : contact@thebigpush.in</p>
                        <p>Mobile : 12220020020</p>
                        <div class="icons">
                            <img src="./assets/home/facebook.svg" alt="Facebook">
                            <img src="./assets/home/instagram.svg" alt="Instagram">
                            <img src="./assets/home/twiter.svg" alt="Twitter">
                        </div>
                    </div>
                </div>
                <div class="form-area">
                    <form action="/gdform.php" method="post">
                        <input type="hidden" name="subject" value="Form Submission" />
                        <input type="hidden" name="redirect" value="#" />
                        <input type="text" placeholder="Name" name="name">
                        <input type="text" placeholder="E-Mail" name="email">
                        <input type="text" placeholder="Subject" name="subject">
                        <textarea name="body"></textarea>
                        <button type="submit" class="secondary">Send</button>
                    </form>
                </div>
            </div>

        </div>

    </section>
    <footer id="footer" class="container flex">
        <div class="data-column">
            <h2>Company</h2>
            <p>
                <a href="#">About Us</a>
            </p>
            <p>
                <a href="#">Our Team</a>
            </p>
            <p>
                <a href="#">Contact Us</a>
            </p>
        </div>
        <div class="data-column">
            <h2>Services</h2>
            <p>
                <a href="#">Videos</a>
            </p>
            <p>
                <a href="#">Workshop</a>
            </p>
            <p>
                <a href="#">Events</a>
            </p>
        </div>
        <div class="data-column">
            <h2>Follow</h2>
            <p>
                <a href="#">Facebook</a>
            </p>
            <p>
                <a href="#">Twitter</a>
            </p>
            <p>
                <a href="#">Instagram</a>
            </p>
        </div>
        <div class=" flex col logo-column">
            <img src="./assets/home/logo-footer.svg" alt="Logo">
            <p>2018 @copy thebigpush.in</p>
        </div>
    </footer>
</body>

</html>
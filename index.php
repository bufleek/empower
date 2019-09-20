<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/overlay.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="imgs/logo.jpg">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Home | EPOK</title>
</head>

<body>
    <div id="scroll-indicator"></div><!--   *SCROLL INDICATOR   -->
    <div id="nav" class="nav">
        <?php
        define('config_include', TRUE);
        include 'incs/root_nav.php';
        ?>
    </div>
    <?php
    include 'incs/root_head.php';
    ?>
    <!--            SLIDER          -->
    <div class="slider">
        <div class="slideshow-container">
            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="imgs/slide1.jpg" style="width:100%">
                <div class="text">Advocating for comprehensive educational reforms to fit the lifestyle of pastoral
                    communities.</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="imgs/slide2.jpg" style="width:100%">
                <div class="text">Community awareness and engagement on harmful retrogressive cultural practices.</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="imgs/slide4.jpg" style="width:100%">
                <div class="text">Engagement of vulnerable groups with policymakers.</div>
            </div>

        </div>

    </div>

    <!--           CONTENT          -->
    <div class="content">
        <p>Kenya is to an estimation of 70% rangeland including grasslands and savannahs,
            which are the vulnerable places for pastoral communities in
            Kenya and the world at large. The rangelands are susceptible to degradation and severe natural tragedies
            e.g. drought and famine extending to
            unmanaged anti-social behaviors like cattle rustling. The extremes from land associated
            menaces with little efforts to liberate by
            government and other entities, consequently the menaces have been directly replicated to the livelihoods
            of these communities representing
            an impoverish lifestyle full of problematic countenances.</p>
        <p>EPOK through partnership with government of Kenya, NGOs, private sector
            and state corporate will deploy a reach out strategy which is meant to develop the pastoral communities
            by exploiting their potentiality
            and valuable resources within their vicinities.</p>
        <p>Our multidimensional projects are strides to ensure a change of the
            narrative ,
            strategies to uplift the living standards of pastoral communities to an enabling environment with
            minimized scarcity through educational
            provision, good lifestyle and improved facilities.</p>
    </div>
    <div class="reach_cont">
        <div class="reach">
            <div class="heading">
                <h2>Reach us</h2>
                <p>We Empower To Power</p>
            </div>
            <div id="contact" class="form">
                <form action="includes/contact.inc.php" method="POST" data-aos="zoom-in-up"
                    data-aos-anchor-placement="top-bottom">
                    <h2>Leave us a message</h2>
                    <?php
                    $name_error = '';
                    $mail_error = '';
                    $subject_error = '';
                    $message_error = '';
                    $mail_invalid = "Please use a valid E-mail";

                    //                  !ERROR HANDLERS

                    if (isset($_GET['contact'])) {
                        $contactcheck = $_GET['contact'];

                        if ($contactcheck == "empty_name") {
                            $name_error = "Please enter your name";
                        } elseif ($contactcheck == "empty_mail") {
                            $mail_error = "Please enter your email";
                        } elseif ($contactcheck == "empty_subject") {
                            $subject_error = "Please enter subject";
                        } elseif ($contactcheck == "empty_message") {
                            $message_error = "Please enter your message";
                        } elseif ($contactcheck == "success") {
                            echo '<span class="success">Successful!!  Thank you for contacting us!</span>';
                        }
                    }

                    ?>

                    <?php
                    if (isset($_GET['name'])) {
                        $name = $_GET['name'];
                        echo '<input type="text" class="prefilled"  name="name" placeholder="Your Name" style="text-transform:capitalize;" value="' . $name . '">';
                    }
                    elseif ($name_error) {
                        echo '<span class="error">' . $name_error . '</span><input type="text" name="name" placeholder="name" style="text-transform:capitalize;" class="with_error">';
                    } else {
                        echo '<input type="text" name="name" placeholder="Your Name" style="text-transform:capitalize;">';
                    }
                    ?>
                    <?php
                    if (isset($_GET['mail'])) {
                        $mail = $_GET['mail'];
                        echo ' <input type="text" class="prefilled"  name="mail" placeholder="E-mail" style="text-transform:lowercase;" value="' . $mail . '">';
                    }
                    elseif ($mail_error) {
                        echo '<span class="error">' . $mail_error . '</span><input type="text" name="mail" placeholder="E-mail" class="with_error">';
                    }
                     elseif (isset($_GET['contact'])) {
                         if (isset($_GET['contact']) == "email") {
                            echo '<span class="error">' . $mail_invalid . '</span><input type="text" name="mail" placeholder="E-mail" class="with_error">';
                        }
                            
                        } else {
                        echo '<input type="text" name="mail" placeholder="E-mail" style="text-transform:lowercase;">';
                    }
                    ?>
                    <?php
                    if (isset($_GET['subject'])) {
                        $subject = $_GET['subject'];
                        echo '<input type="text"  class="prefilled"  name="subject" placeholder="Subject" style="text-transform:capitalize;" value="' . $subject . '">';
                    }
                    elseif ($subject_error) {
                        echo '<span class="error">' . $subject_error . '</span><input type="text" name="subject" placeholder="Subject" style="text-transform:capitalize;" class="with_error">';
                    } else {
                        echo '<input type="text" name="subject" placeholder="Subject" style="text-transform:capitalize;">';
                    }
                  ?>
                    <?php
                    if (isset($_GET['message'])) {
                        $message = $_GET['message'];
                        echo '<textarea type="text" class="prefilled"  name="message" id="message" placeholder="Type your message..." value="' . $message . '"></textarea><br>';
                    }
                    elseif ($message_error) {
                        echo '<span class="error">' . $message_error . '</span><textarea type="text" name="message" placeholder="Type your message..." id="message" class="with_error"></textarea><br>';
                    } else {
                        echo '<textarea type="text" name="message" id="message" placeholder="Type your message..." value="' . $message_error . '"></textarea><br>';
                    }
                    ?>


                    <button type="submit" name="submit"><a>SEND</a></button>
                </form>
            </div>
            <div class="links">
                <h2>OR:</h2>
                <p data-aos="fade-left" data-aos-duration="1000"><a class="email"
                        href="mailto:info@empowerpastoralistorg.co.ke"><i class="fas fa-envelope-square"></i> Email
                        Us</a></p>
                <p data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000"><a class="call"
                        href="tel:+254791547324"><i class="fas fa-phone-volume"></i> Call</a></p>
                <p data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000"><a class="whatsapp"
                        href="https://wa.me/254791547324" target="_blank"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                </p>
            </div>
        </div>
    </div>
        <?php
        include 'incs/footer.php';
        ?>
    </footer>
</body>


<script src="js/slider.js"></script>
<!--        AOS         -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
//           !AOS
</script>
<script>
AOS.init({
    duration: 1500,
});
</script>


<!--            !SCROLL INDICATOR JS          -->

<script src="https://code.jquery.com/jquery-3.4.1.js">
//         !SCROLL INDICATOR JS
</script>
<script>
$(window).scroll(function() {
    var scroll = $(window).scrollTop(),
        dh = $(document).height(),
        wh = $(window).height();
    value = (scroll / (dh - wh)) * 100;

    $('#scroll-indicator').css('width', value + '%');
})
</script>

<!--            HIDE NAV ON SCROLL DOWN JS          -->
<script>
//      ! HIDE NAV ON SCROLL DOWN JS 
var lastScrollTop = 0;
navbar = document.getElementById("nav");
window.addEventListener("scroll", function() {
    var scrollTop = window.pageYoffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-80px";
    } else {
        navbar.style.top = "0";
    }
    lastScrollTop = scrollTop;
})
</script>

</html>
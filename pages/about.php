<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/about.css">
    <title>About Us |  EPOK</title>
</head>
<body>

    <div id="nav" class="nav" style="z-index:1000; position:sticky; top:0;">
  <?php
        define('config_include',TRUE);
        include('../incs/nav_pages.php');
    ?>

    </div>
      <?php
        include('../incs/head.php');
    ?>
    
    <div class="content1">
        <div class="image_container">
            <img src="../imgs/1.jpg" alt="Shared Moments">  
            <p>From left, Leng'erded Erisen, Felix
                    Lekishe, Dr. Chelule(Deputy Director of KIRDI) and Mathew Jericho after a presentation of a
                    proposal for partnership on establishment of a leather tanning industry at Samburu county near
                    Laikipia border.</p>
        </div>
        <div class="motto_container">
            <img src="../imgs/logo.jpg" alt="LOGO">
            <h3>Motto:</h3>
            <p>We Empower to Power.</p>
            <h3>Mission:</h3>
            <p>Attaining an Equitable sustainable development through exploitation of untapped
                    resources to a successful lifestyle of comfort.</p>
            <h3>Vision:</h3>
            <p>Establishing a mature economy where all human dimensions
                    are improved to empower Kenyans to higher standards of living.</p>
            <h3>Core Values:</h3>
            <ul style="list-style-type:none;">
                      <p>  <li>Accountability</li>
                        <li>Respect for humanity</li>
                        <li>Commitment</li>
                        <li style="margin-bottom:10px;">Honesty and Transparency</li>
                    </ul>
                    </p>
        </div>
    </div>
<div class="content2">
    <h2><u>ABOUT US</u></h2>
    <main>
            <p>
                Empower Pastoralist Organization of Kenya is a registered non-profit, non-political organization
                which is strategically designated to educate, provide and support pastoral communities
                through multidimensional projects to ensure sustainable development by leveraging funds from our
                diverse partners and donors. Pastoral communities especially the nomads have been forced by their
                lifestyle to live in peripherals of the country, habitually barren lands with limited resources and
                development. Having livelihoods squarely shouldered on their livestock which are vulnerable to a
                stream of menaces i.e. drought, retrospective cultural practices like cattle rustling and diseases,
                which makes them susceptible to poverty, limited access to education which in turn represent a
                continuous
                edgy countenances within and out of their boundaries.</p>
    </main>
                 <p>The organization interest is to be an outreach
                visionary partner of the contemporary pastoral communities with extensive objectives to sustainable
                development. Fixing focus on the untapped potential of pastoral communities and their environment
                to influence national GDP is our great strategy toward making an inclusive, enabling and sustainable
                environment for pastoral communities. Pastoralism is an invisible asset to every growing economy with
                a sustainable value, if its potential is fully exploited. EPOK is focused to unlock the full potential
                and expose to the communities, train them to do it by themselves and evaluate the potential through
                local projects.
            </p>
            <h3>Our People</h3>
            <ul style="color:#000;background-color:rgba(0,0,70,0.3);padding:0 1% 0 1%; list-style-type:none;">
                <li>Board of Directors</li>
                <li>Chairman of the board</li>
                <li>Chairman of the executive committee</li>
                <li>Vice chair</li>
                <li>Chair of finance committee</li>
                <li>Board members</li>
                <li>Sustainability council</li>
            </ul>
            <p>
                The intent purpose of the organization is to be an outreach visionary partner of the contemporary
                pastoral communities
                with extensive objectives to sustainable and enabling environment. A committee to research, evaluate and
                measure every
                interventions proposed by the members through board of directors or our corporate partnerships will pass
                through the scan stage before implementation.
                <br>
                SC
                <br>
                The groundbreaking innovative tools are cordially integrated to the vision, to reflect the untapped
                potential of sumptuous rich environment, which can help the communities grow economically. SC-organized
                discussions and
                communications are targeted at dressing the real sustainability issues which are equitable and
                sustainable.

            </p>
</div>
<?php
include '../incs/footer_pages.php';
?>
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
</body>
</html>
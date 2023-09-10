<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The School</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,400;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/30c799dc65.js"></script>
</head>
<body>

    <section class="header">
        <nav>
            <a href="index.html"><img src="{{ asset('img/logo.jpg') }}" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa-solid fa-rectangle-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">ABOUT US</a></li>
                    <li><a href="">CONTACT US</a></li>
                    <li><a href="">CURRICULUM</a></li>
                    <li><a href="">TEACHER LOGIN</a></li>
                </ul>
            </div>
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>Ireland's Best Centre For Learning</h1>
            <p>Join Ireland's Growing Academy For Brilliant Young Minds <br>Work To Make Our Next Generation The Best Ever</p>
            <a href="" class="hero-btn">Join us now!</a>
        </div>
    </section>

    <!-- lessons -->

    <section class="course">
        <h1>Subjects We Teach</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

        <div class="row">
            <div class="course-col">
                <h3>Juniors</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="course-col">
                <h3>Middle Classes</h3>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
            </div>
            <div class="course-col">
                <h3>Secondary</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
            </div>
        </div>
    </section>


    <!-- School campus information -->

    <section class="campus">
        <h1>Our Local Campus</h1>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti</p>

        <div class="row">
            <div class="campus-col">
                <img src="{{ asset('img/Douglas.jpg') }}" alt="">
                <div class="layer">
                    <h3>DOUGLAS</h3>
                </div>
            </div>
            <div class="campus-col">
            <img src="{{ asset('img/Cork.jpg') }}" alt="">
                <div class="layer">
                    <h3>CORK CITY</h3>
                </div>
            </div>
            <div class="campus-col">
            <img src="{{ asset('img/Carrigaline.jpg') }}" alt="">
                <div class="layer">
                    <h3>CARRIGALINE</h3>
                </div>
            </div>
        </div>
    </section>


    <!-- facilities -->
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Cras volutpat, nunc nec gravida accumsan, velit odio vestibulum nulla, non vehicula enim ex a risus. Integer nunc nulla, convallis nec elementum eu, varius bibendum massa. Sed dignissim non mi id pretium. Aenean dolor erat, tempus nec velit at, aliquam scelerisque massa. Nunc venenatis libero sed odio vehicula, ac tempor turpis blandit.</p>
        
        <div class="row">
            <div class="facilities-col">
            <img src="{{ asset('img/school-library.jpg') }}" alt="">
                <h3>Award Winning Library</h3>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti</p>
            </div>
            <div class="facilities-col">
                <img src="{{ asset('img/swimming-pool.jpg') }}" alt="">
                <h3>Swimming Pool</h3>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti</p>
            </div>
        </div>
    </section>



    <section class="contact-us">
        <h1>Click Here For Enrolling</h1>
        <a href="" class="hero-btn">CONTACT US!</a>
    </section>


    <!-- socials -->
    <section class="socials">
        <h4>Our Social Media Pages</h4>
        <div class="icons">
            <i class="fa fa-facebook fa-lg"></i>
            <i class="fa fa-twitter fa-lg"></i>
            <i class="fa fa-instagram fa-lg"></i> 
        </div>

        <p>Made by John Bracken, based on design from Easy Tutorials</p>
    </section>
    


    <!-- move to top button -->
    <button class="back-to-top" onclick="topFunction()">Back To Top</button>

    <!-- add JS file -->
    <script src={{ asset('js/script.js') }}></script>
    </body>
</html>
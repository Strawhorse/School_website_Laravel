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

    <section class="contact-header">
        <nav>
            <a href="index.html"><img src="{{ asset('img/logo.jpg') }}" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa-solid fa-rectangle-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/about">ABOUT US</a></li>
                    <li><a href="/contact">CONTACT US</a></li>
                    <li><a href="/curriculum">CURRICULUM</a></li>
                    <li><a href="/login">TEACHER LOGIN</a></li>
                </ul>
            </div>
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>        
        <h1>Contact Us</h1>
    </section>

        <!-- about us information for the school -->



    <section class="blog-content">
 

        <div class="comment-box">
            <h1>Leave A Comment</h1>
            <form action="/query" method="post" class="comment-form">
                @csrf
                <!-- to avoid the 419 error -->
                <input type="text" name="person_name" placeholder="Enter Name" >
                <input type="email" name="email" placeholder="Email Address" >
                <input type="number" name="telephone" placeholder="Telephone Number">
                

                <textarea name="contact_message" id="" cols="30" rows="5" placeholder="Leave Your Message Here" ></textarea>
                <button type="" class="hero-btn red-btn">POST COMMENT</button>


                <!-- add in JS verification/bot check here -->

            </form>
        </div>
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
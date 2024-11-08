<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABLimo</title> 

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="about.css">

    <!-- <link rel="stylesheet" href="mediaquiries.css"> -->
    <link rel="stylesheet" href="popup.css">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="cards.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body>
    <div class="popup-screen">
        <div class="popup-box">
            <!-- <i class="fas fa-times close-btn"></i> -->
        <!-- <img src="./img/tick.png" height="45px" alt=""> -->
        
        <p class="mesg"> Enter your details...!
            <!-- <form action="payment.php" method="post">

                    <label for="">Enter name</label>
                    <input type="text" placeholder="Your name" required name="name">
                    <label for="">Enter your number</label>
                    <input type="number" placeholder="Your number" required name="number">
                    <label for="">Select date</label>
                    <input type="date" name="date" id="" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required>
                    <label for="">Select time</label>
                    <input type="time" name="time" id="" required>
                    <label for="">Number of passengers</label>
                    <input type="number" name="time" id="" placeholder="Number of passengers" required>
                    <input type="submit"  value="Book now" >
                </form> -->
            <form action="payment.php" method="post">

                    <label for="">Enter name</label>
                    <input type="text" placeholder="Your name" required name="name">
                 
                    <label for="">Enter your number</label>
                    <input type="number" placeholder="Your number" required name="number">
                 
                    <label for="">Your message</label><br>
                    <textarea rows="5" name="message"></textarea>
                 
                    <input type="submit"  value="Send message" >
                </form>
        </p>
        <div class="icons">

        <a href="https://wa.me/+29293939" class="whatsapp-icon" target="_blank">
    <img src="./pictures/whatsapp-icon.png" alt="WhatsApp Icon">
</a>

        </div>
        <img class="close-btn cross" src="./img/cross.jpg" />
        <!-- <a href="#" class="btn close-btn">Ok</a> -->
    </div>
</div>
    <header> 
        
    <nav class="navbar">
        <div class="navbar-logo">
      <img src="./img/logo.jpg" alt="" height="65px" width="65px">  </div>
        <ul class="navbar-links">
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li class="services-menu">
                <a href="#gallery">Gallery</a>
            </li>
            <li><a href="#contact" onclick="spot()">Contact us</a></li>
        </ul>
        <button class="navbar-button" onclick="spot()">Advance booking</button>
        <div class="navbar-toggle">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </nav>

    <div class="banner-container">
        <h1>Welcome  towards
            <span class="typin"> Journey to Excellence</span> 
        </h1>
        <p>Experience unparalleled luxury and convenience with ABLimo, your premier choice for cab advance booking. Our top-notch fleet and highly trained drivers ensure a seamless and sophisticated travel experience.
            <br/>
            <br/>
            Book your ride in advance and enjoy.
        </p>

            <button onclick="spot()">Advance booking</button>
    </div>

</header>
<!-- About section      -->
<section class="about" id="about">
  
    <div class="content side-in from-right">
        <h1 class="m">Premier cab booking platform in      
            <span> Canada </span> 
        </h1>
        <div class="sub-content">
            <div class="about1">
                <h3>Boost Your travel experience with us!</h3>
                <p>
                    Experience luxury cab booking services for CEOs and VIPs. Enjoy:

                </p>
<ul>

<li> High-end vehicles</li>    
<li>     Professional chauffeurs</li>    
<li>          Real-time tracking</li>    
<li>             Flexible scheduling</li>    
<li>     Unparalleled discretion
</li>    
</ul>
                    
            </div>
            
        </div>
       
    </div>
    <img src="./img/banner.jpg" class="side-in from-left" alt="">

</section>
        <div class="pets" id="gallery">
            <p class="pp"> Gallery</p>
            <div class="card-list">

                <a href="./" class="card-item animate-left">
                <img src="./img/car1.jpg" alt="Card Image" >
                </a>
                    

                <a href="./" class="card-item animate-left">
                <img src="./img/car4.jpg" alt="Card Image" >
                </a>

                <a href="./" class="card-item animate-left">
                <img src="./img/car2.jpg" alt="Card Image" >
                </a>
                    
                <a href="./" class="card-item animate-left">
                <img src="./img/car3.jpg" alt="Card Image" >
                </a>
                <a href="./" class="card-item animate-left">
                <img src="./img/car5.jpg" alt="Card Image" >
                </a>
                <a href="./" class="card-item animate-left">
                <img src="./img/car6.jpg" alt="Card Image" >
                </a>
                <a href="./" class="card-item animate-left">
                <img src="./img/car7.jpg" alt="Card Image" >
                </a>
                    
                
                <a href="./" class="card-item animate-left">
                <img src="./img/car1.jpg" alt="Card Image" >
                </a>
        </div>
                    
<footer>&copy; <a href="index.php"> ABLimo </a> All rights reserved</footer>




<script src="script.js"></script>
</body>
</html>

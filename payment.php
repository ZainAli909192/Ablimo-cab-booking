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

</head>
<body>


<div class="popup-screen">
        <div class="popup-box payment-form">
            <!-- <i class="fas fa-times close-btn"></i> -->
        <!-- <img src="./img/tick.png" height="45px" alt=""> -->
        
        <p class="mesg"> Enter Payment details...!
        <form action="store.php" method="post" class="">
    <label for="cardNumber">Card Number</label>
    <input type="text" id="cardNumber" placeholder="Card Number" required name="card_number">
    
    <div class="form-group">
        <div class="row">
            <label for="expiryDate">Expiry date</label>
            <input type="date" id="expiryDate" required name="expiry_date">
        </div>
        <div class="row">
            <label for="cvvNumber">CVV number</label>
            <input type="text" id="cvvNumber" placeholder="CVV" maxlength="3" required name="cvv_number">
        </div>
    </div>
    
    <input type="submit" value="Generate OTP">
</form>
   </p>
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
                <a href="#services">Services</a>
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




<script src="script.js"></script> 
<script>
    // spot()
</script>
</body>
</html>

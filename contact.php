<!DOCTYPE html5>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="./script.js" defer></script>
  <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
  <style>
  
.header a{
        text-decoration:none;
        color:white;
      }
      .header{
        background:pink;
        background: linear-gradient(
    90deg,
    pink 0%,
    rgb(250, 135, 206) 35%,
    rgb(250, 102, 230) 100%
  );
        position:sticky;
        top:0;
        width:100%;
        padding:10px 30px;
        z-index: 1001; 
      }
      .fa-bars{
        display:none
      }

      /* Media queris */
      @media(max-width:748px){
        .nav-links{
        padding:30px;
        background:green;
         position:absolute;
          top:70px;
          flex-direction:column;
          display:flex;
          width: 20rem;
          left:0;
          z-index:1001;
        }
        .products .row .col-md-4{
          width: 100%;
          gap:1rem;
          z-index: -1;
        }
        .fa-bars{
          font-size:34px;
          font-weight:600;
          cursor:pointer;
          display:block;
        }
        .OpenMenu{
          display:none;
        }
      }
  </style>
</head>

<body>
<header class="header">
<H1><a href="index.php">SALON</a></H1>
    <div class="nav-links animate__animated animate__fadeInRight" id="NavLinks">
      <a href="./index.php">HOME</a>
      <a href="products.php">PRODUCT</a>
      <a href="services.php">SERVICES</a>
      <a href="contact.php">CONTACT</a>
      <a href="about.php">ABOUT US</a>
      <a href="login.php">LOGIN</a>
    </div>
    <i class="fa-solid fa-bars" onclick="OpenMenu()"></i>
   
  </header>

  <section class="contact text-center">
    <h1 class="text-center">OUR CONTACTS</h1>
    <div class="row ">
      <div class="col-md-4 text-center">
        <div class="contact-detail">
          <i class="fa-solid fa-envelope"></i><br>
          <a href="mailto:pascalinewamuyu99@gmail.com">pascalinewamuyu99@gmail.com</a><br>
          <button>Let's talk</button>
        </div>
        <div class="contact-detail">
          <i class="fa-solid fa-phone"></i><br>
          <a href="">+254790555233</a><br>
          <button>Let's talk</button>
        </div>
        <div class="contact-detail">
          <i class="fa-brands fa-whatsapp"></i><br>
          <a href="https://wa.me/0790555233">+254790555233</a><br>
          <button>Let's talk</button>
        </div>

      </div>
      <div class="col-md-8">
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.9910372383524!2d36.82286131427406!3d-1.166797935835415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3d5c7901a653%3A0x487806129fee7f7b!2sKiambu%20town!5e0!3m2!1ssw!2ske!4v1676906170096!5m2!1ssw!2ske"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    <div class="contact-form text-center">
      <div class="text-center col-md-10 ">
        <form action="">
          <input type="text" placeholder="Your Name">
          <input type="email" placeholder="Your email">
          <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
          <input type="submit">
        </form>
      </div>
    </div>
  </section>

  <section class="footer">
    <footer class="">
      <div class="row">
        <div class="col-md-3">
          <h3>Leo's Women hair</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, corrupti nesciunt. Iusto qui nulla, sapiente
            magnam, quasi architecto voluptas natus hic sed commodi, suscipit velit deleniti nihil minima? Ab,
            accusantium!</p>
        </div>
        <div class="col-md-3">
          <h4>Important Links</h4>
          <ul>
            <li><a href="">Terms of Service</a></li>
            <li><a href="">Support</a></li>
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">Status</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h4>Mode Of Payment</h4>
          <ul>
            <li><a href="">M-pesa</a></li>
            <li><a href="">Paypal</a></li>
            <li><a href="">Payoneer</a></li>
            <li><a href="">Amazon</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Product</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <p class="text-center">All right Reserved. Developed by <i><b>Pascaline Wamuyu</b></i>.</p>
        <hr>
       
      </div>
    </footer>
  </section>
  <script>
  var NavLinks = document.getElementById('NavLinks');
  function OpenMenu(){
    NavLinks.classList.toggle("OpenMenu");
  }
</script>
</body>


</html>
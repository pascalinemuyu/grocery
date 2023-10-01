<!DOCTYPE html5>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script type="text/javascript" src="./script.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="style.css">
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
  <section class="about">
    <h1 class="text-center">ABOUT US</h1>
    <div class="row">
      <div class="col-md-6">
        <h4>WHY US?</h4>
        <h5>Leo's Woman Hair Cut</h5>
        <p>Welcome to Leo's Woman Hair Cut Beauty your hair destination for all your hair and beauty needs. Our salon
          was founded in 2010 by hair stylist and make up artist Maria Sanchez, who had a vision of creating a warm and
          welcoming space where clients could relax and feel their best.
          At Leo Woman beauty, our mission isto provide top-quality services in a comfortable sylish setting. We
          specialize in hair dresssing, colour treatment, make up, massage, pedicure, manicures and special occasion
          services, and we pride ourselves on staying up-to date with the latest trends and techniques. Our team of
          experienced and talented stylists is committed to creating a personalized experience for each every content.
        </p>
      </div>
      <div class="col-md-6">
        <img src="bootstrap/Images/MAK.jpg" alt="">
      </div>
    </div>
    <section class="">
      <div class="our-team">
        <h1 class="text-center">MEET OUR TEAM</h1>
        <div class="row row-1">
          <div class="col-md-6">
            <img src="bootstrap/Images/team-1.png" alt="">
          </div>
          <div class="col-md-6">
            <p>
              Maria has over fifteenyears of experience in the beauty industry and is passionate about creating looks
              tht
              make her clients feel confident and beayutiful.She specializes in hair cutting and styling as well a
              bridal
              and special occasion make up.</p>
            <h4>Maria Sanchez</h4>
            <h6>Founder and master stylist.</h6>
            <div class="social-media-icons">
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-pinterest"></i>
            </div>
          </div>
        </div>
        <div class="row row-1">

          <div class="col-md-6">
            <p>
              Daniel has been in leo's hair beauty for beauty for five years and has loyal following of clients who love
              her
              precision cutting and expert colouring. She is also skilled in hair extensions and other special
              treatment.
            </p>
            <h4>Daniela Atieno</h4>
            <h6>Senior stylist.</h6>
            <div class="social-media-icons">
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-pinterest"></i>
            </div>
          </div>
          <div class="col-md-6">
            <img src="bootstrap/Images/team-2.png" alt="">
          </div>
      </div>
      <div class="row row-1">
        <div class="col-md-6">
          <img src="bootstrap/Images/team-3.png" alt="">
        </div>
        <div class="col-md-6">
          <p>
            She is our go-to artist for creating flawless natural looking make-up that enhances her clients natural
            beauty. She has worked with numerous brides and other special occasion clients and is also known for her
            attetion to detail. She also offers massage at our clients. </p>
          <h4>Maggie Fel.</h4>
          <h6>Make up artist.</h6>
          <div class="social-media-icons">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-pinterest"></i>
          </div>
        </div>
      </div>
      </div>
    </section>
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
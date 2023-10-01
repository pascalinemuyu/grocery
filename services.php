<!DOCTYPE HTML PUBLIC>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="services.css">
  <meta charset="utf-8">
  <metaname content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"></script>
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <title>SERVICES</title>
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
        .services .row .col-md-4{
          z-index: -1;
          width:100%;
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

  <section class="services">
    <h1 class="text-center">OUR SERVICES</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="services-box">

          <div class=" service-details-down">
            <h4 class="text-center">Big braids-curly</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eius exercitationem eum est deleniti.
              Ipsum
              corporis accusamus nobis saepe architecto, ullam nemo, cum rerum aliquam iusto aut culpa sequi assumenda!
            </p>
          </div>
          <img src="bootstrap/images/big-braids-curly-hair-700.jpg" alt="">
        </div>
      </div>
      <div class="col-md-4">
        <div class="services-box">
          <img src="bootstrap/images/Salon1.png" alt="">
          <div class="service-details service-details-down">
            <h4 class="text-center">Weaving</h4>
            <p>weaving, production of fabric by interlacing two sets of yarns so that they cross each other, normally at
              right angles, usually accomplished with a hand- or power-operated loom.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="services-box">
          <img src="bootstrap/images/braided-bob-700.jpg" alt="">
          <div class="service-details service-details-down">
            <h4 class="text-center">Bob</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eius exercitationem eum est deleniti.
              Ipsum
              corporis accusamus nobis saepe architecto, ullam nemo, cum rerum aliquam iusto aut culpa sequi assumenda!
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="services-box">
          <div class=" service-details-down">
            <h4 class="text-center">Updo</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eius exercitationem eum est deleniti.
              Ipsum
              corporis accusamus nobis saepe architecto, ullam nemo, cum rerum aliquam iusto aut culpa sequi assumenda!
            </p>
          </div>
          <img src="bootstrap/images/braided-updo-700.jpg" alt="">
        </div>
      </div>
      <div class="col-md-4">
        <div class="services-box">
          <img src="bootstrap/images/facial-spa-massage.jpg" alt="">
          <div class="service-details service-details-down">
            <h4 class="text-center">Facial Massage</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eius exercitationem eum est deleniti.
              Ipsum
              corporis accusamus nobis saepe architecto, ullam nemo, cum rerum aliquam iusto aut culpa sequi assumenda!
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="services-box">

          <div class="service-details-down">
            <h4 class="text-center">Fulani</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eius exercitationem eum est deleniti.
              Ipsum
              corporis accusamus nobis saepe architecto, ullam nemo, cum rerum aliquam iusto aut culpa sequi assumenda!
            </p>
          </div>
          <img src="bootstrap/images/fulani-braids-700.jpg" alt="">
        </div>
      </div>
      <div class="col-md-4">
        <div class="services-box">
          <img src="bootstrap/images/feed-in-braids-ponytail-700.jpg" alt="">
          <div class="service-details service-details-down">
            <h4 class="text-center">Feed in Ponytail</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eius exercitationem eum est deleniti.
              Ipsum
              corporis accusamus nobis saepe architecto, ullam nemo, cum rerum aliquam iusto aut culpa sequi assumenda!
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="services-box">

          <div class=" service-details-down">
            <h4 class="text-center">Haircut</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eius exercitationem eum est deleniti.
              Ipsum
              corporis accusamus nobis saepe architecto, ullam nemo, cum rerum aliquam iusto aut culpa sequi assumenda!
            </p>
          </div>
          <img src="bootstrap/images/HAIRCUT.jpg" alt="">
        </div>
      </div>
      <div class="col-md-4">
        <div class="services-box">
          <img src="bootstrap/images/half-up-half-down-feed-in.jpg" alt="">
          <div class="service-details service-details-down">
            <h4 class="text-center">Half Up half Down</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eius exercitationem eum est deleniti.
              Ipsum
              corporis accusamus nobis saepe architecto, ullam nemo, cum rerum aliquam iusto aut culpa sequi assumenda!
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="services-box">

          <div class=" service-details-down">
            <h4 class="text-center">Make Up</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eius exercitationem eum est deleniti.
              Ipsum
              corporis accusamus nobis saepe architecto, ullam nemo, cum rerum aliquam iusto aut culpa sequi assumenda!
            </p>
          </div>
          <img src="bootstrap/images/img-1.jpg" alt="">
        </div>
      </div>
      <div class="col-md-4">
        <div class="services-box">
          <img src="bootstrap/images/img-2.jpg" alt="">
          <div class="service-details service-details-down">
            <h4 class="text-center">Manicure</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eius exercitationem eum est deleniti.
              Ipsum
              corporis accusamus nobis saepe architecto, ullam nemo, cum rerum aliquam iusto aut culpa sequi assumenda!
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="services-box">

          <div class="service-details-down">
            <h4 class="text-center">Make Up</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eius exercitationem eum est deleniti.
              Ipsum
              corporis accusamus nobis saepe architecto, ullam nemo, cum rerum aliquam iusto aut culpa sequi assumenda!
            </p>
          </div>
          <img src="bootstrap/images/img-4.jpg" alt="">
        </div>
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
        <p class="text-center">All right Reserved. Developed by <i><b>Pascaline Wamuyu</b></i></p>
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
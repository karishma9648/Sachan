<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include 'header-link.php'; ?>
</head>

<body>
  <?php include 'header.php'; ?>


  <!-- HERO SECTION -->
  <section class="hero">


    <video autoplay muted loop>
      <source src="image/hero.mp4" type="video/mp4">
    </video>


    <div class="hero-content">
      <p>We take care of the details- booking, itineraries, and on-ground support -
      </p>
      <h1>so you can focus on the adventure.</h1>

      <div class="explore">"Plan less. Explore more"</div>
      <div class="arrow">↓</div>
    </div>

  </section>

  <section class="welcome-section">

    <h2>WELCOME TO SACHAN TRAVELS</h2>

    <div class="welcome-line"></div>

    <p class="welcome-text">
      <!-- When you work with Sachan Travels, you aren’t simply a confirmation number, or a call in a hold cue.
        Your investment is personal to us. From our thorough inquiry form to the moment that you return home,
        we are an advocate for your vacation experience. We take the extra steps to ensure that each detail
        of your vacation is perfectly customized to your travel style. -->
      At Sachan Tours and Travels, you’re never just a booking—you’re a traveler with a story.
      We welcome every kind of journey and every kind of traveler.

      Whether you seek adventure, relaxation, exploration, or simplicity, we design travel experiences that fit you perfectly. With end-to-end services and a personal touch, we make sure your journey is smooth, comfortable, and truly yours.
    </p>

    <div class="script-text">
      One Plan. Every Mile Covered.
    </div>

    <a href="#" class="learn-btn">LEARN MORE</a>

  </section>

  <section class="services">

    <h2>OUR SERVICES</h2>
    <p>YOUR KIND OF TRAVEL</p>

    <div class="services-grid">

      <!-- CARD 1 -->
      <div class="card">
        <img src="image/zakariae-daoui-shfpzxa2iys-unsplash.jpg">
        <div class="card-title">SOLO ADVENTURES</div>

        <div class="overlay">
          We believe that independent travel can create a unique level of connection with the world.
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="card">
        <img src="image/wayan-parmana-zzsawsrxrqy-unsplash.jpg">
        <div class="card-title">HONEYMOONS + ROMANCE</div>

        <div class="overlay">
          Perfect romantic getaways curated specially for couples.
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="card">
        <img src="image/caleb-jones-rppvroqmr2s-unsplash.jpg">
        <div class="card-title">FAMILY + GROUP GETAWAYS</div>

        <div class="overlay">
          Memorable trips designed for families and groups.
        </div>
      </div>

      <!-- CARD 4 -->
      <div class="card">
        <img src="image/lucija-ros-123uadxn-jy-unsplash.jpg">
        <div class="card-title">DESTINATION WEDDINGS + EVENTS</div>

        <div class="overlay">
          Celebrate your special moments in breathtaking destinations.
        </div>
      </div>

    </div>

  </section>


  <section class="subscribe-section">


    <div class="subscribe-text">
      <h2>Find out how we work!</h2>
      <p>Access our "How we work" guide + subscribe!</p>
    </div>


    <form class="subscribe-container">

      <input type="text" placeholder="First Name">
      <input type="text" placeholder="Last Name">
      <input type="email" placeholder="Email Address">

      <button type="submit">SUBSCRIBE</button>

    </form>

  </section>

  <section class="about-section">

    <div class="about-container">


      <div class="about-images">
        <img src="image/guillaume-marques-zlgkpkwsvxs-unsplash.jpg" class="img-back">
        <img src="image/dan-calderwood-pbokkdfu7ic-unsplash.jpg" class="img-front">
      </div>


      <div class="about-content">

        <h2>SACHAN TOUR AND <br>TRAVELS WAS<br>FOUNDED IN 2010 </h2>

        <div class="line"></div>

        <p>
          <!-- To provide a modernized solution to travel planning. Our philosophy is that travel isn’t only about seeing a destination, but it is about feeling the culture. We focus on experiential travel, allowing you to fully immerse yourself into your chosen destination. -->
          With a simple philosophy that—travel should be easy, meaningful, and accessible to all.
          We design journeys that go beyond itineraries, helping you experience every destination in a way that feels authentic and effortless.
        </p>

        <div class="script">About Us</div>

        <a href="#" class="btn">LEARN MORE</a>

      </div>

    </div>

  </section>


  <section class="travel-testimonial-sec">
    <div id="travelCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">

      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="image/abdessalam-belfakir-fjjiibju0ie-unsplash.jpg" class="d-block w-100">

          <div class="overlay"></div>

          <div class="carousel-caption custom-caption">
            <h2>HAPPY TRAVELLERS</h2>
            <p>
              "Our trip was absolutely incredible! We really appreciated how smoothly our trip began;
              the resort was a dream and everything was perfectly arranged."
            </p>
            <h5 class="signature">Kristina P.</h5>
            <span>ANTIGUA HONEYMOON</span>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="image/1565015_w-3840_h-2160_q-70_m-crop.jpg" class="d-block w-100">

          <div class="overlay"></div>

          <div class="carousel-caption custom-caption">
            <h2>AMAZING EXPERIENCE</h2>
            <p>
              "Everything was seamless from start to finish. The staff, the food,
              and the views were unforgettable. Truly a once-in-a-lifetime trip!"
            </p>
            <h5 class="signature">John D.</h5>
            <span>MALDIVES TRIP</span>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <img src="image/alice-e6fheghzfju-unsplash.jpg" class="d-block w-100">

          <div class="overlay"></div>

          <div class="carousel-caption custom-caption">
            <h2>PERFECT VACATION</h2>
            <p>
              "We loved every moment—from beach relaxation to adventure activities.
              Everything exceeded our expectations!"
            </p>
            <h5 class="signature">Emily R.</h5>
            <span>BALI ESCAPE</span>
          </div>
        </div>

      </div>




      <button class="carousel-control-prev" type="button" data-bs-target="#travelCarousel" data-bs-slide="prev">
        <span class="custom-arrow">&#8592;</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#travelCarousel" data-bs-slide="next">
        <span class="custom-arrow">&#8594;</span>
      </button>

    </div>
  </section>

  <section class="blog-sec-custom py-5">
    <div class="container">


      <div class="text-center mb-5">
        <h2 class="blog-title">ON THE BLOG</h2>
        <div class="blog-line"></div>
      </div>


      <div class="row blog-row-custom justify-content-center">


        <div class="col-md-6 col-lg-4">
          <div class="blog-card">
            <div class="blog-img">
              <img src="image/IMG_5735.png" alt="">
            </div>
            <div class="blog-content">
              <h5 class="blog-heading">
                <a href="#">OUR RECENT STAY: PACUARE LODGE COSTA RICA</a>
              </h5>
              <p>
                Imagine a riverside eco-lodge deep in the Costa Rican rainforest,
                it’s remote but you do not have to sacrifice
              </p>
              <span class="arrow">→</span>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4">
          <div class="blog-card">
            <div class="blog-img">
              <img src="image/IMG_7570-768x1024.png" alt="">
            </div>
            <div class="blog-content">
              <h5 class="blog-heading">
                <a href="#">CHEERS TO AN UNFORGETTABLE OKTOBERFEST!</a>
              </h5>
              <p>
                Our travel advisors raised their steins in celebration of the unforgettable
                memories made at Oktoberfest in Munich,
              </p>
              <span class="arrow">→</span>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4">
          <div class="blog-card">
            <div class="blog-img">
              <img src="image/JT-Edgartown-Harbor-Lighthouse-scaled.jpg" alt="">
            </div>
            <div class="blog-content">
              <h5 class="blog-heading">
                <a href="#">OUR RECENT STAY: MARTHA’S VINEYARD</a>
              </h5>
              <p>
                When you think about Martha’s Vineyard, vibrant hydrangeas,
                lighthouses, stunning cedar shingled
              </p>
              <span class="arrow">→</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="seen-sec">
    <div class="container text-center">


      <h2 class="seen-title">AS SEEN IN</h2>
      <div class="seen-line"></div>


      <div class="seen-logos d-flex justify-content-center align-items-center flex-wrap">
        <img src="image/the_knot.png">
        <img src="image/untitled_design.png">
        <img src="image/flytographer_logo.png">
        <img src="image/instagram_graphics.png">
        <img src="image/931-9313421_brides-logo-brides-magazine.png">
        <img src="image/abdessalam-belfakir-fjjiibju0ie-unsplash.jpg">
        <img src="image/alice-e6fheghzfju-unsplash.jpg">
      </div>

    </div>


    <div class="seen-circle">
      <div class="compass"><img src="image/submark_1_9.png" class="compass-img"></div>
    </div>
  </section>





  <section class="insta-section">
    <div class="container-fluid">
      <div class="row align-items-center">


        <div class="col-md-8 left-strip">
          <div class="image-row">

            <img src="image/alice-mindru-jy4of77lqmm-unsplash.jpg">
            <img src="image/caleb-jones-rppvroqmr2s-unsplash.jpg">
            <img src="image/alisa-anton-6ocfhsdgvcc-unsplash.jpg">
            <img src="image/chandra-oh-ciirjh2gkek-unsplash.jpg">
            <img src="image/anh-q-tran-rzizmvbjkbc-unsplash.jpg">
            <img src="image/jose-maria-sava-3r9igc-6st8-unsplash.jpg">


            <div class="overlay">
              <span class="script-text">exploring the world</span>
              <h2>Follow the adventure</h2>
              <button>@SACHANTRAVELS</button>
            </div>

          </div>
        </div>


        <div class="col-md-4 right-space"></div>

      </div>
    </div>
  </section>










  <?php include 'footer.php'; ?>
</body>

</html>
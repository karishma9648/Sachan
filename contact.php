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
    <!-- content -->

<section class="hero">

    
    <video autoplay muted loop>
        <source src="image/hero.mp4" type="video/mp4">
    </video>

   
    <div class="hero-content">
       
        <h1>Ready To Get Away?</h1>

        <div class="explore">Let's plan your adventure</div>
        <div class="arrow">↓</div>
    </div>

</section>

<section class="et_contact_section">
    <div class="et_contact_container">

        <h2 class="et_contact_title">Let's Plan Your Trip</h2>
        <p class="et_contact_subtitle">
            Fill out the form below and we will match you with the perfect travel advisor.
        </p>

        <form class="et_contact_form">

            <div class="et_form_group">
                <label>First Name</label>
                <input type="text" placeholder="First Name" required>
            </div>

            <div class="et_form_group">
                <label>Last Name</label>
                <input type="text" placeholder="Last Name" required>
            </div>

            <div class="et_form_group">
                <label>Email Address</label>
                <input type="email" placeholder="Email Address" required>
            </div>

            <div class="et_form_group">
                <label>Phone</label>
                <input type="tel" placeholder="(###) ### ####" required>
            </div>

            <div class="et_form_group">
                <label>Travel Agent Preference</label>
                <select>
                    <option>Select Agent</option>
                    <option>Jennifer</option>
                    <option>Jacob</option>
                    <option>Chelsea</option>
                    <option>Robin</option>
                </select>
            </div>

            <div class="et_form_group et_full_width">
                <label>Home Address</label>
                <textarea rows="4" placeholder="Enter your address"></textarea>
            </div>

            <button type="submit" class="et_submit_btn">Submit</button>

        </form>

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
     <!-- content end -->
      <?php include 'footer.php'; ?>

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
            <button>@EXPLORATEURTRAVEL</button>
          </div>

        </div>
      </div>

      
      <div class="col-md-4 right-space"></div>

    </div>
  </div>
</section>
</body>
</html>
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

<div class="cab-hero-sec">
  
  <!-- Background -->
  <div class="cab-hero-bg"></div>

  <!-- Overlay -->
  <div class="cab-hero-overlay"></div>

  <!-- Content -->
  <div class="container cab-hero-content text-center">
    <h1>
      Explore Top Routes for Outstation Cabs <br>
      Starting @ ₹10/km*
    </h1>

    <p>
      Book Reliable & Comfortable Journeys with Us.
    </p>

    <div class="cab-dots">
      <span class="active"></span>
      <span></span>
    </div>
  </div>

  <!-- Car Image -->
  <!-- <img src="image/cab-tb-dt-110925.avif" class="cab-car"> -->

</div>


<div class="cab-route-sec container my-5">

  <!-- TOP TEXT -->
  <p class="text-center cab-top-text">
    When it comes to hiring outstation cabs for your trips to other cities, you can count on us!
  </p>

  <h4 class="text-center cab-heading">
    Explore Top Routes from Regions Mentioned Below:
  </h4>

  <!-- TABS -->
  <!-- <div class="d-flex justify-content-center gap-3 flex-wrap my-4">
    <button class="cab-tab active">NORTH</button>
    <button class="cab-tab">SOUTH</button>
    <button class="cab-tab">WEST</button>
    <button class="cab-tab">CENTRAL</button>
    <button class="cab-tab">EAST/NORTH-EAST</button>
  </div> -->/
  <ul class="nav justify-content-center gap-3 flex-wrap my-4" id="cabTab" role="tablist">
  
  <li class="nav-item">
    <button class="cab-tab active" data-bs-toggle="tab" data-bs-target="#north">NORTH</button>
  </li>

  <li class="nav-item">
    <button class="cab-tab" data-bs-toggle="tab" data-bs-target="#south">SOUTH</button>
  </li>

  <li class="nav-item">
    <button class="cab-tab" data-bs-toggle="tab" data-bs-target="#west">WEST</button>
  </li>

  <li class="nav-item">
    <button class="cab-tab" data-bs-toggle="tab" data-bs-target="#central">CENTRAL</button>
  </li>

  <li class="nav-item">
    <button class="cab-tab" data-bs-toggle="tab" data-bs-target="#east">EAST/NORTH-EAST</button>
  </li>

</ul>

  <!-- CAROUSEL -->
  <!-- <div id="cabCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
    <div class="carousel-inner"> -->

      <!-- SLIDE -->
      <!-- <div class="carousel-item active">
        <div class="row g-4"> -->

          <!-- CARD -->
          <!-- <div class="col-lg-3 col-md-6">
            <div class="cab-card">
              <img src="https://images.unsplash.com/photo-1587135991058-8816a7f0c6b4">
              <div class="cab-card-body">
                <small>Cabs Between</small>
                <h6>Delhi & Agra</h6>

                <div class="cab-price">
                  <span>SEDAN</span>
                  <small>Starting @ ₹2,900*</small>
                </div>

                <div class="cab-price">
                  <span>SUV</span>
                  <small>Starting @ ₹3,250*</small>
                </div>

                <button class="cab-btn">BOOK NOW</button>
              </div>
            </div>
          </div> -->

          <!-- COPY MORE CARDS -->
          <!-- <div class="col-lg-3 col-md-6">
            <div class="cab-card">
              <img src="https://images.unsplash.com/photo-1599661046289-e31897846e41">
              <div class="cab-card-body">
                <small>Cabs Between</small>
                <h6>Delhi & Jaipur</h6>

                <div class="cab-price">
                  <span>SEDAN</span>
                  <small>Starting @ ₹3,600*</small>
                </div>

                <div class="cab-price">
                  <span>SUV</span>
                  <small>Starting @ ₹4,500*</small>
                </div>

                <button class="cab-btn">BOOK NOW</button>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="cab-card">
              <img src="https://images.unsplash.com/photo-1564507592333-c60657eea523">
              <div class="cab-card-body">
                <small>Cabs Between</small>
                <h6>Delhi & Mathura</h6>

                <div class="cab-price">
                  <span>SEDAN</span>
                  <small>Starting @ ₹2,500*</small>
                </div>

                <div class="cab-price">
                  <span>SUV</span>
                  <small>Starting @ ₹3,250*</small>
                </div>

                <button class="cab-btn">BOOK NOW</button>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="cab-card">
              <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb">
              <div class="cab-card-body">
                <small>Cabs Between</small>
                <h6>Delhi & Chandigarh</h6>

                <div class="cab-price">
                  <span>SEDAN</span>
                  <small>Starting @ ₹3,400*</small>
                </div>

                <div class="cab-price">
                  <span>SUV</span>
                  <small>Starting @ ₹4,350*</small>
                </div>

                <button class="cab-btn">BOOK NOW</button>
              </div>
            </div>
          </div>

          

        </div>
      </div>

        <!-- <div class="carousel-item active">
        <div class="row g-4">

          <!-- CARD -->
          <!-- <div class="col-lg-3 col-md-6">
            <div class="cab-card">
              <img src="https://images.unsplash.com/photo-1587135991058-8816a7f0c6b4">
              <div class="cab-card-body">
                <small>Cabs Between</small>
                <h6>Delhi & Agra</h6>

                <div class="cab-price">
                  <span>SEDAN</span>
                  <small>Starting @ ₹2,900*</small>
                </div>

                <div class="cab-price">
                  <span>SUV</span>
                  <small>Starting @ ₹3,250*</small>
                </div>

                <button class="cab-btn">BOOK NOW</button>
              </div>
            </div>
          </div> --> 

          <!-- COPY MORE CARDS -->
          <!-- <div class="col-lg-3 col-md-6">
            <div class="cab-card">
              <img src="https://images.unsplash.com/photo-1599661046289-e31897846e41">
              <div class="cab-card-body">
                <small>Cabs Between</small>
                <h6>Delhi & Jaipur</h6>

                <div class="cab-price">
                  <span>SEDAN</span>
                  <small>Starting @ ₹3,600*</small>
                </div>

                <div class="cab-price">
                  <span>SUV</span>
                  <small>Starting @ ₹4,500*</small>
                </div>

                <button class="cab-btn">BOOK NOW</button>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="cab-card">
              <img src="https://images.unsplash.com/photo-1564507592333-c60657eea523">
              <div class="cab-card-body">
                <small>Cabs Between</small>
                <h6>Delhi & Mathura</h6>

                <div class="cab-price">
                  <span>SEDAN</span>
                  <small>Starting @ ₹2,500*</small>
                </div>

                <div class="cab-price">
                  <span>SUV</span>
                  <small>Starting @ ₹3,250*</small>
                </div>

                <button class="cab-btn">BOOK NOW</button>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="cab-card">
              <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb">
              <div class="cab-card-body">
                <small>Cabs Between</small>
                <h6>Delhi & Chandigarh</h6>

                <div class="cab-price">
                  <span>SEDAN</span>
                  <small>Starting @ ₹3,400*</small>
                </div>

                <div class="cab-price">
                  <span>SUV</span>
                  <small>Starting @ ₹4,350*</small>
                </div>

                <button class="cab-btn">BOOK NOW</button>
              </div>
            </div>
          </div>

          

        </div>
      </div>

   

    </div> -->

    <!-- ARROWS -->
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#cabCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#cabCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div> -->

  <div class="tab-content">

  <!-- NORTH -->
  <div class="tab-pane fade show active" id="north">

    <div id="northCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500"
     data-bs-pause="false">
      <div class="carousel-inner">

        <!-- SLIDE 1 -->
        <!-- <div class="carousel-item active">
          <div class="row g-4"> -->
            <!-- 4 cards -->
            <!-- <div class="col-lg-3 col-md-6">
              <div class="cab-card">
                <img src="https://images.unsplash.com/photo-1587135991058-8816a7f0c6b4">
                <div class="cab-card-body">
                  <small>Cabs Between</small>
                  <h6>Delhi & Agra</h6>
                  <button class="cab-btn">BOOK NOW</button>
                </div>
              </div>
            </div>

             <div class="col-lg-3 col-md-6">
              <div class="cab-card">
                <img src="https://images.unsplash.com/photo-1587135991058-8816a7f0c6b4">
                <div class="cab-card-body">
                  <small>Cabs Between</small>
                  <h6>Delhi & Agra</h6>
                  <button class="cab-btn">BOOK NOW</button>
                </div>
              </div>
            </div>

             <div class="col-lg-3 col-md-6">
              <div class="cab-card">
                <img src="https://images.unsplash.com/photo-1587135991058-8816a7f0c6b4">
                <div class="cab-card-body">
                  <small>Cabs Between</small>
                  <h6>Delhi & Agra</h6>
                  <button class="cab-btn">BOOK NOW</button>
                </div>
              </div>
            </div>

             <div class="col-lg-3 col-md-6">
              <div class="cab-card">
                <img src="https://images.unsplash.com/photo-1587135991058-8816a7f0c6b4">
                <div class="cab-card-body">
                  <small>Cabs Between</small>
                  <h6>Delhi & Agra</h6>
                  <button class="cab-btn">BOOK NOW</button>
                </div>
              </div>
            </div> -->

            <!-- aur cards same -->
          <!-- </div>
        </div> -->

        <div class="carousel-item active">
  <div class="row g-4">

    <!-- DELHI AGRA -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="image/agra.webp">
        <div class="cab-card-body">
          <small>460 km</small>
          <h6>Delhi ↔ Agra</h6>

          <div class="cab-price"><span>Dzire</span><small>₹5,980</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹7,360</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹9,200</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- DELHI JAIPUR -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="image/jaipur.webp">
        <div class="cab-card-body">
          <small>560 km</small>
          <h6>Delhi ↔ Jaipur</h6>

          <div class="cab-price"><span>Dzire</span><small>₹7,280</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹8,960</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹11,200</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- DELHI HARIDWAR -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="image/haridwar.webp">
        <div class="cab-card-body">
          <small>500 km</small>
          <h6>Delhi ↔ Haridwar</h6>

          <div class="cab-price"><span>Dzire</span><small>₹6,500</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹8,000</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹10,000</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- DELHI CHANDIGARH -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="image/chandigarh.webp">
        <div class="cab-card-body">
          <small>520 km</small>
          <h6>Delhi ↔ Chandigarh</h6>

          <div class="cab-price"><span>Dzire</span><small>₹6,760</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹8,320</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹10,400</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

  </div>
</div>

        <!-- SLIDE 2 -->
        <!-- <div class="carousel-item">
          <div class="row g-4">

           <div class="col-lg-3 col-md-6">
              <div class="cab-card">
                <img src="https://images.unsplash.com/photo-1587135991058-8816a7f0c6b4">
                <div class="cab-card-body">
                  <small>Cabs Between</small>
                  <h6>Delhi & Agra</h6>
                  <button class="cab-btn">BOOK NOW</button>
                </div>
              </div>
            </div>
             <div class="col-lg-3 col-md-6">
              <div class="cab-card">
                <img src="https://images.unsplash.com/photo-1587135991058-8816a7f0c6b4">
                <div class="cab-card-body">
                  <small>Cabs Between</small>
                  <h6>Delhi & Agra</h6>
                  <button class="cab-btn">BOOK NOW</button>
                </div>
              </div>
            </div>
             <div class="col-lg-3 col-md-6">
              <div class="cab-card">
                <img src="https://images.unsplash.com/photo-1587135991058-8816a7f0c6b4">
                <div class="cab-card-body">
                  <small>Cabs Between</small>
                  <h6>Delhi & Agra</h6>
                  <button class="cab-btn">BOOK NOW</button>
                </div>
              </div>
            </div>
             <div class="col-lg-3 col-md-6">
              <div class="cab-card">
                <img src="https://images.unsplash.com/photo-1587135991058-8816a7f0c6b4">
                <div class="cab-card-body">
                  <small>Cabs Between</small>
                  <h6>Delhi & Agra</h6>
                  <button class="cab-btn">BOOK NOW</button>
                </div>
              </div>
            </div>

            
          </div>
        </div> -->

        <div class="carousel-item">
  <div class="row g-4">

    <!-- CHANDIGARH SHIMLA -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="image/shimla.webp">
        <div class="cab-card-body">
          <small>240 km</small>
          <h6>Chandigarh ↔ Shimla</h6>

          <div class="cab-price"><span>Dzire</span><small>₹3,120</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹3,840</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹4,800</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- JAIPUR UDAIPUR -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="image/udaipur.webp">
        <div class="cab-card-body">
          <small>800 km</small>
          <h6>Jaipur ↔ Udaipur</h6>

          <div class="cab-price"><span>Dzire</span><small>₹10,400</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹12,800</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹16,000</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- AGRA MATHURA -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1584551246679-0daf3d275d0f">
        <div class="cab-card-body">
          <small>250 km</small>
          <h6>Agra ↔ Mathura / Vrindavan</h6>

          <div class="cab-price"><span>Dzire</span><small>₹3,250</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹4,000</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹5,000</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

  </div>
</div>

      </div>
    </div>

     <div class="cab-note mt-4">
  <small>
    *Minimum Daily Journey: 250 km <br>
    *Driver Allowance (Day): ₹200 <br>
    *Night Charges (Before 6 AM / After 10 PM): ₹300 <br>
    *Toll, Parking, State Tax, Permit Extra <br>
    *GST @ 5% Applicable
  </small>
</div>

  </div>

 


  <!-- SOUTH -->
  <div class="tab-pane fade" id="south">
    <div class="cab-fare-box mb-4 text-center">
  <h6>Vehicle Fare Structure</h6>
  <p class="mb-0">
    DZIRE – ₹15/km &nbsp; | &nbsp;
    ERTIGA – ₹18/km &nbsp; | &nbsp;
    INNOVA CRYSTA – ₹24/km
  </p>
</div>
 
    <div id="southCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500"
     data-bs-pause="false">
      <div class="carousel-inner">

        <div class="carousel-item active">
  <div class="row g-4">

    <!-- BANGALORE MYSORE -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1602216056096-3b40cc0c9944">
        <div class="cab-card-body">
          <small>300 km</small>
          <h6>Bengaluru ↔ Mysuru</h6>

          <div class="cab-price"><span>Dzire</span><small>₹4,500</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹5,400</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹7,200</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- BANGALORE OOTY -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">
        <div class="cab-card-body">
          <small>560 km</small>
          <h6>Bengaluru ↔ Ooty</h6>

          <div class="cab-price"><span>Dzire</span><small>₹8,400</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹10,080</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹13,440</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- BANGALORE COORG -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="image/coorg.webp">
        <div class="cab-card-body">
          <small>520 km</small>
          <h6>Bengaluru ↔ Coorg</h6>

          <div class="cab-price"><span>Dzire</span><small>₹7,800</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹9,360</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹12,480</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- BANGALORE CHENNAI -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb">
        <div class="cab-card-body">
          <small>700 km</small>
          <h6>Bengaluru ↔ Chennai</h6>

          <div class="cab-price"><span>Dzire</span><small>₹10,500</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹12,600</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹16,800</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="carousel-item">
  <div class="row g-4">

    <!-- KOCHI MUNNAR -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">
        <div class="cab-card-body">
          <small>260 km</small>
          <h6>Kochi ↔ Munnar</h6>

          <div class="cab-price"><span>Dzire</span><small>₹3,900</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹4,680</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹6,240</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- KOCHI ALLEPPEY -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1584551246679-0daf3d275d0f">
        <div class="cab-card-body">
          <small>180 km</small>
          <h6>Kochi ↔ Alleppey</h6>

          <div class="cab-price"><span>Dzire</span><small>₹2,700</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹3,240</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹4,320</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

  </div>
</div>

      </div>
    </div>

    <div class="cab-note mt-4">
  <small>
    Minimum Daily Journey: 250 km <br>
    Driver Allowance (Day): ₹200 <br>
    Night Charges (Before 6 AM / After 10 PM): ₹300 <br>
    Toll, Parking, State Tax, Permit Extra <br>
    GST @ 5% Applicable
  </small>
</div>

  </div>


   <!-- WEST -->
  <div class="tab-pane fade" id="west">

    <div id="westCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500"
     data-bs-pause="false">
      <div class="carousel-inner">

        <div class="carousel-item active">
  <div class="row g-4">

    <!-- MUMBAI PUNE -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70">
        <div class="cab-card-body">
          <small>300 km</small>
          <h6>Mumbai ↔ Pune</h6>

          <div class="cab-price"><span>Dzire</span><small>₹4,500</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹5,400</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹7,200</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- MUMBAI LONAVALA -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">
        <div class="cab-card-body">
          <small>180 km</small>
          <h6>Mumbai ↔ Lonavala</h6>

          <div class="cab-price"><span>Dzire</span><small>₹2,700</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹3,240</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹4,320</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- MUMBAI NASHIK -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1584551246679-0daf3d275d0f">
        <div class="cab-card-body">
          <small>340 km</small>
          <h6>Mumbai ↔ Nashik</h6>

          <div class="cab-price"><span>Dzire</span><small>₹5,100</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹6,120</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹8,160</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- MUMBAI SHIRDI -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1599661046289-e31897846e41">
        <div class="cab-card-body">
          <small>500 km</small>
          <h6>Mumbai ↔ Shirdi</h6>

          <div class="cab-price"><span>Dzire</span><small>₹7,500</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹9,000</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹12,000</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="carousel-item">
  <div class="row g-4">

    <!-- MUMBAI SURAT -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb">
        <div class="cab-card-body">
          <small>560 km</small>
          <h6>Mumbai ↔ Surat</h6>

          <div class="cab-price"><span>Dzire</span><small>₹8,400</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹10,080</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹13,440</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- AHMEDABAD UDAIPUR -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="image/udaipur.webp">
        <div class="cab-card-body">
          <small>520 km</small>
          <h6>Ahmedabad ↔ Udaipur</h6>

          <div class="cab-price"><span>Dzire</span><small>₹7,800</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹9,360</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹12,480</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- AHMEDABAD MOUNT ABU -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">
        <div class="cab-card-body">
          <small>450 km</small>
          <h6>Ahmedabad ↔ Mount Abu</h6>

          <div class="cab-price"><span>Dzire</span><small>₹6,750</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹8,100</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹10,800</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- PUNE GOA -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">
        <div class="cab-card-body">
          <small>900 km</small>
          <h6>Pune ↔ Goa</h6>

          <div class="cab-price"><span>Dzire</span><small>₹13,500</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹16,200</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹21,600</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>

    <div class="cab-note mt-4">
  <small>
    Minimum Daily Journey: 250 km <br>
    Driver Allowance (Day): ₹200 <br>
    Night Charges (Before 6 AM / After 10 PM): ₹300 <br>
    Toll, Parking, State Tax, Permit Extra <br>
    GST @ 5% Applicable
  </small>
</div>

  </div>

   <!-- CENTRAL -->
  <div class="tab-pane fade" id="central">

  <div class="cab-fare-box mb-4 text-center">
  <h6>Vehicle Fare Structure</h6>
  <p class="mb-0">
    DZIRE – ₹15/km &nbsp; | &nbsp;
    ERTIGA – ₹18/km &nbsp; | &nbsp;
    INNOVA CRYSTA – ₹24/km
  </p>
</div>

    <div id="centralCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500"
     data-bs-pause="false">
      <div class="carousel-inner">

        <div class="carousel-item active">
  <div class="row g-4">

    <!-- INDORE UJJAIN -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1599661046289-e31897846e41">
        <div class="cab-card-body">
          <small>120 km</small>
          <h6>Indore ↔ Ujjain</h6>

          <div class="cab-price"><span>Dzire</span><small>₹1,800</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹2,160</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹2,880</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- INDORE BHOPAL -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb">
        <div class="cab-card-body">
          <small>400 km</small>
          <h6>Indore ↔ Bhopal</h6>

          <div class="cab-price"><span>Dzire</span><small>₹6,000</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹7,200</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹9,600</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- INDORE OMKARESHWAR -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1584551246679-0daf3d275d0f">
        <div class="cab-card-body">
          <small>160 km</small>
          <h6>Indore ↔ Omkareshwar</h6>

          <div class="cab-price"><span>Dzire</span><small>₹2,400</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹2,880</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹3,840</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- BHOPAL JABALPUR -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="image/bhopal.webp">
        <div class="cab-card-body">
          <small>650 km</small>
          <h6>Bhopal ↔ Jabalpur</h6>

          <div class="cab-price"><span>Dzire</span><small>₹9,750</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹11,700</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹15,600</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="carousel-item">
  <div class="row g-4">

    <!-- BHOPAL SANCHI -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">
        <div class="cab-card-body">
          <small>100 km</small>
          <h6>Bhopal ↔ Sanchi</h6>

          <div class="cab-price"><span>Dzire</span><small>₹1,500</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹1,800</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹2,400</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- JABALPUR PACHMARHI -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">
        <div class="cab-card-body">
          <small>520 km</small>
          <h6>Jabalpur ↔ Pachmarhi</h6>

          <div class="cab-price"><span>Dzire</span><small>₹7,800</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹9,360</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹12,480</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- NAGPUR PENCH -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1584551246679-0daf3d275d0f">
        <div class="cab-card-body">
          <small>200 km</small>
          <h6>Nagpur ↔ Pench</h6>

          <div class="cab-price"><span>Dzire</span><small>₹3,000</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹3,600</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹4,800</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- INDORE MANDU -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1599661046289-e31897846e41">
        <div class="cab-card-body">
          <small>200 km</small>
          <h6>Indore ↔ Mandu</h6>

          <div class="cab-price"><span>Dzire</span><small>₹3,000</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹3,600</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹4,800</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

  </div>
</div>
      </div>
    </div>

    <div class="cab-note mt-4">
  <small>
    Minimum Daily Journey: 250 km <br>
    Driver Allowance (Day): ₹200 <br>
    Night Charges (Before 6 AM / After 10 PM): ₹300 <br>
    Toll, Parking, State Tax, Permit Extra <br>
    GST @ 5% Applicable
  </small>
</div>

  </div>


   <!-- EAST/NORTH-EAST -->
  <div class="tab-pane fade" id="east">

  <div class="cab-fare-box mb-4 text-center">
  <h6>Vehicle Fare Structure</h6>
  <p class="mb-0">
    DZIRE – ₹15/km &nbsp; | &nbsp;
    ERTIGA – ₹18/km &nbsp; | &nbsp;
    INNOVA CRYSTA – ₹24/km
  </p>
</div>

    <div id="eastCarousel" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="2500"
     data-bs-pause="false">
      <div class="carousel-inner">

        <div class="carousel-item active">
  <div class="row g-4">

    <!-- KOLKATA DIGHA -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb">
        <div class="cab-card-body">
          <small>380 km</small>
          <h6>Kolkata ↔ Digha</h6>

          <div class="cab-price"><span>Dzire</span><small>₹5,700</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹6,840</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹9,120</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- KOLKATA PURI -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1584551246679-0daf3d275d0f">
        <div class="cab-card-body">
          <small>1000 km</small>
          <h6>Kolkata ↔ Puri</h6>

          <div class="cab-price"><span>Dzire</span><small>₹15,000</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹18,000</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹24,000</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- KOLKATA DARJEELING -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">
        <div class="cab-card-body">
          <small>1250 km</small>
          <h6>Kolkata ↔ Darjeeling</h6>

          <div class="cab-price"><span>Dzire</span><small>₹18,750</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹22,500</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹30,000</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- PATNA BODH GAYA -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1599661046289-e31897846e41">
        <div class="cab-card-body">
          <small>220 km</small>
          <h6>Patna ↔ Bodh Gaya</h6>

          <div class="cab-price"><span>Dzire</span><small>₹3,300</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹3,960</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹5,280</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

  </div>
</div>

     <div class="carousel-item">
  <div class="row g-4">

    <!-- GUWAHATI SHILLONG -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">
        <div class="cab-card-body">
          <small>220 km</small>
          <h6>Guwahati ↔ Shillong</h6>

          <div class="cab-price"><span>Dzire</span><small>₹3,300</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹3,960</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹5,280</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- GUWAHATI KAZIRANGA -->
    <div class="col-lg-3 col-md-6">
      <div class="cab-card">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb">
        <div class="cab-card-body">
          <small>430 km</small>
          <h6>Guwahati ↔ Kaziranga</h6>

          <div class="cab-price"><span>Dzire</span><small>₹6,450</small></div>
          <div class="cab-price"><span>Ertiga</span><small>₹7,740</small></div>
          <div class="cab-price"><span>Crysta</span><small>₹10,320</small></div>

          <button class="cab-btn">BOOK NOW</button>
        </div>
      </div>
    </div>

  </div>
</div>

       
    </div>
 </div>
  </div>

  <div class="cab-note mt-4">
  <small>
    Minimum Daily Journey: 250 km <br>
    Driver Allowance (Day): ₹200 <br>
    Night Charges (Before 6 AM / After 10 PM): ₹300 <br>
    Toll, Parking, State Tax, Permit Extra <br>
    GST @ 5% Applicable
  </small>
</div>

</div>


  <!-- BOTTOM SECTION -->
  <div class="row mt-5 g-4">

    <!-- OFFER -->
    <div class="col-lg-4">
      <div class="cab-offer">
        <img src="image/oscab-thumb1-190225.avif  ">
        <div class="cab-offer-content">
          <h5>Upto ₹1000 OFF*</h5>
          <p>on Outstation Cabs</p>
          <small>Use Code: <b>MMTDELIGHT</b></small>
          <button class="cab-btn mt-2">BOOK NOW</button>
        </div>
      </div>
    </div>

    <!-- FEATURES -->
    <div class="col-lg-8">
      <div class="cab-feature-box">
        <h5>When you book a cab with us, you get:</h5>

        <div class="row mt-4">

          <div class="col-md-4 text-center">
            <i class="fa fa-thumbs-up"></i>
            <p>On-time Guaranteed Pickups</p>
          </div>

          <div class="col-md-4 text-center">
            <i class="fa fa-user"></i>
            <p>Experienced Drivers</p>
          </div>

          <div class="col-md-4 text-center">
            <i class="fa fa-exchange"></i>
            <p>One-way & Round Trips</p>
          </div>

        </div>
      </div>
    </div>

  </div>

</div>


<div class="container my-5">
  <div class="section-box">

    <h4 class="addons-title">Custom Add-Ons</h4>

    <div class="row text-center">
      <div class="col-md-3 col-12 addon-item">
        <div class="icon-circle"><i class="fas fa-car"></i></div>
        <div class="addon-title">New Vehicle Guarantee</div>
        <div class="addon-desc">Travel in up-to-date car models that fit your needs</div>
      </div>

      <div class="col-md-3 col-12 addon-item">
        <div class="icon-circle"><i class="fas fa-box"></i></div>
        <div class="addon-title">Roof Carrier</div>
        <div class="addon-desc">Get extra space for your luggage</div>
      </div>

      <div class="col-md-3 col-12 addon-item">
        <div class="icon-circle"><i class="fas fa-user"></i></div>
        <div class="addon-title">Driver Language Preference</div>
        <div class="addon-desc">Ride with a driver who speaks your preferred language</div>
      </div>

      <div class="col-md-3 col-12 addon-item">
        <div class="icon-circle"><i class="fas fa-route"></i></div>
        <div class="addon-title">Personalised Round Trips</div>
        <div class="addon-desc">Enjoy hassle-free and convenient trips with multicity stops</div>
      </div>
    </div>

    <div class="cta-section">
      <p>Looking for a different route?</p>
      <button class="cta-btn">EXPLORE OTHER ROUTES</button>
    </div>

  </div>
</div>




     <!-- content end -->
      <?php include 'footer.php'; ?>
</body>
</html>
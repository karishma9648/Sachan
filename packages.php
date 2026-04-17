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

    <!-- TOP SEARCH BAR -->
    <section class="mmt-topbar">
        <div class="container-fluid">
            <div class="row align-items-center g-2">

                <!-- FROM -->
                <div class="col-lg col-md-6 col-12 position-relative">
                    <div class="mmt-field" onclick="toggleDropdown('fromDrop')">
                        <label>STARTING FROM</label>
                        <p id="fromText">New Delhi</p>
                    </div>

                    <!-- DROPDOWN -->
                    <div class="mmt-dropdown" id="fromDrop">
                        <input type="text" class="form-control mb-2" placeholder="Search city...">
                        <ul>
                            <li onclick="selectCity('New Delhi','fromText','fromDrop')">New Delhi</li>
                            <li onclick="selectCity('Mumbai','fromText','fromDrop')">Mumbai</li>
                            <li onclick="selectCity('Lucknow','fromText','fromDrop')">Lucknow</li>
                        </ul>
                    </div>
                </div>

                <!-- TO -->
                <div class="col-lg col-md-6 col-12 position-relative">
                    <div class="mmt-field" onclick="toggleDropdown('toDrop')">
                        <label>GOING TO</label>
                        <p id="toText">Kashmir</p>
                    </div>

                    <div class="mmt-dropdown" id="toDrop">
                        <input type="text" class="form-control mb-2" placeholder="Search destination...">
                        <ul>
                            <li onclick="selectCity('Kashmir','toText','toDrop')">Kashmir</li>
                            <li onclick="selectCity('Manali','toText','toDrop')">Manali</li>
                            <li onclick="selectCity('Goa','toText','toDrop')">Goa</li>
                        </ul>
                    </div>
                </div>

                <!-- DATE -->
                <div class="col-lg col-md-6 col-12">
                    <div class="mmt-field">
                        <label>STARTING DATE</label>
                        <input type="date" class="mmt-input">
                    </div>
                </div>

                <!-- ROOMS -->
                <!-- ROOMS -->
                <div class="col-lg col-md-6 col-12 position-relative">
                    <div class="mmt-field" onclick="toggleDropdown('roomDrop')">
                        <label>ROOMS & GUESTS</label>
                        <p id="guestText">02 Adults</p>
                    </div>

                    <!-- DROPDOWN -->
                    <div class="mmt-room-dropdown" id="roomDrop">

                        <!-- TOP INFO -->
                        <div class="mmt-room-info">
                            Maximum <b>4 guests</b> are allowed in this room
                        </div>

                        <!-- ROOM TITLE -->
                        <h6 class="mt-3">ROOM 1</h6>

                        <div class="row mt-3">

                            <!-- ADULT -->
                            <div class="col-6">
                                <p class="mmt-label">Adults<br><span>Above 12 Years</span></p>

                                <div class="mmt-counter">
                                    <button onclick="changeCount('adult',-1)">-</button>
                                    <span id="adultCount">02</span>
                                    <button onclick="changeCount('adult',1)">+</button>
                                </div>
                            </div>

                            <!-- CHILD -->
                            <div class="col-6">
                                <p class="mmt-label">Children<br><span>Below 12 Years</span></p>

                                <div class="mmt-counter">
                                    <button onclick="changeCount('child',-1)">-</button>
                                    <span id="childCount">00</span>
                                    <button onclick="changeCount('child',1)">+</button>
                                </div>
                            </div>

                        </div>

                        <!-- BUTTONS -->
                        <div class="d-flex justify-content-between mt-4">
                            <button class="mmt-add-room">+ ADD ANOTHER ROOM</button>
                            <button class="mmt-apply-btn" onclick="applyGuests()">APPLY</button>
                        </div>

                    </div>
                </div>


                <!-- SEARCH -->
                <div class="col-lg-auto col-12">
                    <button class="mmt-search-btn w-100">
                        SEARCH
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section class="mmt-main">

        <!-- HERO -->
        <div class="mmt-hero">
            <div class="container">
                <h2>Kashmir Packages</h2>
                <p>Paradise on Earth</p>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">

                <!-- LEFT SIDEBAR -->
                <div class="col-lg-3">
                    <div class="mmt-sidebar">

                        <h6>FILTERS</h6>

                        <div class="mmt-filter">
                            <p data-bs-toggle="collapse" data-bs-target="#duration">Duration (in Nights)</p>
                            <div id="duration" class="collapse">
                                <input type="checkbox" class="filter-duration" value="4"> 3-5 Nights<br>
                                <input type="checkbox" class="filter-duration" value="6"> 6-9 Nights
                            </div>
                        </div>

                        <div class="mmt-filter">
                            <p data-bs-toggle="collapse" data-bs-target="#budget">Budget</p>
                            <div id="budget" class="collapse">
                                <input type="checkbox"> Under 20k<br>
                                <input type="checkbox"> 20k-40k
                            </div>
                        </div>

                        <div class="mmt-filter">
                            <p data-bs-toggle="collapse" data-bs-target="#themes">Themes</p>
                            <div id="themes" class="collapse">
                                <input type="checkbox" class="filter-theme" value="honeymoon"> Honeymoon<br>
                                <input type="checkbox" class="filter-theme" value="group"> Adventure
                            </div>
                        </div>

                    </div>
                </div>

                <!-- RIGHT SECTION -->
                <div class="col-lg-9">

                    <!-- TABS -->
                    <div class="mmt-tabs">
                        <span class="active" onclick="showTab('all')">All Packages (220)</span>
                        <span onclick="showTab('honeymoon')">Honeymoon Happiness (13)</span>
                        <span onclick="showTab('group')">Group Tours (3)</span>
                        <span onclick="showTab('luxury')">Luxurious Stays (35)</span>
                    </div>

                    <!-- CARDS -->
                    <div id="all" class="mmt-tab-content active">
<div class="row g-4">

  <!-- CARD -->
  <div class="col-lg-6 col-12 mmt-card-item" data-category="honeymoon">
    <div class="mmt-card-new">

      <!-- IMAGE -->
      <div class="mmt-img-box">
        <img src="https://images.unsplash.com/photo-1609947017136-9daf32a5eb16">
        <span class="mmt-badge">2 More Options Available</span>
      </div>

      <!-- CONTENT -->
      <div class="mmt-card-body">

        <div class="d-flex justify-content-between">
          <h6>Best of Kashmir with Sonmarg</h6>
          <span class="mmt-days">5N/6D</span>
        </div>

        <p class="mmt-route">
          1N Srinagar • 1N Gulmarg • 2N Pahalgam • 2N Srinagar
        </p>

        <!-- FEATURES -->
        <div class="mmt-features">
          <span>• Intercity Transfers</span>
          <span>• 3 Star Hotels</span>
          <span>• Airport Pickup</span>
          <span>• 7 Activities</span>
        </div>

        <!-- HIGHLIGHTS -->
        <ul class="mmt-highlights">
          <li>✔ Gondola Tickets</li>
          <li>✔ Pahalgam Valley</li>
          <li>✔ Sonmarg Visit</li>
        </ul>

        <!-- PRICE BOX -->
        <div class="mmt-price-box">
          <p>Specially Curated For You</p>

          <div class="d-flex justify-content-between align-items-center">
            <button class="mmt-green-btn">
              Book this package @ ₹2,000
            </button>

            <div class="text-end">
              <h5>₹17,130</h5>
              <small>/Person</small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- SECOND CARD -->
  <div class="col-lg-6 col-12 mmt-card-item" data-category="group">
    <div class="mmt-card-new">

      <div class="mmt-img-box">
        <img src="https://images.unsplash.com/photo-1595815771614-ade5019c1d1c">
        <span class="mmt-badge">2 More Options Available</span>
      </div>

      <div class="mmt-card-body">

        <div class="d-flex justify-content-between">
          <h6>Spectacular Kashmir Vacay</h6>
          <span class="mmt-days">4N/5D</span>
        </div>

        <p class="mmt-route">
          1N Srinagar • 1N Gulmarg • 2N Srinagar
        </p>

        <div class="mmt-features">
          <span>• Intercity Transfers</span>
          <span>• 3 Star Hotels</span>
          <span>• Airport Pickup</span>
          <span>• 5 Activities</span>
        </div>

        <ul class="mmt-highlights">
          <li>✔ Gondola Tickets</li>
          <li>✔ Tour Assistance</li>
        </ul>

        <div class="mmt-price-box">
          <p>Exclusive Offers</p>

          <div class="d-flex justify-content-between align-items-center">
            <button class="mmt-green-btn">
              Book this package @ ₹2,000
            </button>

            <div class="text-end">
              <h5>₹13,637</h5>
              <small>/Person</small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

   <!-- CARD -->
  <div class="col-lg-6 col-12 mmt-card-item" data-category="luxury">
    <div class="mmt-card-new">

      <!-- IMAGE -->
      <div class="mmt-img-box">
        <img src="https://images.unsplash.com/photo-1609947017136-9daf32a5eb16">
        <span class="mmt-badge">2 More Options Available</span>
      </div>

      <!-- CONTENT -->
      <div class="mmt-card-body">

        <div class="d-flex justify-content-between">
          <h6>Best of Kashmir with Sonmarg</h6>
          <span class="mmt-days">5N/6D</span>
        </div>

        <p class="mmt-route">
          1N Srinagar • 1N Gulmarg • 2N Pahalgam • 2N Srinagar
        </p>

        <!-- FEATURES -->
        <div class="mmt-features">
          <span>• Intercity Transfers</span>
          <span>• 3 Star Hotels</span>
          <span>• Airport Pickup</span>
          <span>• 7 Activities</span>
        </div>

        <!-- HIGHLIGHTS -->
        <ul class="mmt-highlights">
          <li>✔ Gondola Tickets</li>
          <li>✔ Pahalgam Valley</li>
          <li>✔ Sonmarg Visit</li>
        </ul>

        <!-- PRICE BOX -->
        <div class="mmt-price-box">
          <p>Specially Curated For You</p>

          <div class="d-flex justify-content-between align-items-center">
            <button class="mmt-green-btn">
              Book this package @ ₹2,000
            </button>

            <div class="text-end">
              <h5>₹17,130</h5>
              <small>/Person</small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- SECOND CARD -->
  <div class="col-lg-6 col-12 mmt-card-item" data-category="luxury">
    <div class="mmt-card-new">

      <div class="mmt-img-box">
        <img src="https://images.unsplash.com/photo-1595815771614-ade5019c1d1c">
        <span class="mmt-badge">2 More Options Available</span>
      </div>

      <div class="mmt-card-body">

        <div class="d-flex justify-content-between">
          <h6>Spectacular Kashmir Vacay</h6>
          <span class="mmt-days">4N/5D</span>
        </div>

        <p class="mmt-route">
          1N Srinagar • 1N Gulmarg • 2N Srinagar
        </p>

        <div class="mmt-features">
          <span>• Intercity Transfers</span>
          <span>• 3 Star Hotels</span>
          <span>• Airport Pickup</span>
          <span>• 5 Activities</span>
        </div>

        <ul class="mmt-highlights">
          <li>✔ Gondola Tickets</li>
          <li>✔ Tour Assistance</li>
        </ul>

        <div class="mmt-price-box">
          <p>Exclusive Offers</p>

          <div class="d-flex justify-content-between align-items-center">
            <button class="mmt-green-btn">
              Book this package @ ₹2,000
            </button>

            <div class="text-end">
              <h5>₹13,637</h5>
              <small>/Person</small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


   <!-- CARD -->
  <div class="col-lg-6 col-12 mmt-card-item" data-category="honeymoon">
    <div class="mmt-card-new">

      <!-- IMAGE -->
      <div class="mmt-img-box">
        <img src="https://images.unsplash.com/photo-1609947017136-9daf32a5eb16">
        <span class="mmt-badge">2 More Options Available</span>
      </div>

      <!-- CONTENT -->
      <div class="mmt-card-body">

        <div class="d-flex justify-content-between">
          <h6>Best of Kashmir with Sonmarg</h6>
          <span class="mmt-days">5N/6D</span>
        </div>

        <p class="mmt-route">
          1N Srinagar • 1N Gulmarg • 2N Pahalgam • 2N Srinagar
        </p>

        <!-- FEATURES -->
        <div class="mmt-features">
          <span>• Intercity Transfers</span>
          <span>• 3 Star Hotels</span>
          <span>• Airport Pickup</span>
          <span>• 7 Activities</span>
        </div>

        <!-- HIGHLIGHTS -->
        <ul class="mmt-highlights">
          <li>✔ Gondola Tickets</li>
          <li>✔ Pahalgam Valley</li>
          <li>✔ Sonmarg Visit</li>
        </ul>

        <!-- PRICE BOX -->
        <div class="mmt-price-box">
          <p>Specially Curated For You</p>

          <div class="d-flex justify-content-between align-items-center">
            <button class="mmt-green-btn">
              Book this package @ ₹2,000
            </button>

            <div class="text-end">
              <h5>₹17,130</h5>
              <small>/Person</small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- SECOND CARD -->
  <div class="col-lg-6 col-12 mmt-card-item" data-category="luxury">
    <div class="mmt-card-new">

      <div class="mmt-img-box">
        <img src="https://images.unsplash.com/photo-1595815771614-ade5019c1d1c">
        <span class="mmt-badge">2 More Options Available</span>
      </div>

      <div class="mmt-card-body">

        <div class="d-flex justify-content-between">
          <h6>Spectacular Kashmir Vacay</h6>
          <span class="mmt-days">4N/5D</span>
        </div>

        <p class="mmt-route">
          1N Srinagar • 1N Gulmarg • 2N Srinagar
        </p>

        <div class="mmt-features">
          <span>• Intercity Transfers</span>
          <span>• 3 Star Hotels</span>
          <span>• Airport Pickup</span>
          <span>• 5 Activities</span>
        </div>

        <ul class="mmt-highlights">
          <li>✔ Gondola Tickets</li>
          <li>✔ Tour Assistance</li>
        </ul>

        <div class="mmt-price-box">
          <p>Exclusive Offers</p>

          <div class="d-flex justify-content-between align-items-center">
            <button class="mmt-green-btn">
              Book this package @ ₹2,000
            </button>

            <div class="text-end">
              <h5>₹13,637</h5>
              <small>/Person</small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

   <!-- CARD -->
  <div class="col-lg-6 col-12 mmt-card-item" data-category="luxury">
    <div class="mmt-card-new">

      <!-- IMAGE -->
      <div class="mmt-img-box">
        <img src="https://images.unsplash.com/photo-1609947017136-9daf32a5eb16">
        <span class="mmt-badge">2 More Options Available</span>
      </div>

      <!-- CONTENT -->
      <div class="mmt-card-body">

        <div class="d-flex justify-content-between">
          <h6>Best of Kashmir with Sonmarg</h6>
          <span class="mmt-days">5N/6D</span>
        </div>

        <p class="mmt-route">
          1N Srinagar • 1N Gulmarg • 2N Pahalgam • 2N Srinagar
        </p>

        <!-- FEATURES -->
        <div class="mmt-features">
          <span>• Intercity Transfers</span>
          <span>• 3 Star Hotels</span>
          <span>• Airport Pickup</span>
          <span>• 7 Activities</span>
        </div>

        <!-- HIGHLIGHTS -->
        <ul class="mmt-highlights">
          <li>✔ Gondola Tickets</li>
          <li>✔ Pahalgam Valley</li>
          <li>✔ Sonmarg Visit</li>
        </ul>

        <!-- PRICE BOX -->
        <div class="mmt-price-box">
          <p>Specially Curated For You</p>

          <div class="d-flex justify-content-between align-items-center">
            <button class="mmt-green-btn">
              Book this package @ ₹2,000
            </button>

            <div class="text-end">
              <h5>₹17,130</h5>
              <small>/Person</small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- SECOND CARD -->
  <div class="col-lg-6 col-12">
    <div class="mmt-card-new">

      <div class="mmt-img-box">
        <img src="https://images.unsplash.com/photo-1595815771614-ade5019c1d1c">
        <span class="mmt-badge">2 More Options Available</span>
      </div>

      <div class="mmt-card-body">

        <div class="d-flex justify-content-between">
          <h6>Spectacular Kashmir Vacay</h6>
          <span class="mmt-days">4N/5D</span>
        </div>

        <p class="mmt-route">
          1N Srinagar • 1N Gulmarg • 2N Srinagar
        </p>

        <div class="mmt-features">
          <span>• Intercity Transfers</span>
          <span>• 3 Star Hotels</span>
          <span>• Airport Pickup</span>
          <span>• 5 Activities</span>
        </div>

        <ul class="mmt-highlights">
          <li>✔ Gondola Tickets</li>
          <li>✔ Tour Assistance</li>
        </ul>

        <div class="mmt-price-box">
          <p>Exclusive Offers</p>

          <div class="d-flex justify-content-between align-items-center">
            <button class="mmt-green-btn">
              Book this package @ ₹2,000
            </button>

            <div class="text-end">
              <h5>₹13,637</h5>
              <small>/Person</small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


</div>
                      
                </div>
            </div>
          
        </div>
        </div>
        


    </section>


   






    <!-- content end -->
    <?php include 'footer.php'; ?>
</body>

</html>
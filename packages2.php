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

<!-- HERO -->
<section class="hero-sec">
  <div class="hero-text">
    <h2>Kashmir Tour Packages</h2>
    <p>Paradise on Earth</p>
  </div>
</section>

<div class="container-fluid main-wrap">

  <div class="row">

    <!-- LEFT SIDEBAR -->
    <div class="col-lg-3 sidebar-col">
      <div class="sidebar-box">

        <h6 class="filter-title">FILTERS</h6>

        <!-- FILTER LIST -->
        <div class="filter-item">Duration (in Nights) <span>⌄</span></div>
        <div class="filter-item">Flights <span>⌄</span></div>
        <div class="filter-item">Budget (per person) <span>⌄</span></div>
        <div class="filter-item">Hotel Category <span>⌄</span></div>
        <div class="filter-item">Cities <span>⌄</span></div>
        <div class="filter-item">Buy Now, Pay Later <span>⌄</span></div>
        <div class="filter-item">Themes <span>⌄</span></div>
        <div class="filter-item">Package Type <span>⌄</span></div>
        <div class="filter-item">Premium Packages</div>

      </div>
    </div>

    <!-- RIGHT SECTION -->
    <div class="col-lg-9">

      <!-- TABS -->
      <div class="top-tabs d-flex justify-content-between align-items-center">

        <ul class="nav nav-tabs custom-tabs">
          <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all">
              ALL PACKAGES (220)
            </button>
          </li>

          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#honeymoon">
              HONEYMOON HAPPINESS (13)
            </button>
          </li>

          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#group">
              GROUP TOURS (3)
            </button>
          </li>

          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#luxury">
              LUXURIOUS STAYS (35)
            </button>
          </li>
        </ul>

        <!-- SORT -->
        <div class="sort-box">
          Sorted By: <b>Popular</b>
        </div>

      </div>

      <!-- TAB CONTENT -->
      <div class="tab-content mt-4">

        <!-- ALL -->
        <div class="tab-pane fade show active" id="all">
          <div class="row g-4">

            <!-- CARD -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Sonmarg 2.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Amazing Kashmir Vacay with Gulmarg</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹19,364 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Thajwas Park.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Mystical Kashmir Trip with Houseboat</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹18,093 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/watch a romantic sunset with your partner.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Enchanted Kashmir - Honeymoon Special</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹19,364 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/plan a romantic getaway.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Fascinating Kashmir Holiday with Gulmarg</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹18,093 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

              <!-- CARD -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Sonmarg 2.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Amazing Kashmir Vacay with Gulmarg</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹19,364 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Thajwas Park.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Mystical Kashmir Trip with Houseboat</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹18,093 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/watch a romantic sunset with your partner.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Enchanted Kashmir - Honeymoon Special</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹19,364 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/plan a romantic getaway.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Fascinating Kashmir Holiday with Gulmarg</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹18,093 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>



          </div>
        </div>

        <!-- OTHER TABS -->
        <div class="tab-pane fade" id="honeymoon">
          <div class="row g-4">

            <!-- CARD -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Sonmarg 2.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Amazing Kashmir Vacay with Gulmarg</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹19,364 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Thajwas Park.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Mystical Kashmir Trip with Houseboat</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹18,093 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/watch a romantic sunset with your partner.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Amazing Kashmir Vacay with Gulmarg</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹19,364 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/plan a romantic getaway.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Mystical Kashmir Trip with Houseboat</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    ₹*18,093 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

             <!-- CARD -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Sonmarg 2.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Amazing Kashmir Vacay with Gulmarg</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹19,364 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Thajwas Park.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Mystical Kashmir Trip with Houseboat</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹18,093 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/watch a romantic sunset with your partner.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Enchanted Kashmir - Honeymoon Special</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹19,364 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/plan a romantic getaway.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Fascinating Kashmir Holiday with Gulmarg</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹18,093 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>
            
           


          </div>
        </div>

        <div class="tab-pane fade" id="group">
          <div class="row g-4">

            <!-- CARD -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Kashmir FD Image.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Amazing Kashmir Vacay with Gulmarg</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹19,364 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Group 2.webp">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Mystical Kashmir Trip with Houseboat</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹18,093 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/watch a romantic sunset with your partner.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Amazing Kashmir Vacay with Gulmarg</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹19,364 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/plan a romantic getaway.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Mystical Kashmir Trip with Houseboat</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹18,093 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

          </div>
        </div>

        <div class="tab-pane fade" id="luxury">
          <div class="row g-4">

            <!-- CARD -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Low_39820458_Private_Dining_1.webp">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Premium Srinagar - Taj Dal View</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹19,364 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Houseboat on Dal Lake.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Premium Kashmir with Sonmarg & Doodhpatri</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹18,093 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>


            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/watch a romantic sunset with your partner.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Amazing Kashmir Vacay with Gulmarg</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹19,364 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/plan a romantic getaway.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Mystical Kashmir Trip with Houseboat</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹18,093 <span>/Person</span>
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







     <!-- content end -->
      <?php include 'footer.php'; ?>
</body>
</html>
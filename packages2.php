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
        <!-- <div class="filter-item">Buy Now, Pay Later <span>⌄</span></div> -->
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
            <!-- card2 -->

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

            <!-- CARD 3 -->
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

              <!-- CARD 4-->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Sonmarg 2.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Best of Kashmir with Sonmarg</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Car Transfers</li>
                    <li>Airport Pickup & Drop</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹17,138 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 5-->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/Thajwas Park.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Spectacular Kashmir Vacay with Sonmarg</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Car Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>5 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹13,620 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- card 6 -->

            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/watch a romantic sunset with your partner.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Most Wanted Kashmir Package</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam • 1N Gulmarg</p>

                  <ul>
                    <li>Intercity Car Transfers</li>
                    <li>Airport Pickup & Drop</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹19,857 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 7 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/plan a romantic getaway.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Scenic Srinagar Getaway with Gulmarg </h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹12,039 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>


            <!-- CARD 8 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/plan a romantic getaway.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Delightful Kashmir Holiday</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Car Transfers</li>
                    <li>Airport Pickup & Drop</li>
                    <li>3 Star Hotels</li>
                    <li>5 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹20,826  <span>/Person</span>
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
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/1221/watch%20a%20romantic%20sunset%20with%20your%20partner.jpg?downsize=414:200">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Heavenly Kashmir Trip - Couples Choice</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                      <li>Airport Pickup & Drop</li>
                      
                    <li>4 Star,3 Star Hotels</li>
                    <li>12 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹30,057 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/4308/House-boat.jpg?crop=460:300&downsize=460:300?downsize=460:300">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Enchanted Kashmir - Honeymoon Special</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹60,455<span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- card 3 -->

            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/3795/Explore%20stunning%20outdoor%20locations%20with%20your%20partner.png?downsize=414:200">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Dreamy Kashmir Honeymoon</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹50,337 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 4 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/plan a romantic getaway.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Romantic Kashmir Retreat</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    
                      <li>Airport Pickup & Drop</li>
                    <li>4 Star,3 Star Hotels</li>
                    <li>14 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹43,725 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

             <!-- CARD 5-->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/3766/Khyber%202.jpg?downsize=414:200">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Lavish Honeymoon in Srinagar- Stay at Khyber Resort & Spa</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹65,292 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 6 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/3795/Make%20your%20holiday%20memories%20last%20forever.jpg?downsize=414:200">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Scenic Kashmir Romance Escape</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>

                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹18,093 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- card7 -->

            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="image/watch a romantic sunset with your partner.avif">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Grand Kashmir Holiday</h6>
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

            <!-- CARD 8 -->
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
                  <h6>Magical Kashmir - Group Tour (Deluxe)</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹47,639 <span>/Person</span>
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
                  <h6>Magical Kashmir - Group Tour (Standard)</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Car Transfers</li>
                    <li>3 Star Hotels & 3 Star Houseboat</li>

                    <li>22 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹30,314 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- card 3 -->

            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/4308/Group%201.png?downsize=414:200">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Charismatic Kashmir - Group Tour</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹33,269 <span>/Person</span>
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
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/1221/Radisson%20Golf%204.jpg?downsize=414:200">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Luxe Kashmir with Sonmarg & Gulmarg</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>3 Star Hotels</li>
                    <li>8 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹38,739 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/3766/Frozen-forest.jpg?downsize=414:200">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Lavish Kashmir Holiday with Gulmarg</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>3 Star Hotels</li>
                    <li>9 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹22,518 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>


            <!-- card 3 -->

            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/3795/Low_39820458_Private_Dining_1.jpg?downsize=414:200">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Premium Srinagar - Taj Dal View</h6>
                  <p class="sub">1N Srinagar • 1N Sonmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Intercity Transfers</li>
                    <li>5 Star,4 Star Hotels</li>
                    <li>10 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹79,414 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/1221/Radisson%20Golf%201.jpg?downsize=414:200">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Premium Kashmir with Sonmarg & Doodhpathri - Radisson Hotels</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>5 Star,4 Star Hotels</li>
                    <li>10 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹63,005 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

<!-- card 3 -->
             <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/3766/Green%20rooms%20resort%203.jpg?downsize=414:200">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Gulmarg Vacay (Pay for 2N & Get 3N)</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>5 Star,4 Star Hotels</li>
                    <li>10 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹13,691 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>

<!-- card 4 -->
             <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/4308/House-boat.jpg?crop=460:300&downsize=460:300?downsize=460:300">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Premium Kashmir Holiday with Houseboat Stay</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>5 Star,4 Star Hotels</li>
                    <li>10 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹64,237 <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>


            <!-- card 5 -->
             <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/3795/Dal%20Lake%203.jpeg?downsize=414:200">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Exotic 6N Kashmir Premium Vacay</h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>5 Star,4 Star Hotels</li>
                    <li>10 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹70,079  <span>/Person</span>
                  </div>

                </div>

              </div>
            </div>


            <!-- card 6 -->
             <div class="col-md-6">
              <div class="pkg-card">

                <div class="img-box">
                  <img src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/3795/Sunrise-on-Lake.jpg?downsize=414:200">
                  <span class="tag">2 More Options Available</span>
                </div>

                <div class="card-body">
                  <h6>Premium Kashmir Vacay </h6>
                  <p class="sub">1N Srinagar • 1N Gulmarg • 2N Pahalgam</p>

                  <ul>
                    <li>Houseboat Stay</li>
                    <li>5 Star,4 Star Hotels</li>
                    <li>10 Activities</li>
                  </ul>

                  <div class="price-box">
                    *₹61,764 <span>/Person</span>
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
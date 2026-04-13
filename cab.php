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

<div class="container-fluid car-section py-4">

  <!-- TABS -->
  <div class="d-flex gap-2 mb-3">
    <button class="car-tab"><i class="fa fa-plane"></i> Flights</button>
    <button class="car-tab"><i class="fa fa-hotel"></i> Hotels</button>
    <button class="car-tab car-active"><i class="fa fa-car"></i> Cars</button>
    <button class="car-tab"><i class="fa fa-ship"></i> Cruises</button>
  </div>

  <!-- SEARCH -->
  <div class="car-search-box p-3 mb-4">
    <div class="row g-2">
      <div class="col-md-2"><select class="form-select"><option>Country</option></select></div>
      <div class="col-md-2"><select class="form-select"><option>City</option></select></div>
      <div class="col-md-2"><select class="form-select"><option>Location</option></select></div>
      <div class="col-md-2"><input type="date" class="form-control"></div>
      <div class="col-md-2"><input type="date" class="form-control"></div>
      <div class="col-md-2"><button class="btn car-btn-search w-100">SEARCH</button></div>
    </div>
  </div>

  <div class="row">

    <!-- SIDEBAR -->
    <div class="col-lg-3">
      <div class="car-sidebar">

        <ul>
          <li>Star Rating</li>
          <li>Price Range</li>
          <li>Departure Ports</li>
          <li>Trip Duration</li>
          <li>Ships</li>
        </ul>

        <div class="car-testimonial mt-4">
          <p>Lorem ipsum dolor sit amet...</p>
          <strong>George Smith</strong>
        </div>

      </div>
    </div>

    <!-- RIGHT CONTENT -->
    <div class="col-lg-9">

      <!-- SORT -->
      <div class="d-flex gap-2 mb-3 flex-wrap">
        <span>Sort by:</span>
        <select class="form-select w-auto"><option>Premium</option></select>
        <select class="form-select w-auto"><option>Price</option></select>
        <select class="form-select w-auto"><option>Fuel Type</option></select>
      </div>

      <!-- CAR CARDS -->
      <div class="row g-4">

        <!-- CARD -->
        <div class="col-md-6 col-lg-4">
          <div class="car-card">
            <img src="image/car-5.jpg">
            <h6>SMART FORFOUR 1.0</h6>
            <p class="car-price">$24.00</p>
            <span class="car-per">per/day</span>
            <button class="btn car-btn-detail">DETAILS</button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="car-card">
            <img src="image/vehicle-details3.jpg">
            <h6>FIAT 500 1.2</h6>
            <p class="car-price">$25.00</p>
            <span class="car-per">per/day</span>
            <button class="btn car-btn-detail">DETAILS</button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="car-card">
            <img src="image/thar-DDEH5HwU.jpg">
            <h6>FIAT PANDA 1.2</h6>
            <p class="car-price">$26.00</p>
            <span class="car-per">per/day</span>
            <button class="btn car-btn-detail">DETAILS</button>
          </div>
        </div>

        <!-- Repeat -->
        <div class="col-md-6 col-lg-4">
          <div class="car-card">
            <img src="image/swift-FTV4h9a9.jpg">
            <h6>MERCEDES BENZ C200</h6>
            <p class="car-price">$68.00</p>
            <span class="car-per">per/day</span>
            <button class="btn car-btn-detail">DETAILS</button>
          </div>
        </div>

         <div class="col-md-6 col-lg-4">
          <div class="car-card">
            <img src="image/vehicle-details3.jpg">
            <h6>MERCEDES BENZ C200</h6>
            <p class="car-price">$68.00</p>
            <span class="car-per">per/day</span>
            <button class="btn car-btn-detail">DETAILS</button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="car-card">
            <img src="image/vehicle-details2.jpg">
            <h6>SMART FORFOUR 1.0</h6>
            <p class="car-price">$24.00</p>
            <span class="car-per">per/day</span>
            <button class="btn car-btn-detail">DETAILS</button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="car-card">
            <img src="image/vehicle-details1.jpg">
            <h6>FIAT 500 1.2</h6>
            <p class="car-price">$25.00</p>
            <span class="car-per">per/day</span>
            <button class="btn car-btn-detail">DETAILS</button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="car-card">
            <img src="image/crysta-DgDRNYIF.jpg">
            <h6>FIAT PANDA 1.2</h6>
            <p class="car-price">$26.00</p>
            <span class="car-per">per/day</span>
            <button class="btn car-btn-detail">DETAILS</button>
          </div>
        </div>

        <!-- Repeat -->
        <div class="col-md-6 col-lg-4">
          <div class="car-card">
            <img src="image/car-5.jpg">
            <h6>MERCEDES BENZ C200</h6>
            <p class="car-price">$68.00</p>
            <span class="car-per">per/day</span>
            <button class="btn car-btn-detail">DETAILS</button>
          </div>
        </div>
        
         <div class="col-md-6 col-lg-4">
          <div class="car-card">
            <img src="image/car-2.jpg">
            <h6>MERCEDES BENZ C200</h6>
            <p class="car-price">$68.00</p>
            <span class="car-per">per/day</span>
            <button class="btn car-btn-detail">DETAILS</button>
          </div>
        </div>

      </div>

      <!-- PAGINATION -->
      <div class="text-center mt-4">
        <button class="btn btn-light">Previous</button>
        <button class="btn btn-success">1</button>
        <button class="btn btn-light">2</button>
        <button class="btn btn-light">Next</button>
      </div>

    </div>

  </div>
</div>


     <!-- content end -->
      <?php include 'footer.php'; ?>
</body>
</html>
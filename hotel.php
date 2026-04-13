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


<div class="container-fluid py-4">

  <!-- TOP TABS -->
  <div class="d-flex gap-2 mb-3">
    <button class="htl-tab htl-active"><i class="fa fa-plane"></i> Flights</button>
    <button class="htl-tab"><i class="fa fa-hotel"></i> Hotels</button>
    <button class="htl-tab"><i class="fa fa-car"></i> Cars</button>
    <button class="htl-tab"><i class="fa fa-ship"></i> Cruises</button>
  </div>

  <!-- SEARCH BAR -->
  <div class="htl-search-box p-3 mb-4">
    <div class="row g-2">
      <div class="col-md-3"><input class="form-control" placeholder="City or Hotel Name"></div>
      <div class="col-md-2"><input type="date" class="form-control"></div>
      <div class="col-md-2"><input type="date" class="form-control"></div>
      <div class="col-md-2">
        <select class="form-select">
          <option>Room for 1 adult</option>
        </select>
      </div>
      <div class="col-md-2">
        <button class="btn btn-search w-100">SEARCH</button>
      </div>
    </div>
  </div>

  <div class="row">

    <!-- LEFT SIDEBAR -->
    <div class="col-lg-3">
      <div class="htl-sidebar">

        <h6>Star Rating</h6>
        <ul>
          <li><input type="checkbox"> ⭐⭐⭐⭐⭐</li>
          <li><input type="checkbox"> ⭐⭐⭐⭐</li>
          <li><input type="checkbox"> ⭐⭐⭐</li>
          <li><input type="checkbox"> ⭐⭐</li>
        </ul>

        <h6>Price Range</h6>
        <h6>Departure Ports</h6>
        <h6>Trip Duration</h6>
        <h6>Ships</h6>

        <div class="testimonial mt-4">
          <p>Lorem ipsum dolor sit amet...</p>
          <strong>Adam Parker</strong>
        </div>

      </div>
    </div>

    <!-- RIGHT CONTENT -->
    <div class="col-lg-9">

      <!-- SORT -->
      <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
        <div>
          <span>Sort by:</span>
          <select class="form-select d-inline w-auto">
            <option>Name</option>
          </select>
          <select class="form-select d-inline w-auto">
            <option>Price</option>
          </select>
          <select class="form-select d-inline w-auto">
            <option>Rating</option>
          </select>
        </div>
      </div>

      <!-- HOTEL CARDS -->
      <div class="row g-4">

        <!-- CARD -->
        <div class="col-md-6 col-lg-4">
          <div class="htl-card">
            <img src="image/hotels01.jpg">
            <h5>Normandy Hotel</h5>
            <p>Twin / Double Room</p>
            <h6 class="htl-price">$250.00</h6>
            <div class="stars text-warning">
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
              <i class="fa fa-star-half-alt"></i>
            </div>
            <button class="btn btn-sm htl-btn-detail">DETAILS</button>
          </div>
        </div>

        <!-- Repeat -->
        <div class="col-md-6 col-lg-4">
          <div class="htl-card">
            <img src="image/hotels02.jpg">
            <h5>Hotel West-End</h5>
            <p>Twin / Double Room</p>
            <h6 class="htl-price">$349.00</h6>
            <div class="stars text-warning">
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
            </div>
            <button class="btn btn-sm htl-btn-detail">DETAILS</button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="htl-card">
            <img src="image/hotels03.jpg">
            <h5>Chambiges Elysees</h5>
            <p>Twin / Double Room</p>
            <h6 class="htl-price">$360.00</h6>
            <div class="stars text-warning">
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <button class="btn btn-sm htl-btn-detail">DETAILS</button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="htl-card">
            <img src="image/hotels05.jpg">
            <h5>Normandy Hotel</h5>
            <p>Twin / Double Room</p>
            <h6 class="htl-price">$250.00</h6>
            <div class="stars text-warning">
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
              <i class="fa fa-star-half-alt"></i>
            </div>
            <button class="btn btn-sm htl-btn-detail">DETAILS</button>
          </div>
        </div>

        <!-- Repeat -->
        <div class="col-md-6 col-lg-4">
          <div class="htl-card">
            <img src="image/hotels04.jpg">
            <h5>Hotel West-End</h5>
            <p>Twin / Double Room</p>
            <h6 class="htl-price">$349.00</h6>
            <div class="stars text-warning">
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
            </div>
            <button class="btn btn-sm htl-btn-detail">DETAILS</button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="htl-card">
            <img src="image/hotels06.jpg">
            <h5>Chambiges Elysees</h5>
            <p>Twin / Double Room</p>
            <h6 class="htl-price">$360.00</h6>
            <div class="stars text-warning">
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <button class="btn btn-sm htl-btn-detail">DETAILS</button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="htl-card">
            <img src="image/hotels01.jpg">
            <h5>Normandy Hotel</h5>
            <p>Twin / Double Room</p>
            <h6 class="htl-price">$250.00</h6>
            <div class="stars text-warning">
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
              <i class="fa fa-star-half-alt"></i>
            </div>
            <button class="btn btn-sm htl-btn-detail">DETAILS</button>
          </div>
        </div>

        <!-- Repeat -->
        <div class="col-md-6 col-lg-4">
          <div class="htl-card">
            <img src="image/hotels02.jpg">
            <h5>Hotel West-End</h5>
            <p>Twin / Double Room</p>
            <h6 class="htl-price">$349.00</h6>
            <div class="stars text-warning">
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
            </div>
            <button class="btn btn-sm htl-btn-detail">DETAILS</button>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="htl-card">
            <img src="image/hotels03.jpg">
            <h5>Chambiges Elysees</h5>
            <p>Twin / Double Room</p>
            <h6 class="htl-price">$360.00</h6>
            <div class="stars text-warning">
              <i class="fa fa-star"></i><i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <button class="btn btn-sm htl-btn-detail">DETAILS</button>
          </div>
        </div>

      </div>

      

      <!-- PAGINATION -->
      <div class="text-center mt-4">
        <button class="btn btn-light">Previous</button>
        <button class="btn btn-success">1</button>
        <button class="btn btn-light">2</button>
        <button class="btn btn-light">3</button>
        <button class="btn btn-light">Next</button>
      </div>

    </div>

  </div>
</div>





     <!-- content end -->
      <?php include 'footer.php'; ?>
</body>
</html>
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
<div class="flight-container">
    
    <!-- LEFT SIDEBAR -->
    <div class="flt-sidebar">

        <div class="flt-filter-box">
            <h4>Star Rating</h4>
        </div>

        <div class="flt-filter-box">
            <h4>Price Range</h4>
        </div>

        <div class="flt-filter-box">
            <h4>Departure Ports</h4>
        </div>

        <div class="flt-filter-box">
            <h4>Trip Duration</h4>
        </div>

        <div class="flt-filter-box">
            <h4>Ships</h4>
        </div>

        <!-- TESTIMONIAL BOX -->
        <div class="flt-testimonial">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed diam nonummy nibh euismod tincidunt.
            </p>
            <h5>Adam Parker</h5>
        </div>

    </div>


    <!-- RIGHT CONTENT -->
    <div class="flt-content">

        <!-- TOP FILTER BAR -->
        <div class="flt-topbar">
            <div>Passenger: <select><option>1</option></select></div>

            <div class="flt-sort">
                Sort by:
                <select><option>Name</option></select>
                <select><option>Price</option></select>
                <select><option>Rating</option></select>
                <select><option>Popularity</option></select>
            </div>
        </div>


        <!-- FLIGHT CARDS -->
        <div class="flt-grid">

            <!-- CARD -->
            <div class="flt-card">
                <img src="image/flights01.jpg" alt="flight1">
                <h4>Abudabi - Zurich</h4>
                <p class="price">$250.00</p>
                <button>DETAILS</button>
            </div>

            <div class="flt-card">
                <img src="image/flights02.jpg" alt="flight2">
                <h4>Sydney - Berlin</h4>
                <p class="price">$849.00</p>
                <button>DETAILS</button>
            </div>

            <div class="flt-card">
                <img src="image/flights09.jpg" alt="flight3">
                <h4>Ankara - Munich</h4>
                <p class="price">$849.00</p>
                <button>DETAILS</button>
            </div>

            <div class="flt-card">
                <img src="image/flights03.jpg" alt="flight4">
                <h4>Zurich - Moscow</h4>
                <p class="price">$549.00</p>
                <button>DETAILS</button>
            </div>

            <div class="flt-card">
                <img src="image/flights04.jpg" alt="flight5">
                <h4>Boston - Tbilisi</h4>
                <p class="price">$749.00</p>
                <button>DETAILS</button>
            </div>

            <div class="flt-card">
                <img src="image/flights05.jpg" alt="flight6">
                <h4>Amsterdam - Viena</h4>
                <p class="price">$179.00</p>
                <button>DETAILS</button>
            </div>

             <div class="flt-card">
                <img src="image/flights06.jpg" alt="flight4">
                <h4>Zurich - Moscow</h4>
                <p class="price">$549.00</p>
                <button>DETAILS</button>
            </div>

            <div class="flt-card">
                <img src="image/flights02.jpg" alt="flight5">
                <h4>Boston - Tbilisi</h4>
                <p class="price">$749.00</p>
                <button>DETAILS</button>
            </div>

            <div class="flt-card">
                <img src="image/flights01.jpg" alt="flight6">
                <h4>Amsterdam - Viena</h4>
                <p class="price">$179.00</p>
                <button>DETAILS</button>
            </div>

        </div>


        <!-- PAGINATION -->
        <div class="flt-pagination">
            <button>Previous</button>
            <span class="active">1</span>
            <span>2</span>
            <span>3</span>
            <button>Next</button>
        </div>

    </div>

</div>



     <!-- content end -->
      <?php include 'footer.php'; ?>
</body>
</html>
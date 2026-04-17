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


<!-- Bootstrap CSS -->


<section class="blog_section py-5">
  <div class="container">

    <!-- Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold" style="margin-top: 50px;">Blog & Articles</h2>

      <!-- Arrows -->
      <div>
        <button class="btn btn-light rounded-circle me-2" data-bs-target="#blogCarousel" data-bs-slide="prev">‹</button>
        <button class="btn btn-light rounded-circle" data-bs-target="#blogCarousel" data-bs-slide="next">›</button>
      </div>
    </div>

    <!-- Carousel -->
  <div id="blogCarousel" class="carousel slide" 
     data-bs-ride="carousel" 
     data-bs-interval="3000" 
     data-bs-pause="false">

  <div class="carousel-inner">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="row g-4">

        <div class="col-md-4">
          <div class="blog_card">
            <img src="https://images.unsplash.com/photo-1501117716987-c8e1ecb210c4">
            <div class="blog_content">
              <small>Travel • May 7, 2025</small>
              <h5>Explore, Compare, and Book in Minutes</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="blog_card">
            <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9">
            <div class="blog_content">
              <small>Restaurant • May 7, 2025</small>
              <h5>Fast and Easy Online Booking Platform</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="blog_card">
            <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70">
            <div class="blog_content">
              <small>Tour • May 7, 2025</small>
              <h5>Find and Book Experiences Around the World</h5>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="row g-4">

        <div class="col-md-4">
          <div class="blog_card">
            <img src="https://images.unsplash.com/photo-1493558103817-58b2924bce98">
            <div class="blog_content">
              <small>Travel • May 7, 2025</small>
              <h5>Best Holiday Destinations</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="blog_card">
            <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267">
            <div class="blog_content">
              <small>Hotel • May 7, 2025</small>
              <h5>Luxury Hotels Booking Tips</h5>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="blog_card">
            <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee">
            <div class="blog_content">
              <small>Tour • May 7, 2025</small>
              <h5>Top Travel Experiences</h5>
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
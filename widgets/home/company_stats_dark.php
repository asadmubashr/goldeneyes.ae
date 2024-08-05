<section class="ftco-counter-dark d-flex flex-column justify-content-between position-relative"
  style="background-image: url('images/contactus.jpg');">

  <!-- Overlay for Background Image -->
  <div class="overlay"
    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 1);"></div>

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-md-10">
        <div class="row justify-content-center">
          <h2 style="color: #fff;"><?php echo $lang['results_in_numbers']; ?></h2>

        </div>
        <div class="row justify-content-center">
          <h6 style="color: #fff;"><?php echo $lang['results_in_numbers_des']; ?></h6>

        </div>
        <div class="row">
          <?php
          // Create connection
          $conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME']);

          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          // Fetch data from the 'blogs' table
          $sql = "SELECT id, title, number  FROM results";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              ?>
              <div class="col-md col-lg d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="<?php echo $row['number'] ?>">
                      <?php echo $row['number'] ?>
                    </strong>
                    <span>
                      <?php echo $row['title'] ?>
                    </span>
                  </div>
                </div>
              </div>
              <?php
            }
          }

          $conn->close();
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .ftco-counter-dark {
    background-image: url('images/contactus.jpg');
    background-size: cover;
    background-position: center;
    height: 400px;
    padding: 2em 0;
  }

  @media (max-width: 768px) {
    .ftco-counter-dark {
      height: auto;
      /* Set the desired height for mobile screens */
    }
  }

  @media (max-width: 1199.98px) {
    .ftco-counter-dark {
      background-position: center center !important;
    }
  }

  .ftco-counter-dark .icon {
    width: 80px;
    height: 80px;
    margin: 0 auto;
    position: relative;
    margin-bottom: 20px;
    z-index: 0;
  }

  .ftco-counter-dark .icon:after {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    bordeR: 1px solid #d9bf77;
    z-index: -1;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
  }

  .ftco-counter-dark .icon span {
    position: absolute;
    top: 0%;
    left: 0;
    right: 0;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    color: #d9bf77;
  }

  .ftco-counter-dark .text strong.number {
    font-weight: 500;
    font-size: 50px;
    color: #fff;
  }

  .ftco-counter-dark .text span {
    font-weight: 600;
    font-size: 14px;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 3px;
  }

  .ftco-counter-dark .text:hover .icon span,
  .ftco-counter-dark .text:focus .icon span {
    color: #000;
  }

  .ftco-counter-dark .text:hover .icon:after,
  .ftco-counter-dark .text:focus .icon:after {
    -webkit-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    transform: rotate(135deg);
    background: #d9bf77;
  }

  @media (max-width: 991.98px) {
    .ftco-counter-dark .counter-wrap {
      margin-bottom: 40px !important;
    }
  }

  .ftco-counter-dark .ftco-number {
    display: block;
    color: #fff;
  }

  .ftco-counter-dark .ftco-label {
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: .1em;
  }
</style>
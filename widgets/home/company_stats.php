<section class="ftco-counter d-flex flex-column justify-content-between position-relative"
  style="background-image: url('images/contactus.jpg');">

  <!-- Overlay for Background Image -->
  <div class="overlay"
    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-md">
        <div class="row justify-content-center">
          <h2 style="color: #fff;">Results in Numbers</h2>
        </div>
        <div class="row justify-content-center">
          <h4 style="color: #fff;">Our job is to exceed expectations by delivering the best job possible.</h4>
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
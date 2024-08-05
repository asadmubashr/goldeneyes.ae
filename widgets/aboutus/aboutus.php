<section class="ftco-section" style="padding: 0px;">
    <div class="container-fluid">
        <div class="row justify-content-start">
            <div class="col-md-6 d-flex align-items-center" style="margin: 0; padding: 0;">
                <div class="intro-img"
                    style="background-image: url('images/man.jpg'); height: 100vh; width: 100%; background-size: cover; background-repeat: no-repeat; background-position: center; ">
                </div>
                <div class="text-center"
                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); border: 4px solid #7cba27; background-color: rgba(0, 0, 0, 0.05); padding: 5px 30px;">
                    <h2 style="color: #7cba27;"><?php echo $lang['15_years_of_experience']; ?></h2>

                </div>
            </div>

            <div class="col-md-6 d-flex align-items-center " style="border: 8px solid #7cba27;">
                <section class="container" id="aboutUs-text">

                    <?php
                    // Create connection
                    $conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME']);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch data from the 'blogs' table
                    $sql = "SELECT id, description  FROM aboutus WHERE id = 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '' . nl2br($row["description"]) . '';
                        }
                    } else {
                        echo "No Text";
                    }

                    $conn->close();
                    ?>
                </section>
            </div>

        </div>
    </div>
</section>
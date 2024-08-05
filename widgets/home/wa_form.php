
<div class="wasticky-icon">
        <div class="wapeoples">
            <div class="header">
                <span class="close" onclick="showPeoples()" style="font-size: 24px !important;">&times;</span>
                <div class="row d-felx justify-content-center align-items-center" style="">
                    <div class="col">
                        <a class="navbar-brand"><img
                                style="width: 200px; height: 120px; background-color: white; border-radius: 10px; box-shadow: 5px 5px 5px rgba(255, 255, 255, 0.3); margin-bottom: 10px;"
                                src="<?php echo $_ENV['ROOT_PATH']; ?>/images/logo_transparent.png"></a>

                        <h6 style="font-weight: 600;"><?php echo $lang['wa_form_des']; ?></h4>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="user-list">
                <?php foreach ($wapersons as $name => $details) : ?>
                    <a href="https://api.whatsapp.com/send?phone=<?php echo urlencode($details['phoneNumber']); ?>&text=Hello%2C%20I'm%20interested%20in%20your%20services!"
                        target="_blank">
                        <div class="user row">

                            <div class="user-image col-2">
                                <img src="<?php echo $_ENV['ROOT_PATH']; ?>/images/wa/<?php echo $details['image']; ?>"
                                    style="height: 70px; width: 70px;" alt="User 1">
                            </div>
                            <div class="col-1">

                            </div>
                            <div class="user-details col">
                                <span class="user-title" style="color: grey; font-size: 13px;"><?php echo $lang['business_consultant'] . ' ' . $details['languages']; ?></span>
                                <br>
                                <span class="user-name" style="color: black"><?php echo $name ?></span>
                                <br>
                                <span class="user-email" style="color: grey; font-size: 14px;"><?php echo $lang['online'] ?></span>
                                <span style="color: #008000;">●</span>
                            </div>

                        </div>
                    </a>
                    <?php endforeach; ?>
                    <!-- Add more users as needed -->
                </div>
            </div>


        </div>
        <div class="whatsapp-icon-container">
            <img src="<?php echo $_ENV['ROOT_PATH']; ?>/images/whatsapp.png" alt="Instagram" style="width: 60px; height: 60px;"
                onclick="showPeoples()">
        </div>
    </div>

<script>
    function showPeoples() {
            console.log('Mobile:' + detectMob());
            var peoplesDiv = document.querySelector('.wapeoples');
            var whatsappIconContainer = document.querySelector('.whatsapp-icon-container');
            var wastickyIcon = document.querySelector('.wasticky-icon');
            if (peoplesDiv.classList.contains('show')) {
                // If the div is currently shown, hide it with slide-out animation
                peoplesDiv.classList.remove('show');
                peoplesDiv.classList.add('hide');
                // Remove the hide class after the animation ends
                setTimeout(() => {
                    peoplesDiv.classList.remove('hide');
                    peoplesDiv.style.display = 'none'; // Hide the div after animation
                }, 100); // Adjust the delay to match the animation duration


                if (detectMob()) {
                    whatsappIconContainer.style.display = 'block';

                    wastickyIcon.style.bottom = '20px';
                    wastickyIcon.style.right = '20px';
                    wastickyIcon.style.top = null;
                    wastickyIcon.style.setProperty("bottom", "0px");
                }

            } else {
                // If the div is currently hidden, show it with slide-in animation
                peoplesDiv.style.display = 'block'; // Show the div before animation
                peoplesDiv.classList.add('show');


                if (detectMob()) {
                    whatsappIconContainer.style.display = 'none';
                    wastickyIcon.style.bottom = '0px';
                    wastickyIcon.style.right = '0px';

                    wastickyIcon.style.bottom = null;
                    wastickyIcon.style.setProperty("top", "0px");
                }

            }
        }

        function detectMob() {
            console.log(window.innerWidth);
            console.log(window.innerHeight);
            return ((window.innerWidth <= 800));
        }
    </script>
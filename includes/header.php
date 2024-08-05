<!-- Loader -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow" style="width: 3rem; height: 3rem; color: #e65100" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<script>
    function fetchData() {
        // Show the spinner
        document.getElementById('spinner').classList.add('show');

        // Simulate fetching data (setTimeout for demonstration purposes)
        setTimeout(function () {
            // Your data fetching logic here...

            // Hide the spinner when the operation is completed
            document.getElementById('spinner').classList.remove('show');
        }, 500); // Simulating a 3-second delay for data fetching
    }

    // Call the function to start the process
    fetchData();
</script>


<div class="wasticky-icon">
    <div class="sticky-anim">
        <a href="https://api.whatsapp.com/send?phone=+971557158062&text=Hello%2C%20I'm%20interested%20in%20your%20services!"><img src="<?php echo $_ENV['ROOT_PATH']; ?>/images/goldeneyes/whatsapp.png" alt="Whatsapp Golden Eyes"
            style="width: 60px; height: 60px; border-radius: 50%;"></a>
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




<nav class="navbar navbar-expand-lg" id="ftco-navbar">
    <div class="container <?php echo isset($home) ? 'home' : '' ?>">
        <a class="navbar-brand" href="<?php echo $_ENV['ROOT_PATH']; ?>/index.php"><img style="width: 180px;"
                src="<?php echo $_ENV['ROOT_PATH']; ?>/images/goldeneyes/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span style="color: #808080;" class="oi oi-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="hoverMenu">
                    <a href="<?php echo $_ENV['ROOT_PATH']; ?>/offices" class="nav-link" style="<?php echo $title == "Offices" ? "color : var(--primary-color);" : ""  ?>">Offices</a>
                </li>
                <li class="hoverMenu">
                    <a href="<?php echo $_ENV['ROOT_PATH']; ?>/co-working" class="nav-link" style="<?php echo $title == "Coworking" ? "color : var(--primary-color);" : ""  ?>">Coworking</a>
                </li>
                <li class="hoverMenu">
                    <a href="<?php echo $_ENV['ROOT_PATH']; ?>/meeting-spaces" class="nav-link" style="<?php echo $title == "Meeting Spaces" ? "color : var(--primary-color);" : ""  ?>">Meeting Spaces</a>
                </li>
                <li class="hoverMenu">
                    <a href="<?php echo $_ENV['ROOT_PATH']; ?>/locations" class="nav-link" style="<?php echo $title == "Locations" ? "color : var(--primary-color);" : ""  ?>">Locations</a>
                </li>
                <li class="ftco-animate">
                    <a class="gradient-button" href="<?php echo $_ENV['ROOT_PATH']; ?>/contact-us" style="color: var(--white-color);">
                        Book A Tour
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const hoverMenus = document.querySelectorAll('.hoverMenu');

        hoverMenus.forEach(hoverMenu => {
            hoverMenu.addEventListener('click', function (event) {

                const submenu = this.querySelector('.submenu');

                // Toggle the active class for the clicked submenu without affecting others
                submenu.classList.toggle('active');
            });
        });


    });

</script>
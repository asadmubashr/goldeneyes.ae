<section class="ftco-contact" id="ftco-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-5">
                <h1>Get in Touch</h1>
                <p style="color: #000;">We will respond to your message as soon as possible</p>
                <form id="contactForm">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name*">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <select id="contact-country-code" class="form-control">
                                    <?php
                                    foreach ($countryDetails as $country => $details) {
                                        echo "<option value='{$details['phoneCode']}'>{$details['flag']} {$country} ({$details['phoneCode']})</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                    class="form-control" id="phone" name="phone" placeholder="Phone Number*">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="message" name="message" rows="5"
                            placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="gradient-button">Send</button>
                </form>
                <div id="formResponse" class="mt-3"></div>
            </div>
            <div class="col-md-4">
                <div class="block-23 mb-3">
                    <ul>
                        <li class="centered-list">
                            <span class="icon icon-phone"></span>
                            <a href="tel:++97148716700" target="_blank">
                                <span class="text" style="padding-left: 10px; color: #000;">+971 4 871 6700</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@goldeneyes.ae" target="_blank">
                                <span class="icon icon-envelope"></span>
                                <span class="text" style="padding-left: 10px; color: #000;">info@goldeneyes.ae</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_ENV['ROOT_PATH']; ?>/locations" target="_blank">
                                <span class="icon icon-map-marker"></span>
                                <span class="text" style="padding-left: 10px; color: #000">Show All Locations</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mb-3">
                    <ul class="ftco-footer-social list-unstyled float-lft mt-3">
                        <li class="ftco-animate">
                            <a href="https://www.facebook.com/people/Golden-Eyes-Business-Center/61562287124839/?mibextid=LQQJ4d&rdid=t5EZmOAfoES12Sg8&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2FnapBLWNgVHNAZrDU%2F%3Fmibextid%3DLQQJ4d"
                                target="_blank">
                                <img src="<?php echo $_ENV['ROOT_PATH']; ?>/images/goldeneyes/fb.png"
                                    alt="Golden Eyes Facebook" style="width: 30px; height: 30px;">
                            </a>
                        </li>
                        <li class="ftco-animate">
                            <a href="ttps://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Fgoldeneyes_bct%2F%3Figsh%3DcnJvbW1pYzI4a3ph%26utm_source%3Dqr&is_from_rle"
                                target="_blank">
                                <img src="<?php echo $_ENV['ROOT_PATH']; ?>/images/goldeneyes/insta.png"
                                    alt="Golden Eyes Instagram" style="width: 30px; height: 30px;">
                            </a>
                        </li>
                        <li class="ftco-animate">
                            <a href="https://www.tiktok.com/@goldeneyes_bct?_t=8oGQ6iDOGJd&_r=1" target="_blank">
                                <img src="<?php echo $_ENV['ROOT_PATH']; ?>/images/goldeneyes/tiktok.png"
                                    alt="Golden Eyes Tiktok" style="width: 30px; height: 30px;">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .ftco-contact {
        padding: 4em 0em;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }
</style>
<script>
    $(document).ready(function () {
        $('#contactForm').on('submit', function (e) {
            console.log('clicked');
            e.preventDefault(); // Prevent the default form submission

            var $form = $(this);
            var $submitButton = $form.find('button[type="submit"]');
            var $nameField = $('#name');
            var $emailField = $('#email');
            var $phoneField = $('#phone');
            var $messageField = $('#message');

            // Get the value of the name field
            var name = $nameField.val().trim();
            var email = $emailField.val().trim();
            var phone = $phoneField.val().trim();
            var message = $messageField.val().trim();
            console.log(name);

            // Check if the name field is empty
            if (!name) {
                $nameField.css({ 'border': '1px solid #FF0000' });
                return;
            } else {
                $nameField.removeAttr('style');
            }

            if (!email) {
                $emailField.css({ 'border': '1px solid #FF0000' });
                return;
            } else {
                $emailField.removeAttr('style');
            }

            if (!phone) {
                $phoneField.css({ 'border': '1px solid #FF0000' });
                return;
            } else {
                $phoneField.removeAttr('style');
            }

            if (!message) {
                $messageField.css({ 'border': '1px solid #FF0000' });
                return;
            } else {
                $messageField.removeAttr('style');
            }

            

            // Disable the submit button
            $submitButton.prop('disabled', true).text('Sending...');

            $.ajax({
                url: '<?php echo $_ENV['ROOT_PATH']; ?>/submits/send_contact_mail_post.php', // Replace with your PHP script path
                type: 'POST',
                data: $form.serialize(),
                success: function (response) {
                    console.log(response);
                    // Handle success response from PHP
                    if (response.status === 1) {
                        $('#formResponse').html('<div class="alert-success">' + response.message + '</div>');
                    } else {
                        $('#formResponse').html('<div class="alert-danger">' + response.message + '</div>');
                    }
                    $('#contactForm')[0].reset(); // Reset the form
                    // Re-enable the submit button and reset its text
                    $submitButton.prop('disabled', false).text('Send Message');
                },
                error: function (xhr, textStatus, errorThrown) {
                    $('#formResponse').html('<div class="alert-danger">An error occurred ' + xhr.statusText + '. Please try again.</div>');
                    // Re-enable the submit button and reset its text
                    $submitButton.prop('disabled', false).text('Send Message');
                }
            });
        });
    });
</script>
<div class="ftco-send-inquiry">
    <div class="background">
        <div class="spacing">

        </div>
        <img src="images/goldeneyes/enquiry_bg.png" alt="">
    </div>

    <div class="ftco-send-inquiry-form d-flex align-items-center justify-content-center">
            <div class="form">
                <div>
                    <h4><?php echo $lang['send_us_your_inquiry']; ?></h1>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="inquiry-form-name" name="name" placeholder="<?php echo $lang['full_name_star']; ?>">

                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="inquiry-form-email" name="email" placeholder="<?php echo $lang['email_star']; ?>">
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <select id="inquiry-form-country-code" class="form-control">
                                <?php
                                foreach ($countryDetails as $country => $details) {
                                    echo "<option value='{$details['phoneCode']}'>{$details['flag']} {$country} ({$details['phoneCode']})</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <input type="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                class="form-control" id="inquiry-form-phone" name="phone" placeholder="<?php echo $lang['phone_number_star']; ?>">

                        </div>

                    </div>
                </div>


                <div class="form-group">
                    <textarea class="form-control" id="inquiry-form-remarks" name="message" placeholder="<?php echo $lang['remarks']; ?>" rows="3"></textarea>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input unchecked" id="inquiry-tick-check"
                        style="border-radius: red;">
                    <label class="form-check-label" for="exampleCheck1"><?php echo $lang['send_us_inquiry_desc']; ?></label>
                </div>

                <div class="inquiry-form-button" id="inquiry-form-button">
                    <?php echo $lang['enquire_now']; ?>
                </div>

                <div class="inquiry-loader" style="display: none;">
                    <?php echo $lang['sending']; ?>
                </div>

                <div id="inquiry-reply">
                </div>

            </div>
        </div>

    <div class="right">
        <p>ONE CALL CAN ​SOLVE ALL YOUR ​PROBLEMS</p>
    </div>

</div>

<style>
    .ftco-send-inquiry {
        position: relative;
    }

    .ftco-send-inquiry .background {
        position: relative;
    }

    .ftco-send-inquiry .spacing {
        height: 100px;
    }

    .ftco-send-inquiry img {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }

    .ftco-send-inquiry .ftco-send-inquiry-form {
        background-color: var(--white-color);
        position: absolute;
        top: 0;
        left: 12%;
        width: 450px;
        height: 600px;

        border: double 10px transparent;
        border-bottom: none;
        border-radius: 80px 80px 0px 0px;
        background-image: linear-gradient(white, white),
            linear-gradient(to right, var(--gradient-color1), var(--gradient-color2));
        background-origin: border-box;
        background-clip: content-box, border-box;
    }

    .ftco-send-inquiry .form {
        margin: 20px;
    }

    .ftco-send-inquiry .form .form-check-label {
        color: var(--gray);
        font-size: 12px;
    }

    .ftco-send-inquiry .form .inquiry-form-button {
        cursor: pointer;
        font-weight: 900;
        margin-top: 10px;
        padding: 10px;
        border-radius: 5px;
        background-image: linear-gradient(to right, var(--gradient-color1), var(--gradient-color2));
        text-align: center;
        transition: transform 0.1s ease-in-out
    }

    .ftco-send-inquiry .form .inquiry-form-button:hover {
        cursor: pointer;
        color: var(--white-color);
        transform: translateY(-2px);
    }

    .ftco-send-inquiry .form #inquiry-tick-check {
        border-color: red;
    }

    @media (max-width: 767px) {
        .ftco-send-inquiry .ftco-send-inquiry-form {
            width: 100%;
            bottom: 0;
            left: unset;
            top: unset;
        }
    }

    .ftco-send-inquiry .right {
        position: absolute;
        top: 45%;
        right: 5%;
        width: 400px;
    }

    .ftco-send-inquiry .right p {
        color: var(--white-color);
        font-size: 44px;
        font-weight: 900;
    }

    @media (max-width: 767px) {
        .ftco-send-inquiry .right {
            display: none;
        }
    }
</style>

<script>
    function validateEmail(email) {
        const emailRegex = /\S+@\S+\.\S+/;
        return emailRegex.test(email);
    }

    function validatePhoneNumber(phone) {
        if (phone.length > 11) {
            return true;
        }
        else {
            return false;
        }
    }

    $('#inquiry-form-button').click(function (event) {
        event.preventDefault(); // Prevent form submission
        $('#inquiry-loader').show();

        var name = $('#inquiry-form-name').val();
        var email = $('#inquiry-form-email').val();
        var countryCode = $('#inquiry-form-country-code').val();
        var phoneVal = $('#inquiry-form-phone').val();
        var remarks = $('#inquiry-form-remarks').val();
        var isChecked = $('#inquiry-tick-check').is(':checked');

        if (isChecked) {
            console.log('Checkbox is checked');
            $('#inquiry-tick-check').css('border-color', 'red');
        } else {
            console.log('Checkbox is not checked');
            $('#inquiry-tick-check').css('border-color', '');
        }

        var phone = countryCode + " " + phoneVal;

        if (!name.trim()) {

            $('#inquiry-form-name').css('border-color', 'red');
            return;
        }
        else {
            $('#inquiry-form-name').css('border-color', '');
        }

        if (!validateEmail(email)) {
            console.log('hi');
            $('#inquiry-form-email').css('border-color', 'red');
            return;
        }
        else {
            $('#inquiry-form-email').css('border-color', '');
        }

        if (phone.length < 12) {
            $('#inquiry-form-phone').css('border-color', 'red');
            return;
        }
        else {
            $('#inquiry-form-phone').css('border-color', '');
        }

        $('#inquiry-form-button').hide();
        $('#inquiry-loader').show();
        $('#inquiry-reply').html('');
        // If validation is successful, proceed with the AJAX call
        $.ajax({
            type: 'POST',
            url: "<?php echo $_ENV['ROOT_PATH']; ?>/submits/send_inquiry_mail_post.php",
            data: { name: name, email: email, phone: phone, remarks: remarks },
            success: function (data) {
                console.log(data);
                if (data === 'Message successfully sent!') {
                    $('#inquiry-reply').html(data).css({
                        'color': '#262d55;',
                    });
                    document.getElementById('inquiry-form-name').value = '';
                    document.getElementById('inquiry-form-email').value = '';
                    document.getElementById('inquiry-form-phone').value = '';
                    document.getElementById('inquiry-form-remarks').value = '';
                }
                else {
                    $('#inquiry-reply').html(data).css({
                        'color': '#FF0000',
                    });
                }
                $('#inquiry-form-button').show();
                $('#inquiry-loader').hide();
            },
            error: function () {
                $('#inquiry-reply').html('Failed to send.').css({
                    'color': '#FF0000',
                }); // Show an error message on failure
                $('#inquiry-form-button').show();
                $('#inquiry-loader').hide();
            }
        });
    });
</script>
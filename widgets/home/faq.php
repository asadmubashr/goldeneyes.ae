<?php
// Array of FaqModel instances
$final_faqs = [
    "How much does it cost to start a business in Dubai?" => "",
    "How will I set up my company in Dubai?" => "",
    "Which business should I pick in Dubai?" => "",
    "Is it easy to start a company in Dubai?" => "",
    "What is the process of setting up a large corporation in Dubai?" => "",
    "What is the best way to start a company in Dubai?" => "",
    "How do I apply for a residence visa in Dubai?" => ""
];

?>

<section class="ftco-faq" id="faqs">
    <div class="container">
        <div class="row justify-content-center mb-2 pb-3">
            <div class="col-md-10 heading-section ftco-animate text-center">
                <h3 class="mb-1">FAQs</h3>
            </div>
        </div>
        <?php foreach ($final_faqs as $question => $answer): ?>
            <div class="faq-item">
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-12 col-md-8 col-lg-6 question">
                        <p>
                            <?php echo $question;?>
                        </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-12 col-md-8 col-lg-6 answer">
                        <p>
                            <?php echo $answer;?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    </div>
</section>






<script>
    // JavaScript for toggling answer display
    const questions = document.querySelectorAll('.ftco-faq .question');
    questions.forEach(question => {
        question.addEventListener('click', function () {
            this.classList.toggle('active');
            const answer = this.parentNode.nextElementSibling.querySelector('.answer');
            if (answer) {
                answer.classList.toggle('show');
            }
        });
    });
</script>
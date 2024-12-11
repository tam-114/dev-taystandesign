<?php
$color = "#1a1a1a";
?>

<section id="contact-1333">
    <div class="cs-container" data-aos="fade-up"  data-aos-duration="1500">
        <!--Form-->
        <form class="cs-form" id="contact-form" name="Contact Form" method="POST" action="https://formspree.io/f/xovqbnzp">
            <div class="cs-content">
            <h4 class="subtitle-text">Get in Touch</h4>
            <h1 class="h1-text" ><span class="highlight">Contact</span> Me</h1>
            </div>
            <label class="cs-label">
                First Name
                <input class="cs-input" required type="text" id="fname" name="firstName" placeholder="First Name" autocomplete>
            </label>
            <label class="cs-label">
                Last Name
                <input class="cs-input" required type="text" id="lname" name="lastName" placeholder="Last Name" autocomplete>
            </label>
            <label class="cs-label cs-email">
                Email
                <input class="cs-input" required type="email" id="email" name="email" placeholder="Email" autocomplete>
            </label>
            <label class="cs-label cs-phone">
                Phone
                <input class="cs-input" required type="tel" id="phone" name="phone" placeholder="Phone" autocomplete>
            </label>
            <label class="cs-label">
                Reason for contact:
                <select class="cs-input" id="subject" name="subject" required>
                    <option value="Request a Quote">Request a Quote</option>
                    <option value="Website Audit">Website Audit</option>
                    <option value="General Inquiry">General Inquiry</option>
                    <option value="Starter Package">Starter Package</option>
                    <option value="Pro Package">Pro Package</option>
                    <option value="Custom Package">Custom Package</option>
                </select>
            </label>
            <!-- <label class="cs-label">
                Select a Package:
                <select class="cs-input" id="subject" name="subject" required>
                    <option value="General Inquiry">General Inquiry</option>
                    <option value="Starter Package">Starter Package</option>
                    <option value="Pro Package">Pro Package</option>
                    <option value="Custom Package">Custom Package</option>
                </select>
            </label> -->
            <label class="cs-label">
                Message
                <textarea class="cs-input cs-textarea" required name="message" id="message" placeholder="Write message..."></textarea>
            </label>
            <div>
                <input type="checkbox" name="privacy" id="privacy">
                <label class="cs-label">
                    I agree to have my information collected for contacting purposes in accordance with <a href="/privacy" class="noLink">Privacy Policy</a> and Terms and Conditions.
                </label>
            </div>

            <input type="text" name="_gotcha" class="d-none"/>
            <div class="d-flex justify-content-start">
                <button type="submit" class="button-tertiary w-100 d-flex align-self-start">Send me a message</button>
            </div>

        </form>
        <div class="cs-content" data-aos="fade-up" data-aos-duration="1500">
            <h4 class="subtitle-text text-center">Answered Questions</h4>
            <h1 class="h1-text">Frequently Asked <span class="highlight">Questions</span></h1>
            <!-- <span class="cs-topper">Answered Questions</span>
            <h2 class="cs-title">Frequently Asked Questions</h2> -->
            <!-- <ul class="cs-faq-group">
                <li class="cs-faq-item active">
                    <button class="cs-button">
                        <span class="cs-button-text">
                        What is your experience in web design/development?
                        </span>
                    </button>
                    <p class="cs-item-p">
                    I have over 2+ years of professional experience as a full-time Web Designer/Developer. I'm a graduate from the University of Central Florida, with my Bachelor's in Digital Media: Web Design and minor in Information Technology.
                    </p>
                </li>
                <li class="cs-faq-item">
                    <button class="cs-button">
                        <span class="cs-button-text">
                        How long does it typically take to complete a project?
                        </span>
                    </button>
                    <p class="cs-item-p">
                    The length of time typically depends on the project's needs, say from a website re-design to starting from scratch, but it can range to be between 2-6 weeks for delivery.
                    </p>
                </li>
                <li class="cs-faq-item">
                    <button class="cs-button">
                        <span class="cs-button-text">
                        How do you handle revisions or changes during the project?
                        </span>
                    </button>
                    <p class="cs-item-p">
                    The amount of revisions are included with the purchased packages, and is essentially inline with each milestone. Depending on the size of the Revision/Change Request there may be an update to the timeline of completion, but I will always do my best to meet the deadline. <em>*A Change Request would refer to changing parts of the site content entirely, while a Revision would be modifying existing content.</em>
                    </p>
                </li>
                <li class="cs-faq-item">
                    <button class="cs-button">
                        <span class="cs-button-text">
                        Do you offer ongoing support and maintenance?
                        </span>
                    </button>
                    <p class="cs-item-p">
                    Yes! There is an upfront cost for yearly maintenance and hosting of the site, or priced per month depending on the package selected. Depending on the request, changes can be included in the maintenance fee or an additional $25/hr until completion.
                    </p>
                </li>
                <li class="cs-faq-item">
                    <button class="cs-button">
                        <span class="cs-button-text">
                        Do you require a deposit?
                        </span>
                    </button>
                    <p class="cs-item-p">
                    Yes, a minimum of 30% upfront, then installments after milestones and revisions are completed. Once you're satisfied with the result, an invoice will be sent with a grace period of 15 days for payment to be due.
                    </p>
                </li>
            </ul> -->
            <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <p class="p-text fw-500 mb-0"> What is your experience in web design/development?</p>
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">I have over 3+ years of professional experience as a full-time Web Designer/Developer. I'm a graduate from the University of Central Florida, with my Bachelor's in Digital Media: Web Design and minor in Information Technology.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <p class="p-text fw-500 mb-0">How long does it typically take to complete a project?</p>
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">The length of time typically depends on the project’s needs, say from a website re-design to starting from scratch, but it can range to be between 2-6 weeks for delivery.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <p class="p-text fw-500 mb-0">How do you handle revisions or change requests during the project?</p>
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">The amount of revisions are included with the purchased packages, and is essentially inline with each milestone. Depending on the size of the Revision/Change Request there may be an update to the timeline of completion, but I will always do my best to meet the deadline. 
                            <br><br>
                            <em>*A Change Request would refer to adding and/or changing parts of the site content entirely outside of the scope, while a Revision would be modifying existing content.</em></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            <p class="p-text fw-500 mb-0">Do you offer ongoing support and maintenance?</p>
                        </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes! There is an upfront cost for yearly maintenance and hosting of the site, or priced per month depending on the package selected. Depending on the request, changes can be included in the maintenance fee or an additional $25/hr until completion.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            <p class="p-text fw-500 mb-0">Do you require a deposit?</p>
                        </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, a minimum of 30% upfront, then installments after milestones and revisions are completed. Once you're satisfied with the result, an invoice will be sent with a grace period of 15 days for payment to be due.</div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<script>
    const form = document.getElementById('contact-form');

    form.addEventListener('submit', async (event) => {
        event.preventDefault(); // Prevent default form submission
        
        const formData = new FormData(form);
        const formObject = Object.fromEntries(formData.entries());
        
        try {
            const response = await fetch(form.action, {
                method: form.method,
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(formObject),
            });

            if (response.ok) {
                // Redirect to your Thank You page on success
                window.location.href = 'https://taystan.design/thankyou';
            } else {
                // Handle errors here (e.g., show an error message)
                alert('There was an error submitting the form. Please try again.');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('There was an error submitting the form. Please try again.');
        }
    });
</script>
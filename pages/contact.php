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
                Preferred method of contact:
                <select class="cs-input" id="contactmethod" name="contactmethod">
                    <option value="Email">Email</option>
                    <option value="Text Message">Text Message</option>
                    <option value="Phone Call">Phone Call</option>
                </select>
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
            <div class="d-flex justify-content-center align-items-baseline flex-row pb-2">
                <input type="checkbox" name="privacy" id="privacy">
                <label class="cs-label d-block">
                    &nbsp;I agree to have my information collected for contacting purposes in accordance with the <a href="/privacy">Privacy Policy</a> and <a href="/terms">Terms and Conditions</a>.
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
                <?php include('components/faq.php');?>
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
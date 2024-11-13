<section class="contact-section">
    <?php if (isset($_GET['contact']) && $_GET['contact'] == 'success') : ?>
    <p class="success-message">Thank you for reaching out! We’ll get back to you soon.</p>
<?php endif; ?>

        <div class="contact-left slide-in-left">
            <h2>Additional Questions?</h2>
            <p>For more information, contact one of our friendly and knowledgeable financing experts today. Give us a call today at:</p>
            <h3>555-555-5555</h3>
        </div>

    
        <div class="contact-right slide-in-right">
            <h2>Contact Us</h2>
            <p>Have questions or need more information? Reach out to us using the form below.</p>

            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="contact-form">
                <!-- Hidden fields for processing the form in WordPress -->
                <input type="hidden" name="action" value="submit_contact_form">
                
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit" class="submit-button">Send Message</button>
            </form>
        </div>
</section>

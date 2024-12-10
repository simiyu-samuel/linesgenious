<?php include 'includes/header.php'; ?>

<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <div class="alert alert-success text-center">
        Thank you! Your message has been sent successfully.
    </div>
<?php endif; ?>

<div class="container py-5">
    <h1 class="text-center mb-4">Contact Us</h1>
    <p class="text-center mb-5">We'd love to hear from you. Get in touch with us!</p>

    <!-- Contact Form -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="process_contact.php" method="POST" class="shadow-lg p-4 rounded">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

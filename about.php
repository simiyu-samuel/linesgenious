<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Lines Genius</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .hero-section {
            background: linear-gradient(to right, #007bff, #6610f2);
            color: white;
            padding: 100px 20px;
            text-align: center;
            position: relative;
        }
        .hero-section h1 {
            font-size: 3rem;
            animation: fadeInDown 1.2s ease-in-out;
        }
        .hero-section p {
            font-size: 1.2rem;
            animation: fadeInUp 1.5s ease-in-out;
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .about-section {
            padding: 50px 20px;
        }
        .about-section img {
            border-radius: 10px;
            width: 100%;
            animation: zoomIn 1.2s ease-in-out;
        }
        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
        .team-section .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .team-section .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<div class="hero-section">
    <h1>About Lines Genius</h1>
    <p>Discover the story behind Lines Genius - where creativity meets technology.</p>
</div>

<!-- About Section -->
<div class="about-section container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2>Our Mission</h2>
            <p>At Lines Genius, we are dedicated to blending humor and knowledge to make programming accessible, fun, and inspirational. Our goal is to create a community where developers can learn, laugh, and grow together.</p>
        </div>
        <div class="col-md-6">
            <img src="https://via.placeholder.com/600x400" alt="Lines Genius">
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="team-section container mt-5">
    <h2 class="text-center mb-4">Meet Our Team</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="assets/images/samuel.png" class="card-img-top" alt="Team Member 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Samuel Simiyu</h5>
                    <p class="card-text">Founder & Developer</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Team Member 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Creative Genius</h5>
                    <p class="card-text">Content & Humor Specialist</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Team Member 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Tech Enthusiast</h5>
                    <p class="card-text">Technical Advisor</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include('includes/footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

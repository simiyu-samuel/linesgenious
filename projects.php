<?php include 'includes/header.php'; ?>

<div class="container py-5">
    <h1 class="text-center mb-4">Our Projects</h1>
    <p class="text-center mb-5">Explore our innovative and exciting programming projects.</p>

    <!-- Filter Buttons -->
    <div class="text-center mb-4">
        <button class="btn btn-primary filter-btn" data-category="all">All</button>
        <button class="btn btn-outline-primary filter-btn" data-category="web">Web Development</button>
        <button class="btn btn-outline-primary filter-btn" data-category="mobile">Mobile Apps</button>
        <button class="btn btn-outline-primary filter-btn" data-category="ai">AI Projects</button>
    </div>

    <!-- Project Cards -->
    <div class="row g-4" id="projects-container">
        <?php
        $projects = [
            ["title" => "E-commerce Website", "category" => "web", "description" => "A full-stack online store.", "image" => "images/ecommerce.jpg"],
            ["title" => "Weather App", "category" => "mobile", "description" => "A mobile app for real-time weather updates.", "image" => "images/weather.jpg"],
            ["title" => "AI Chatbot", "category" => "ai", "description" => "An AI-powered customer support chatbot.", "image" => "images/chatbot.jpg"],
            ["title" => "Portfolio Website", "category" => "web", "description" => "A personal portfolio for showcasing skills.", "image" => "images/portfolio.jpg"],
            ["title" => "Fitness Tracker App", "category" => "mobile", "description" => "A fitness tracking app for health monitoring.", "image" => "images/fitness.jpg"],
            ["title" => "Machine Learning Model", "category" => "ai", "description" => "A predictive model for stock prices.", "image" => "images/ml.jpg"],
        ];

        foreach ($projects as $project): ?>
            <div class="col-md-4 project-card" data-category="<?php echo $project['category']; ?>">
                <div class="card h-100 shadow-lg project-animation">
                    <img src="<?php echo $project['image']; ?>" class="card-img-top" alt="<?php echo $project['title']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $project['title']; ?></h5>
                        <p class="card-text"><?php echo $project['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

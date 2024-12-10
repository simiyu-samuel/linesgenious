<?php include 'includes/header.php'; ?>

<div class="container py-5">
    <h1 class="text-center mb-4">Our Blog</h1>
    <p class="text-center mb-5">Discover insightful articles and updates from Lines Genius.</p>

    <!-- Blog Posts -->
    <div class="row g-4">
        <?php
        $blogPosts = [
            ["title" => "Getting Started with Web Development", "date" => "Dec 5, 2024", "content" => "Learn how to kickstart your web development journey.", "image" => "images/web-development.jpg"],
            ["title" => "Top 5 Programming Languages for 2024", "date" => "Nov 25, 2024", "content" => "Explore the most popular programming languages of 2024.", "image" => "images/programming-languages.jpg"],
            ["title" => "Why Learn AI in 2024?", "date" => "Oct 20, 2024", "content" => "Understand the growing importance of AI in various industries.", "image" => "images/ai.jpg"],
        ];

        foreach ($blogPosts as $post): ?>
            <div class="col-md-4">
                <div class="card h-100 shadow-lg blog-animation">
                    <img src="<?php echo $post['image']; ?>" class="card-img-top" alt="<?php echo $post['title']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['title']; ?></h5>
                        <p class="card-text"><?php echo $post['content']; ?></p>
                        <p class="text-muted"><small><?php echo $post['date']; ?></small></p>
                        <a href="blog_detail.php?id=<?php echo urlencode($post['title']); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

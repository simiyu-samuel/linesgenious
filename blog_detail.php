<?php
include 'includes/header.php';

// Simulated blog data
$blogPosts = [
    "Getting Started with Web Development" => [
        "date" => "Dec 5, 2024",
        "content" => "This is a full article about getting started with web development...",
        "image" => "images/web-development.jpg"
    ],
    "Top 5 Programming Languages for 2024" => [
        "date" => "Nov 25, 2024",
        "content" => "Here’s why these programming languages are essential in 2024...",
        "image" => "images/programming-languages.jpg"
    ],
    "Why Learn AI in 2024?" => [
        "date" => "Oct 20, 2024",
        "content" => "AI is transforming industries, and learning it is a career boost...",
        "image" => "images/ai.jpg"
    ],
];

// Fetch the selected blog
$blogTitle = $_GET['id'] ?? '';
$blog = $blogPosts[$blogTitle] ?? null;
?>

<div class="container py-5">
    <?php if ($blog): ?>
        <h1 class="text-center mb-4"><?php echo $blogTitle; ?></h1>
        <p class="text-center text-muted"><?php echo $blog['date']; ?></p>
        <img src="<?php echo $blog['image']; ?>" alt="<?php echo $blogTitle; ?>" class="img-fluid rounded mb-4">
        <p><?php echo $blog['content']; ?></p>
    <?php else: ?>
        <h1 class="text-center">Blog Not Found</h1>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>

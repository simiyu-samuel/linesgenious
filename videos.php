<?php include 'includes/header.php'; ?>

<div class="container py-5">
    <h1 class="text-center mb-4">Our Videos</h1>
    <p class="text-center mb-5">Explore our collection of programming jokes, tutorials, and project showcases.</p>

    <!-- Search Bar and Filter -->
    <div class="row mb-4">
        <div class="col-md-8 mx-auto">
            <form method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Search videos..." 
                       value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>

    <?php
    // Video Data (Will modify to fetch from a database)
    $videos = [
        ["title" => "Programming Joke #1", "description" => "A lighthearted joke about debugging.", "url" => ""],
        ["title" => "How to Build a Calculator", "description" => "Step-by-step guide to creating a calculator.", "url" => ""],
        ["title" => "Project Showcase: Weather App", "description" => "A quick overview of a weather app.", "url" => ""],
        ["title" => "Debugging Tips", "description" => "Effective debugging tips for developers.", "url" => ""],
        ["title" => "React Basics", "description" => "Learn React fundamentals in 10 minutes.", "url" => ""],
        ["title" => "Coding Challenges", "description" => "Solve fun and challenging coding puzzles.", "url" => ""],
    ];

    // Filter Logic
    $search = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : '';
    $filteredVideos = $search !== '' ? array_filter($videos, function ($video) use ($search) {
        return strpos(strtolower($video['title']), $search) !== false || strpos(strtolower($video['description']), $search) !== false;
    }) : $videos;
    

    // Pagination Logic
    $videosPerPage = 6;
    $totalVideos = count($filteredVideos);
    $totalPages = ceil($totalVideos / $videosPerPage);
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $currentPage = max(1, min($totalPages, $currentPage));
    $offset = ($currentPage - 1) * $videosPerPage;
    $videosToShow = array_slice($filteredVideos, $offset, $videosPerPage);
    ?>

    <!-- Video Cards -->
    <div class="row g-4">
        <?php if (count($videosToShow) > 0): ?>
            <?php foreach ($videosToShow as $video): ?>
                <div class="col-md-4">
                    <div class="card">
                        <iframe class="card-img-top" width="100%" height="215" src="<?php echo $video['url']; ?>" 
                                title="YouTube video player" frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen></iframe>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $video['title']; ?></h5>
                            <p class="card-text"><?php echo $video['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12 text-center">
                <p class="text-muted">No videos found matching your search.</p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <?php if ($totalPages > 1): ?>
        <nav class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php if ($currentPage == 1) echo 'disabled'; ?>">
                    <a class="page-link" href="?search=<?php echo urlencode($search); ?>&page=<?php echo $currentPage - 1; ?>">Previous</a>
                </li>
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?php if ($i == $currentPage) echo 'active'; ?>">
                        <a class="page-link" href="?search=<?php echo urlencode($search); ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?php if ($currentPage == $totalPages) echo 'disabled'; ?>">
                    <a class="page-link" href="?search=<?php echo urlencode($search); ?>&page=<?php echo $currentPage + 1; ?>">Next</a>
                </li>
            </ul>
        </nav>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>

<?php
// Assume a session is started and user is logged in

// Sample data for demonstration; in a real scenario, this would come from a database
$roommates = [
    ['name' => 'Alice', 'cleanliness' => 5, 'noise' => 2, 'study' => 4],
    ['name' => 'Bob', 'cleanliness' => 3, 'noise' => 5, 'study' => 3],
    ['name' => 'Charlie', 'cleanliness' => 4, 'noise' => 4, 'study' => 5],
];

$bestMatch = null;

// Function to find the best match (simplified example)
function findBestMatch($roommates, $preferences) {
    $bestMatch = null;
    $highestScore = -1;
    
    foreach ($roommates as $roommate) {
        $score = 0;
        $score += (5 - abs($preferences['cleanliness'] - $roommate['cleanliness']));
        $score += (5 - abs($preferences['noise'] - $roommate['noise']));
        $score += (5 - abs($preferences['study'] - $roommate['study']));
        
        if ($score > $highestScore) {
            $highestScore = $score;
            $bestMatch = $roommate;
        }
    }
    
    return $bestMatch;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $preferences = [
        'cleanliness' => intval($_POST['cleanliness']),
        'noise' => intval($_POST['noise']),
        'study' => intval($_POST['study']),
    ];
    
    $bestMatch = findBestMatch($roommates, $preferences);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roommate Matching</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="roommate.css">
</head>
<body>
    <div class="container my-5">
        <header class="mb-4">
            <h1 class="text-center">Roommate Matching</h1>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="community.php">Community</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>

        <section class="matching-section">
            <h2 class="mb-4">Find Your Best Roommate Match</h2>
            
            <form action="roommate-matching.php" method="post">
                <div class="form-group">
                    <label for="cleanliness">Cleanliness (1-5):</label>
                    <input type="number" class="form-control" id="cleanliness" name="cleanliness" min="1" max="5" required>
                </div>
                <div class="form-group">
                    <label for="noise">Noise Tolerance (1-5):</label>
                    <input type="number" class="form-control" id="noise" name="noise" min="1" max="5" required>
                </div>
                <div class="form-group">
                    <label for="study">Study Habits (1-5):</label>
                    <input type="number" class="form-control" id="study" name="study" min="1" max="5" required>
                </div>
                <button type="submit" class="btn btn-primary">Find Match</button>
            </form>

            <?php if ($bestMatch): ?>
                <div class="match-profile mt-4">
                    <h3>Best Match: <?php echo htmlspecialchars($bestMatch['name']); ?></h3>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Cleanliness:</strong> <?php echo htmlspecialchars($bestMatch['cleanliness']); ?></li>
                        <li class="list-group-item"><strong>Noise Tolerance:</strong> <?php echo htmlspecialchars($bestMatch['noise']); ?></li>
                        <li class="list-group-item"><strong>Study Habits:</strong> <?php echo htmlspecialchars($bestMatch['study']); ?></li>
                    </ul>
                </div>
            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                <p class="mt-4">No match found. Try adjusting your preferences or check back later.</p>
            <?php endif; ?>
        </section>

        <footer class="mt-5">
            <p class="text-center">&copy; 2024 Kitere Unihome. All rights reserved.</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

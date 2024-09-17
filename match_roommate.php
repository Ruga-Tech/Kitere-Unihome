<?php
// Include database connection file
include('config.php');

// Predefined user preferences (simulating the user without login)
$user_id = 1; // Assuming a hardcoded user ID for this demonstration

// Predefined roommate preferences (simulating the user’s preferences)
$preferences = array(
    'preferred_gender' => 'female',
    'preferred_age_range' => '20-25',
    'preferred_occupation' => 'student',
    'preferred_smoking_habit' => 'non-smoker',
    'preferred_room_type' => 'shared',
    'preferred_study_time' => 'evening',
    'preferred_location' => 'near university'
);

// Fetch potential roommate matches based on predefined preferences
$query = "SELECT users.*, roommate_preferences.*
          FROM users
          JOIN roommate_preferences ON users.id = roommate_preferences.user_id
          WHERE users.id != ?
          AND (users.gender = ? OR ? = 'no_preference')
          AND (users.age BETWEEN ? AND ? OR ? = 'no_preference')
          AND (users.occupation = ? OR ? = 'no_preference')
          AND (users.smoking_habit = ? OR ? = 'no_preference')
          AND (users.room_type_preference = ? OR ? = 'no_preference')
          AND (users.study_time_preference = ? OR ? = 'no_preference')
          AND (users.location_preference = ? OR ? = 'no_preference')";

$stmt = $conn->prepare($query);
$stmt->bind_param('issssssssssssssss',
    $user_id,
    $preferences['preferred_gender'], $preferences['preferred_gender'],
    explode('-', $preferences['preferred_age_range'])[0], explode('-', $preferences['preferred_age_range'])[1], $preferences['preferred_age_range'],
    $preferences['preferred_occupation'], $preferences['preferred_occupation'],
    $preferences['preferred_smoking_habit'], $preferences['preferred_smoking_habit'],
    $preferences['preferred_room_type'], $preferences['preferred_room_type'],
    $preferences['preferred_study_time'], $preferences['preferred_study_time'],
    $preferences['preferred_location'], $preferences['preferred_location']
);
$stmt->execute();
$matches = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roommate Matches</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="roommate.css">
</head>
<body>
    <div class="container my-5">
        <header class="mb-4">
            <h1 class="text-center">Roommate Matches</h1>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="community.php">Community</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>

        <h2 class="mb-4">Potential Roommate Matches</h2>

        <?php if ($matches->num_rows > 0): ?>
            <div class="list-group">
                <?php while ($match = $matches->fetch_assoc()): ?>
                    <div class="list-group-item">
                        <h5><?php echo htmlspecialchars($match['first_name'] . ' ' . $match['last_name']); ?></h5>
                        <p>Gender: <?php echo htmlspecialchars($match['gender']); ?></p>
                        <p>Age: <?php echo htmlspecialchars($match['age']); ?></p>
                        <p>Occupation: <?php echo htmlspecialchars($match['occupation']); ?></p>
                        <p>Room Preference: <?php echo htmlspecialchars($match['room_type_preference']); ?></p>
                        <p>Study Time Preference: <?php echo htmlspecialchars($match['study_time_preference']); ?></p>
                        <p>Smoking Habit: <?php echo htmlspecialchars($match['smoking_habit']); ?></p>
                        <p>Location Preference: <?php echo htmlspecialchars($match['location_preference']); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <p>No matches found. Please adjust your preferences and try again.</p>
        <?php endif; ?>

        <footer class="mt-5">
            <p class="text-center">&copy; 2024 Kitere Unihome. All rights reserved.</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

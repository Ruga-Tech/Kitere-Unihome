<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitere Unihome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Kitere Unihome</h1>
            <p>Find your perfect student accommodation</p>
            <form action="listings.php" method="get">
                <input type="text" name="location" placeholder="Enter location">
                <input type="text" name="price_range" placeholder="Price range">
                <select name="room_type">
                    <option value="single">Single Room</option>
                    <option value="shared">Shared Room</option>
                </select>
                <button type="submit">Search</button>
            </form>
            <div class="cta-buttons">
                <a href="listings.php" class="btn">Browse Listings</a>
                <a href="virtual-tours.php" class="btn">Take a Virtual Tour</a>
                <a href="roommate-matching.php" class="btn">Find a Roommate</a>
            </div>
        </div>
    </section>

    <section class="featured-listings">
        <div class="container">
            <h2>Featured Hostel Listings</h2>
            <div class="listings-grid">
                <?php
                // Connect to MySQL database
                $conn = new mysqli("localhost", "root", "", "kitere_unihome");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Query to retrieve hostel listings
                $sql = "SELECT id, name, description, rent, image_url, status FROM hostels ORDER BY id DESC LIMIT 4";
                $result = $conn->query($sql);

                if (!$result) {
                    // Query failed
                    echo "Error: " . $conn->error;
                } elseif ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='listing'>";
                        echo "<img src='" . $row['image_url'] . "' alt='" . $row['name'] . "'>";
                        echo "<h3>" . $row['name'] . "</h3>";
                        echo "<p>Description: " . $row['description'] . "</p>";
                        echo "<p>Rent: Ksh. " . $row['rent'] . "</p>";
                        echo "<p>Status: " . $row['status'] . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "No listings available.";
                }

                // Close database connection
                $conn->close();
                ?>
            </div>
        </div>
    </section>
    <!-- Other sections here -->

<?php include 'footer.php'; ?>
</body>
</html>
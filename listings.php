<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kitere_unihome";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch hostels for rent
$hostels_sql = "SELECT * FROM hostels WHERE status = 'available'";
$hostels_result = $conn->query($hostels_sql);

// Fetch houses for sale
$houses_sql = "SELECT * FROM houses WHERE status = 'available'";
$houses_result = $conn->query($houses_sql);

// Fetch land for sale
$land_sql = "SELECT * FROM land WHERE status = 'available'";
$land_result = $conn->query($land_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitere Unihome Listings</title>
    <link rel="stylesheet" href="listings.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Kitere Unihome Listings</h1>
        
        <h2>Hostels for Rent</h2>
        <div class="listing-grid">
            <?php if ($hostels_result->num_rows > 0): ?>
                <?php while($hostel = $hostels_result->fetch_assoc()): ?>
                    <div class="listing-item">
                        <img src="<?php echo $hostel['image_url']; ?>" alt="Hostel Image">
                        <h3><?php echo $hostel['name']; ?></h3>
                        <p><?php echo $hostel['description']; ?></p>
                        <p>Rent: Ksh <?php echo number_format($hostel['rent'], 2); ?> per Semester</p>
                        <a href="details.php?id=<?php echo $hostel['id']; ?>&type=hostel" class="btn">View Details</a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No hostels available for rent at the moment.</p>
            <?php endif; ?>
        </div>

        <h2>Houses for Sale</h2>
        <div class="listing-grid">
            <?php if ($houses_result->num_rows > 0): ?>
                <?php while($house = $houses_result->fetch_assoc()): ?>
                    <div class="listing-item">
                        <img src="<?php echo $house['image_url']; ?>" alt="House Image">
                        <h3><?php echo $house['name']; ?></h3>
                        <p><?php echo $house['description']; ?></p>
                        <p>Price: Ksh <?php echo number_format($house['price'], 2); ?></p>
                        <a href="details.php?id=<?php echo $house['id']; ?>&type=house" class="btn">View Details</a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No houses available for sale at the moment.</p>
            <?php endif; ?>
        </div>

        <h2>Land for Sale</h2>
        <div class="listing-grid">
            <?php if ($land_result->num_rows > 0): ?>
                <?php while($land = $land_result->fetch_assoc()): ?>
                    <div class="listing-item">
                        <img src="<?php echo $land['image_url']; ?>" alt="Land Image">
                        <h3><?php echo $land['name']; ?></h3>
                        <p><?php echo $land['description']; ?></p>
                        <p>Price: Ksh <?php echo number_format($land['price'], 2); ?></p>
                        <a href="details.php?id=<?php echo $land['id']; ?>&type=land" class="btn">View Details</a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No land available for sale at the moment.</p>
            <?php endif; ?>
        </div>
    </div>

    <?php $conn->close(); ?>
</body>
</html>

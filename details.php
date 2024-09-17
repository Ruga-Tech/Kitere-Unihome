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

// Get ID and type from the URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$type = isset($_GET['type']) ? $_GET['type'] : '';

if ($id > 0 && in_array($type, ['hostel', 'house', 'land'])) {
    // Determine the table to query based on the type
    $table = '';
    switch ($type) {
        case 'hostel':
            $table = 'hostels';
            break;
        case 'house':
            $table = 'houses';
            break;
        case 'land':
            $table = 'land';
            break;
    }

    // Fetch the specific item details
    $sql = "SELECT * FROM $table WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the item exists
    if ($result->num_rows > 0) {
        $item = $result->fetch_assoc();
    } else {
        echo "No details found for the selected item.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($type); ?> Details</title>
    <link rel="stylesheet" href="details.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center"><?php echo $item['name']; ?></h1>
        
        <div class="detail-view">
            <img src="<?php echo $item['image_url']; ?>" alt="<?php echo $item['name']; ?> Image" class="detail-image">
            <div class="detail-info">
                <h2>Description</h2>
                <p><?php echo $item['description']; ?></p>
                
                <?php if ($type == 'hostel'): ?>
                    <p><strong>Rent:</strong> Ksh <?php echo number_format($item['rent'], 2); ?> per month</p>
                <?php else: ?>
                    <p><strong>Price:</strong> Ksh <?php echo number_format($item['price'], 2); ?></p>
                <?php endif; ?>
                
                <p><strong>Status:</strong> <?php echo ucfirst($item['status']); ?></p>
                <a href="listing.php" class="btn">Back to Listings</a>
            </div>
        </div>
    </div>

    <?php
    // Close the database connection
    $conn->close();
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Management Resources</title>
    <link rel="stylesheet" href="amenities.css">
</head>
<body>
    <?php include 'amenitiesheader.php'; ?>
    <main>
        <h1>Waste Management Resources</h1>
        <section class="waste-resources">
            <div class="resource">
                <h2>Recycling Centers</h2>
                <p>Locate nearby recycling centers for various materials.</p>
                <button onclick="showRecyclingCenters()">Find Recycling Centers</button>
            </div>
            <div class="resource">
                <h2>Waste Disposal Services</h2>
                <p>Find services for proper waste disposal in your area.</p>
                <button onclick="showWasteDisposal()">Find Waste Disposal Services</button>
            </div>
            <div class="resource">
                <h2>Educational Resources</h2>
                <p>Access information on waste management and recycling best practices.</p>
                <button onclick="showEducationalResources()">View Educational Resources</button>
            </div>
        </section>
    </main>
    <?php include 'amenitiesfooter.php'; ?>
    <script src="amenities.js"></script>
</body>
</html>

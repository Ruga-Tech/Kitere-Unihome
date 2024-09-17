<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Resources</title>
    <link rel="stylesheet" href="amenities.css">
</head>
<body>
    <?php include 'amenitiesheader.php'; ?>
    <main>
        <h1>Academic Resources</h1>
        <section class="academic-resources">
            <div class="resource">
                <h2>Cyber Cafes</h2>
                <p>Locate nearby cyber cafes for your internet needs.</p>
                <button onclick="showCyberCafes()">Find Cyber Cafes</button>
            </div>
            <div class="resource">
                <h2>Libraries</h2>
                <p>Find libraries and study spaces nearby.</p>
                <button onclick="showLibraries()">Find Libraries</button>
            </div>
            <div class="resource">
                <h2>Tutoring Services</h2>
                <p>Access tutoring services for various subjects.</p>
                <button onclick="showTutoring()">Find Tutors</button>
            </div>
            <div class="resource">
                <h2>Driving Schools</h2>
                <p>Find driving schools in your area.</p>
                <button onclick="showDrivingSchools()">Find Driving Schools</button>
            </div>
        </section>
    </main>
    <?php include 'amenitiesfooter.php'; ?>
    <script src="amenities.js"></script>
</body>
</html>

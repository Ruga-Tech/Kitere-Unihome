<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Job and Internship Opportunities</title>
    <link rel="stylesheet" href="amenities.css">
</head>
<body>
    <?php include 'amenitiesheader.php'; ?>
    <main>
        <h1>Job and Internship Opportunities</h1>
        <section class="job-listings">
            <div class="job">
                <h2>Available Jobs</h2>
                <p>Explore current job openings in your area.</p>
                <button onclick="showJobs()">View Job Listings</button>
            </div>
            <div class="job">
                <h2>Internships</h2>
                <p>Find internship opportunities to gain experience.</p>
                <button onclick="showInternships()">View Internship Listings</button>
            </div>
        </section>
    </main>
    <?php include 'amenitiesfooter.php'; ?>
    <script src="amenities.js"></script>
</body>
</html>

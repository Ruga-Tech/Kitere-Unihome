<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Digital Bulletin</title>
    <link rel="stylesheet" href="amenities.css">
</head>
<body>
    <?php include 'amenitiesheader.php'; ?>
    <main>
        <h1>Community Digital Bulletin</h1>
        <section class="bulletin-board">
            <div class="bulletin">
                <h2>Local News</h2>
                <p>Stay informed with the latest local news.</p>
                <button onclick="showNews()">Read News</button>
            </div>
            <div class="bulletin">
                <h2>Events</h2>
                <p>Find out about upcoming events in your community.</p>
                <button onclick="showEvents()">View Events</button>
            </div>
            <div class="bulletin">
                <h2>Announcements</h2>
                <p>Check out important announcements from local authorities.</p>
                <button onclick="showAnnouncements()">View Announcements</button>
            </div>
        </section>
    </main>
    <?php include 'amenitiesfooter.php'; ?>
    <script src="amenities.js"></script>
</body>
</html>

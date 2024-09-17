<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Transportation</title>
    <link rel="stylesheet" href="amenities.css">
</head>
<body>
    <?php include 'amenitiesheader.php'; ?>
    <main>
        <h1>Find Local Public Transportation</h1>
        <section class="transport-options">
            <div class="option">
                <h2>Buses</h2>
                <p>Find the nearest bus stops and schedules.</p>
                <button onclick="showBuses()">View Bus Options</button>
            </div>
            <div class="option">
                <h2>Trains</h2>
                <p>Locate train stations and timetable information.</p>
                <button onclick="showTrains()">View Train Options</button>
            </div>
            <div class="option">
                <h2>Other Transport</h2>
                <p>Explore other transportation options like taxis and bike rentals.</p>
                <button onclick="showOthers()">View Other Options</button>

                 

            </div>
        </section>
    </main>
    <?php include 'amenitiesfooter.php'; ?>
    <script src="amenities.js"></script>
</body>
</html>

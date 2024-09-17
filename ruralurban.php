<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rural and Urban Planning Solutions</title>
    <link rel="stylesheet" href="ruralurban.css">
    <link rel="stylesheet" href="amenities.css">
</head>
<body>
    <?php include 'amenitiesheader.php'; ?>
    <main>
      <h1>Rural and Urban Planning Solutions</h1>
        <section class="planning-solutions">
            <div class="solution">
                <h2>Smart City Integration</h2>
                <p>Discover how we integrate smart technologies into urban planning to create efficient, sustainable, and connected cities.</p>
                <button onclick="showSmartCityIntegration()">Learn More</button>
            </div>
            <div class="solution">
                <h2>Rural Development Initiatives</h2>
                <p>Explore our initiatives aimed at enhancing infrastructure and living conditions in rural areas, bridging the urban-rural divide.</p>
                <button onclick="showRuralDevelopment()">Explore Initiatives</button>
            </div>
            <div class="solution">
                <h2>Sustainable Housing Projects</h2>
                <p>Learn about our housing projects designed to promote sustainability and affordability in both urban and rural settings.</p>
                <button onclick="showSustainableHousing()">View Projects</button>
            </div>
        </section>
    </main>
    <?php include 'amenitiesfooter.php'; ?>
    <script src="ruralurban.js"></script>
</body>
</html>

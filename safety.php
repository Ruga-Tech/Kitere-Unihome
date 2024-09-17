<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safety Features</title>
    <link rel="stylesheet" href="amenities.css">
</head>
<body>
    <?php include 'amenitiesheader.php'; ?>
    <main>
        <h1>Local Safety Services</h1>
        <section class="safety-services">
            <div class="service">
                <h2>Police Stations</h2>
                <p>Find the nearest police stations and contact details.</p>
                <button onclick="showPolice()">View nearest police stations</button>
            </div>
            <div class="service">
                <h2>Emergency Contacts</h2>
                <p>Access important emergency contact numbers.</p>
                <button onclick="showEmergencyContacts()">View Emergency Contacts</button>
            </div>
        </section>
    </main>
    <?php include 'amenitiesfooter.php'; ?>
    <script src="amenities.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitere UniHome Virtual Tour</title>
    <!-- Include Pannellum Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css">
    <script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            height: 100vh;
            position: relative;
        }
        .nav-buttons {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            z-index: 10;
        }
        .nav-buttons a {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <div id="panorama"></div>
    <?php
    // Array of local 360-degree images for the virtual tour
    $views = [
        ["view" => "images/o address your questions in relation to the Kitere Unihome project and the context of Migori, Kenya, I will break down each of your points with relevant data, trends, and insights:

1. Present Problem in Kenya and Around Migori (Kitere Unihome Project Context)
Housing Challenges:

Urbanization and Rural-Urban Migration: Kenya has been experiencing rapid urbanization, with over 27% of the population now living in urban areas. Migori County is experiencing similar trends as it grows into a regional hub, including Rongo where students from Rongo University increase housing demand.
Shortage of Affordable Housing: The Kenyan housing market has been unable to meet the rising demand, especially in growing towns like Rongo. Students and low-income residents often struggle to find affordable, safe housing.
Informal Housing Markets: In rural and peri-urban areas like Migori, much of the housing is informal, with inadequate infrastructure and poor living conditions.
Statistics:

According to the Kenya National Bureau of Statistics (KNBS), urban migration is projected to increase the housing deficit by 200,000 units annually.
In Migori, only 15% of households have access to piped water and reliable electricity, making the housing market particularly challenging for students.
2. Negative Impact on the Community and Students
Housing Crisis for Students:

Overcrowding and Poor Conditions: Students often live in overcrowded conditions with minimal security, leading to discomfort and safety concerns.
High Rental Costs: Due to high demand, landlords in areas like Rongo often charge exorbitant prices for substandard housing, creating financial strain on students.
Academic Performance: Poor housing conditions lead to distractions and an unsafe environment for students, potentially affecting their academic performance.
Community Challenges:

Strained Resources: As students migrate into areas around Migori, local resources (e.g., water, electricity, and health services) are overstretched.
Land Use Conflict: Urban expansion often leads to conflicts over land use, displacing local communities and pushing up land prices, further reducing affordable housing options.
3. Solutions Provided by Kitere Unihome
Kitere Unihome aims to solve these problems by offering a smart, web-based rental management system that makes housing more accessible and organized for students and landlords.

Key Features:

Remote Booking System: Students can view available rooms, book remotely, and see detailed room costs, saving them time and ensuring they can secure housing early.
Tenant and Landlord Interaction: Direct communication between tenants and landlords for maintenance requests, feedback, and community engagements.
Data-Driven: The system uses data to match students to suitable rooms based on their preferences, improving satisfaction.
4. Innovation or Uniqueness of Kitere Unihome
Unique Value Propositions:

ERP-Based Interaction: Kitere Unihome offers a centralized platform where different entities (students, landlords, and property managers) can interact seamlessly.
Tenant Analytics: It provides analytics and reporting tools for landlords to track rental trends and maintenance requests, enhancing decision-making.
Community Interaction: It goes beyond rental management to foster a sense of community by allowing tenants to give feedback and participate in local events.
User-Friendly Design: Its interface, designed with students in mind, provides an intuitive booking system and easily accessible information.
5. What is Lacking (Challenges)
Funding and Partnerships:

Hosting Costs: Kitere Unihome requires funds to properly host the system, including domain registration, server space, and maintenance.
Partnerships: Collaborating with Rongo University and local government could help scale the platform and ensure wider adop.jpg", "title" => "Entrance", "hotspots" => [["pitch" => 10, "yaw" => 180, "text" => "Go to Living Room", "target_view" => 1]]],
        ["view" => "images/living-room.jpg", "title" => "Living Room", "hotspots" => [["pitch" => 0, "yaw" => 90, "text" => "Go to Kitchen", "target_view" => 2]]],
        ["view" => "images/kitchen.jpg", "title" => "Kitchen", "hotspots" => [["pitch" => 0, "yaw" => -90, "text" => "Go to Entrance", "target_view" => 0]]],
    ];

    // Get the current view from the URL, default to the first view
    $current_view = isset($_GET['view']) ? $_GET['view'] : 0;
    $current_view = (int)$current_view;

    // Navigation
    $prev_view = $current_view > 0 ? $current_view - 1 : count($views) - 1;
    $next_view = $current_view < count($views) - 1 ? $current_view + 1 : 0;
    ?>
    <div class="nav-buttons">
        <a href="?view=<?php echo $prev_view; ?>">Previous</a>
        <a href="?view=<?php echo $next_view; ?>">Next</a>
    </div>
</div>

<script>
    // Initialize Pannellum Panorama Viewer with extended zoom range
    pannellum.viewer('panorama', {
        "type": "equirectangular",
        "panorama": "<?php echo $views[$current_view]['view']; ?>",
        "autoLoad": true,
        "minFov": 30,  // Allows more zoom-in
        "maxFov": 10000, // Set to a very high value for endless zoom-out
        "hotSpots": [
            <?php
            foreach ($views[$current_view]['hotspots'] as $hotspot) {
                echo json_encode([
                    "pitch" => $hotspot['pitch'],
                    "yaw" => $hotspot['yaw'],
                    "type" => "info",
                    "text" => $hotspot['text'],
                    "clickHandlerFunc" => "function() { window.location.href = '?view={$hotspot['target_view']}'; }"
                ]) . ',';
            }
            ?>
        ]
    });
</script>

</body>
</html>

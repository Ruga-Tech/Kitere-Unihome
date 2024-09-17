<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <div class="container my-5">
        <header class="mb-4">
            <h1 class="text-center">Contact Us</h1>
        </header>

        <section class="contact-details mb-5">
            <h2 class="mb-4">Rongo University</h2>
            <address>
                <p><strong>Address:</strong> Rongo University, P.O. Box 103-40404, Rongo, Kenya</p>
                <p><strong>Phone:</strong> +254 710 000 000</p>
                <p><strong>Email:</strong> info@rongouniversity.ac.ke</p>
                <p><strong>Location:</strong> <a href="https://www.google.com/maps/place/RONGO+UNIVERSITY/@-0.8200843,34.6207067,17z/data=!4m15!1m8!3m7!1s0x182b4e831dbcf73f:0x6ccca65ba7eab38b!2sKitere!3b1!8m2!3d-0.833333!4d34.6!16s%2Fg%2F1ywqftygv!3m5!1s0x182b49f52ae796bd:0x4b5c694d2099db28!8m2!3d-0.8242034!4d34.6079365!16s%2Fg%2F1tf8k8rn?entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D">View Map<a/></p>
            </address>
        </section>

        <section class="team mb-5">
            <h2 class="mb-4">Our Team</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Oyoo Owere</h3>
                            <h5 class="card-subtitle mb-2 text-muted">System Administrator</h5>
                            <p><strong>Phone:</strong> +254 700 000 000</p>
                            <p><strong>Email:</strong> oyoo.owere@example.com</p>
                            <p>
                                <a href="https://www.linkedin.com/in/oyooowere" class="card-link" target="_blank">LinkedIn</a>
                                <a href="https://www.facebook.com/oyooowere" class="card-link" target="_blank">Facebook</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Brian Oginga</h3>
                            <h5 class="card-subtitle mb-2 text-muted">Community Representative</h5>
                            <p><strong>Phone:</strong> +254 720 000 000</p>
                            <p><strong>Email:</strong> brian.oginga@example.com</p>
                            <p>
                                <a href="https://www.linkedin.com/in/brianoginga" class="card-link" target="_blank">LinkedIn</a>
                                <a href="https://www.facebook.com/brianoginga" class="card-link" target="_blank">Facebook</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-form">
            <h2 class="mb-4">Send Us a Message</h2>
            <form action="submit_contact.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

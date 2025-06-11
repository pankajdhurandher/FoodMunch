<?php
// Confirmation page should capture the details from the URL (using $_GET) or you can use session variables

// Fetch reservation details from the URL (passed via header redirection from the reservation.php page)
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Guest';
$phone = isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : 'Not provided';
$person = isset($_GET['person']) ? htmlspecialchars($_GET['person']) : '1 person';
$reservationDate = isset($_GET['reservation_date']) ? htmlspecialchars($_GET['reservation_date']) : 'Not specified';
$time = isset($_GET['time']) ? htmlspecialchars($_GET['time']) : 'Not specified';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Reservation Confirmation - Food Munch</title>

    <!-- Add your favicon and other meta tags here -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body id="top" class="body1">
    
    <main>
        <article>
            <section class="section confirmation" aria-label="confirmation-label" id="confirmation">
                <div class="container">
                    <p class="section-subtitle text-center label-2">Thank You for Your Reservation</p>
                    <h2 class="headline-1 section-title text-center">Your Reservation is Confirmed!</h2>

                    <div class="confirmation-details text-center label-3 title-3 card-title">
                        <p class="confirmation-info">Name: <strong><?php echo $name; ?></strong></p>
                        <p class="confirmation-info">Phone: <strong><?php echo $phone; ?></strong></p>
                        <p class="confirmation-info">Number of People: <strong><?php echo $person; ?></strong></p>
                        <p class="confirmation-info">Reservation Date: <strong><?php echo $reservationDate; ?></strong></p>
                        <p class="confirmation-info">Reservation Time: <strong><?php echo $time; ?></strong></p>
                    </div>

                    <div class="thank-you-message section-subtitle text-center">
                        <p>We are excited to serve you! Please arrive on time for your reservation.</p>
                        <p>If you have any changes or queries, feel free to <a href="tel:+88123123456">call us</a> anytime!</p>
                    </div>

                    <a href="index.html" class="back-to-home">Back to Homepage</a>
                </div>
            </section>
        </article>
    </main>
    
</body>
</html>

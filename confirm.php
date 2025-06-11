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
            <section class="section" aria-label="confirmation-label" id="confirmation">
                <div id="confirmation" class="container">
                <p class="section-subtitle text-center label-2">
    Thank You <strong style="font-size: 1.5rem;">"<?php echo $name; ?>"</strong> for Your Reservation
</p>



                    <h2 class="headline-1 section-title text-center">Your Reservation is Confirmed!</h2>



                    <div style="padding: 7vh 0;" class="thank-you-message navbar-link text-center">
                        <p>We are excited to serve you! Please arrive on time for your reservation.</p>
                        <p>If you have any changes or queries, feel free to <br> <a href="tel:+88123123456" style="display:inline;">call us</a> anytime!</p>


                    </div>

                    <a href="menu.html" class="btn text-center btn-secondary">
                      <span class="text text-1">Back To Homepage</span>

                       <span class="text text-2" aria-hidden="true">Back To Homepage</span>
                    </a>
                </div>
            </section>
        </article>
    </main>
    
</body>
</html>

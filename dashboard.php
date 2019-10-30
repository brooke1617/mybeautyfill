<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        body {
            transition: opacity 100ms, transform 100ms;
            opacity: 1;
        }

        body.navigating {
            opacity: 0;
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/code/styley-boi.css">

    


    <title>Dashboard | My Beautyfill</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135925296-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-135925296-1');
    </script>

    <script src="https://www.google.com/recaptcha/api.js?render=6LezDpgUAAAAAFHyjGS9Y5YnMw8LNG05x618108V"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvKf5pJ6VhIfH4f5V4uq589BGT-AfsVvk&libraries=places"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-Bx4pytHkyTDy3aJKjGkGoHPt3tvv6zlwwjc3iqN7ktaiEMLDPqLSZYts2OjKcBx1" crossorigin="anonymous">




</head>
<body class="navigating">


<nav class="navbar navbar-expand-lg sticky-top navbar-light">
    <a class="navbar-brand" href="/">
        <img src="https://res.cloudinary.com/dgbhin72l/image/upload/v1551495020/my-beauty-fill/my-beauty-fill-logo-c.png" alt="My Beautyfill" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto text-lg-left text-center">
            <li class="nav-item mr-lg-3 ">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-lg-3 ">
                <a class="nav-link" href="/about.php">About</a>
            </li>
            <li class="nav-item mr-lg-3 ">
                <a class="nav-link" href="/features.php">Features</a>
            </li>




            
                
                <li class="nav-item dropdown mr-lg-3 ">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Business
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <h6 class="dropdown-header">MyBeautyFill Pro</h6>
                        <a class="dropdown-item py-3 active" href="/business/dashboard.php">Dashboard</a>
                        <a class="dropdown-item py-3 " href="/business/schedule.php">Schedule</a>

                                                    <a class="dropdown-item py-3 " href="/business/employees.php">Employees</a>
                            <a class="dropdown-item py-3 " href="/business/edit.php">Edit Information</a>
                        
                        <a class="dropdown-item py-3 " href="/business/services.php">Edit Services</a>
                        <a class="dropdown-item py-3" href="/business/view.php?id=28">View</a>

                        
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Personal</h6>
                        <form action="/account.php" method="post">
                            <input class="d-none" type="hidden" name="switchToPersonalView" value="true">
                            <button class="dropdown-item py-3" type="submit">Switch to Personal View</button>
                        </form>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item py-3" href="/account/log-out.php">Log Out</a>
                    </div>
                </li>

            




            <li class="nav-item ">
                <a class="nav-link" href="/help.php">Help</a>
            </li>

                    </ul>
    </div>
</nav>

    <div class="container text-center py-3">
        <h1>MyBeautyFill Pro Dashboard</h1>
        
        <div class="alert alert-primary fade show text-center" role="alert">
            Your free trial is up. Please choose a subscription to continue. <a href="/business/subscription.php" class="btn btn-light btn-sm ml-4">Choose Subscription</a>
        </div>
            </div>

    <div class="container">
        <div class="row mb-5">
                        
<div class="col-md-3">
<div class="list-group sticky-top" aria-orientation="vertical" style="top: 125px;">
    <a class="list-group-item list-group-item-action active" href="/business/dashboard.php">Dashboard</a>
    <a class="list-group-item list-group-item-action " href="/business/schedule.php">Schedule</a>

            <a class="list-group-item list-group-item-action " href="/business/employees.php">Employees</a>
        <a class="list-group-item list-group-item-action " href="/business/edit.php">Edit Business</a>
    
    <a class="list-group-item list-group-item-action " href="/business/services.php">Edit Services</a>
    <a class="list-group-item list-group-item-action " href="/business/view.php?id=28">View</a>
    <a class="list-group-item list-group-item-action " href="/business/subscription.php">Subscription</a>
</div><!-- end nav -->
</div><!-- end col -->
            <div class="col-md-9">

                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body business-dashboard-revenue">
                                <h5 class="card-title">Revenue</h5>
                                <h6 class="card-subtitle mb-2 text-muted">October 2019</h6>
                                <p class="card-text">$12,340</p>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->




                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body business-dashboard-apptsmade">
                                <h5 class="card-title">Appointments Made</h5>
                                <h6 class="card-subtitle mb-2 text-muted">October 2019</h6>
                                <p class="card-text">411</p>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->





                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body business-dashboard-apptsmade">
                                <h5 class="card-title">New Customers</h5>
                                <h6 class="card-subtitle mb-2 text-muted">October 2019</h6>
                                <p class="card-text">138</p>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->





                <h2>Revenue</h2>
                <canvas id="chartjs-revenue" class="mb-5"></canvas>




                
                <h2>Team Schedule for Saturday</h2>
                <p>Business Hours: 6:00am - 9:00pm</p>
                <div class="schedules-container mb-5">
                                    </div>



                <h2>Appointments</h2>
                <div class="appointments-container table-responsive mb-5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Service</th>
                            <th scope="col">Stylist</th>
                            <th scope="col">Time</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Consultation</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td>Haircut and Beard Trim</td>
                                <td>Alfred Almond</td>
                                <td>9:00am - 9:30am, June 27</td>
                                <td>Matthew Leonard</td>
                                <td class="text-center">
                                    <a href="/business/consultation.php?roomID=lt9AhpLt510i4kVn9jiB0b2EfyJhJGyMPbTFSYBMq0QV0guyXX09U6nWcx1Rl0WLEAUq6sicIGvIv7zz0EXKgvhGMXUo5IYkVbFj9DvprLAsvGl3lJ4I4WLLeXmYfzzlTP9TgfgI0tX1AoilG3RENARHoSM4WWVPofIqcTAUttwJErem2pCZWJ5CvEFZyI2XXsCskWYG" target="_blank">
                                        Start <i class="fas fa-tv-retro"></i>
                                    </a>
                                </td>
                            </tr>
                                                </tbody>
                    </table>
                </div>


            </div><!-- end col -->
        </div><!-- end row -->









    </div><!-- end container -->







    <script src='https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js'></script>
    <script>

        const MONTHS = [
            'May','June','July','August','September','October',        ];

        new Chart(document.getElementById("chartjs-revenue"), {
            type: 'line',
            data: {
                labels: MONTHS,

                datasets: [{
                    data: [86,114,133,221,783,2478],
                    label: "Revenue",
                    borderColor: "#b885cb",
                    fill: false
                }, {
                    data: [282,411,947,1402,3700,5267],
                    label: "Appointments",
                    borderColor: "#89cab2",
                    fill: false
                }, {
                    data: [168,170,178,203,408,675],
                    label: "New Customers",
                    borderColor: "#7a4183",
                    fill: false
                }
                ]
            },
            options: {
                title: {
                    display: false,
                    text: ''
                }
            }
        });

    </script>



    <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p>About</p>
                <p>MyBeautyFill is the Beauty Experience destination for Indie Brands, Beauty Professionals and Clients. Brands can sell their
                    products, Professionals can educate clients, market and manage their businesses. Clients can discover new brands, products and
                    service providers and learn online.</p>
                <p>2019 MyBeautyFill, Inc. All rights reserved</p>
            </div><!-- end col -->

            <div class="col-lg-3">
                <p>Talk to Us</p>
                <p><a href="mailto:Contact@mybeautyfill.app" target="_blank">Contact@mybeautyfill.app</a></p>
                <p><a href="#">MyBeautyFill Help Center</a></p>
            </div><!-- end col -->

            <div class="col-lg-3">
                <p>Experience MyBeautyFill</p>
                <!--<p><a href="#">List your Brand</a></p>
                <p><a href="#">Team</a></p>
                <p><a href="#">Careers</a></p>
                <p><a href="#">Terms for MBF Pros</a></p>
                <p><a href="#">Terms for MBF Clients</a></p>-->
                <p><a href="/privacy-policy.php">Privacy</a></p>
                <p><a href="#">Sitemap</a></p>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer>





<script>
let servicesList = [["1","Coloring"],["2","Color Correction &amp; New Color"],["3","Wash &amp; style"],["4","Blowout"],["5","Facial"],["6","Waxing"],["7","Dermaplaning"],["8","Lash Removal"],["9","Lash Extensions"],["10","Classic Bottom Lash Extensions"],["11","Hybrid Lash Extensions"],["12","Lash Fill"],["13","Foot"],["14","Full Body"],["15","Beard Trim"],["16","Beard trim \/ hot towel \/ straight razor"],["17","Children&#039;s Cut"],["18","Edge up"],["19","Haircut and Beard Trim"],["20","Haircut &amp; beard trim deluxe"],["21","Hot Lather Head Shave"],["22","Men&#039;s Haircut"],["23","Shampoo"],["24","Razor Fade"],["25","Skin Fade"],["26","Taper Fade"],["27","Braid Updo"],["28","Childrens Braids"],["29","Box Braids (mid-back length)"],["30","Box Braids (waist length)"],["31","Cornrows"],["32","Crochet"],["33","French Braids"],["34","Goddess"],["35","Goddess faux Locs"],["36","Lemonade"],["37","Marley Twist"],["38","Senagalese Twist"],["39","Spring Twist"],["40","Two-Layer Braids"],["41","Yarn Faux Locs"],["42","Consultation"],["43","Moisturizing Treatment"],["44","Sebum Treatment"],["45","Acrylic Nails"],["46","Gel Nails"],["47","Gel Manicure"],["48","Manicure"],["49","Gel Pedicure"],["50","Pedicure"],["51","Silk Wrap Nails"],["52","SNS Nails"],["53","3D Acrylic Nails"],["54","Bridal"],["55","Bridal Party"],["56","Glam"],["57","In studio"],["58","On Location"],["59","Brow wax &amp; tint"],["60","Microblading"],["61","Private 1on1"],["62","Prom"],["63","Special Event"],["64","TV\/Production"],["65","Bottom Classic"],["66","Classic"],["67","Classic 2 week Fill"],["68","Classic 3 week Fill"],["69","Classic 4 week Fill"],["70","Hybrid"],["71","Hybrid 2 week Fill"],["72","Hybrid 3 week Fill"],["73","Volume"],["74","Volume 2 week Fill"],["75","Volume 3 week Fill"],["76","Children"],["77","Color Services - Bayalage"],["78","Color Services - Bleach &amp; Tone"],["79","Color Services - Color Correction"],["80","Color Services - Demi Color Rinse\/Glaze Toner"],["81","Color Services - Highlight-Full Head"],["82","Color Services - Partial Highlight"],["83","Color Services - Single Process Color"],["84","Color Services - Double processing color"],["85","Color Services - Touch-Up"],["86","Deep Condition"],["87","Dominican Blowout"],["88","Extensions"],["89","Hair Trim"],["90","Haircuts - Designer Cut"],["91","Haircuts - Women&#039;s Haircut"],["92","Haircuts - Mens Haircut"],["93","Hot Oil Treatment"],["94","Keratin Treatment - Starter Loc"],["95","Keratin Treatment - Loc Maintenance (Baby Locs)"],["96","Keratin Treatment - Loc Maintenance (Teen Locs)"],["97","Keratin Treatment - Loc Maintenance (Full Grown)"],["98","Keratin Treatment - Loc Styling"],["99","Keratin Treatment - Loc Color"],["100","Keratin Treatment - Loc Detox"],["101","Natural Hair - Big Chop Transition Service"],["102","Natural Hair - Blowout"],["103","Natural Hair - Braid Out"],["104","Natural Hair - Coil \/ Comb Twist"],["105","Natural Hair - Crochet Braids"],["106","Natural Hair - Flat Twist Out"],["107","Natural Hair - Rod Set \/ Natural Hair"],["108","Natural Hair - Shingling"],["109","Natural Hair - Silk Press"],["110","Natural Hair - Two Strand Twist"],["111","Natural Hair - Two Strand Twist Updo"],["112","Perm"],["113","Protein Treatment"],["114","Steam treatment"],["115","Body Wraps"],["116","Chemical Peels"],["117","Face &amp; Body Masks"],["118","Back Wax"],["119","Brazilian Bikini Wax"],["120","Bikini Wax"],["121","Chin Wax"],["122","Leg Wax"],["123","Stomach Wax"],["124","Microdermabrasion"],["125","Microneedling"],["126","Laser resurfacing"],["127","Light therapy"],["128","Sugaring"]];</script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript" src="/code/scripty-boi.js"></script>












<script>
    if(window.location.pathname === "/business/complete-booking.php" || window.location.pathname === "/business/subscription.php") {


    // Create a Stripe client.
    var stripe = Stripe('pk_live_eMXp61uMY9BXOsioK2FRYmbP00RVvwH3QS');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }
    }
</script>
















</body>
</html>
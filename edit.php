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

    


    <title>Edit | My Beautyfill</title>

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
                        <a class="dropdown-item py-3 " href="/business/dashboard.php">Dashboard</a>
                        <a class="dropdown-item py-3 " href="/business/schedule.php">Schedule</a>

                                                    <a class="dropdown-item py-3 " href="/business/employees.php">Employees</a>
                            <a class="dropdown-item py-3 active" href="/business/edit.php">Edit Information</a>
                        
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
        <h1>Edit Your Business</h1>
    </div>

    <div class="container">
        <div class="row mb-5">
                        
<div class="col-md-3">
<div class="list-group sticky-top" aria-orientation="vertical" style="top: 125px;">
    <a class="list-group-item list-group-item-action " href="/business/dashboard.php">Dashboard</a>
    <a class="list-group-item list-group-item-action " href="/business/schedule.php">Schedule</a>

            <a class="list-group-item list-group-item-action " href="/business/employees.php">Employees</a>
        <a class="list-group-item list-group-item-action active" href="/business/edit.php">Edit Business</a>
    
    <a class="list-group-item list-group-item-action " href="/business/services.php">Edit Services</a>
    <a class="list-group-item list-group-item-action " href="/business/view.php?id=28">View</a>
    <a class="list-group-item list-group-item-action " href="/business/subscription.php">Subscription</a>
</div><!-- end nav -->
</div><!-- end col -->
            <div class="col-md-9">
                <form action="/business/edit.php" method="post" id="update-business-info">
                    <div class="form-group">
                        <label for="edit-business-name">Business Name</label>
                        <input type="text" class="form-control form-control-lg" id="edit-business-name" name="edit-business-name" value="MyBeautyFill Pro" required>
                    </div><!-- end form group -->



                    <div class="form-group">
                        <label for="edit-business-headline">Business Headline</label>
                        <textarea class="form-control" id="edit-business-headline" name="edit-business-headline" rows="2">Beauty from Head to toe</textarea>
                    </div>


                    <div class="form-group">
                        <label for="edit-business-description">Business Description</label>
                        <textarea class="form-control" id="edit-business-description" name="edit-business-description" rows="5">From men&#039;s hair cuts to waist length braids, we&#039;re here to serve you!</textarea>
                    </div>




                    <div class="mb-5"></div>
                    <div><hr></div>
                    <div class="mb-5"></div>



                    <h2>Profile Image</h2>


                    <div class="form-group mb-3 position-relative" style="display: block; min-height: 40px;">
                        <button id="edit-business-headerbg" type="button" class="custom-file-label w-100">Upload files</button>
                        <div><input type="hidden" name="edit-business-headerbg" value="https://res.cloudinary.com/dgbhin72l/image/upload/v1561463383/business_uploads/vvtjdruodhrxsqnbnbtk.jpg"></div>
                    </div>

                    <div class="edit-business-headerbg" style="background-image:url('https://res.cloudinary.com/dgbhin72l/image/upload/v1561463383/business_uploads/vvtjdruodhrxsqnbnbtk.jpg')">
                        <div><span>Please save to see changes</span></div>
                    </div>

                    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>

                    <script type="text/javascript">
                        var myWidget = cloudinary.createUploadWidget({
                                cloudName: 'dgbhin72l', apiKey: '914695159113412',
                                uploadPreset: 'yfgj1xdu'}, (error, result) => {
                                if (!error && result && result.event === "success") {
                                    console.log(result.info.secure_url);
                                    document.querySelector("input[name='edit-business-headerbg']").value = result.info.secure_url;
                                    document.querySelector(".edit-business-headerbg div").setAttribute("class", "edit-biz-save-prompt");
                                }
                            }
                        );

                        document.getElementById("edit-business-headerbg").addEventListener("click", function(){
                            myWidget.open();
                        }, false);
                    </script>





                    <div class="mb-5"></div>
                    <div><hr></div>
                    <div class="mb-5"></div>


                    <h2>Business Information</h2>
                    <div class="form-group row">
                        <div class="col-6 mb-3">
                            <label for="edit-business-address">Business Address</label>
                            <input type="text" class="form-control" id="edit-business-address" name="edit-business-address" value="1 Main St" required>
                        </div><!-- end col -->

                        <div class="col-6 mb-3">
                            <label for="edit-business-city">City</label>
                            <input type="text" class="form-control" id="edit-business-city" name="edit-business-city" value="Dallas" required>
                        </div><!-- end col -->

                        <div class="col-6 mb-3">
                            <label for="edit-business-state">State</label>

                            <select id="edit-business-state" name="edit-business-state" class="form-control" required>
                                <option  disabled>Choose State</option>
                                <option  value='AL'>Alabama</option>
                                <option  value='AK'>Alaska</option>
                                <option  value='AZ'>Arizona</option>
                                <option  value='AR'>Arkansas</option>
                                <option  value='CA'>California</option>
                                <option  value='CO'>Colorado</option>
                                <option  value='CT'>Connecticut</option>
                                <option  value='DE'>Delaware</option>
                                <option  value='DC'>District Of Columbia</option>
                                <option  value='FL'>Florida</option>
                                <option  value='GA'>Georgia</option>
                                <option  value='HI'>Hawaii</option>
                                <option  value='ID'>Idaho</option>
                                <option  value='IL'>Illinois</option>
                                <option  value='IN'>Indiana</option>
                                <option  value='IA'>Iowa</option>
                                <option  value='KS'>Kansas</option>
                                <option  value='KY'>Kentucky</option>
                                <option  value='LA'>Louisiana</option>
                                <option  value='ME'>Maine</option>
                                <option  value='MD'>Maryland</option>
                                <option  value='MA'>Massachusetts</option>
                                <option  value='MI'>Michigan</option>
                                <option  value='MN'>Minnesota</option>
                                <option  value='MS'>Mississippi</option>
                                <option  value='MO'>Missouri</option>
                                <option  value='MT'>Montana</option>
                                <option  value='NE'>Nebraska</option>
                                <option  value='NV'>Nevada</option>
                                <option  value='NH'>New Hampshire</option>
                                <option  value='NJ'>New Jersey</option>
                                <option  value='NM'>New Mexico</option>
                                <option  value='NY'>New York</option>
                                <option  value='NC'>North Carolina</option>
                                <option  value='ND'>North Dakota</option>
                                <option  value='OH'>Ohio</option>
                                <option  value='OK'>Oklahoma</option>
                                <option  value='OR'>Oregon</option>
                                <option  value='PA'>Pennsylvania</option>
                                <option  value='RI'>Rhode Island</option>
                                <option  value='SC'>South Carolina</option>
                                <option  value='SD'>South Dakota</option>
                                <option  value='TN'>Tennessee</option>
                                <option selected value='TX'>Texas</option>
                                <option  value='UT'>Utah</option>
                                <option  value='VT'>Vermont</option>
                                <option  value='VA'>Virginia</option>
                                <option  value='WA'>Washington</option>
                                <option  value='WV'>West Virginia</option>
                                <option  value='WI'>Wisconsin</option>
                                <option  value='WY'>Wyoming</option>
                            </select>
                        </div><!-- end col -->

                        <div class="col-6 mb-3">
                            <label for="edit-business-zip">Zip</label>
                            <input type="number" class="form-control" id="edit-business-zip" name="edit-business-zip" value="75201" required>
                        </div><!-- end col -->


                        <div class="d-none">
                        <div class="col-12">
                            <div id="update-business-info-full-address">
                            1 Main St, Dallas TX 75201                            </div>
                        </div>

                        <div class="col-6">
                            <input type="text" class="form-control" id="edit-business-lat" name="edit-business-lat" value="32.78566330">
                        </div>

                        <div class="col-6">
                            <input type="text" class="form-control" id="edit-business-lng" name="edit-business-lng" value="-96.77318290">
                        </div>
                        </div><!-- end display none -->
                    </div><!-- end form group -->





                    <div class="form-group">
                        <label for="edit-business-phone">Business Phone</label>
                        <input type="tel" class="form-control" id="edit-business-phone" name="edit-business-phone" value="214-214-5555">
                    </div>







                    <div class="accordion mb-3" id="edit-business-hours-dropdown-container">
                        <div class="card">
                            <div class="card-header" id="edit-business-hours-dropdown-title">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#edit-business-hours-dropdown" aria-expanded="false" aria-controls="edit-business-hours-dropdown">
                                        Edit Business Hours
                                    </button>
                                </h2>
                            </div>

                            <div id="edit-business-hours-dropdown" class="collapse" aria-labelledby="edit-business-hours-dropdown-title" data-parent="#edit-business-hours-dropdown-container">
                                <div class="card-body">

                                    
                                    <div class="form-group row align-items-center">
                                        <div class="col">
                                            <label for="edit-business-hours-Monday-open">Monday Open</label>
                                                                                        <select class="form-control" id="edit-business-hours-Monday-open" name="edit-business-hours-Monday-open">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option selected value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option  value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->

                                        <div class="col">
                                            <label for="edit-business-hours-Monday-end">Monday Close</label>
                                                                                        <select class="form-control" id="edit-business-hours-Monday-end" name="edit-business-hours-Monday-close">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option  value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option selected value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->
                                    </div><!-- end form group row -->

                                    
                                    <div class="form-group row align-items-center">
                                        <div class="col">
                                            <label for="edit-business-hours-Tuesday-open">Tuesday Open</label>
                                                                                        <select class="form-control" id="edit-business-hours-Tuesday-open" name="edit-business-hours-Tuesday-open">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option selected value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option  value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->

                                        <div class="col">
                                            <label for="edit-business-hours-Tuesday-end">Tuesday Close</label>
                                                                                        <select class="form-control" id="edit-business-hours-Tuesday-end" name="edit-business-hours-Tuesday-close">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option  value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option selected value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->
                                    </div><!-- end form group row -->

                                    
                                    <div class="form-group row align-items-center">
                                        <div class="col">
                                            <label for="edit-business-hours-Wednesday-open">Wednesday Open</label>
                                                                                        <select class="form-control" id="edit-business-hours-Wednesday-open" name="edit-business-hours-Wednesday-open">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option selected value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option  value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->

                                        <div class="col">
                                            <label for="edit-business-hours-Wednesday-end">Wednesday Close</label>
                                                                                        <select class="form-control" id="edit-business-hours-Wednesday-end" name="edit-business-hours-Wednesday-close">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option  value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option selected value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->
                                    </div><!-- end form group row -->

                                    
                                    <div class="form-group row align-items-center">
                                        <div class="col">
                                            <label for="edit-business-hours-Thursday-open">Thursday Open</label>
                                                                                        <select class="form-control" id="edit-business-hours-Thursday-open" name="edit-business-hours-Thursday-open">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option selected value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option  value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->

                                        <div class="col">
                                            <label for="edit-business-hours-Thursday-end">Thursday Close</label>
                                                                                        <select class="form-control" id="edit-business-hours-Thursday-end" name="edit-business-hours-Thursday-close">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option  value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option selected value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->
                                    </div><!-- end form group row -->

                                    
                                    <div class="form-group row align-items-center">
                                        <div class="col">
                                            <label for="edit-business-hours-Friday-open">Friday Open</label>
                                                                                        <select class="form-control" id="edit-business-hours-Friday-open" name="edit-business-hours-Friday-open">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option selected value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option  value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->

                                        <div class="col">
                                            <label for="edit-business-hours-Friday-end">Friday Close</label>
                                                                                        <select class="form-control" id="edit-business-hours-Friday-end" name="edit-business-hours-Friday-close">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option  value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option selected value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->
                                    </div><!-- end form group row -->

                                    
                                    <div class="form-group row align-items-center">
                                        <div class="col">
                                            <label for="edit-business-hours-Saturday-open">Saturday Open</label>
                                                                                        <select class="form-control" id="edit-business-hours-Saturday-open" name="edit-business-hours-Saturday-open">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option selected value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option  value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->

                                        <div class="col">
                                            <label for="edit-business-hours-Saturday-end">Saturday Close</label>
                                                                                        <select class="form-control" id="edit-business-hours-Saturday-end" name="edit-business-hours-Saturday-close">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option  value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option selected value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->
                                    </div><!-- end form group row -->

                                    
                                    <div class="form-group row align-items-center">
                                        <div class="col">
                                            <label for="edit-business-hours-Sunday-open">Sunday Open</label>
                                                                                        <select class="form-control" id="edit-business-hours-Sunday-open" name="edit-business-hours-Sunday-open">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option selected value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option  value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->

                                        <div class="col">
                                            <label for="edit-business-hours-Sunday-end">Sunday Close</label>
                                                                                        <select class="form-control" id="edit-business-hours-Sunday-end" name="edit-business-hours-Sunday-close">
                                                <option  value="0">12:00am</option>
                                                <option  value="50">12:30am</option>
                                                <option  value="100">1:00am</option>
                                                <option  value="150">1:30am</option>
                                                <option  value="200">2:00am</option>
                                                <option  value="250">2:30am</option>
                                                <option  value="300">3:00am</option>
                                                <option  value="350">3:30am</option>
                                                <option  value="400">4:00am</option>
                                                <option  value="450">4:30am</option>
                                                <option  value="500">5:00am</option>
                                                <option  value="550">5:30am</option>
                                                <option  value="600">6:00am</option>
                                                <option  value="650">6:30am</option>
                                                <option  value="700">7:00am</option>
                                                <option  value="750">7:30am</option>
                                                <option  value="800">8:00am</option>
                                                <option  value="850">8:30am</option>
                                                <option  value="900">9:00am</option>
                                                <option  value="950">9:30am</option>
                                                <option  value="1000">10:00am</option>
                                                <option  value="1050">10:30am</option>
                                                <option  value="1100">11:00am</option>
                                                <option  value="1150">11:30am</option>
                                                <option  value="1200">12:00pm</option>
                                                <option  value="1250">12:30pm</option>
                                                <option  value="1300">1:00pm</option>
                                                <option  value="1350">1:30pm</option>
                                                <option  value="1400">2:00pm</option>
                                                <option  value="1450">2:30pm</option>
                                                <option  value="1500">3:00pm</option>
                                                <option  value="1550">3:30pm</option>
                                                <option  value="1600">4:00pm</option>
                                                <option  value="1650">4:30pm</option>
                                                <option  value="1700">5:00pm</option>
                                                <option  value="1750">5:30pm</option>
                                                <option  value="1800">6:00pm</option>
                                                <option  value="1850">6:30pm</option>
                                                <option  value="1900">7:00pm</option>
                                                <option  value="1950">7:30pm</option>
                                                <option  value="2000">8:00pm</option>
                                                <option  value="2050">8:30pm</option>
                                                <option selected value="2100">9:00pm</option>
                                                <option  value="2150">9:30pm</option>
                                                <option  value="2200">10:00pm</option>
                                                <option  value="2250">10:30pm</option>
                                                <option  value="2300">11:00pm</option>
                                                <option  value="2350">11:30pm</option>
                                            </select>
                                        </div><!-- end col -->
                                    </div><!-- end form group row -->

                                    
                                </div><!-- end card body -->
                            </div><!-- end collapse box -->
                        </div><!-- end card -->
                    </div><!-- end accordion -->







                    <div class="form-group">
                        <label for="edit-business-cancelpolicy">Cancellation Policy</label>
                        <textarea class="form-control" id="edit-business-cancelpolicy" name="edit-business-cancelpolicy" rows="5">You will not be charged if you cancel at least 24 hours before your appointment starts. Otherwise, you will be charged 50% of service price for no shows.</textarea>
                    </div>








                <div class="text-center business-edit-services-save">
                    <button class="btn btn-primary btn-lg" type="submit">Save</button>
                </div>





                </form>
            </div><!-- end col -->
        </div><!-- end row -->

    </div><!-- end container -->



    <script>
        let updateBusinessInfo = document.getElementById("update-business-info");
        let fullAddress = document.getElementById("update-business-info-full-address").innerText;

        function initBusinessMap(address) {
            let geocoder = new google.maps.Geocoder();
            let latitude;
            let longitude;

            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    latitude = results[0].geometry.location.lat();
                    longitude = results[0].geometry.location.lng();

                    document.querySelector("input[name='edit-business-lat']").value = latitude;
                    document.querySelector("input[name='edit-business-lng']").value = longitude;

                    updateBusinessInfo.submit();
                } else {
                    updateBusinessInfo.submit();
                }
            });
        }

        updateBusinessInfo.addEventListener("submit", function(e) {
            e.preventDefault();
            initBusinessMap(fullAddress);
        })
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
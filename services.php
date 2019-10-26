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

    


    <title>Services | My Beautyfill</title>

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
                            <a class="dropdown-item py-3 " href="/business/edit.php">Edit Information</a>
                        
                        <a class="dropdown-item py-3 active" href="/business/services.php">Edit Services</a>
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
        <h1>Edit Your Services</h1>
    </div>

    <div class="container">
        <div class="row mb-5">
                        
<div class="col-md-3">
<div class="list-group sticky-top" aria-orientation="vertical" style="top: 125px;">
    <a class="list-group-item list-group-item-action " href="/business/dashboard.php">Dashboard</a>
    <a class="list-group-item list-group-item-action " href="/business/schedule.php">Schedule</a>

            <a class="list-group-item list-group-item-action " href="/business/employees.php">Employees</a>
        <a class="list-group-item list-group-item-action " href="/business/edit.php">Edit Business</a>
    
    <a class="list-group-item list-group-item-action active" href="/business/services.php">Edit Services</a>
    <a class="list-group-item list-group-item-action " href="/business/view.php?id=28">View</a>
    <a class="list-group-item list-group-item-action " href="/business/subscription.php">Subscription</a>
</div><!-- end nav -->
</div><!-- end col -->
            <div class="col-md-9">
                
                <form action="/business/services.php" method="post" id="update-business-info" class="row">

                    <div class='col-md-6 edit-services-category mb-5'><h3>Barber</h3>
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck15" name="so_15">
                                    <label class="custom-control-label" for="customCheck15">
                                        Beard Trim                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_15"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck16" name="so_16">
                                    <label class="custom-control-label" for="customCheck16">
                                        Beard trim / hot towel / straight razor                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_16"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck17" name="so_17">
                                    <label class="custom-control-label" for="customCheck17">
                                        Children&#039;s Cut                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_17"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck18" name="so_18">
                                    <label class="custom-control-label" for="customCheck18">
                                        Edge up                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_18"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck20" name="so_20">
                                    <label class="custom-control-label" for="customCheck20">
                                        Haircut &amp; beard trim deluxe                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_20"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck19" name="so_19">
                                    <label class="custom-control-label" for="customCheck19">
                                        Haircut and Beard Trim                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_19"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck21" name="so_21">
                                    <label class="custom-control-label" for="customCheck21">
                                        Hot Lather Head Shave                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_21"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck22" name="so_22">
                                    <label class="custom-control-label" for="customCheck22">
                                        Men&#039;s Haircut                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_22"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck24" name="so_24">
                                    <label class="custom-control-label" for="customCheck24">
                                        Razor Fade                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_24"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck23" name="so_23">
                                    <label class="custom-control-label" for="customCheck23">
                                        Shampoo                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_23"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck25" name="so_25">
                                    <label class="custom-control-label" for="customCheck25">
                                        Skin Fade                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_25"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck26" name="so_26">
                                    <label class="custom-control-label" for="customCheck26">
                                        Taper Fade                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_26"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            </div><!-- end edit-services-category --><div class='col-md-6 edit-services-category mb-5'><h3>Braid Specialist</h3>
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck29" name="so_29">
                                    <label class="custom-control-label" for="customCheck29">
                                        Box Braids (mid-back length)                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_29"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck30" name="so_30">
                                    <label class="custom-control-label" for="customCheck30">
                                        Box Braids (waist length)                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_30"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck27" name="so_27">
                                    <label class="custom-control-label" for="customCheck27">
                                        Braid Updo                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_27"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck28" name="so_28">
                                    <label class="custom-control-label" for="customCheck28">
                                        Childrens Braids                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_28"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck31" name="so_31">
                                    <label class="custom-control-label" for="customCheck31">
                                        Cornrows                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_31"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck32" name="so_32">
                                    <label class="custom-control-label" for="customCheck32">
                                        Crochet                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_32"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck33" name="so_33">
                                    <label class="custom-control-label" for="customCheck33">
                                        French Braids                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_33"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck34" name="so_34">
                                    <label class="custom-control-label" for="customCheck34">
                                        Goddess                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_34"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck35" name="so_35">
                                    <label class="custom-control-label" for="customCheck35">
                                        Goddess faux Locs                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_35"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck36" name="so_36">
                                    <label class="custom-control-label" for="customCheck36">
                                        Lemonade                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_36"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck37" name="so_37">
                                    <label class="custom-control-label" for="customCheck37">
                                        Marley Twist                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_37"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck38" name="so_38">
                                    <label class="custom-control-label" for="customCheck38">
                                        Senagalese Twist                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_38"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck39" name="so_39">
                                    <label class="custom-control-label" for="customCheck39">
                                        Spring Twist                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_39"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck40" name="so_40">
                                    <label class="custom-control-label" for="customCheck40">
                                        Two-Layer Braids                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_40"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck41" name="so_41">
                                    <label class="custom-control-label" for="customCheck41">
                                        Yarn Faux Locs                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_41"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            </div><!-- end edit-services-category --><div class='col-md-6 edit-services-category mb-5'><h3>Esthetician</h3>
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck118" name="so_118">
                                    <label class="custom-control-label" for="customCheck118">
                                        Back Wax                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_118"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck120" name="so_120">
                                    <label class="custom-control-label" for="customCheck120">
                                        Bikini Wax                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_120"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck115" name="so_115">
                                    <label class="custom-control-label" for="customCheck115">
                                        Body Wraps                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_115"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck119" name="so_119">
                                    <label class="custom-control-label" for="customCheck119">
                                        Brazilian Bikini Wax                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_119"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck116" name="so_116">
                                    <label class="custom-control-label" for="customCheck116">
                                        Chemical Peels                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_116"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck121" name="so_121">
                                    <label class="custom-control-label" for="customCheck121">
                                        Chin Wax                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_121"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck7" name="so_7">
                                    <label class="custom-control-label" for="customCheck7">
                                        Dermaplaning                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_7"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck117" name="so_117">
                                    <label class="custom-control-label" for="customCheck117">
                                        Face &amp; Body Masks                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_117"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck5" name="so_5">
                                    <label class="custom-control-label" for="customCheck5">
                                        Facial                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_5"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck126" name="so_126">
                                    <label class="custom-control-label" for="customCheck126">
                                        Laser resurfacing                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_126"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck122" name="so_122">
                                    <label class="custom-control-label" for="customCheck122">
                                        Leg Wax                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_122"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck127" name="so_127">
                                    <label class="custom-control-label" for="customCheck127">
                                        Light therapy                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_127"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck124" name="so_124">
                                    <label class="custom-control-label" for="customCheck124">
                                        Microdermabrasion                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_124"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck125" name="so_125">
                                    <label class="custom-control-label" for="customCheck125">
                                        Microneedling                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_125"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck123" name="so_123">
                                    <label class="custom-control-label" for="customCheck123">
                                        Stomach Wax                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_123"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck128" name="so_128">
                                    <label class="custom-control-label" for="customCheck128">
                                        Sugaring                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_128"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck6" name="so_6">
                                    <label class="custom-control-label" for="customCheck6">
                                        Waxing                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_6"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            </div><!-- end edit-services-category --><div class='col-md-6 edit-services-category mb-5'><h3>Hair Stylist</h3>
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck4" name="so_4">
                                    <label class="custom-control-label" for="customCheck4">
                                        Blowout                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_4"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck76" name="so_76">
                                    <label class="custom-control-label" for="customCheck76">
                                        Children                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_76"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck2" name="so_2">
                                    <label class="custom-control-label" for="customCheck2">
                                        Color Correction &amp; New Color                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_2"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck77" name="so_77">
                                    <label class="custom-control-label" for="customCheck77">
                                        Color Services - Bayalage                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_77"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck78" name="so_78">
                                    <label class="custom-control-label" for="customCheck78">
                                        Color Services - Bleach &amp; Tone                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_78"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck79" name="so_79">
                                    <label class="custom-control-label" for="customCheck79">
                                        Color Services - Color Correction                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_79"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck80" name="so_80">
                                    <label class="custom-control-label" for="customCheck80">
                                        Color Services - Demi Color Rinse/Glaze Toner                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_80"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck84" name="so_84">
                                    <label class="custom-control-label" for="customCheck84">
                                        Color Services - Double processing color                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_84"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck81" name="so_81">
                                    <label class="custom-control-label" for="customCheck81">
                                        Color Services - Highlight-Full Head                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_81"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck82" name="so_82">
                                    <label class="custom-control-label" for="customCheck82">
                                        Color Services - Partial Highlight                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_82"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck83" name="so_83">
                                    <label class="custom-control-label" for="customCheck83">
                                        Color Services - Single Process Color                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_83"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck85" name="so_85">
                                    <label class="custom-control-label" for="customCheck85">
                                        Color Services - Touch-Up                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_85"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck1" name="so_1">
                                    <label class="custom-control-label" for="customCheck1">
                                        Coloring                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_1"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck86" name="so_86">
                                    <label class="custom-control-label" for="customCheck86">
                                        Deep Condition                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_86"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck87" name="so_87">
                                    <label class="custom-control-label" for="customCheck87">
                                        Dominican Blowout                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_87"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck88" name="so_88">
                                    <label class="custom-control-label" for="customCheck88">
                                        Extensions                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_88"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck89" name="so_89">
                                    <label class="custom-control-label" for="customCheck89">
                                        Hair Trim                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_89"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck90" name="so_90">
                                    <label class="custom-control-label" for="customCheck90">
                                        Haircuts - Designer Cut                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_90"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck92" name="so_92">
                                    <label class="custom-control-label" for="customCheck92">
                                        Haircuts - Mens Haircut                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_92"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck91" name="so_91">
                                    <label class="custom-control-label" for="customCheck91">
                                        Haircuts - Women&#039;s Haircut                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_91"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck93" name="so_93">
                                    <label class="custom-control-label" for="customCheck93">
                                        Hot Oil Treatment                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_93"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck99" name="so_99">
                                    <label class="custom-control-label" for="customCheck99">
                                        Keratin Treatment - Loc Color                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_99"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck100" name="so_100">
                                    <label class="custom-control-label" for="customCheck100">
                                        Keratin Treatment - Loc Detox                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_100"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck95" name="so_95">
                                    <label class="custom-control-label" for="customCheck95">
                                        Keratin Treatment - Loc Maintenance (Baby Locs)                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_95"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck97" name="so_97">
                                    <label class="custom-control-label" for="customCheck97">
                                        Keratin Treatment - Loc Maintenance (Full Grown)                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_97"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck96" name="so_96">
                                    <label class="custom-control-label" for="customCheck96">
                                        Keratin Treatment - Loc Maintenance (Teen Locs)                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_96"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck98" name="so_98">
                                    <label class="custom-control-label" for="customCheck98">
                                        Keratin Treatment - Loc Styling                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_98"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck94" name="so_94">
                                    <label class="custom-control-label" for="customCheck94">
                                        Keratin Treatment - Starter Loc                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_94"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck101" name="so_101">
                                    <label class="custom-control-label" for="customCheck101">
                                        Natural Hair - Big Chop Transition Service                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_101"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck102" name="so_102">
                                    <label class="custom-control-label" for="customCheck102">
                                        Natural Hair - Blowout                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_102"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck103" name="so_103">
                                    <label class="custom-control-label" for="customCheck103">
                                        Natural Hair - Braid Out                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_103"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck104" name="so_104">
                                    <label class="custom-control-label" for="customCheck104">
                                        Natural Hair - Coil / Comb Twist                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_104"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck105" name="so_105">
                                    <label class="custom-control-label" for="customCheck105">
                                        Natural Hair - Crochet Braids                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_105"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck106" name="so_106">
                                    <label class="custom-control-label" for="customCheck106">
                                        Natural Hair - Flat Twist Out                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_106"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck107" name="so_107">
                                    <label class="custom-control-label" for="customCheck107">
                                        Natural Hair - Rod Set / Natural Hair                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_107"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck108" name="so_108">
                                    <label class="custom-control-label" for="customCheck108">
                                        Natural Hair - Shingling                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_108"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck109" name="so_109">
                                    <label class="custom-control-label" for="customCheck109">
                                        Natural Hair - Silk Press                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_109"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck110" name="so_110">
                                    <label class="custom-control-label" for="customCheck110">
                                        Natural Hair - Two Strand Twist                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_110"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck111" name="so_111">
                                    <label class="custom-control-label" for="customCheck111">
                                        Natural Hair - Two Strand Twist Updo                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_111"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck112" name="so_112">
                                    <label class="custom-control-label" for="customCheck112">
                                        Perm                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_112"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck113" name="so_113">
                                    <label class="custom-control-label" for="customCheck113">
                                        Protein Treatment                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_113"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck114" name="so_114">
                                    <label class="custom-control-label" for="customCheck114">
                                        Steam treatment                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_114"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck3" name="so_3">
                                    <label class="custom-control-label" for="customCheck3">
                                        Wash &amp; style                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_3"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            </div><!-- end edit-services-category --><div class='col-md-6 edit-services-category mb-5'><h3>Lash Artist</h3>
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck65" name="so_65">
                                    <label class="custom-control-label" for="customCheck65">
                                        Bottom Classic                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_65"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck66" name="so_66">
                                    <label class="custom-control-label" for="customCheck66">
                                        Classic                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_66"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck67" name="so_67">
                                    <label class="custom-control-label" for="customCheck67">
                                        Classic 2 week Fill                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_67"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck68" name="so_68">
                                    <label class="custom-control-label" for="customCheck68">
                                        Classic 3 week Fill                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_68"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck69" name="so_69">
                                    <label class="custom-control-label" for="customCheck69">
                                        Classic 4 week Fill                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_69"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck70" name="so_70">
                                    <label class="custom-control-label" for="customCheck70">
                                        Hybrid                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_70"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck71" name="so_71">
                                    <label class="custom-control-label" for="customCheck71">
                                        Hybrid 2 week Fill                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_71"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck72" name="so_72">
                                    <label class="custom-control-label" for="customCheck72">
                                        Hybrid 3 week Fill                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_72"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck73" name="so_73">
                                    <label class="custom-control-label" for="customCheck73">
                                        Volume                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_73"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck74" name="so_74">
                                    <label class="custom-control-label" for="customCheck74">
                                        Volume 2 week Fill                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_74"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck75" name="so_75">
                                    <label class="custom-control-label" for="customCheck75">
                                        Volume 3 week Fill                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_75"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            </div><!-- end edit-services-category --><div class='col-md-6 edit-services-category mb-5'><h3>Lash Extensions</h3>
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck10" name="so_10">
                                    <label class="custom-control-label" for="customCheck10">
                                        Classic Bottom Lash Extensions                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_10"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck11" name="so_11">
                                    <label class="custom-control-label" for="customCheck11">
                                        Hybrid Lash Extensions                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_11"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck9" name="so_9">
                                    <label class="custom-control-label" for="customCheck9">
                                        Lash Extensions                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_9"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck12" name="so_12">
                                    <label class="custom-control-label" for="customCheck12">
                                        Lash Fill                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_12"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck8" name="so_8">
                                    <label class="custom-control-label" for="customCheck8">
                                        Lash Removal                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_8"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            </div><!-- end edit-services-category --><div class='col-md-6 edit-services-category mb-5'><h3>Makeup Artist</h3>
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck54" name="so_54">
                                    <label class="custom-control-label" for="customCheck54">
                                        Bridal                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_54"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck55" name="so_55">
                                    <label class="custom-control-label" for="customCheck55">
                                        Bridal Party                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_55"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck59" name="so_59">
                                    <label class="custom-control-label" for="customCheck59">
                                        Brow wax &amp; tint                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_59"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck56" name="so_56">
                                    <label class="custom-control-label" for="customCheck56">
                                        Glam                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_56"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck57" name="so_57">
                                    <label class="custom-control-label" for="customCheck57">
                                        In studio                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_57"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck60" name="so_60">
                                    <label class="custom-control-label" for="customCheck60">
                                        Microblading                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_60"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck58" name="so_58">
                                    <label class="custom-control-label" for="customCheck58">
                                        On Location                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_58"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck61" name="so_61">
                                    <label class="custom-control-label" for="customCheck61">
                                        Private 1on1                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_61"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck62" name="so_62">
                                    <label class="custom-control-label" for="customCheck62">
                                        Prom                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_62"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck63" name="so_63">
                                    <label class="custom-control-label" for="customCheck63">
                                        Special Event                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_63"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck64" name="so_64">
                                    <label class="custom-control-label" for="customCheck64">
                                        TV/Production                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_64"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            </div><!-- end edit-services-category --><div class='col-md-6 edit-services-category mb-5'><h3>Masseuse</h3>
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck13" name="so_13">
                                    <label class="custom-control-label" for="customCheck13">
                                        Foot                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_13"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck14" name="so_14">
                                    <label class="custom-control-label" for="customCheck14">
                                        Full Body                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_14"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            </div><!-- end edit-services-category --><div class='col-md-6 edit-services-category mb-5'><h3>Nail Tech</h3>
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck53" name="so_53">
                                    <label class="custom-control-label" for="customCheck53">
                                        3D Acrylic Nails                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_53"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck45" name="so_45">
                                    <label class="custom-control-label" for="customCheck45">
                                        Acrylic Nails                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_45"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck47" name="so_47">
                                    <label class="custom-control-label" for="customCheck47">
                                        Gel Manicure                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_47"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck46" name="so_46">
                                    <label class="custom-control-label" for="customCheck46">
                                        Gel Nails                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_46"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck49" name="so_49">
                                    <label class="custom-control-label" for="customCheck49">
                                        Gel Pedicure                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_49"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck48" name="so_48">
                                    <label class="custom-control-label" for="customCheck48">
                                        Manicure                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_48"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck50" name="so_50">
                                    <label class="custom-control-label" for="customCheck50">
                                        Pedicure                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_50"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck51" name="so_51">
                                    <label class="custom-control-label" for="customCheck51">
                                        Silk Wrap Nails                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_51"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck52" name="so_52">
                                    <label class="custom-control-label" for="customCheck52">
                                        SNS Nails                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_52"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            </div><!-- end edit-services-category --><div class='col-md-6 edit-services-category mb-5'><h3>Trichology</h3>
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck42" name="so_42">
                                    <label class="custom-control-label" for="customCheck42">
                                        Consultation                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_42"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck43" name="so_43">
                                    <label class="custom-control-label" for="customCheck43">
                                        Moisturizing Treatment                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_43"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            
                            <div class="edit-your-services-item d-flex align-items-center">
                                <div class="custom-control custom-checkbox mr-4">
                                    <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck44" name="so_44">
                                    <label class="custom-control-label" for="customCheck44">
                                        Sebum Treatment                                    </label>
                                </div>

                                <input class="form-control form-control-sm"
                                       type="number"
                                       step="any"
                                       min="0"
                                       name="soprice_44"
                                       placeholder="0.00"
                                       value="">
                            </div>

                            <input class='d-none' type='hidden' value='update-services' name='update-services'>                    </div><!-- end edit-services-category -->

                    <div class="text-center col-12 business-edit-services-save">
                        <button type="submit" class="btn btn-primary btn-lg">Save</button>
                    </div>
                </form>
            </div><!-- end col -->
        </div><!-- end row -->

    </div><!-- end container -->



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
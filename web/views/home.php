<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Andi Fan, Kim Le">
    <title>Cause for Paws</title>
    <link rel="icon" type="image/png" href="../images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="../stylesheets/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../stylesheets/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Smooth scrolling -->
    <script>
        $(document).ready(function() {
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 500, function() {
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>
    <script>
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 150);
        });
    </script>
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-default fixed-top" id="mainNav">
        <div class="container">
            <img class="js-scroll-trigger m-2" src="../images/logo.png" width="50px">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Cause for Paws</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#events">EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#sponsors">SPONSORS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/causeforpawsutm/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-white" id="bg-header">
        <div class="container text-center header-content">
            <!--<img src="../images/logo.svg" width="150px"> -->
            <h1>Cause For Paws</h1>
            <h3>Giving a voice to the voiceless</h3>
        </div>
    </header>
    <section id="about">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>About us</h2>
                    <hr>
                    <p class="lead">
                        Cause for Paws' primary goal is to fundraise money for shelters such as the Ontario SPCA and the Mississauga Humane Society. We also give students the opportunity to work up-close with animals.
                    </p>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row mx-1">
                <div class="col-lg-10 mx-auto team">
                    <h3 class="mt-5 mb-4">Our Team</h3>
                    <div class="row mx-4">
                        <div class="col-xs-5 col-md-3 px-0">
                            <img src="../images/ginuha.png" width="100px" class="my-2">
                            <p><strong>Ginuha Radha</strong><br>President</p>
                        </div>
                        <div class="col-xs-5 col-md-3 px-0">
                            <img src="../images/jocelyn.png" width="100px" class="my-2">
                            <p><strong>Jocelyn Kao</strong><br>Co-President</p>
                        </div>
                        <div class="col-xs-5 col-md-3 px-0">
                            <img src="../images/jessie.png" width="100px" class="my-2">
                            <p><strong>Jessie Bui</strong><br>Vice President</p>
                        </div>
                        <div class="col-xs-5 col-md-3 px-0">
                            <img src="../images/maryam.png" width="100px" class="my-2">
                            <p><strong>Maryam Yousefi</strong><br>VP of External Affairs</p>
                        </div>
                    </div>
                    <div class="row mx-4">
                        <div class="col-xs-5 col-md-3 px-0">
                            <img src="../images/paola.png" width="100px" class="my-2">
                            <p><strong>Paola Flores</strong><br>VP of Internal Affairs</p>
                        </div>
                        <div class="col-xs-5 col-md-3 px-0">
                            <img src="../images/serena.png" width="100px" class="my-2">
                            <p><strong>Serena Wong</strong><br>VP of Marketing</p>
                        </div>
                        <div class="col-xs-5 col-md-3 px-0">
                            <img src="../images/alyssa.png" width="100px" class="my-2">
                            <p><strong>Alyssa Santiago</strong><br>VP of Marketing</p>
                        </div>
                        <div class="col-xs-5 col-md-3 px-0">
                            <img src="../images/savera.png" width="100px" class="my-2">
                            <p><strong>Savera Zahid</strong><br>VP of Finance</p>
                        </div>
                    </div>
                    <div class="row justify-content-md-center mx-4">
                        <div class="col-xs-5 col-md-3 px-0">
                            <img src="../images/sarah.png" width="100px" class="my-2">
                            <p><strong>Sarah Lutka</strong><br>VP of Finance</p>
                        </div>
                        <div class="col-xs-5 col-md-3 px-0">
                            <img src="../images/kim.png" width="100px" class="my-2">
                            <p><strong>Kim Le</strong><br>Web Developer</p>
                        </div>
                        <div class="col-xs-5 col-md-3 px-0">
                            <img src="../images/andi.png" width="100px" class="my-2">
                            <p><strong>Andi Fan</strong><br>Web Developer</p>
                        </div>
                    </div>
                    <p class="my-3">Want to get to know us more? Check out our <a href="https://www.instagram.com/p/CD-Hh7uJT7R/?utm_source=ig_web_copy_link" target="_blank">team profile on Instagram!</a></p>
                    <a href="https://docs.google.com/document/d/1x3GjCFI1t6YQLdcnh7PAdg1TuNxt-IT2px-gyt9zGvc/edit" target="_blank"><button class="btn btn-main">Join the club</button></a>
                </div>
            </div>
        </div>
    </section>
    <section id="events" class="bg-light">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Events</h2>
                    <hr>
                    <p class="lead">
                        We will be hosting multiple events with animals, holding virtual events for the Fall semester, and having bake sales which will include vegetarian and vegan-friendly options!
                    </p>
                </div>
            </div>
            <div class="row mx-1">
                <div class="container col-lg-9 text-left mt-4">
                    <h2>2020</h2>
                    <div class="row event">
                        <div class="col-2 text-left">
                            <h1 class="date"><span class="badge">25</span></h1>
                            <h2>SEPT</h2>
                        </div>
                        <div class="col-10">
                            <h4>Cause for Paws Jackbox Event</h4>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Friday</li>
                                <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 6PM EST</li>
                                <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> <a href="https://utoronto.zoom.us/j/91648527012">Zoom Meeting</a></li>
                            </ul>
                            <p>A chance to get to know our team and for an evening of fun and games!</p>
                        </div>
                    </div>
                    <div class="row event">
                        <div class="col-2 text-left">
                            <h1 class="date"><span class="badge">10</span></h1>
                            <h2>OCT</h2>
                        </div>
                        <div class="col-10">
                            <h4>Animals Seminar (with raffle)</h4>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Saturday</li>
                                <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> TBD</li>
                                <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Zoom Meeting</li>
                            </ul>
                            <p>Join this online seminar about animals and participate in a raffle! Learn more about what we do and who we are fundraising for shelters.</p>
                        </div>
                    </div>
                    <div class="row event">
                        <div class="col-2 text-left">
                            <h1 class="date"><span class="badge">05</span></h1>
                            <h2>NOV</h2>
                        </div>
                        <div class="col-10">
                            <h4>Virtual Fundraising Marathon</h4>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Thursday</li>
                                <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> TBD</li>
                                <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> TBD</li>
                            </ul>
                            <p>Members will walk and/or run a mile for every $10 donation that is made to our sponsors.</p>
                        </div>
                    </div>
                </div>
                <div class="container col-lg-9 text-left mt-4">
                    <h2>2021</h2>
                    <div class="row event">
                        <div class="col-2 text-left">
                            <h1 class="date"><span class="badge">21</span></h1>
                            <h2>JAN</h2>
                        </div>
                        <div class="col-10">
                            <h4>Animal-Themed Bake Sale</h4>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Thursday</li>
                                <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> TBD</li>
                                <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> UTM (TBD)</li>
                            </ul>
                            <p>All baked goods sales will be donated to animal charities and organizations.</p>
                        </div>
                    </div>
                    <div class="row event">
                        <div class="col-2 text-left">
                            <h1 class="date"><span class="badge">15</span></h1>
                            <h2>FEB</h2>
                        </div>
                        <div class="col-10">
                            <h4>Bring Your Pet to School Day (Awaiting approval)</h4>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
                                <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> TBD</li>
                                <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> UTM (TBD)</li>
                            </ul>
                            <p>If approved, Cause for Paws members will bring their pets to school so that students can get hands-on experience.</p>
                        </div>
                    </div>
                    <div class="row event">
                        <div class="col-2 text-left">
                            <h1 class="date"><span class="badge">15</span></h1>
                            <h2>APR</h2>
                        </div>
                        <div class="col-10">
                            <h4>Animal Exam Destressor Event</h4>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Thursday</li>
                                <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> TBD</li>
                                <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> UTM (TBD)</li>
                            </ul>
                            <p>One of our sponsors will bring in domestic animals that students can touch and play with to destress during exam season.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sponsors">
        <div class="container text-center">
            <div class="col-lg-8 mx-auto">
                <h2>Sponsors</h2>
                <hr>
                <!--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.
                </p>-->
            </div>
            <div class="row col-md-11 mx-auto">
                <div class="col-md-5 m-3 p-3 mx-auto card">
                    <img class="mx-auto" width="70%" src="../images/ontariospca-logo.jpg">
                    <h5 class="card-title">Ontario SPCA and Humane Society</h5>
                    <p class="card-body  mb-0">The Ontario SPCA and Humane Society is a registered charity that facilitate and provide for province-wide leadership on matters relating to the prevention of cruelty to animals and the
                        promotion of animal well-being.</p>
                    <div class="row align-self-end mx-auto py-4"><a href="https://ontariospca.ca/" target="_blank"><button type="button" class="btn btn-main">Website</button></a></div>
                </div>
                <div class="col-md-5 m-3 p-3 mx-auto card">
                    <img class="mx-auto" width="70%" src="../images/mississauga-logo.png">
                    <h5 class="card-title">Mississauga Animal Services Shelter</h5>
                    <p class="card-body px-2 mb-0">The City of Mississauga Animal Services Shelter is all about animal care. They provide a range of animal related services and promote responsible pet ownership.</p>
                    <div class="row align-self-end mx-auto py-4"><a href="https://web.mississauga.ca/services-and-programs/animals-and-pets/animal-services-shelter/" target="_blank"><button type="button" class="btn btn-main">Website</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="bg-light">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Contact us</h2>
                    <hr>
                    <p class="lead">Please don't hesitate to contact us for more information regarding the club! We'd love to hear your suggestions and answer your questions.</p>
                    <div class="row justify-content-center col-md-8 mx-auto">
                        <div class="col mx-auto">
                            <a href="https://www.instagram.com/causeforpawsutm/"><button class="btn btn-primary">Instagram</button></a>
                        </div>
                        <div class="col mx-auto">
                            <a href="mailto:causeforpawutm@outlook.com"><button class="btn btn-primary">Email Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Cause for Paws 2020</p>
        </div>
        <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom JavaScript for this theme -->
    <script src="/js/scrolling-nav.js"></script>
</body>

</html>

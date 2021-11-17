<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Vacinolib,a french linking platform between Nurses and Pharmacy offices, to combat against COVID-19">
    <meta name="author" content="Sarah Amar, Mario Carnuccio, Sara El Fetouaki, and Pierre Thoumsin">
    <title>Vacinolib</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- style Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://t4.ftcdn.net/jpg/00/83/26/77/360_F_83267753_8Ei7GTQdFSmI9AyKpqjh3j9CPqvvYQiX.jpg" sizes="180x180">
    <link rel="icon" href="https://t4.ftcdn.net/jpg/00/83/26/77/360_F_83267753_8Ei7GTQdFSmI9AyKpqjh3j9CPqvvYQiX.jpg" sizes="32x32" type="image/png">
    <link rel="icon" href="https://t4.ftcdn.net/jpg/00/83/26/77/360_F_83267753_8Ei7GTQdFSmI9AyKpqjh3j9CPqvvYQiX.jpg" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="https://t4.ftcdn.net/jpg/00/83/26/77/360_F_83267753_8Ei7GTQdFSmI9AyKpqjh3j9CPqvvYQiX.jpg">
    <meta name="theme-color" content="#7952b3">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/carousel/carousel.css" rel="stylesheet">

    <!-- Google Map API -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDsXV8WAe0uqp9KpTuLl7lcximvy3hXAyQ" type="text/javascript"></script>
    <script async type="text/javascript">
        // Nice coordonées
        var lat = 43.7;
        var lon = 7.25;
        var map = null;

        function initMap() {

            map = new google.maps.Map(document.getElementById("map"), {
                center: new google.maps.LatLng(lat, lon),
                zoom: 11,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: true,
                scrollwheel: false,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                },
                navigationControl: true,
                navigationControlOptions: {
                    style: google.maps.NavigationControlStyle.ZOOM_PAN
                }
            });
        }
        window.onload = function(){
            initMap();
        };

    </script>

    <style type="text/css">
        #map{
            height:400px;
        }
    </style>

</head>
<body>

<header>
    <div class="navbar navbar-expand-md navbar-light fixed-top"style= "background-color: #91BBF2;">
        <a href="/" class="navbar-brand">
            <div class="navbar-brand text-white">
                <h1 style="text-align: center;">
                    <div style="font-family: 'Roboto Mono', monospace; font-size: x-large; font-style: italic; font-weight: bold">
                        <img src="{{asset('storage/img/favicon_io/favicon-32x32.png')}}" alt="Vacinolib Avatar">
                        {{ config('app.name', 'Vacinolib') }}
                    </div>
                </h1>
            </div>

        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="/news" class="nav-item nav-link text-white">News</a>
                <a href="/map" class="nav-item nav-link text-white">Map</a>
            </div>
        </div>
    </div>
    </span>
    </div>
</header>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<p>

    Welcome on vacinolib


</p>
<div class="prueba" style="margin-top: 20px;">
    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row" style="background-color: transparent;" style="padding:20px;">
            <div class="col-lg-4">
                <img src="{{asset('storage/img/welcome/pharmacie.png')}}" style="width: 200px;">
                <h2>Je suis un(e) Pharmacien(ne)</h2>
                <p>Je suis une pharmacie et je dispose d'un stock de vaccins. Je souhaites les mettre à disposition des infirmiers.</p>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                        Plus d'informations
                    </button>
                    <div class="dropdown-menu">
                        @auth
                            <a class="dropdown-item" href="{{url('/pharm')}}">Tableau de bord</a>
                        @else
                            <a class="dropdown-item" href="{{url('/login/pharm')}}">Se connecter</a>
                            <a class="dropdown-item" href="{{url('/register/pharm')}}">S'enregistrer</a>
                        @endauth
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{asset('storage/img/welcome/patient.png')}}" style="width: 200px">
                <h2>Je suis un(e) Patient(e)</h2>
                <p>Je suis patient, je dispose d'une ordonnance de vaccination Covid19 et  je souhaite prendre rendez-vous avec un infirmier(ère).</p>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                        Plus d'informations
                    </button>
                    <div class="dropdown-menu">
                        @auth
                            <a class="dropdown-item" href="{{url('/home')}}">Tableau de bord</a>
                        @else
                            <a class="dropdown-item" href="{{ route('login') }}">Se connecter</a>
                            <a class="dropdown-item" href="{{ route('register') }}">S'enregistrer</a>
                        @endauth
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="{{asset('storage/img/welcome/infirmier.png')}}" style="width:300px;">
                <h2>Je suis un(e) Infirmier(ère)</h2>
                <p>Je dispose de creneaux disponibles que je peux dedié à la vaccination.</p>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                        Plus d'informations
                    </button>
                        <div class="dropdown-menu">
                            @auth
                                <a class="dropdown-item" href="{{url('/nurse')}}">Tableau de bord</a>
                            @else
                                <a class="dropdown-item" href="{{url('/login/nurse')}}">Se connecter</a>
                                <a class="dropdown-item" href="{{url('/register/nurse')}}">S'enregistrer</a>
                            @endauth
                        </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Où trouver le vaccin contre la Covid-19 ?</h2>
                <p class="lead">Nous vous mettons à disposition la liste des pharmacies ayant le vaccin contre la Covid-19 afin de prendre rendez-vous en ligne directement sur notre site. <i>Plus de 18 000 pharmacies sont engagées dans la vaccination et seront bientôt présentes ici.</i></p>
                <a href="/map">
                    <button type="button" class="btn btn-outline-dark">Trouver mon Chemin
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </button>
                </a>
            </div>
            <div class="col-md-5">
                <div id="map">
                    <!-- Affichage de la map-->
                </div>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Suivre l'actualité.<span class="text-muted"></span></h2>
               <p class="lead">Découvrez toute l’actualité sanitaire et sociale sur la Covid-19, la vaccination et les chiffres clés.
                <br><i>Protégez – vous et protégez les autres.</i></p>
                <br>
                <a href="/news">
                    <button type="button" class="btn btn-outline-dark">Voir les news
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </button>
                </a>
            </div>
            <div class="col-md-5 order-md-1">
                <div id="news">
                    <a href="/news"><img src="{{asset('storage/img/welcome/covid_news.png')}}" style="width: 350px; height: 350px"></a>
                </div>

            </div>
        </div>
        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->
</div>


<!-- FOOTER -->
<!-- Footer Links -->
<footer class="text-white text-center text-lg-start" style="background-color: #91BBF2">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase"> Espace Patients</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="/login" class="text-white">S'inscrire</a>
                    </li>
                    <li>
                        <a href="/register" class="text-white">S'enregistrer</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase"> Espace Infirmiers</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="/login/nurse" class="text-white">S'inscrire</a>
                    </li>
                    <li>
                        <a href="/register/nurse" class="text-white">S'enregistrer</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0"> Espace Pharmaciens</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="/login/pharm" class="text-white">S'inscrire</a>
                    </li>
                    <li>
                        <a href="/register/pharm" class="text-white">S'enregistrer</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #1E6FD9;">
        © 2021 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">Vacinolib.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

<script src="{{asset('js/bootstrap.bundle.min.js')}}" ></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

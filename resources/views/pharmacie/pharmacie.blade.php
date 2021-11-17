<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link href="/css/pharmacie.css" rel="stylesheet">
    <!-- style Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>PHARMACIE</title>
</head>
<hr class="linea0"></hr>
<body>
<div class="test">
    <!-- nav bar-->
    <nav class="navbar navbar-expand-lg navbar bg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NOM DE LA PHARMACIE</a>
            <div class="brand navbar-brand profil" id="navbarNav">
                <ul class="navbar-nav">
                    <button type="button" class="btn btn-light"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier le profil</button>
                </ul>
            </div>
        </div>
       
    </nav>
    <hr class="linea"></hr>

    <div class="content">
    @include('pharmacie.menu')
    </div>
</div>
</body>

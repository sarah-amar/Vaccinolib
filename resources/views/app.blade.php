<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Google Maps</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 1rem 2rem;
        }
    </style>
</head>
<body>

    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2>Pharmacies</h2>
            <div class="map" id="app">
                <gmap-map
                    :center="{lat:10,lng:10}"
                    :zoom="7"
                    style="width: 100%; height: 320px;"
                >
                    <gmap-marker
                        v-for="(r, index) in restaurants"
                        :key="r.id"
                        :position="getPosition(r)"
                        :clickable="true"
                        :draggable="false"
                        @click="handleMarkerClicked(r)"
                    ></gmap-marker>
                </gmap-map>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

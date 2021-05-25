@extends('layouts.app')

@section('content')
<div class="container">
    <section class="contacts">
        <div class="container">
            <h1 class="title mt-5">Контакти</h1>
            <span>Ріелтори</span>
            <ul class="contacts__list row">

                @foreach($rieltors as $key => $rieltor)
                    <li class="contacts__item col-md-3 p-2">
                        <div class="h4__contacts__name">
                            {{ $rieltor->name }}
                        </div>
                        <div class="contacts__number">
                            <a href="tel:{{ $rieltor->phone }}">
                                {{ $rieltor->phone }}
                            </a>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>

    </section>
    <section class="mape">
        <div class="container">
            <span>Ми на мапі</span>

                <title>Add Map</title>

                <style type="text/css">
                    /* Set the size of the div element that contains the map */
                    #map {
                        height: 400px;
                        /* The height is 400 pixels */
                        width: 100%;
                        /* The width is the width of the web page */
                    }
                </style>
                <script>
                    // Initialize and add the map
                    function initMap() {
                        // The location of Uluru
                        const uluru = { lat: -25.344, lng: 131.036 };
                        // The map, centered at Uluru
                        const map = new google.maps.Map(document.getElementById("map"), {
                            zoom: 4,
                            center: uluru,
                        });
                        // The marker, positioned at Uluru
                        const marker = new google.maps.Marker({
                            position: uluru,
                            map: map,
                        });
                    }
                </script>
            </head>
            <body>
            <h3>My Google Maps Demo</h3>
            <!--The div element for the map -->
            <div id="map"></div>

            <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
            <script
                src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
                async
            ></script>
        </div>
    </section>
</div>
@endsection

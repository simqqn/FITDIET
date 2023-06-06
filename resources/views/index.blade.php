@extends('layouts.site')

@section('content')

<div class="row">
    <!-- Recent posts -->
    <div class="col-lg-8">
        <h3>Ostatnie przepisy</h3>
        @foreach ($recentPosts as $post)
            <div class="blog-post-item">
                <img src="uploads/{{ $post->thumbnail }}" class="img-fluid" style="width: 150px;"/>

                <a href="{{ route('post', $post->slug) }}">
                    <h5>{{ $post->title }}</h5>
                </a>

                <p><b>{{ $post->created_at->format('d.m.Y') }}</b></p>

                <p>{{ $post->description }}</p>
            </div>
        @endforeach
    </div>

    <!-- About -->
    <div class="col-lg-4">
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="img/dietetyk.jpg"/>
            </div>
            <div class="col">
                <h3>Anna Marchewa</h3>
                <p>Dietetyk z pasją. Lorem ipsum dolor sit amet. Kurczak z warzywami bardzo dobra potrawa.</p>
            </div>
        </div>
        
        <!-- Google Maps -->
        <div id="map" style="height: 300px; margin-top: 20px;"></div>
    </div>
</div>

@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfHkqTipuV-zqDpxsqz_PdZ2zXo0joSds&callback=initMap"></script>
    <script>
        function initMap() {
            var location = {lat: 53.121287, lng: 18.010038}; // Współrzędne Bydgoszczy

            var map = new google.maps.Map(document.getElementById('map'), {
                center: location,
                zoom: 15
            });

            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Bydgoszcz Garbary 1'
            });
        }
        
        // Inicjalizacja mapy po załadowaniu strony
        window.addEventListener('load', function() {
            initMap();
        });
    </script>
@endsection

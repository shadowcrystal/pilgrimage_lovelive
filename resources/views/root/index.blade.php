@extends('layout')

@section('styles')
  <link rel="stylesheet" href="/css/home/index.css">
  <style>
    #map {
      width: 100%;
      height: 600px;
      background-color: skyblue;
    }
  </style>
@endsection

@section('content')
  <section class="indexWrap layoutContainer">
    <div class="indexContainar container">
      <div class="siteContainer">
        @foreach($sites as $site)
          <a href="{{ route('home.site',['id' => $site->id] )}}" class="site">
            <div class="imgWrap">
              <img src="/storage/sites/{{ $site->episode_id }}/{{ $site->anime_image }}" alt="{{ $site->name }}">
            </div>
            <p>{{ $site->name }}</p>
          </a>
        @endforeach
      </div>
    </div>
    <div id="map"></div>
    <input type="text" id="address" placeholder="住所を入力">
    <button type="button" onclick="search()">座標取得</button>
  </section>
@endsection

@section('scripts')
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=myAPIKEY&callback=initMap"></script>
  <script>
  function initMap() {
    var map = new google.maps.Map(document.getElementById("map"),{
      zoom: 14,
      center: new google.maps.LatLng({{ $start1 }},{{ $start2 }}),
      mapTypeId: "roadmap"
    });

    var marker = new google.maps.Marker({
      position: map.getCenter(),
      map: map,
      title: "{{ $site->name }}",
      animation: google.maps.Animation.DROP,
      url: "http://maps.google.com/mapfiles/ms/micons/red.png"
    });

    var directionsService = new google.maps.DirectionsService();

    var directionsRenderer = new google.maps.DirectionsRenderer();

    directionsRenderer.setMap(map);

    var start = new google.maps.LatLng({{ $start1 }},{{ $start2 }});
    var end = new google.maps.LatLng({{ $last1 }},{{ $last2 }});

    var request = {
      origin: start,
      destination: end,
      waypoints: [
        @foreach($sites as $site)
          { location: new google.maps.LatLng({{ $site->latlng1 }},{{ $site->latlng2 }}), },
        @endforeach
      ],
      travelMode: 'WALKING'
    };

    directionsService.route(request,function(result,status){
      if(status === 'OK'){
        directionsRenderer.setDirections(result);
      }else{
        alert("取得できませんでした："+ status);
      }
    });
  }

  function search(){
    var target = document.getElementById('map');
    var address = document.getElementById('address').value;
    var geocoder = new google.maps.Geocoder();

    geocoder.geocode({address : address},function(results,status){
      if(status === 'OK' && results[0]){
        new google.maps.Map(target,{
          center: results[0].geometry.location,
          zoom: 14
        });
      }else{
        alert('失敗しました。理由：'+ status);
        return;
      }
    });
  }
  </script>
@endsection

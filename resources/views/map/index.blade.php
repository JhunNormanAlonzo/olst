<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <style>
        #map {
            height: 100%;
        }

        /*
         * Optional: Makes the sample page fill the window.
         */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app"></div>
<button onclick="getCurrentLocation()">Get Current Location</button>
<div id="map"></div>
<button onclick="changeMarkerPosition(18.24257156066456, 121.70867557434431)">Update Position</button>


<script>
    function getCurrentLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            console.log("Geolocation is not supported by this browser.");
        }
    }

    function showPosition(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        console.log("Latitude: " + latitude);
        console.log("Longitude: " + longitude);

        alert("current lat : "+ latitude +" and current lng : "+longitude);

        // You can send this latitude and longitude to your Laravel route or API endpoint
        // using AJAX or by submitting a form, depending on your application's requirements.
    }

</script>
<script>
    (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
        key: "AIzaSyCp6xUU_248dz-S1AmihDAvxWpzxY5oEp0",
        v: "weekly",
    });
</script>
<script >
    let map;


    let marker1;
    let marker2;

    async function initMap() {

        const { Map } = await google.maps.importLibrary("maps");
        const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

        const position1 = {lat : 18.254609810412283, lng : 121.69358594411351};

        const position2 = {lat : 18.21500658013031, lng : 121.7659939454115};

        map = new Map(document.getElementById("map"), {
            zoom: 11,
            center: position1,
            mapId : "DEMO_MAP_ID",
        });


        marker1 = new AdvancedMarkerElement({
            map: map,
            position: position1,
            title: "Driver",
        });

        marker2 = new AdvancedMarkerElement({
            map: map,
            position: position2,
            title: "Customer",
        });

    }



    async function test(){
        console.log('test');
    }

    async function changeMarkerPosition(newLat, newLng) {
        const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
        marker2.setMap(null); // Remove the existing marker from the map

        marker2 = new AdvancedMarkerElement({
            map: map,
            position: {lat : newLat, lng: newLng},
            title: "Customer",
        });
    }


    initMap();
</script>

<script type="module">


    Echo.channel('olst').listen('CarMoved', (e)=>{
        console.log(e);

        changeMarkerPosition(e.lat, e.lng);
    })

</script>

</body>
</html>

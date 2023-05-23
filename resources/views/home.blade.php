<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script> --}}
    <title>Document</title>
</head>

<body>
    <h1>Home</h1>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/portfolio">Portfolio</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>




    <button onclick="getLocation()">localizacion</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "," + position.coords.longitude;
}
</script>

    {{-- sirve para resivir un parametro en html
    < ?php echo $nombre ?>--}}

    {{-- <button onclick="geo()">
        Geololicacion
    </button>



    <script>

        function geo(){
            if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const coords = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    console.log(coords);
                },   
                () => {
                    alert("No permitiste ver tu localizacion");
                }
            );
            }else{
                alert("no se pudo")
            }
        }
    </script> --}}



</body>

</html>
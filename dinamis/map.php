<html xmlns="http://www.w3.org/1999/xhtml">

  <head>

    <title>Google Maps AJAX + mySQL/PHP Example</title>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8-jUzfKWBqtvT3XAUDLJb1n1qdQlZzwk&language=id&region=ID"></script>

    <script type="text/javascript">

    function load() { //meload map

      var map = new google.maps.Map(document.getElementById("map"), {

        center: new google.maps.LatLng(-7.260308,112.746714),

        zoom: 12, //tingkat zoom map, sesuaikan kebutuhan

        mapTypeId: 'roadmap'

      });

      var infoWindow = new google.maps.InfoWindow;

 

      // Change this depending on the name of your PHP file

      downloadUrl("phpsqlajax_genxml.php", function(data) {

        var xml = data.responseXML;

        var markers = xml.documentElement.getElementsByTagName("marker");

        for (var i = 0; i < markers.length; i++) {

          var name = markers[i].getAttribute("name");

          var address = markers[i].getAttribute("address");

          var type = markers[i].getAttribute("type");

          var point = new google.maps.LatLng(

              parseFloat(markers[i].getAttribute("lat")),

              parseFloat(markers[i].getAttribute("lng")));

          var html = "<b>" + name + "</b> <br/>" + address+ "</b> <br/>Keterangan :" +type;

          var marker = new google.maps.Marker({

            map: map,

            position: point,

            icon: 'images/mappompa3.jpg' //sesuakan nama gambar dan lokasi marker anda

          });

          bindInfoWindow(marker, map, infoWindow, html);

        }

      });

    }

    function bindInfoWindow(marker, map, infoWindow, html) {

      google.maps.event.addListener(marker, 'click', function() {

        infoWindow.setContent(html);

        infoWindow.open(map, marker);

      });

    }

    function downloadUrl(url, callback) {

      var request = window.ActiveXObject ?

          new ActiveXObject('Microsoft.XMLHTTP') :

          new XMLHttpRequest;

      request.onreadystatechange = function() {

        if (request.readyState == 4) {

          request.onreadystatechange = doNothing;

          callback(request, request.status);

        }

      };

      request.open('GET', url, true);

      request.send(null);

    }

    function doNothing() {}

    //]]>

  </script>

  </head>

  <body onLoad="load()">

    <div id="map" style="width: 650px; height: 500px"></div>

  </body>

</html>
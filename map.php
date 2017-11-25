<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {
        "packages":["map"],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        "mapsApiKey": "AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY"
    });
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Lat', 'Long', 'Name'],
          [20.6861082, -103.37352850000002, 'Volkswagen Americas'],
          [20.680355, -103.42602390000002, 'Volkswagen Euroalemana'],
          [20.6549348, -103.34142759999997, 'Volkswagen Agua Azul'],
          [20.6254297, -103.42009519999999, 'Volkswagen Naosa']
        ]);

        var map = new google.visualization.Map(document.getElementById('map_div'));
        map.draw(data, {
          showTooltip: true,
          showInfoWindow: true
        });
      }

    </script>
  </head>

  <body>
    <div id="map_div" style="width: 100%; height: 100%"></div>
  </body>
</html>

<?php
  include_once("roomfinder_functions.php");
  date_default_timezone_set('America/New_York');
  $day = date('D');
  $hh = intval(date('G'));
  $mm = intval(date('i'));
  
  $eroom = new EmptyRoom($day, $hh, $mm);
  //$eroom = new EmptyRoom("thu", 11, 20);
  $rooms = $eroom->get_Available_Building_Names();
  $rooms_json = json_encode($rooms);

  $loc_str = file_get_contents('location_table.json');
    $loc_arr = json_decode($loc_str, TRUE);
    $loc_json = json_encode($loc_arr);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Lastr compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Lastr compiled and minified JavaScript -->
    
    <link href="http://getbootstrap.com/examples/offcanvas/offcanvas.css" rel="stylesheet">

    <style type="text/css">
      html { height: 100%; margin: 0; padding: 0;}
      body { height: 100%; margin: 0; padding: 0;}
      #empty_room { height: 100%; margin: 0; padding: 0;}
      .tab-content, tab-pane { height: 600px; margin: 0; padding: 20px;}
      

      #headingblue {
        background-color: #c4e3f3;
      }

      #headinggreen {
        background-color: #d0e9c6;
      }

      #headingyellow {
        background-color: #faf2cc;
      }

      #contact_image_button{
        background:none;
        border:none;
        box-shadow:none;
      }
      
    </style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO4-uh2C2Cpon5LB7NTosT_lVl3mxAOu8">
    </script>

    <script type="text/javascript">


    var markers = [];
    var infowindow = null;
    locs =<?php echo "$loc_str";?>;
    rooms =<?php echo "$rooms_json"; ?>;
    var rpi = new google.maps.LatLng(42.72966,  -73.67919);

  function initialize() {
    var mapOptions = {
      zoom: 16,
      center: rpi
    };

    var map = new google.maps.Map(document.getElementById('empty_room'),
        mapOptions);


    //create markers
    for (var bdng in rooms) {
    markers.push(new google.maps.Marker({
      position: new google.maps.LatLng(locs[bdng]["lat"], locs[bdng]["lng"]),
      map: map,
      title: bdng,
      icon: rooms[bdng]["max"]["icon"],
    }) );
    }

    for (var i in markers) {
    google.maps.event.addListener(markers[i], 'click', function() {
      openWindow(map, this, rooms);
    });
    }

  }

  function openWindow(map, marker, rooms) {
    if (infowindow) {
      infowindow.close();
    }

    bdng = marker.title;
    var str = "";
    str = str.concat("<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">");

    var first = true;
    if (rooms[bdng]["blue"]) {
      var tmp = strRow(rooms, bdng, "blue", first);
      first = tmp == "" ? true : false;
      str = str.concat(tmp);
    }

    if (rooms[bdng]["green"]) {
      var tmp = strRow(rooms, bdng, "green", first);
      first = tmp == "" && first == true ? true : false;

      str = str.concat(tmp);
    }

    if (rooms[bdng]["yellow"]) {
      var tmp = strRow(rooms, bdng, "yellow", first);
      first = tmp == ""  && first == true? true : false;
      str = str.concat(tmp);
    }
    
    str = str.concat("</div>");


    infowindow = new google.maps.InfoWindow({
        content: str
    });
    infowindow.open(map,marker);

    google.maps.event.addListener(infowindow, 'closeclick', function () {
       map.panTo(rpi); 
    });
  }

  function strRow(rooms, bdng, color, first) {

    if (rooms[bdng]["max"][color] == 0) {
      return "";
    }

    var str = "";
    var colors = {"blue":"\"info\"", "green": "\"success\"", "yellow":"\"warning\""};
    str = str.concat("<div class=\"panel panel-default\">");
    str = str.concat("<div class=\"panel-heading\" role=\"tab\" id=\"heading");
    str = str.concat(color);
    str = str.concat("\">");
    str = str.concat("<h4 class=\"panel-title\">");
    str = str.concat("<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse");
    str = str.concat(color);
    str = str.concat("\" aria-expanded=\"true\" aria-controls=\"collapseOne\">");
    str = str.concat(rooms[bdng][color]["title"]);
    str = str.concat("</a>");
    str = str.concat("</h4>");
    str = str.concat("</div>");

    str = str.concat("<div id=\"collapse");
    str = str.concat(color);
    if (first == true) {
      str = str.concat("\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">");

    } else {
      str = str.concat("\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">");
    }

    
    str = str.concat("<div class=\"panel-body\">");
    str = str.concat("<table class=\"table table-hover table-bordered\">");
    var count = 0;
    for (var room in rooms[bdng][color]) {
      if (!rooms[bdng][color][room]["till"]) {
        continue;
      }
      count++;

      var sentence = "<tr class=";
      sentence = sentence.concat(colors[color]);
      sentence = sentence.concat(">");
      str = str.concat(sentence);
      
      var tag = count == 1? "<th>" : "<td>";
      var end_tag = count == 1? "</th>" : "</td>";

      //building name
      str = str.concat(tag);
      if (count == 1) {
        str = str.concat("Building");
      } else {
        str = str.concat(bdng);
      }

      str = str.concat(end_tag);

      //room number
      str = str.concat(tag);

      if (count == 1) {
        str = str.concat("Room");
      } else {
        str = str.concat(room);
      }

      str = str.concat(end_tag);

      //remain
      str = str.concat(tag);
      if (count == 1) {
        str = str.concat("Available Till");
      } else {
        str = str.concat(rooms[bdng][color][room]["till"]);
      }
      str = str.concat(end_tag);

      str = str.concat("</tr>");
      break;
    }

    count = 1;
    for (var room in rooms[bdng][color]) {
      if (!rooms[bdng][color][room]["till"]) {
        continue;
      }
      count++;

      var sentence = "<tr class=";
      sentence = sentence.concat(colors[color]);
      sentence = sentence.concat(">");
      str = str.concat(sentence);
      
      var tag = "<td>";
      var end_tag = "</td>";

      //building name
      str = str.concat(tag);
      if (count == 1) {
        str = str.concat("Building");
      } else {
        str = str.concat(bdng);
      }

      str = str.concat(end_tag);

      //room number
      str = str.concat(tag);

      if (count == 1) {
        str = str.concat("Room");
      } else {
        str = str.concat(room);
      }

      str = str.concat(end_tag);

      //remain
      str = str.concat(tag);
      if (count == 1) {
        str = str.concat("Available Till");
      } else {
        str = str.concat(rooms[bdng][color][room]["till"]);
      }
      str = str.concat(end_tag);

      str = str.concat("</tr>");
    }


    str = str.concat("</table>");
    str = str.concat("</div>");
    str = str.concat("</div>");

    str = str.concat("</div>");
    if (count == 1) {
      str = "";
    }

    return str;
  }



  google.maps.event.addDomListener(window, 'load', initialize);
    
    </script>


  </head>
  <body>

    <div class="panel panel-default col-md-6 col-md-offset-3" role="tabpanel" >

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#empty_room" aria-controls="empty_room" role="tab" data-toggle="tab">Find an Available Room</a></li>
          <li role="presentation"><a href="#classroom" aria-controls="classroom" role="tab" data-toggle="tab">Find a Classroom</a></li>
          <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content ">
          <div role="tabpanel" class="tab-pane fade in active" id="empty_room"></div>
          <div role="tabpanel" class="tab-pane fade" id="classroom">...Under Development...</div>
          <div role="tabpanel" class="tab-pane fade " id="contact">
            
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">


                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="./images/rpi_campus.jpg">
                        </div>
                        <div class="item">
                          <img src="./images/rpi_campus_2.jpg">
                        </div>
                        <div class="item">
                          <img src="./images/rpi_lib2.jpg">
                        </div>
                        
                        <div class="item">
                          <img src="./images/rpi_autumn.jpg">
                        </div>
                        
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>

            <h3>&nbsp;</h3>

            <div class="col-md-10" id="contactinfo">
              <address>
                <strong>Rensselaer Center for Open Source Project</strong><br>
                110 8th Street, <br>
                Troy, NY 12180<br>
              </address>

              <address>
                <strong>Github Repository</strong><br>
                <a href="https://github.com/tli5/rpi-roomfinder">rpi-roomfinder</a>
                
              </address>

              <address>
                <strong>Email Author</strong><br>
                <a href="mailto:litr965@gmail.com">litr965@gmail.com</a>

              </address>
            </div>
          </div>
        </div>

    </div>

  </body>
</html>
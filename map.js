
   
    var map;
    function initMap(){
        var uluru = {lat:56.3211028, lng: 43.9301068};

        map=new google.maps.Map(document.getElementsByClassName("map")[0], {
            zoom: 17,
            center: uluru,
            mapTypeControlOptions:{
                mapTypeIds:["roadmap","satellite", "hybrid", "terrain", "styled_map"]
            }
            
        });
        
        var marker = new google.maps.Marker({
            position: uluru,
            map:map
        });
    }
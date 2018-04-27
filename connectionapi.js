

    // function initMap(){
// window.onload=function(){
        blockmap=document.createElement('div');
        blockmap.className='map';
        s =document.documentElement.appendChild(blockmap);

        
        divmap=document.getElementsByClassName('map')[0];
        if(divmap){
            console.log("Loading Map...");
        var map;
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

        console.log("Map load!");
    // }
    }
    else {
        console.log("This object is not found");
    }
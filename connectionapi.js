window.onload = function (){

    var src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCe-tW4VOqjv8uorWx8EpgRcGSjya0ogLY&callback=initMap';
    
    var block = document.getElementsByClassName('block')[0];
    var tagscript = document.createElement('script');
    tagscript.setAttribute('src', src);
    console.log(tagscript);

    var blockmap = document.createElement('script');
    // blockmap.setAttribute('src', 'https://ditis.bitrix24.ru/disk/showFile/58901/?&ncc=1&ts=1524823892&filename=map.js');

    document.body.insertBefore(tagscript, block);
    document.body.insertBefore(blockmap, block);

    
    // document.body.insertBefore(tagscript, block);
    // document.body.insertBefore(blockmap, block);
    
}

var req = new XMLHttpRequest();
    req.open("GET", "https://ditis.bitrix24.ru/disk/showFile/58901/?&ncc=1&ts=1524823892&filename=map.js", false);
    req.send(null);
    console.log(req.status, req.statusText);
    // → 200 OK
    console.log(req.getResponseHeader("content-type"));
    // → text/plain
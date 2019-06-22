// const fecthMap = () => {
//     fetch("https://image.maps.api.here.com/mia/1.6/mapview
//     ?app_id={YOUR_APP_ID}
//     &app_code={YOUR_APP_CODE}
//     &e=QeL4rkKaxoA
//     &u=5m
//     &z=8")
//       .then(response => {
//         return response.json();
//       })
//       .then(data => {
//         //   data.forEach(element => {
//         //       console.log(element.quote);
//         //       text.innerHTML=element.quote;
           
//         //   });

//         text.innerHTML=data.quoteText;
//         console.log(`${data.quoteText} -${data.quoteAuthor}`)
     
        
//       }
//       )
//     }
//     fetchQuote();


function lookup_location() {
  geoPosition.getCurrentPosition(show_map, show_map_error);
}

function show_map(loc) {
  $("#geo-wrapper").css({'width':'320px','height':'350px'});
  var map = new GMap2(document.getElementById("geo-wrapper"));
  var center = new GLatLng(loc.coords.latitude, loc.coords.longitude);
  map.setCenter(center, 14);
  map.addControl(new GSmallMapControl());
  map.addControl(new GMapTypeControl());
  map.addOverlay(new GMarker(center, {draggable: false, title: "You are here (more or less)"}));
}
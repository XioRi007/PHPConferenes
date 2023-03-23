
function initMapClick() {
  // The location of Uluru
  let pos = {
      "lat": Number(document.getElementById('latitude').value), 
      "lng": Number(document.getElementById('longtitude').value)
  }
  if(pos.lat == 0 || pos.lng == 0){
      pos.lat = 1,
      pos.lng = 1
  }
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: pos,
  });
  let marker = new google.maps.Marker({
    position: pos,
    map: map,
  });
  map.addListener("click", (e) => {
    marker.setMap(null);
    marker = new google.maps.Marker({
      position: e.latLng,
      map: map,
    });
    document.getElementById('latitude').value =  e.latLng.lat();
    document.getElementById('longtitude').value =  e.latLng.lng();
  });
}

window.initMapClick = initMapClick;
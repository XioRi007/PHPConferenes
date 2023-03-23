// Initialize and add the map
function initMap() {
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
  }
  
  window.initMap = initMap;
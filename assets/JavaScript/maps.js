/*$.ajax({
  url: 'https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyAh8Tr40ICnDuOM5NLJRzBJ-OOO6BIa01o',
  type: 'GET',
  dataType: 'json',
  success: function(response) {
      console.log(JSON.stringify(response));
  },error : console.log('error')
})*/
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}
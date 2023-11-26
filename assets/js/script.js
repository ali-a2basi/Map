// adding map function
const default_map_location = [35.722, 51.328];
const default_zoom = 15

var map = L.map('map').setView(default_map_location, default_zoom);

const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

//scaling for google maps by javascript
// document.getElementById('map').style.setProperty('height',window.innerHeight + 'px');





var current_position, current_accuracy;
map.on('locationfound', function(e) {
    // if position defined, then remove the existing position marker and accuracy circle from the map
    if (current_position) {
        map.removeLayer(current_position);
        map.removeLayer(current_accuracy);
    }
    var radius = e.accuracy;
    current_position = L.marker(e.latlng).addTo(map)
        .bindPopup("دقت تقریبی: " + radius + " متر").openPopup();
    current_accuracy = L.circle(e.latlng, radius).addTo(map);
});
map.on('locationerror', function(e) {
    alert(e.message);
});
// wrap map.locate in a function    
function locate() {
    map.locate({ setView: true, maxZoom: default_zoom });
};



map.on('click', function(e) {


    L.marker(e.latlng).addTo(map);
    $('.modal-overlay').fadeIn();

    $('#lat-display').val(e.latlng.lat);
    $('#lng-display').val(e.latlng.lng);
    $('#l-type').val(0);
    $('#l-title').val("");

});






$(document).ready(function() {
    $('form#add-location-form').submit(function(e) {
        e.preventDefault(); // prevent form submiting
        var form = $(this);
        var result_tag = form.find('.ajax-result');
       
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(response) {
                result_tag.html(response);
            }
        });
    });


    $('.modal-overlay .close').click(function() {
        $('.modal-overlay').fadeOut();
    });
});









// setTimeout(locate, 5000);
s




// map.on('zoomend', function(){


//     alert(map.getBounds().getCenter());

// },2000);



// var northLine =  map.getBounds().getNorth();
// var southLine =  map.getBounds().getSouth();
// var eastLine =  map.getBounds().getEast();
// var westLine =  map.getBounds().getWest();

// setTimeout(function(){

//     map.setView([35,51],15);
//     var marker = L.marker([35,51],15).addTo(map);
//     marker.bindPopup('map').openPopup();
// }, 2000);




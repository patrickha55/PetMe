let marker;
function initMap (){
    var uluru = {lat:10.786596,lng:106.666103}
    var map = new google.maps.Map(document.getElementById('map'),{
        zoom:19,
        center:uluru,
        mapTypeId: google.maps.MapTypeId.HYBRID
    });
    var contentString ='<div class="row">'+
    '<div class="col-sm-12 col-md-23">'+
    '<div class="thumbnail" style="border: none">'+
    '<img src="images/slider/map1.jpg" alt="Uniform Map">'+
    '<div class="caption">'+
    '<h3>A1 Uniform</h3>'+
    '<p>Best School Uniform Store</p>'+
    '<p><b>ADDRESS : </b>590 Cach Mang Thang 8, District 3, Tp.HCM</p>'+    
    '<p><a href="all-products.html" class="btn btn-main" role="button">Shop Now</a>'+
    '</div>'+
    '</div>'+
    '</div>'+
    '</div>';

    var inforwindow = new google.maps.InfoWindow({
        content : contentString,
        maxWidth : 480
    });
    marker = new google.maps.Marker({
        map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: { lat: 10.786598, lng: 106.666101 },
    });
    marker.addListener("click", function(){
        inforwindow.open(map,marker)
    });
    inforwindow.open(map,marker);
}
function toggleBounce() {
    if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
    } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
    }
}
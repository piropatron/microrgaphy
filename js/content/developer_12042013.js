$(document).ready(function(){

	//alert('developer js !!!');



    $( '.datepicker' ).datepicker({
      dateFormat: "yy-mm-dd",
      showButtonPanel: true
    });
  
    
  $(".time-start .time-sttop").click(function () {
      $(".datepicker").focus();
  });
      
  $(".datepicker").change(function () {
	$(".event-time").html($(".datepicker").val());
  });


  
  setTimeout(function(){
    initialize();
  }, 500);

  /*
   P o*p-up gogle map
   */
  $('.event-location').live('click', function () {
    $('.content-map').toggle(800);
    
  });

$(".virtual-tur").live('click', function(){
  $( "#virtual-tur" ).dialog( "open" );
  return false;
});

  
  $( "#opener" ).click(function() {
    $( "#dialog" ).dialog( "open" );
    return false;
  });


  
  $( "#dialog" ).dialog({
    autoOpen: false,
//     show: "blind",
    minHeight: 500,
    minWidth: 700
//     hide: "explode"
  });

  $( "#virtual-tur" ).dialog({
    autoOpen: false,
    minHeight: 500,
    minWidth: 700
  });
  


  var geocoder;
  var map;
  var marker;
  
    function initialize(){
      
      //     var latitude = $('.apartment-location').attr('data-latitude');
      //     var longitude = $('.apartment-location').attr('data-longitude');
      var latlng = new google.maps.LatLng(50.005988, 36.239666);
      var options = {
	zoom: 15,
	center: latlng,
	mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      map = new google.maps.Map(document.getElementById("map_canvas"), options);
      //Определение геокодера
      geocoder = new google.maps.Geocoder();
      
      marker = new google.maps.Marker({
	map: map,
	draggable: true,
	position: new google.maps.LatLng(50.005988, 36.239666)
      });
      
    }
  
});
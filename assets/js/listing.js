 var G_MAP='';
// function mapLoad() {
//   var location=new google.maps.LatLng(BLP_LAT_POSTION,BLP_LNG_POSTION);
//   var mapProp = {
//     center: location,
//     zoom:17,
//     scrollwheel: false,
//     mapTypeId:google.maps.MapTypeId.ROADMAP
//   };
//   G_MAP=new google.maps.Map(document.getElementById("googleMap"),mapProp);
//   var myCity = new google.maps.Circle({
//   center:location,
//   radius:200,
//   strokeColor:"#C42927",
//   strokeOpacity:0.8,
//   strokeWeight:3,
//   fillColor: "#FFF",
//   fillOpacity:0.3,
//   draggable: true,
//   geodesic: true,
//   editable: true
//   });
//   myCity.setMap(G_MAP);
//   var marker = new google.maps.Marker({
//     position: location,
//     map: G_MAP,
//     title: BLP_AREA
//   });
// }
// jQuery(document).ready(function() {
//   LISTING_ONLOAD.loadCities();
//   LISTING_ONLOAD.loadMap();
// // google.maps.event.addDomListener(window, 'load', mapLoad);

// });
var LISTING={
  listingSwitchTabs:function(tab_name){
    if(tab_name!='printer'&&tab_name!='package'){
      BB_MAIN.getJsonData(BB_HOME_URL+'api/getAdvertisementList?area_id=1&type='+tab_name+'&ajax_mode=1','LISTING.listingSwitchTabsAfterResponse');
    }else{
      data="<div class='text-center'>We working hard to bring this feature. Stay connected with us to get updates on this feature</div>"
      LISTING.listingSwitchTabsAfterResponse(data);    
    }
    COMMON_UTILITIES.ajaxUrl(null,BB_HOME_URL+'advertisment_boards?area_id=1&type='+tab_name);
    jQuery(".web-tabs").removeClass('selected');
    jQuery("#web-tabs-"+tab_name).addClass('selected');
  },
  listingSwitchTabsAfterResponse:function(data){
    if(data){
      jQuery("#listing-body").empty();
      jQuery("#listing-body").html(data);
    }
  },
  listingOpenEmailBannerCardPosition:'',
  listingOpenEmailPopup:function(event,position){
    if(event){
      event.stopPropagation();
    }
    jQuery("#mail-banner-card").modal('show');
    LISTING.listingOpenEmailBannerCardPosition=position;
  },
  listingEmailTheCard:function(){
    var email=jQuery("#listingEmailTheCard").val();
    var id="#banner-card-"+LISTING.listingOpenEmailBannerCardPosition;
  }
}
var LISTING_ONLOAD={
  
}
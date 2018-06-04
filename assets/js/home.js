// var subject = '[{"title":"Hi guys, I’m an investor and would love to meet you!!", "content":"Venture Name##What did you like about us##When shall we meet you and discuss##Address##web address"},{"title":"I’m a billboard owner and I would love to share my details with you…", "content":"Where is billboard located##Dimensions of the board##Landmark nearby##Light lit in the top/below"}]';
var subject = '[ { "title":"Hi guys, I’m an investor and would love to meet you!!", "content":"Venture Name##What did you like about us##When shall we meet you and discuss##Address##web address" }, { "title":"I’m a billboard owner and I would love to share my details with you…", "content":"Where is billboard located##Dimensions of the board##Landmark nearby##Light lit in the top/below" }, { "title":"I’m an webpage owner and I would like to share you details to put up ads…", "content":"Webpage address##Size you are allowing to rent##Average visitor count / day" }, { "title":"I’m a TV channel owner and note my details…", "content":"TV channel name##Frequecy hertz##Display Time##Any Format accepted##If Yes##Webpage Address##Office Address" }, { "title":"I’m an owner of numerous poster boards, jot my details down…", "content":"Number of boards##Avg size dimension##Mail us the locations @##Webpage Address##Address" }, { "title":"I’m print owner and I would like to take orders from your page…", "content":"Number of printers available##Avg delivery time since order##Mail us your price list @##Webpage Address##Address" }, { "title":"Im a designer and I design ads…", "content":"Experience years##Avg time to deliver design since order##Software used##Mail us your price list @##Webpage Address##Address" }, { "title":"Hi guys, I would love to hang out with you guys!!", "content":"Experience years##Currently employed?##Expertise in##Webpage Address" }, { "title":"Hi, I’m a business owner and I’m searching for boards…", "content":"Company Name##Any requirements (location)##Campaign Period##Webpage Address##Company Address" }, { "title":"I would love to meet you guys!! Let’s catch up over cup a coffee", "content":"Available timing##I stay @##landmark" }, { "title":"Others", "content":"Please provide your feedback here.." } ]'; 
subject = JSON.parse(subject);

jQuery(document).ready(function() {
	HOME_ONLOAD.setUserId();
	HOME_ONLOAD.loadSubjects();
	jQuery("#scrollDown").click(function() {
    jQuery('html, body').animate({
        scrollTop: jQuery("#section2").offset().top
	    }, 1000);
	});
	if(window.innerWidth<768){
		var size=window.innerHeight+50;
		jQuery("#section3").css("height",size+'px');
		jQuery("#section3").css("padding-top", "40%");
	}
	var header = jQuery(".navbar-fixed-top");
    jQuery(window).scroll(function() {    
	        var scroll = jQuery(window).scrollTop();
		    if (scroll >= 500) {
		        header.addClass("scrolled");
		    } else {
		        header.removeClass("scrolled");
		    }
	});
	EVENT_TRACKER.trackEventAndLoadUrl("HOME.onLoad",null,null,true,false,null);	
});

var HOME={
	cityID:'1',
	cityName:'',
	areaID:'',
	areaName:'',
	homeLoadCitiesAfterResponse:function(data){
		var options=null;
		if(data){
			jQuery('#city_select').empty();
			for(var i=0;i<data['city'].length;i++){
				options+='<option value="'+data['city'][i]['city_id']+'">'+data['city'][i]['city_name']+'</option>';
			}
			jQuery('#city_select').append(options);
		}
	},
	homeDisplaySearchAreaResults:function(flag){
		if(flag){
			jQuery("#search-result").removeClass('hide');
		}else{
			jQuery("#search-result").addClass('hide');
		}
	},
	homeLoadAreaSearchResults:function(typo){
		jQuery('#search-result').empty();
		if(typo.length>1){
			BB_MAIN.getJsonData(BB_HOME_URL+BB_API+BB_GET_AREA+BB_API_BUILDER+'city_id='+HOME.cityID+'&typo='+typo,'HOME.homeLoadAreaSearchResultsAfterResponse');
		}
	},
	homeLoadAreaSearchResultsAfterResponse:function(data){
		if(data){
			var li='';
			jQuery('#search-result').empty();
			if(data["area"]){
				for(var i=0;i<data['area'].length;i++){
					li+='<li value="'+data['area'][i]['area_id']+'" onclick="HOME.homeOnclickSubmitLocation(\''+data['area'][i]["lat"]+'##'+data['area'][i]["lng"]+'\',\''+data['area'][i]["area_id"]+'\')">'+data['area'][i]['area_name']+'</li>';
				}
			}
		    jQuery('#search-result').append(li);
			HOME.homeDisplaySearchAreaResults(true);
		}
	},
	homeOnclickSubmitLocation:function(location,area){
		HOME.homeDisplaySearchAreaResults(true);
		// var loc=location.split("##");
		window.location.href=BB_HOME_URL+"advertisment_boards?area_id="+area+"&type=billboard";
	},
	loadSubjectContent:function(id){
		var content=(subject[id]["content"]).replaceAll('##','\n');
		jQuery('#feedback').val('');
		jQuery('#feedback').val(content);
	},
	submitContactUs:function(){
		jQuery("#patient_registration_form").addClass("hidden");
		jQuery("#loader").removeClass("hidden");
		if(jQuery("#patient_registration_form select[name='subject_name']").val()!="Subject : Click here.."){
			trackingParams={};
			trackingLabel="HOME.ContactForm";
			trackingParams["FirstName"]=jQuery("#patient_registration_form input[name='first_name']").val();
			trackingParams["Email"]=jQuery("#patient_registration_form input[name='email']").val();
			trackingParams["Phone"]=jQuery("#patient_registration_form input[name='phone']").val();
			trackingParams["Subject"]=jQuery("select option[value="+jQuery("#patient_registration_form select[name='subject_name']").val()+"]"). text();
			trackingParams["Feedback"]=jQuery("#patient_registration_form textarea[name='feedback']").val();
			EVENT_TRACKER.trackEventAndLoadUrl(trackingLabel,trackingParams,null,true,false,null);
			jQuery("#loader").addClass("hidden");
			jQuery("#after-submit").removeClass("hidden");
		}else{
			jQuery("#loader").addClass("hidden");
			jQuery("#patient_registration_form").removeClass("hidden");
		}
	},
	submitSurveyForm:function(id,value){
		jQuery('#'+id).hide();
		jQuery('#'+id+'-ans').removeClass('hide');
		trackingParams={};
		trackingParams["Answer"]=value;
		trackingParams["Question"]=jQuery("#question-"+id).text();
		trackingLabel="HOME.SurveyForm";
		EVENT_TRACKER.trackEventAndLoadUrl(trackingLabel,trackingParams,null,true,false,null);

	},
	submitSubscribe:function(){
		if(!BB_USER_EMAIL){
			BB_USER_EMAIL=jQuery("#subscribe-email").val();
			COMMON_UTILITIES.setCookie('uemail',BB_USER_EMAIL,90);
		}
		trackingParams={};
		trackingParams["Email"]=BB_USER_ID;
		trackingLabel="HOME.subscribeEmail";
		EVENT_TRACKER.trackEventAndLoadUrl(trackingLabel,trackingParams,null,true,false,null);
		jQuery("#submit-subscribe-success").modal('show');
	}

}
var HOME_ONLOAD={
	loadCities:function(){
		BB_MAIN.getJsonData(BB_HOME_URL+BB_API+BB_GET_CITIES,'HOME.homeLoadCitiesAfterResponse');
	},
	loadSubjects:function(){
		var option='<option id="title">Subject : Click here..</option>';
		for(var i=0;i<subject.length;i++){
			option+='<option id="title-'+i+'" value="'+i+'">'+subject[i]["title"]+'</option>';
		}
		jQuery("#inputSubject").empty();
		jQuery("#inputSubject").append(option);
	},
	setUserId:function(){
		if(COMMON_UTILITIES.getCookie('ulgd')){
			BB_USER_ID=COMMON_UTILITIES.getCookie('ulgd');
		}else{
			BB_USER_ID=HOME_UTILITIES.guid();
			COMMON_UTILITIES.setCookie('ulgd',BB_USER_ID,90);
		}
		if(COMMON_UTILITIES.getCookie('uemail')){
			BB_USER_EMAIL=COMMON_UTILITIES.getCookie('uemail');
		}
		EVENT_TRACKER.setUserTrackingId(BB_USER_ID);
	}
}
var HOME_UTILITIES={
	guid:function() {
	  return HOME_UTILITIES.s4() + HOME_UTILITIES.s4() + '-' + HOME_UTILITIES.s4() + '-' + HOME_UTILITIES.s4() + '-' +
	    HOME_UTILITIES.s4() + '-' + HOME_UTILITIES.s4() + HOME_UTILITIES.s4() + HOME_UTILITIES.s4();
	},
	s4:function() {
	  return Math.floor((1 + Math.random()) * 0x10000)
	    .toString(16)
	    .substring(1);
	}
}
String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
};
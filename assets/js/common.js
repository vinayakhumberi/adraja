// Material Init
$(function () {
	    $.material.init(); 
 });

COMMON_UTILITIES={
	 setCookie:function(c_name,c_value,c_expiry){ 
	    var d = new Date();
	    d.setTime(d.getTime() + (c_expiry*24*60*60*1000));
	    var expires = "expires=" + d.toGMTString();
	    document.cookie = c_name+"="+c_value+"; "+expires+";domain=;path=/";
	},
	 getCookie:function(c_name){
		//This function retrieves user cookies from the user browser
	    var name = c_name + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0; i<ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1);
	        if (c.indexOf(name) == 0) {
	            return c.substring(name.length, c.length);
	        }
	    }
	    return "";
	},
	 deleteCookie:function(c_name){
		//This function deletes the cookie from the user browser
		document.cookie = c_name+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
	},
	 cleanCookie:function(c_name){
		//This function cleans the cookie to a null entry in the user browser
		setCookie(c_name,'',COOKIE_EXPIREY_90);
	},
	ajaxUrl: function(title, url) {
        if (typeof (history.pushState) != "undefined") {
            var obj = {
                Title: title,
                Url: url
            };
            history.pushState(obj, obj.Title, obj.Url);
        } else {
            alert("Browser does not support HTML5.");
        }
    }	  
}
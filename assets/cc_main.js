/*
 * The API Call are made based on the URI's set here
 * Any Changes made here will effect the API call throughout the application
 */
var CC_API_URL;
var CC_API_BUILDER = "?";
var CC_API_PRAM_APPEND = "&api_mode=1";
//API Appends are to be listed here
var CC_PROJECT_SEARCH_APPEND = "browse/searchautocomplete/";
var CC_SECONDARY_FILTERS_APPEND = "browse/getFiltersForMaterial/";
var CC_CITY_API_APPEND = "browse/getCities?top_city=1";
var CC_CITYDROP_DOWN = "browse/citySearch";
var CC_DEFAULT_KITCHEN_APPEND = "modular-kitchen-designs";
var CC_LOCATION = "/location/";
var CC_BRAND_BASED_LIST_APPEND = "/brand/";
var CC_BRAND_APPEND = "product/brand_list";
var CC_DIRECT_SEARCH = "/search/";
var CC_WARDROBE_LIST_APPEND = "wardrobes";
var CC_SAVE_TO_MY_DESIGN_OLD = "mydesigns/addModelToMyDesign";
var CC_ACCOUNT = "account";
var CC_UPLOAD_FLOOR_PLAN = "/getFloorPlan";
//New API folder inits
// var CC_SAVE_TO_MY_DESIGN_NEW="accounts/addModelToMyDesign";
var CC_API_FOLDER = "apis/";
var CC_LIFE_CYCLE = "life_cycle/";
var CC_UPDATE_CITY = "/updateCity";
var CC_CART = "cart";
var CC_ORDERS = 'orders';
var CC_PROFILE = "profile";
var CC_ESTIMATE_SHARE = "/estimateshare";
var CC_MY_DESIGNS = 'mydesigns';
var CC_SEND_TO_CUSTOM_DESIGN = '/sendToCustomDesign'
var CC_CUSTOMIZED_DESIGNS = "customized_designs";
var CC_UPDATE_CART = '/updateToCart';
var CC_CUSTOM_DESIGNS = "customized_designs";
var CC_SINGLE_PRODUCT = "product";
var CC_GENERAL = "general";
var CC_GET_SINGLE_PRODUCT_DETAILS = "/getProductDetails";
var CC_GET_RENDER_IMG = "/getRenderedImages";
var CC_CUSTOMER_QUERY = "/sendCustomerQuery";
var CC_SHARE_ITEM = "/sendProductEmail";
var CC_FEATURED_KITCHENS = "/otherKitchenSlides";
var CC_MOST_SAVED_DESIGNS = "/getDesigns";
var CC_MOST_VIEWED_DESIGNS = "/getDesigns";
var CC_FAQ = "/supplierFAQ";
var CC_SAVE_TO_MY_DESIGN = "/userSavedDesigns";
var CC_PRODUCT_ACCESSORIES = "/productAccessories";
var CC_SUPPLIER_ACCESSORIES = "/supplierAccessories";
var CC_APPLIANCES = "/appliances";
var CC_SHUTTER_FILTERS = "/filtersForMaterial";
var CC_LOAD_PRODUCT = "/productDetail";
var CC_QUOTE_FOLDER = "quotes";
var CC_SAVE_QUOTE = '/markMydesignQuote';
var CC_EMI_CALCULATOR = "/emiCalculator"
var CC_ABOUT_SUPPLIER = "/aboutSupplier";
var CC_GET_QUOTE_FINISH = "/getFinishes";
var CC_STEP_DETAILS = "/quoteDetails";
var CC_REQUEST_CALLBACK = '/requestCallBack';
var CC_REMOVE_FROM_CART = '/reomveFromCart';
var CC_PUSH_EVENTS_TO_ZOHO = '/pushEventstoZoho'
var CC_USER_PREFERENCE = '/userPreference';
var CC_BOOK_GET_APPOINTMENT = '/getCalendarEvents';
var CC_BOOK_ADD_APPOINTMENT = '/addToCalender';
var CC_CALCULATE_ESTIMATES = '/estimatePrices';
var CC_ESTIMATE_RESULT = 'estimate';
//Timeline API's
// var CC_TIMELINE_URL='http://localhost/RosterVendorMgmt_v6/';
var CC_TIMELINE_API = 'timeline/';
var CC_TIMELINE_CUSTOMER_ESTIMATE_CARD = 'listCustomerEstimateCard';
var CC_TIMELINE_CUSTOMER_SITE_VISIT_CARD = 'listCustomerSiteVisitCard';
var CC_TIMELINE_CUSTOMER_APPOINTMENT_CARD = 'listCustomerAppointmentCard';
var CC_TIMELINE_CUSTOMER_DESIGN_CARD = 'listDesignCard';
var CC_TIMELINE_PARTNER_ASSIGN_CARD = 'listPartnerAssignCard';

var CC_TIMELINE_CUSTOMER_FEEDBACK_API = ''

var CC_TIMELINE_CUSTOMER_QUOTES_CARD = 'listCustomerQuoteCard';

var CC_TIMELINE_NOTIFICATIONSLIST = 'Notifications/listNotifications';
//API default PRAMS passed are to be listed here
var CCGP_STD_DSKTP_WIDTH = 1024;
/*
 * The Cookies used in the projects have to be captured
 * The variables declared here are used in the entire project
 */
var CC_MAIN = {
    getJsonData: function(api_url, afterResponse, afterComplete) {
        jQuery.ajax({
            type: 'GET',
            url: api_url,
            dataType: 'JSON',
            // username: 'CapriCoast',
            // password: 'CapriCoast',
            success: function(json_data) {
                CC_MAIN.callAfterResponseFunction(json_data, afterResponse);
            },
            complete: function() {
                if (afterComplete) {
                    CC_MAIN.callAfterResponseFunction(null, afterComplete);
                }
            },
            error: function(event, xhr, ajaxOptions, thrownError) {
                console.error('Unable to reach ' + afterResponse + '\n An Event has thrown the following error: ' + xhr.status + '--->' + thrownError);
            }
        });
    },
    postJsonData: function(api_url, post_data, afterResponse, afterComplete) {
        jQuery.ajax({
            type: 'POST',
            url: api_url,
            dataType: 'JSON',
            data: post_data,
            // username: 'CapriCoast',
            // password: 'CapriCoast',
            success: function(json_data) {
                CC_MAIN.callAfterResponseFunction(json_data, afterResponse);
            },
            complete: function() {
                if (afterComplete) {
                    CC_MAIN.callAfterResponseFunction(null, afterComplete);
                }
            },
            error: function(event, xhr, ajaxOptions, thrownError) {
                console.error('Unable to reach ' + afterResponse + '\n An Event has thrown the following error: ' + xhr + '--->' + ajaxOptions.message + ' Status:' + event.status + '(' + event.statusText + ')');
            }
        });
    },
    postData: function(api_url, post_data, dataType, afterResponse, afterComplete) {
        jQuery.ajax({
            type: 'POST',
            url: api_url,
            data: post_data,
            dataType: dataType,
            // username: 'CapriCoast',
            // password: 'CapriCoast',
            success: function(json_data) {
                CC_MAIN.callAfterResponseFunction(json_data, afterResponse);
            },
            complete: function() {
                if (afterComplete) {
                    CC_MAIN.callAfterResponseFunction(null, afterComplete);
                }
            },
            error: function(event, xhr, ajaxOptions, thrownError) {
                console.error('Unable to reach ' + afterResponse + '\n An Event has thrown the following error: ' + xhr + '--->' + ajaxOptions.message + ' Status:' + event.status + '(' + event.statusText + ')');
            },
            cache: false,
            contentType: false,
            processData: false
        });
    },
    getData: function(api_url, dataType, afterResponse, afterComplete) {
        jQuery.ajax({
            type: 'GET',
            url: api_url,
            dataType: dataType,
            // username: 'CapriCoast',
            // password: 'CapriCoast',
            success: function(json_data) {
                CC_MAIN.callAfterResponseFunction(json_data, afterResponse);
            },
            complete: function() {
                if (afterComplete) {
                    CC_MAIN.callAfterResponseFunction(null, afterComplete);
                }
            },
            error: function(event, xhr, ajaxOptions, thrownError) {
                console.error('Unable to reach ' + afterResponse + '\n An Event has thrown the following error: ' + xhr + '--->' + ajaxOptions.message + ' Status:' + event.status + '(' + event.statusText + ')');
            },
            cache: false,
            contentType: false,
            processData: false
        });
    },
    callAfterResponseFunction: function(data, functionName) {
        if (functionName) {
            var objectName = functionName.split('.');
            if ((objectName.length) > 1) {
                switch (objectName[0]) {
                    case ('COMMON_UTILITY'):
                        COMMON_UTILITY[objectName[1]](data);
                        break;
                    case ('PLP_PDP_HEADER'):
                        PLP_PDP_HEADER[objectName[1]](data);
                        break;
                    case ('PLP_PAGE'):
                        PLP_PAGE[objectName[1]](data);
                        break;
                    case ('PDP_PAGE'):
                        PDP_PAGE[objectName[1]](data);
                        break;
                    case ('QUOTE_UTILITY'):
                        QUOTE_UTILITY[objectName[1]](data);
                        break;
                    case ('ACCOUNTS'):
                        ACCOUNTS[objectName[1]](data);
                        break;
                    case ('HOME'):
                        HOME[objectName[1]](data);
                        break;
                    case ('PAID_CONSULTATION_PAGE'):
                        PAID_CONSULTATION_PAGE[objectName[1]](data);
                        break;
                    case ('QUOTE_RESULT_PAGE'):
                        QUOTE_RESULT_PAGE[objectName[1]](data);
                        break;
                    case ('SHOWCASE'):
                        SHOWCASE[objectName[1]](data);
                        break;
                    case ('PROJECT_ADDRESS'):
                        PROJECT_ADDRESS[objectName[1]](data);
                        break;
                    case ('ESTIMATE'):
                        ESTIMATE[objectName[1]](data);
                        break;
                    case ('ESTIMATE_UTILITIES'):
                        ESTIMATE_UTILITIES[objectName[1]](data);
                        break;
                    case ('REFERRAL_PAGE'):
                        REFERRAL_PAGE[objectName[1]](data);
                        break;
                    case ('TIMELINE'):
                        TIMELINE[objectName[1]](data);
                        break;
                    case ('ORDERS'):
                        ORDERS[objectName[1]](data);
                        break;
                    case ('SHARED_HEADER'):
                        SHARED_HEADER[objectName[1]](data);
                        break;
                    case ('SHARED_HEADER_UTILITY'):
                        SHARED_HEADER_UTILITY[objectName[1]](data);
                        break;
                    default:
                        commonFunctionRouter(data, functionName);
                        break;
                }
            } else {
                //old implementation
                switch (page_name) {
                    case ('listing'):
                        plpFunctionRouter(data, functionName);
                        break;
                    case ('product'):
                        pdpFunctionRouter(data, functionName);
                        break;
                    case ('home'):
                        homeFunctionRouter(data, functionName);
                        break;
                    case ('quote_estimate'):
                        esitimateFlowRouter(data, functionName);
                        break;
                    case ('estimate'):
                        esitimateRouter(data, functionName);
                        break;
                    case ('paid_consultation'):
                        consultationRouter(data, functionName);
                        break;
                    case ('accounts'):
                        accountsRouter(data, functionName);
                        break;
                    case ('showcase'):
                        showcaseRouter(data, functionName);
                        break;
                    case ('zone_page'):
                        zoneFunctionRouter(data, functionName);
                        break;
                    case ('REFERRAL_PAGE'):
                        REFERRAL_PAGE(data, functionName);
                        break;
                    default:
                        commonFunctionRouter(data, functionName);
                        break;
                }
            }
        }
    },
    windowWidth: function() {
        return jQuery(document).width();
    },
    buildAPIUrl: function() {
        CC_API_URL = '';
        if (PLP_PROJECT_URL != '' && PLP_PROJECT_URL) {
            var snapProject = PLP_PROJECT_URL;
            snapProject = snapProject.split('/');
            snapProject = snapProject[snapProject.length - 1];
            snapProject = snapProject.split('-');
            var proj = '';
            for (var i = 0; i < (snapProject.length) - 3; i++) {
                proj = proj + snapProject[i] + '-';
            }
            CC_API_URL = proj + snapProject[snapProject.length - 3] + '-' + snapProject[snapProject.length - 2] + '-' + snapProject[snapProject.length - 1];
            if (brandSelected) {
                CC_API_URL = CC_API_URL + CC_BRAND_BASED_LIST_APPEND + brandSelected.toLowerCase();
            }
        } else if (PLP_MODEL_TYPE == '2') {
            CC_API_URL = CC_API_URL + CC_WARDROBE_LIST_APPEND + CC_LOCATION + city_name.toLowerCase();
            if (brandSelected) {
                CC_API_URL = CC_API_URL + CC_BRAND_BASED_LIST_APPEND + brandSelected.toLowerCase();
            }
            if (PLP_DIRECT_SEARCH_KEYWORD) {
                CC_API_URL = CC_API_URL + CC_DIRECT_SEARCH + PLP_DIRECT_SEARCH_KEYWORD;
            }
        } else {
            CC_API_URL = CC_DEFAULT_KITCHEN_APPEND + CC_LOCATION + city_name.toLowerCase();
            if (brandSelected) {
                CC_API_URL = CC_API_URL + CC_BRAND_BASED_LIST_APPEND + brandSelected.toLowerCase();
            }
            if (PLP_DIRECT_SEARCH_KEYWORD) {
                CC_API_URL = CC_API_URL + CC_DIRECT_SEARCH + PLP_DIRECT_SEARCH_KEYWORD;
            }
        }
        if (shapeSelected != '' && shapeSelected) {
            CC_API_URL = shapeSelected + '-' + CC_API_URL;
        }
        //For Filter Start
        curr_url = window.location.href;
        if (!PLP_DIRECT_SEARCH_KEYWORD) {
            if (colorSelected || coreSelected || length || breadth) {
                CC_API_URL = CC_API_URL + CC_API_BUILDER;
                if (colorSelected) {
                    CC_API_URL = CC_API_URL + "&color-scheme=" + colorSelected;
                }
                if (coreSelected) {
                    CC_API_URL = CC_API_URL + "&material=" + coreSelected;
                }
                if (length) {
                    CC_API_URL = CC_API_URL + "&length=" + length;
                }
                if (breadth) {
                    CC_API_URL = CC_API_URL + "&breadth=" + breadth;
                }
                header_url = CC_HOME_URL + CC_API_URL;

            } else {
                header_url = CC_HOME_URL + CC_API_URL;
                CC_API_URL = CC_API_URL + CC_API_BUILDER;
            }
        } else {
            header_url = CC_HOME_URL + CC_API_URL;
            CC_API_URL = CC_API_URL + CC_API_BUILDER;
        }
        if (curr_url.indexOf("cache") != -1) {
            CC_API_URL = CC_API_URL + "&nocache=1";
        }


        //Filter End
        CC_API_URL = CC_HOME_URL + CC_API_URL + CC_API_PRAM_APPEND;
        // console.log('Header URL Built:'+header_url);
        // console.log('URL Built:'+CC_API_URL);
        return CC_API_URL;
    },
    ajaxUrl: function(title, url) {
        if (typeof(history.pushState) != "undefined") {
            var obj = {
                Title: title,
                Url: url
            };
            history.pushState(obj, obj.Title, obj.Url);
            document.title = title;
        } else {
            alert("Browser does not support HTML5.");
        }
    },
    scrollToLocation: function(id) {
        if (jQuery("#" + id).length) {
            jQuery('html,body').animate({
                    scrollTop: jQuery("#" + id).offset().top - 100
                },
                'slow');
        } else {
            console.log('calledMethod:CC_MAIN.scrollToLocation unable to process for id:' + id + ' errorMessage: Element Not Found');
        }
    },
    stopTrigger: function(event, th) {
        event.stopPropagation();
        jQuery(th).parent().removeClass('in');
        var id = (jQuery(th).parentsUntil('.rat-space').parent().attr('id')) ? jQuery(th).parentsUntil('.rat-space').parent().attr('id') : jQuery(th).parentsUntil('.rat-space').parent().attr('class');
        id = id.replace('rat-space ', '');
        var index = jQuery.inArray("#" + id, TL_FTU_LIST);
        index = (index >= 0) ? index : jQuery.inArray("." + id, TL_FTU_LIST);
        if (index >= 0) {
            var tlFtu = (getCookie('TL_FTU')) ? (getCookie('TL_FTU') + ',' + index) : index;
            setCookie('TL_FTU', tlFtu);
        }
    },

    deBounceCallTimer: null,
    deBounceCall: function(fn, delay) {
        if (!CC_MAIN.deBounceCallTimer) {
            clearTimeout(CC_MAIN.deBounceCallTimer);
            CC_MAIN.deBounceCallTimer = setTimeout(function() {
                CC_MAIN.callAfterResponseFunction(true, fn);
                CC_MAIN.deBounceCallTimer = null;
                clearTimeout(CC_MAIN.deBounceCallTimer);
            }, delay);
        }
    },
    openDB: '',
    initIDB(databaseName,version,objStore) {
        // In the following line, you should include the prefixes of implementations you want to test.
        window.indexedDB = window.indexedDB || window.mozIndexedDB || window.webkitIndexedDB || window.msIndexedDB;
        window.IDBTransaction = window.IDBTransaction || window.webkitIDBTransaction || window.msIDBTransaction;
        window.IDBKeyRange = window.IDBKeyRange || window.webkitIDBKeyRange || window.msIDBKeyRange;
        if (!window.indexedDB) {
            window.alert("Your browser doesn't support a stable version of IndexedDB.")
        }

        // Let us open our database
        var DBOpenRequest = window.indexedDB.open(databaseName, version);

        // Gecko-only IndexedDB temp storage option:
        // var request = window.indexedDB.open("toDoList", {version: 4, storage: "temporary"});

        // these two event handlers act on the database being opened successfully, or not
        DBOpenRequest.onerror = function(event) {

            console.log('Error loading database.');
        };

        DBOpenRequest.onsuccess = function(event) {
            console.log('Database initialised.');

            // store the result of opening the database in the db variable. This is used a lot below
            CC_MAIN.openDB = DBOpenRequest.result;

            // Run the displayData() function to populate the task list with all the to-do list data already in the IDB
            // displayData();
        };

        // This event handles the event whereby a new version of the database needs to be created
        // Either one has not been created before, or a new version number has been submitted via the
        // window.indexedDB.open line above
        //it is only implemented in recent browsers
        DBOpenRequest.onupgradeneeded = function(event) {
            var db = event.target.result;

            db.onerror = function(event) {

                console.log('Error loading database.');
            };

            // Create an objectStore for this database
            for(var i in objStore){
                var objectStore = db.createObjectStore(objStore[i]['store_name'], {
                    keyPath: objStore[i]['key_path']
                });
                // define what data items the objectStore will contain
                for(var j in objStore[i]['items']){
                    objectStore.createIndex(objStore[i]['items'][j]["title"], objStore[i]['items'][j]["field"], {
                        unique: objStore[i]['items'][j]["is_unique"]
                    });
                }                
            }
            console.log('Object store created.');
        };
    },
    // CC_MAIN.addDataIDB('notifications','6','toDoList',{ some_path: 2, days: 13, hours: 13, minutes: 13 });
    addDataIDB:function(databaseName,version,storeName,newItem) {
     CC_MAIN.initIDB(databaseName,version);
      // open a read/write db transaction, ready for adding the data       var
     var transaction = CC_MAIN.openDB.transaction([storeName], "readwrite");
    
      // report on the success of opening the transaction
      transaction.oncomplete = function() {
        console.log('Transaction completed: database modification finished.');
      };

      transaction.onerror = function() {
        console.log( 'Transaction not opened due to error: ' + transaction.error)
      };

      // call an object store that's already been added to the database
      var objectStore = transaction.objectStore(storeName);
      // add our newItem object to the object store
      var objectStoreRequest = objectStore.add(newItem);        
        objectStoreRequest.onsuccess = function(event) {          
          // report the success of our new item going into the database
          console.log('New item added to database.');
          
        };      
    },
    // CC_MAIN.readDataIDB('notifications','6','toDoList', 0);
    readIDB:function(databaseName,version,storeName,element) {
       CC_MAIN.initIDB(databaseName,version);
       var objectStore = CC_MAIN.openDB.transaction([storeName]).transaction.objectStore(storeName);
       var request = objectStore.get(parseInt(element));
       // var request = objectStore.getAllKeys();
       request.onerror = function(event) {
          alert("Unable to retrieve daa from database!");
       };
       
       request.onsuccess = function(event) {
          if(request.result) {
             console.log("Days : " + request.result.days);
             return request.result;
          }          
          else {
             console.log("Element not found in your database!");  
          }
       };
    },
    readAllIDBResults:'',
    readAllIDB:function(databaseName,version,storeName){
        CC_MAIN.initIDB(databaseName,version);
        var objectStore = CC_MAIN.openDB.transaction([storeName]).objectStore(storeName);
        var result=[];
        objectStore.openCursor().onsuccess = function(event) {
          var cursor = event.target.result;
          if (cursor) {
             // console.log(result);
             result.push(cursor);
             cursor.continue();
          }          
          else {
             CC_MAIN.readAllIDBResults=result;
             alert(result);
          }
        };
    }

}



jQuery.fn.ratTip = function(fn, event) {
    if (!fn) {
        var cls = '';
        if (this.attr('data-position') == 'bottom')
            cls += ' bottom';
        else
            cls += ' top';
        if (this.attr('data-size') == 'lg')
            cls += ' rat-lg';
        else if (this.attr('data-size') == 'xlg')
            cls += ' rat-xlg';
        else if (this.attr('data-size') == 'md')
            cls += ' rat-md';
        else if (this.attr('data-size') == 'sm')
            cls += ' rat-sm';
        else
            cls += ' rat-xs';
        if (this.attr('data-visible') == 'visible')
            cls += ' visible';

        var unique_id = Math.random();
        unique_id = parseInt(unique_id * 100000);
        this.append('<span id="tooltip-' + unique_id + '" class="rat' + cls + ' collapse fade in" ><p>' + this.attr('data-text') + '</p> <i class="mdi mdi-close" data-toggle="collapse" onclick="CC_MAIN.stopTrigger(event,this)" ></i></span>');
    } else if (fn == 'close') {
        jQuery(this).find('span.rat').removeClass('visible');
    }
}

jQuery(document).on('ready', function() {
    jQuery(window).on("popstate", function(e) {
        if (e && e.originalEvent && e.originalEvent.state && e.originalEvent.state.Url)
            window.location.href = e.originalEvent.state.Url
    });
});

// global window width and height declaration
var WINDOW_WIDTH = jQuery(window).outerWidth();
var WINDOW_HEIGHT = jQuery(window).outerHeight();
jQuery(window).resize(function() {
    WINDOW_WIDTH = jQuery(window).outerWidth();
    WINDOW_HEIGHT = jQuery(window).outerHeight();
});

// for Rag lazy loading ---------------
//  USAGE: <img class="rag-lazy" src="custome image to show on first load" rag-src="original image">
var RAG_WINDOW_HEIGHT = jQuery(window).outerHeight();
jQuery(window).resize(function() {
    RAG_WINDOW_HEIGHT = jQuery(window).outerHeight();
});
var RAG_25PER_SCREEN = RAG_WINDOW_HEIGHT * .25;
var RAG_SCROLL_TOP = jQuery(window).scrollTop() + RAG_WINDOW_HEIGHT - RAG_25PER_SCREEN;

function ragLazyLoad() {
    RAG_SCROLL_TOP = jQuery(window).scrollTop() + RAG_WINDOW_HEIGHT - RAG_25PER_SCREEN;
    jQuery('img.rag-lazy').each(function() {
        var ele = jQuery(this);
        if (jQuery(this).offset().top <= RAG_SCROLL_TOP) {
            ele.attr('src', ele.attr('rag-src'));
            ele.removeAttr('rag-src');
            ele.removeClass('rag-lazy');
            ele.load(function() {
                jQuery(this).fadeIn(200);
                jQuery(this).css('opacity', '1');
                jQuery(this).addClass('loaded');
                jQuery(this).parent().css('background-color', 'transparent');
            });
            ele.error(function() {
                jQuery(this).css('opacity', '1');
            });
        }
    });
    jQuery('.rag-lazy-bg').each(function() {
        var ele = jQuery(this);
        if (jQuery(this).offset().top <= RAG_SCROLL_TOP) {
            jQuery(this).addClass('rag-lazy-img');
            ele.load(function() {
                jQuery(this).addClass('loaded');
            }); //not able to handle 'load' function for image loaded or not.
        }
    });
}
ragLazyLoad(); //initialize. Note: if any extra api call happens need to initialize this function after Response.
jQuery(window).scroll(function() {
    RAG_SCROLL_TOP = jQuery(window).scrollTop() + RAG_WINDOW_HEIGHT - RAG_25PER_SCREEN;
    ragLazyLoad();
});
// end for Rag lazy loading ---------------

// Rag carousel lazy load ---------------
// css are in estimate-desktop-header.css file
// USAGE: mention this class beside bootstrap 'carousel' calss 'rag-carousel-lazy'
// First active item iamge -<img src="original image">
// Rest all images <img src="custome image to show on first load or empty" rag-src="original image">
ragCarouselLazy(); //initialize. Note: if your creating carousel using API's need to initialize after response.
function ragCarouselLazy() {
    jQuery('.rag-carousel-lazy>.carousel-inner>.item.active').each(function() {
        jQuery(this).siblings('.item').css('min-height', jQuery(this).outerHeight() + 'px', 'position', 'relative')
    });
    if (jQuery('.rag-carousel-lazy').hasClass('bulk-images')) {

    } else {
        jQuery('.rag-carousel-lazy>.carousel-inner>.item.active').nextAll().append('<div class="rag-carousel-lazy-loader"><div class="rag-carousel-lazy-loader-content"><div class="rag-carousel-lazy-loader-dot rag-carousel-lazy-loader-dot-1"></div><div class="rag-carousel-lazy-loader-dot rag-carousel-lazy-loader-dot-2"></div><div class="rag-carousel-lazy-loader-dot rag-carousel-lazy-loader-dot-3"></div><div class="clearfix"></div></div></div>');
    }

    jQuery('.rag-carousel-lazy').on('slid.bs.carousel', function() {
        if (jQuery(this).hasClass('bulk-images')) {
            var ele = jQuery(this).find('.item.active img');
            var total_image_count = ele.length;
            var image_count = 0;
            ele.each(function() {
                jQuery(this).attr('src', jQuery(this).attr('data-src'));
                jQuery(this).load(removeLoader());
                jQuery(this).error(function() {
                    jQuery(this).css('opacity', '1');
                });
            });

            function removeLoader() {
                image_count++;
            }
            if (image_count == total_image_count) {
                // jQuery(this).find('.item.active .rag-carousel-lazy-loader').remove();
                ele.fadeIn(200);
                ele.addClass('loaded');
                ele.css('opacity', '1');
            }
        } else {
            var ele = jQuery(this).children().children('.item.active').children('img');
            var image_url = ele.attr('data-src');
            if (image_url) {
                ele.fadeIn(200);
                ele.attr('src', image_url);
                ele.removeAttr('data-src');
                ele.load(function() {
                    jQuery(this).fadeIn(200);
                    jQuery(this).css('opacity', '1');
                    jQuery(this).addClass('loaded');
                    jQuery(this).siblings('.rag-carousel-lazy-loader').remove();
                });
                ele.error(function() {
                    jQuery(this).css('opacity', '1');
                });
            }
        }
    });
}
// end pdp carousel lazy load ---------------


/**
 * Author: vHumberi
 * Date: 09/02/2015
 */
var COOKIE_EXPIREY_90 = 90; //In number of days
var COOKIE_DEFAULT_CITY = city_name;
var COOKIE_DEFAULT_CITY_ID = city_id;

function startCookieBank() {
    //If Default City Not Selected

    setCookie("capck_citySelectedName", COOKIE_DEFAULT_CITY, COOKIE_EXPIREY_90);
    setCookie("capck_citySelectedId", COOKIE_DEFAULT_CITY_ID, COOKIE_EXPIREY_90);

}
//This function sets user cookies in the user browser
function setCookie(c_name, c_value, c_expiry) {
    var d = new Date();
    d.setTime(d.getTime() + (c_expiry * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = c_name + "=" + c_value + "; " + expires + ";domain=;path=/";
}
//This function retrieves user cookies from the user browser
function getCookie(c_name) {
    var name = c_name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
//This function deletes the cookie from the user browser
function deleteCookie(c_name) {
    document.cookie = c_name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
}
//This function cleans the cookie to a null entry in the user browser
function cleanCookie(c_name) {
    setCookie(c_name, '', COOKIE_EXPIREY_90);
}
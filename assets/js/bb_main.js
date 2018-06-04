/*
 * The API Call are made based on the URI's set here
 * Any Changes made here will effect the API call throughout the application
 */
var BB_API = 'api/';
var BB_API_BUILDER = "?";
var BB_API_PRAM_APPEND = "&api_mode=1";
//API Appends are to be listed here
var BB_GET_AREA = 'getArea';
var BB_GET_CITIES = 'getCities';
//API default PRAMS passed are to be listed here
var BBGP_STD_DSKTP_WIDTH = 1024;
/*
 * The Cookies used in the projects have to be captured
 * The variables declared here are used in the entire project
 */
var BB_MAIN = {
    getJsonData: function(api_url, afterResponse, afterComplete) {
        jQuery.ajax({
            type: 'GET',
            url: api_url,
            dataType: 'JSON',
            // username: 'CapriCoast',
            // password: 'CapriCoast',
            success: function(json_data) {
                BB_MAIN.callAfterResponseFunction(json_data, afterResponse);
            },
            complete: function() {
                if (afterComplete) {
                    BB_MAIN.callAfterResponseFunction(null, afterComplete);
                }
            },
            error: function(event, xhr, ajaxOptions, thrownError) {
                console.error('Unable to reach ' + afterResponse + '\n An Event has thrown the following error: ' + xhr.status + '--->' + ajaxOptions.message);
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
                BB_MAIN.callAfterResponseFunction(json_data, afterResponse);
            },
            complete: function() {
                if (afterComplete) {
                    BB_MAIN.callAfterResponseFunction(null, afterComplete);
                }
            },
            error: function(event, xhr, ajaxOptions, thrownError) {
                console.error('Unable to reach ' + afterResponse + '\n An Event has thrown the following error: ' + xhr.status + '--->' + ajaxOptions.message);
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
                BB_MAIN.callAfterResponseFunction(json_data, afterResponse);
            },
            complete: function() {
                if (afterComplete) {
                    BB_MAIN.callAfterResponseFunction(null, afterComplete);
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
                BB_MAIN.callAfterResponseFunction(json_data, afterResponse);
            },
            complete: function() {
                if (afterComplete) {
                    BB_MAIN.callAfterResponseFunction(null, afterComplete);
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
        var fn = functionName.split('.');
        switch (fn[0]) {
            case ('HOME'):
                HOME[fn[1]](data);
                break;
            case ('LISTING'):
                LISTING[fn[1]](data);
                break;
            case ('PRODUCT'):
                PRODUCT[fn[1]](data);
                break;
            default:
                COMMON[fn[1]](data);
                break;
        }
    },
    refreshlessNavigation: function(title, url) {
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
            console.log('calledMethod:BB_MAIN.scrollToLocation unable to process for id:' + id + ' errorMessage: Element Not Found');
        }
    },
    deBounceCallTimer: null,
    deBounceCall: function(fn, delay) {
        if (!BB_MAIN.deBounceCallTimer) {
            clearTimeout(BB_MAIN.deBounceCallTimer);
            BB_MAIN.deBounceCallTimer = setTimeout(function() {
                BB_MAIN.callAfterResponseFunction(true, fn);
                BB_MAIN.deBounceCallTimer = null;
                clearTimeout(BB_MAIN.deBounceCallTimer);
            }, delay);
        }
    },
	//This function sets user cookies in the user browser
	setCookie:function(c_name, c_value, c_expiry) {
	    var d = new Date();
	    d.setTime(d.getTime() + (c_expiry * 24 * 60 * 60 * 1000));
	    var expires = "expires=" + d.toGMTString();
	    document.cookie = c_name + "=" + c_value + "; " + expires + ";domain=;path=/";
	},
	//This function retrieves user cookies from the user browser
	getCookie:function(c_name) {
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
	},
	//This function deletes the cookie from the user browser
	deleteCookie:function(c_name) {
	    document.cookie = c_name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
	    return true;
	},
	//This function cleans the cookie to a null entry in the user browser
	cleanCookie:function(c_name) {
	    setCookie(c_name, '', COOKIE_EXPIREY_90);
	    return true;
	},
    openDB: '',
    // BB_MAIN.initIDB('notifications','6',[{ 'store_name': 'toDoList', 'key_path':'notification_id', 'items':[{ 'title':'hours','field': 'id', 'is_unique': false },{ 'title':'minutes','field': 'id', 'is_unique': false }] }]);
    initIDB: function(databaseName, version, objStore) {
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
            BB_MAIN.openDB = DBOpenRequest.result;

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
            for (var i in objStore) {
                var objectStore = db.createObjectStore(objStore[i]['store_name'], {
                    keyPath: objStore[i]['key_path']
                });
                // define what data items the objectStore will contain
                for (var j in objStore[i]['items']) {
                    objectStore.createIndex(objStore[i]['items'][j]["title"], objStore[i]['items'][j]["field"], {
                        unique: objStore[i]['items'][j]["is_unique"]
                    });
                }
            }
            console.log('Object store created.');
        };
    },
    // BB_MAIN.insertDataIntiIDB('notifications','6','toDoList',{ notification_id: 1, hours: 11, minutes: 1 })
    insertDataIntiIDB: function(databaseName, version, storeName, newItem) {
        BB_MAIN.initIDB(databaseName, version);
        // open a read/write db transaction, ready for adding the data       var
        var transaction = BB_MAIN.openDB.transaction([storeName], "readwrite");

        // report on the success of opening the transaction
        transaction.oncomplete = function() {
            console.log('Transaction completed: database modification finished.');
        };

        transaction.onerror = function() {
            console.log('Transaction not opened due to error: ' + transaction.error)
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
    // BB_MAIN.selectDataFromIDB('notifications','6','toDoList', 1);
    selectDataFromIDB: function(databaseName, version, storeName, element) {
        BB_MAIN.initIDB(databaseName, version);
        var objStore = BB_MAIN.openDB.transaction([storeName])
        objStore = objStore.objectStore(storeName);
        var request = objStore.get(parseInt(element));
        // var request = objectStore.getAllKeys();
        request.onerror = function(event) {
            alert("Unable to retrieve daa from database!");
        };

        request.onsuccess = function(event) {
            if (request.result) {
                console.log("Days : " + request.result.hours);
                return request.result;
            } else {
                console.log("Element not found in your database!");
            }
        };
    },
    readAllIDBResults: '',
    readAllIDB: function(databaseName, version, storeName) {
        BB_MAIN.initIDB(databaseName, version);
        var objectStore = BB_MAIN.openDB.transaction([storeName]).objectStore(storeName);
        var result = [];
        objectStore.openCursor().onsuccess = function(event) {
            var cursor = event.target.result;
            if (cursor) {
                result.push(cursor);
                cursor.continue();
            } else {
                BB_MAIN.readAllIDBResults = result;
                // alert(result);
            }
        };
    }
}
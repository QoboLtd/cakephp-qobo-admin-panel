$(function () {
//Set your options here.
//@link http://eonasdan.github.io/bootstrap-datetimepicker/Options/
//Set the datetime, date, time.
    var types = {
        time: {
            class: '.timepicker',
            format: 'HH:mm'
        },
        date: {
            class: '.datepicker',
            format: 'YYYY-MM-DD'
        },
        datetime: {
            class: '.datetimepicker',
            format: 'YYYY-MM-DD HH:mm:ss'
        }
    };

    // initialize method
    var init = function(element, type) {
        $(element).datetimepicker({
            format: types[type].format
        });
    };

    // initialize dom datepickers
    $.each(types, function(type, properties) {
        init($(properties.class), type);
    });

    MutationObserver = window.MutationObserver || window.WebKitMutationObserver;
    // observe for client side appended datepickers
    var observer = new MutationObserver(function(mutations, observer) {
        // look through all mutations that just occured
        for (var i = 0; i < mutations.length; ++i) {
            // look through all added nodes of this mutation
            for (var j = 0; j < mutations[i].addedNodes.length; ++j) {
                // look for datetpicker elements
                var datepicker = getDatepicker(mutations[i].addedNodes[j]);
                if ($.isEmptyObject(datepicker)) {
                    continue;
                }

                init(datepicker.element, datepicker.type);
            }
        }
    });

    // define what element should be observed by the observer
    // and what types of mutations trigger the callback
    observer.observe(document, {
        childList: true,
        subtree: true
    });

    // find out if added node is a datepicker element and return
    // the node and its type if it is, return empty otherwise
    var getDatepicker = function(node) {
        result = {};
        $.each(types, function(type, properties) {
            $(node).find(properties.class).each(function(k, v) {
                // target datepicker elements which include an input,
                // otherwise this will trigger when a datepicker widget is drawn
                $(v).find(':input').each(function() {
                    result = {
                        element: v,
                        type: type
                    };
                });
            });
        });

        return result;
    };
});

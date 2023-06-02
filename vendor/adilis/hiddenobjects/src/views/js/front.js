/**
 * 2016 Adilis
 *
 * Make your shop interactive for Easter: hide objects and ask your customers to find them in order to win a
 * discount coupon. Make your brand stand out by offering an original game: a treasure hunt throughout your products.
 *
 *  @author    Adilis <support@adilis.fr>
 *  @copyright 2016 SAS Adilis
 *  @license   http://www.adilis.fr
 */

jQuery.fn.random = function() {
    var randomIndex = Math.floor(Math.random() * this.length);
    return jQuery(this[randomIndex]);
};

var available_elements;
var selected_element;
var available_positions = new Array( 'lt', 'tl', 'tr', 'rt', 'rb', 'br', 'bl', 'lb' );
var selected_element_wrapper;
var icon;
var position;

$(window).load( function() {
    console.log('passe');

    available_elements = $(eaHiddenObjectSelector);

    console.log(available_elements);
    selected_element = available_elements.random();

    if (selected_element.css('position') == 'static') {
        selected_element.css('position', 'relative');
    }

   icon = $('<img class="hidden-object-icon" src="'+eaHiddenObjectUrl+'" width="'+eaHiddenObjectSize+'" height="'+eaHiddenObjectSize+'" />');
   position = available_positions[Math.floor(Math.random()*available_positions.length)];

   selected_element_wrapper = $('<div class="use-shadow"></div>');
   selected_element.wrap(selected_element_wrapper);


    icon.insertAfter(selected_element);
    icon.addClass('front');

    var top = left = right = bottom = 'auto';
    switch(position) {
        case 'lt' :
        case 'tl' :
            top = 0;
            left = 0;
            break;
         case 'tr' :
        case 'rt' :
            right = 0;
            top = 0;
            break;
        case 'rb' :
        case 'br' :
            right = 0;
            bottom = 0;
            break;
         case 'bl' :
         case 'lb' :
            left = 0;
            bottom = 0;
            break;
    }

    icon.css({
        'top' : top,
        'left' : left,
        'right' : right,
        'bottom' : bottom,
        'display' : 'block'
    });


    if (eaHiddenObjectUseEffect) {
        icon.addClass('hidden-icon-animated hidden-icon-infinite hidden-icon-tada');
    }

    icon.on('click', function(event) {
        event.stopPropagation();
        $.fancybox({
            href : eaHiddenObjectLink,
			type: 'ajax',
			minHeight : 0,
			tpl : {
                wrap : '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner fancybox-hiddenobjects"></div></div></div></div>',
            	error : '<div class="alert alert-danger">'+eaFancyboxError+'</div>',
            },
            afterClose: function() {
                icon.parent().addClass('disabled');
                icon.remove();
            }
        });
        return false;
    });
});
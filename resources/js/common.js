/**
 *   I don't recommend using this plugin on large tables, I just wrote it to make the demo useable. It will work fine for smaller tables 
 *   but will likely encounter performance issues on larger tables.
 *
 *		<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
 *		$(input-element).filterTable()
 *		
 *	The important attributes are 'data-action="filter"' and 'data-filters="#table-selector"'
 */
(function () {
    'use strict';
    var $ = jQuery;
    $.fn.extend({
        filterTable: function () {
            return this.each(function () {
                $(this).on('keyup', function (e) {
                    $('.filterTable_no_results').remove();
                    var $this = $(this), search = $this.val().toLowerCase(), target = $this.attr('data-filters'), $target = $(target), $rows = $target.find('tbody tr');
                    if (search == '') {
                        $rows.show();
                    } else {
                        $rows.each(function () {
                            var $this = $(this);
                            $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
                        })
                        if ($target.find('tbody tr:visible').size() === 0) {
                            var col_count = $target.find('tr').first().find('td').size();
                            var no_results = $('<tr class="filterTable_no_results"><td colspan="' + col_count + '">No results found</td></tr>')
                            $target.find('tbody').append(no_results);
                        }
                    }
                });
            });
        }
    });
    $('[data-action="filter"]').filterTable();
})(jQuery);

$(function () {
    // attach table filter plugin to inputs
    $('[data-action="filter"]').filterTable();

    $('.container').on('click', '.panel-heading span.filter', function (e) {
        var $this = $(this),
                $panel = $this.parents('.panel');

        $panel.find('.panel-body').slideToggle();
        if ($this.css('display') != 'none') {
            $panel.find('.panel-body input').focus();
        }
    });
    $('[data-toggle="tooltip"]').tooltip();

    $('.editor').ckeditor();
    $('#myAffix').affix({
        offset: {
            top: -50,
            bottom: 0
//            bottom: function () {
//                return (this.bottom = $('nav').outerHeight(true));
//            }
        }
    });

    $(window).resize(function () {
        ellipses1 = $("#bc1 :nth-child(2)");
        if ($("#bc1 a:hidden").length > 0) {
            ellipses1.show();
        } else {
            ellipses1.hide();
        }

        ellipses2 = $("#bc2 :nth-child(2)");
        if ($("#bc2 a:hidden").length > 0) {
            ellipses2.show();
        } else {
            ellipses2.hide();
        }
    });

    $(window).scroll(function() {
        $('#sideBarFix').css('width', $('#sideBarFix').parent().closest('div').width());        
    });
    $('#sideBarFix').scrollToFixed({
        dontSetWidth: true,
        removeOffsets: true,
        marginTop: 60,
        limit: function () {
            return $('#fixBottom').offset().top - $(this).outerHeight(true) - 10;
        },
        preFixed: function () {
            $(this).find('.title').css('color', 'blue');
        },
        preAbsolute: function () {
            $(this).find('.title').css('color', 'red');
        },
        postFixed: function () {
            $(this).find('.title').css('color', '');
        },
        postAbsolute: function () {
            $(this).find('.title').css('color', '');
        },
        offsets: false
    });
    $('.bxslider').show();
    $('.bxslider').bxSlider({
        pager: false,
        randomStart: true,
        auto: true
    });
    $('.dropdown-menu.columns-3').css('width', ($(window).width() - 14) + 'px'); 
    $('.dropdown-menu.columns-3').css('height', ($(window).height() - 100) + 'px'); 
    $('.dropdown-menu.columns-3').css('right', '14px'); 
    $('.dropdown-menu.columns-3').css('overflow-x', 'hidden'); 
    $('html, pre').niceScroll({
        cursorcolor: "#27527C", // change cursor color in hex
        cursoropacitymin: 0, // change opacity when cursor is inactive (scrollabar "hidden" state), range from 1 to 0
        cursoropacitymax: 1, // change opacity when cursor is active (scrollabar "visible" state), range from 1 to 0
        cursorwidth: "10px", // cursor width in pixel (you can also write "5px")
        cursorborder: "1px solid white", // css definition for cursor border
        cursorborderradius: "5px", // border radius in pixel for cursor
        zindex: "auto", // | <number>, // change z-index for scrollbar div
        scrollspeed: 60, // scrolling speed
        mousescrollstep: 40, // scrolling speed with mouse wheel (pixel)
        touchbehavior: false, // enable cursor-drag scrolling like touch devices in desktop computer
        hwacceleration: true, // use hardware accelerated scroll when supported
        boxzoom: false, // enable zoom for box content
        dblclickzoom: true, // (only when boxzoom=true) zoom activated when double click on box
        gesturezoom: true, // (only when boxzoom=true and with touch devices) zoom activated when pinch out/in on box
        grabcursorenabled: true, // (only when touchbehavior=true) display "grab" icon
        autohidemode: false, /* how hide the scrollbar works, possible values: 
          true | // hide when no scrolling
          "cursor" | // only cursor hidden
          false | // do not hide,
          "leave" | // hide only if pointer leaves content
          "hidden" | // hide always
          "scroll", // show only on scroll          */
        background: "", // change css for rail background
        iframeautoresize: true, // autoresize iframe on load event
        cursorminheight: 32, // set the minimum cursor height (pixel)
        preservenativescrolling: true, // you can scroll native scrollable areas with mouse, bubbling mouse wheel event
        railoffset: false, // you can add offset top/left for rail position
        bouncescroll: false, // (only hw accell) enable scroll bouncing at the end of content as mobile-like 
        spacebarenabled: true, // enable page down scrolling when space bar has pressed
        railpadding: { top: 0, right: 0, left: 0, bottom: 0 }, // set padding for rail bar
        disableoutline: true, // for chrome browser, disable outline (orange highlight) when selecting a div with nicescroll
        horizrailenabled: true, // nicescroll can manage horizontal scroll
        railalign: 'right', // alignment of vertical rail
        railvalign: 'bottom', // alignment of horizontal rail
        enabletranslate3d: true, // nicescroll can use css translate to scroll content
        enablemousewheel: true, // nicescroll can manage mouse wheel events
        enablekeyboard: true, // nicescroll can manage keyboard events
        smoothscroll: true, // scroll with ease movement
        sensitiverail: true, // click on rail make a scroll
        enablemouselockapi: true, // can use mouse caption lock API (same issue on object dragging)
        cursorfixedheight: false, // set fixed height for cursor in pixel
        hidecursordelay: 400, // set the delay in microseconds to fading out scrollbars
        directionlockdeadzone: 6, // dead zone in pixels for direction lock activation
        nativeparentscrolling: true, // detect bottom of content and let parent to scroll, as native scroll does
        enablescrollonselection: true, // enable auto-scrolling of content when selection text
        cursordragspeed: 0.3, // speed of selection when dragged with cursor
        rtlmode: "auto", // horizontal div scrolling starts at left side
        cursordragontouch: false, // drag cursor in touch / touchbehavior mode also
        oneaxismousemode: "auto", // it permits horizontal scrolling with mousewheel on horizontal only content, if false (vertical-only) mousewheel don't scroll horizontally, if value is auto detects two-axis mouse
        scriptpath: "", // define custom path for boxmode icons ("" => same script path)
        preventmultitouchscrolling: true // prevent scrolling on multitouch events
    });
    $('img').addClass('img-responsive');
    $('#dev-table').DataTable();
});
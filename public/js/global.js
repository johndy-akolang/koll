$(document).ready(function() {

    /* home page nivo slider */
    $(window).load(function() {
        $('#slider').nivoSlider();
    });


    /* view items thumb */
    // temporarily disable etalage
    // $('#etalage').etalage({
    //     thumb_image_width: 360,
    //     thumb_image_height: 360,
    //     source_image_width: 900,
    //     source_image_height: 900,
    //     show_hint: true,
    //     click_callback: function(image_anchor, instance_id) {
    //         alert('Callback example:\nYou on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'") ');
    //     }
    //
    // });


    /* select category */
    function DropDown(el) {
        this.dd = el;
        this.initEvents();
    }
    DropDown.prototype = {
        initEvents : function() {
            var obj = this;

            obj.dd.on('click', function(event) {
                $(this).toggleClass('active');
                event.stopPropagation();
            });
        }
    }

    /* header select category */
    $(function() {
        var dd = new DropDown( $('#dd') );

        $(document).click(function() {
            $('.wrapper-dropdown-5').removeClass('active');
        });
    });

    /* sell item select category */
    $(function() {
        var dd = new DropDown( $('#ss') );

        $(document).click(function() {
            $('.wrapper-dropdown').removeClass('active');
        });
    });

    /* message select action */
    $(function() {
        var dd = new DropDown( $('#aa') );

        $(document).click(function() {
            $('.wrapper-dropdown-action').removeClass('active');
        });
    });

    //alert('a');


    /* edit profile */
    $(".editlink").on("click", function(e) {
        e.preventDefault();
        var dataset = $(this).prev(".datainfo");
        var savebtn = $(this).next(".savebtn");
        var theid   = dataset.attr("id");
        var newid   = theid+"-form";
        var currval = dataset.text();

        dataset.empty();

        $('<input type="text" name="'+newid+'" id="'+newid+'"> value="'+currval+'"  class="hlite">').appendTo(dataset);

        $(this).css("display", "none");
        savebtn.css("display", "block");
    });
    $(".savebtn").on("click", function(e) {
        e.preventDefault();
        var elink   = $(this).prev(".editlink");
        var dataset = elink.prev(".datainfo");
        var newid   = dataset.attr("id");

        var cinput  = "#"+newid+"-form";
        var einput  = $(cinput);
        var newval  = einput.attr("value");

        $(this).css("display", "none");
        einput.remove();
        dataset.html(newval);

        elink.css("display", "block");

    });

    /* view message inbox */
    $('#view-message').click(function() {
        $(window.location).attr('href', '/message/viewmessage');
    });

    /* click sellads button */
    // $('#sellads').click(function() {
    //     $(window.location).attr('href', '/account/items/create');
    // });

    /* click reply */
    $("#email-opened-reply").on('click', function() {
        $("#reply-area").slideDown("slow");
    });

    /* user dropdownmenu top header */
    $(function() {
        $('.cssmenu > ul').toggleClass('no-js js');
        $('.cssmenu .js ul').hide();
        $('.cssmenu .js').click(function(e) {
            $('.cssmenu .js ul').slideToggle(200);
            $('.clicker').toggleClass('active');
            e.stopPropagation();
        });
        $(document).click(function() {
            if($('.cssmenu .js ul').is(':visible')) {
                $('.cssmenu .js ul', this).slideUp();
                $('.clicker').removeClass('active');
            }
        });
    });

    /* limit charaters dislay item */
    $(".title-cut").each(function() {
        if ($(this).text().length > 10) {
            $(this).text($(this).text().substr(0, 20));
            $(this).append('...');
        }
    });

    /* limit characters featured ads description */
    $(".description-cut").each(function() {
        if ($(this).text().length > 50) {
            $(this).text($(this).text().substr(0, 100));
            $(this).append('...');
        }
    });

    /* images resize */
    /*target=document.getElementById('adsitem');
    target.style.width=((350*screen.width)/1280)+'px';
    target.style.height=((800*screen.height)/1800)+'px';*/


});

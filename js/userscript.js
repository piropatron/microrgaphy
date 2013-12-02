$(document).ready(function () {
    if( window.location.hostname == "www.dev-appbuilderengine.com" ){window.location.href = window.location.protocol + "//dev-appbuilderengine.com";}
    //Button iphone on preview
    jQuery('#button-iphone-power').die();
    jQuery('#button-iphone-power').live('click', function(){
        $('#iPhone-frame').attr( 'src', $('#iPhone-frame').attr( 'src' ) );
    });
    //pagination
    jQuery('.pagination .pagination_links').die();
    jQuery('.pagination .pagination_links').live(
        'click',
        function(event){
            var link = jQuery(this).attr('href'); //Передаем ссылку страницы(параметр для ajax)
            console.log(link);
            jQuery('.wrapper-for-table-content').load(link);
            return false;
        }
    );

    $('#submit_search').die();
    $('#submit_search').live('click', function(){
        var search_phrase = $('#search_input').val();
        if(search_phrase != ''){
            $('.wrapper-for-table-content').load(
                window.location.href,
                {
                    search_phrase: search_phrase
                }
            );
        } else {
            unset_search_phrase();
        }
    });
    //Уничтожаем сессию если поле инпута пустое
    $('#search_input').die();
    $('#search_input').live('keyup', function(){
        var search_phrase = $(this).val();
        if(search_phrase == ''){
            jQuery('.wrapper-for-table-content').load(
                window.location.href,
                {
                    search_phrase: ''
                }
            );
        }
    });
    // -------------------- OLD --------------------------------
    jQuery(".table-content:odd").addClass("table-content-bg");
    jQuery('input[type="radio"]').ezMark();
    jQuery('input[type="checkbox"]').ezMark();
    // Distribution Ajax status
    jQuery('.state').die();
    jQuery('.state').live('click', function(){
        jQuery.post(
            window.location.protocol + '//' + window.location.hostname+"/preview/distributions",
            {},
            function(data){
                if( data.error == 'false' && data.success == 'true' ){
                    this.noty = noty({
                        text: 'Apps to be Published',
                        type: 'success',
                        layout:'bottom',
                        timeout: 2000
                    });
                    setTimeout(function(){
                        window.location.reload();
                    }, 1000);
                }
                if( data.error == 'true' && data.success == 'false' ){
                    this.noty = noty({
                        text: 'Server Error',
                        type: 'error',
                        layout:'bottom',
                        timeout: 2000
                    });
                }
            },
            'json'
        );
    });

    jQuery('span').die();
    jQuery('span').live('click', function(){
        $('.popup').each(function(){
            window.setTimeout(function (){
                $(".popup").vAlign();
            }, 300);
        });
    });

    jQuery('span').die();
    jQuery('span').live('click', function(){
        window.setTimeout(function (){
            $(".popup-event-location .popup").vAlign();
        }, 300);
    });



    $(".btn-slide").click(function () {
        $(this).parent().next(".panel").slideToggle("slow").siblings(".panel:visible").slideUp("slow");
        $(this).parent().toggleClass("open");
        $(this).parent().siblings().removeClass("open");
        $('.btn-slide').each(function () {
            if ($(this).hasClass('open-bar')) {
                $(this).removeClass('open-bar');
            }
        });
        if ($('.design-bar').hasClass('open')) {
            $(this).addClass('open-bar');
        }
    });


    $('.form-table-content').die();
    $('.form-table-content').live({
        mouseenter:function () {
            var icon_id = $(this).attr("data-icon-id");
            $('.form-plus').each(function (index) {
                var icon_delete_id = $(this).attr("data-icon-delete-id");
                if (icon_delete_id == icon_id) {
                    $(this).fadeIn();
                }
            });
        },
        mouseleave:function () {
            $('.form-plus').fadeOut(50);
        }
    });

    var params = {
        changedEl:"#select, #select-popup, #status-select, #select-design, #select-tab, #select-cont, #select-edit-form, #contact_detail",
        scrollArrows:false
    };
    cuSel(params);

    $('.runner').die();
    $('.runner').click(function () {
        var n = noty({
                 text:'Loading, please wait...',
                 type:'success',
                 layout:'bottom',
                 timeout:false

        });
    });

    setTimeout(function(){
        $("span").die();
        $("span").live('click', function(){
            $(".popup").vAlign();
        } );
    }, 50);

    window.setTimeout(
        function (){
            var content_height = $('.content-block').height();
            var result = content_height - 210;
            result = parseInt(result);

            $('.inner').css("height", result + 'px');

        },
        0
    );

    window.setTimeout(function (){
             $('.sub-field-none').css('display', 'block');
            }, 0);

    window.setTimeout(function (){var content_height = $('.content-block').height();
              var result = content_height - 210;
              result = parseInt(result);
              $('.inner').css("height", result + 'px');
           }, 0);

    window.setTimeout(function (){
        $('#description_tbl a, #description_ifr, form, #reward_message_parent a, #reward_message_ifr').attr('title', '')
    }, 1500);

    (function ($) {
        $.fn.vAlign = function () {
            return this.each(function (i) {
                var h = $(this).height();
                var oh = $(this).outerHeight();
                var mt = (h + (oh - h)) / 2;
                $(this).css("top", "50%");
                $(this).css("position", "fixed");

                var w = $(this).width();
                var ow = $(this).outerWidth();
                var ml = (w + (ow - w)) / 2;
                $(this).css("left", "50%");
                $(this).css({
                    marginTop: "-" + mt + "px",
                    marginLeft: "-" + ml + "px"
                });
            });
        };
    })(jQuery);

    $(function () {
        $(document).tooltip({
            position:{
                my:"center bottom-20",
                at:"center top",
                using:function (position, feedback) {
                    $(this).css(position);
                    $("<div>")
                        .addClass("arrow")
                        .addClass(feedback.vertical)
                        .addClass(feedback.horizontal)
                        .appendTo(this);
                }
            }
        });
    });

    (function ($) {
        $.fn.initialize_sortable = function(){
            console.log('initialize_sortable');
            var that = this;
            //$(".wrapper-for-table-content").sortable({
            $(that).sortable({
                connectWith: ".table-content",
                axis: 'y',
                handle: ".move-icon",
                cursor: "move",
                revert: true,
                cancel: ".disabled-sortable"
            });
            $('.move-icon').fadeIn();
            $(that).die();
            $(that).live("sortstop", function( event, ui ) {
                $('.ajax-wrapper').fadeIn();
                this.noty = noty({
                    text:'Loading, please wait...',
                    type:'success',
                    layout:'bottom',
                    timeout: false
                });
                var my_noty = this.noty;
                var sort_arr = {};
                var index = 1;
                if( $('.del-icon').length != 0 ){
                    $('.del-icon').each(function(){
                        var id = $(this).attr('data-app-dell');
                        if(id == undefined){
                            id = $(this).attr('data-del-form');
                        }
                        sort_arr[index] =  { id: id, order: index } ;
                        index++;
                    });
                }else if( $('.edit-icon').length != 0 ){
                    $('.edit-icon').each(function(){
                        sort_arr[index] =  { id: $(this).attr('data-app-edit') , order: index } ;
                        index++;
                    });
                }else{
                    alert('script err!');
                }
                var tmp =  window.location.pathname.split('/')
                $.post(
                    window.location.protocol + '//' + window.location.hostname + '/page_content/sort_content/',
                    {
                        content_type: tmp[2],
                        sort_arr: sort_arr
                    },
                    function(data){
                        setTimeout(function(){
                            my_noty.close();
                            if( data.success == 'true'  && data.error == 'false' ){
                                $(that).load(window.location.href);
                            }
                            if( data.success == 'false' && data.error == 'true' ){
                                this.noty = noty({
                                    text:'Server error',
                                    type:'error',
                                    layout:'bottom',
                                    timeout:2000
                                });
                            }
                            $('.ajax-wrapper').fadeOut();
                        }, 300);
                    },
                    'json'
                );
            });
        };
        $.fn.disable_sortable = function(){
            var that = this;
            $(that).sortable( "disable" );
            $('.move-icon').fadeOut();
        };

        $.fn.initialize_column_sortable = function(){
            jQuery('.sort_fields').die();
            jQuery('.sort_fields').live('click', function(){
                jQuery(this).siblings('span').attr('data-count-click', '0');
                jQuery(this).siblings('span').attr('data-sort', 'ASC');
                jQuery('.sort_fields').find('b').html('');
                var sort_type = $(this).attr('data-sort');
                var sort_column = $(this).attr('data-name');
                var count_click = $(this).attr('data-count-click');
                count_click = parseInt(count_click) + 1;
                if(count_click < 3){
                    if(sort_type == 'ASC'){
                        sort_type = 'DESC';
                        jQuery(this).attr('data-sort', 'DESC');
                        jQuery(this).find('b').append('&darr;');
                        jQuery(this).attr('data-count-click', count_click);
                    } else if(sort_type == 'DESC'){
                        sort_type = 'ASC';
                        jQuery(this).attr('data-sort', 'ASC');
                        jQuery(this).find('b').append('&uarr;');
                        jQuery(this).attr('data-count-click', count_click);
                    }
                } else {
                    jQuery('.sort_fields').attr('data-count-click', '0');
                    jQuery('.sort_fields').find('b').html('');
                    //unset_locations_sort
                    window.location.href
                    //jQuery('.wrapper-for-table-content').load(window.location.protocol + '//' + window.location.hostname + '/page_content/unset_calendar_sort/' + location_id + '/' + feature_id + '/' + category_id);
                    return false;
                }

                jQuery('.wrapper-for-table-content').load(
                    //window.location.protocol + '//' + window.location.hostname + '/page_content/calendar_edit/' + location_id + '/' + feature_id + '/' + category_id,
                    window.location.href,
                    {
                    sort_type: sort_type,
                    sort_column: sort_column
                });
            });
        };

    })(jQuery);
});
/*end script*/


jQuery(document).ready(function($) {



	$(document).on('click', '.geo-item', function(e) {
        
        e.preventDefault();
        //console.log(jQuery(this));
        var geo_id = jQuery(this).attr('geo_id');
        $('.geo-item').removeClass('selected');
        $(this).addClass('selected');

    	// var newurl = addParam(window.location.href , 'product-category', '');
    	// window.history.pushState({path:newurl},'',newurl);  
    	// var newurl = addParam(window.location.href , 'product-category', geo_id);
    	// window.history.pushState({path:newurl},'',newurl);        

        // $('.loop-solutions').css({
        //     'opacity': 0.3
        // });

        $.ajax({
                type    : "POST",
                url     : js_url.ajaxurl,
                dataType: "json",
                data    : "action=get_term_by_geo&geo_id=" + geo_id,
                success : function (a) {
                    console.log(a);

                    $('.loop-solutions').html(a.content).css({
                        'opacity': '1'
                    });


                    // var destination = $('.gallery_wrap').offset().top - 50;
                    // $('body,html').animate({scrollTop: destination}, 400);

                }
        }); //end ajax            

   });

	$(document).on('click', '.reset-filters', function(e) {
        
        e.preventDefault();

        var geo_id = '';
        $('.geo-item').removeClass('selected');

        $.ajax({
                type    : "POST",
                url     : js_url.ajaxurl,
                dataType: "json",
                data    : "action=get_term_by_geo&geo_id=" + geo_id,
                success : function (a) {
                    console.log(a);

                    $('.loop-solutions').html(a.content).css({
                        'opacity': '1'
                    });


                }
        }); //end ajax            

   });

		
}); 
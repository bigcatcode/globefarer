

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


	$(document).on('click', '.business_areas-item button', function(e) {
		e.preventDefault();
        var business_id = jQuery(this).parent().attr('business-id');
        //console.log(business_id);
        jQuery('.business_areas-item').removeClass('selected');
        jQuery(this).parent().addClass('selected');

		$.each(business_object, function(key, value) {
		    // console.log(key);
		    // console.log(value);
		});
		console.log( business_object[business_id]['geo'] );
		console.log( Object.values(business_object[business_id]['brands']) );
		console.log( business_object[business_id]['services'] );

		jQuery('.geo-item').removeClass('selected');
		$('.geo-item').each(function(index, el) {
			var geo_id = jQuery(el).attr('geo_id');
			if (  jQuery.inArray( geo_id, business_object[business_id]['geo'] ) !== -1 ) {
				jQuery(el).addClass('selected');
			}

		});


		jQuery('.brand-item').removeClass('selected');
		$('.brand-item').each(function(index, el) {
			var brand_id = jQuery(el).attr('brand-id');
			if ( jQuery.inArray( Number(brand_id) , Object.values(business_object[business_id]['brands']) ) !== -1 ) {
				jQuery(el).addClass('selected');
			}
		});

		//console.log( Object.values(business_object[business_id]['services']) );
		jQuery('.service-item').removeClass('selected');
		$('.service-item').each(function(index, el) {
			var services_id = jQuery(el).attr('services-id');
			//console.log( services_id );
			//console.log( jQuery.inArray( Number(services_id) , Object.values(business_object[business_id]['services']) ) );


			if ( jQuery.inArray( Number(services_id) , Object.values(business_object[business_id]['services']) ) !== -1 ) {
				jQuery(el).addClass('selected');
			}

		});

        // $.ajax({
        //         type    : "POST",
        //         url     : js_url.ajaxurl,
        //         dataType: "json",
        //         data    : "action=get_term_by_business&business_object=" + business_id,
        //         success : function (a) {
        //             console.log(a);

        //             // $('.loop-geo').html(a.content).css({
        //             //     'opacity': '1'
        //             // });
        //             // $('.loop-solutions').html(a.content2).css({
        //             //     'opacity': '1'
        //             // });

        //         }
        // }); //end ajax  

	});

		
}); 
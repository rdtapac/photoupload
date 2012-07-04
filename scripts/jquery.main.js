$( document ).ready( function(){
	
	//$('#form-add-image').modal();
	main.init();

});


var main = { //STRUCTURE object_name [ method_1(), method_2(), method_3() ] 
    
    init : function () {
		console.log( 'main document ready' );
		$( '#button-upload-photo' ).click( function(){
			main.upload_photo();
		});

		$( '#a-add-image' ).click( function(){
			main.upload_photo();
		});

		$( '#button-cancel-upload-photo' ).click( function(){
			main.cancel_upload_photo();
		});
		
		$("#image-main").tag( {showTag: 'always'} );

		//$( '#jTagLabel' ).

		$( '.jTagSaveBtn' ).click( function(){
			//console.log('test');
			return false;
		});

		//main.reload_image();
    },

    reload_image : function() {

        var settings = {
            url     :  global.base_url + 'main/ajax',
            data    : { command : 'get_image'  }, //POST data that will be used in controller
            type    : 'POST',
            success : function( json ) {
                if( json.success == true ) {
                	//
					$( document.createElement('img') ).attr( { src: json.return_data, id: 'img-main-image' } ).css( { border: '1px solid #000', width: '500px' } ).tag().appendTo( $('#div-image-holder') );
					$("#img-main-image").tag();
					console.log( $("#img-main-image").tag() );
                } 
                else 
                {
                	console.log( json.message );
                }
            }
        }
        photo_demo_functions.ajax( settings );

    },

    upload_photo : function() {
    	$( '#div-image-interface' ).hide();
    	$( '#div-add-image' ).fadeIn();
    },

    cancel_upload_photo : function() {
    	$( '#div-add-image' ).hide();
    	$( '#div-image-interface' ).fadeIn();
    }


}
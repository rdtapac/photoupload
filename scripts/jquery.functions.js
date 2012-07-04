/*
 * Repository of Custom Functions ...
 */

var photo_demo_functions = {
    
    ajax    : function( settings ) {
        var required = {
            type    : 'POST',
            dataType: 'json'
        }
        
        settings = $.fn.extend( required, settings );
        
        $.ajax( settings );
    }
    
}
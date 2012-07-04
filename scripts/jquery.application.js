$( document ).ready(
    function() {
        app_network_application.navigate( 'overview-application' );
        $( '.nav .first' ).find( 'a' ).addClass( 'selected' );
        
        $( '.nav li' ).click(
            function() {
                $( '.nav li a' ).removeClass( 'selected' );
                $( this ).find( 'a' ).addClass( 'selected' );
            }
        );
    }
);

var app_network_application = {
    
    navigate : function( div_id ) {
        var html = $( '#' + div_id ).html();
        $( '#application_content' ).html( html );
    }
    
}
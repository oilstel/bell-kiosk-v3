document.addEventListener('DOMContentLoaded', function() {

    // Put footer at the bottom if it's a short page
    function checkFooter(){
        var window_height = $(window).height();
        var document_height = $(document).height();

        if(document_height > window_height){
            $('#nav-footer').show();
        }
        else {
            $('#nav-footer').hide();
        }
        // console.log('window:' + window_height);
        // console.log('doc:' + document_height);
    }

    checkFooter();

    $(window).resize(function() {
        checkFooter();
    });

    $('#top').click(function(){
        window.scrollTo(0, 0);
    });


}, false);

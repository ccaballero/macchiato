$(document).ready(function(){
    var request = window.location.pathname.substr(1);
    $('#menubar li a[href="/'+request+'"]').parent().addClass('active');

    $('a').click(function(event) {
        window.history.pushState('', '', event.target);
        
        $('#menubar li.active').removeClass('active');
        $(this).parent().addClass('active');

        $('#content').html('asdf');

        return false;
    });
});

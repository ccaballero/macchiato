$(document).ready(function(){
    var request = window.location.pathname.substr(1);
    $('#menubar li a[href="/'+request+'"]').parent().addClass('active');

    $('a').click(function(event) {
        window.history.pushState('', '', event.target);

        $('#menubar li.active').removeClass('active');
        $(this).parent().addClass('active');

        page = window.location.pathname.substr(1);
        if (page === '') page = 'home';
        $.get('/index.php?page='+page+'&type=ajax', function(data) {
            $('#content').html(data);
        });

        return false;
    });
});

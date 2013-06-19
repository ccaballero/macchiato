$(document).ready(function(){
    var request=window.location.pathname.substr(1)
    $('#menubar li a[href="/'+request+'"]').parent().addClass('active')

    $('a').click(function(event){
        window.history.pushState('','',event.target)

        $('#menubar li.active').removeClass('active')
        $(this).parent().addClass('active')

        page = window.location.pathname.substr(1)
        if(page==='')page='home'
        $.get('/index.php?page='+page+'&type=ajax',function(data){
            $('#content').html(data)
        })

        return false
    })

    var login=true
    var username=''
    var password=''

    $('#login form').submit(function(){
        if(login){
            login=false
            username=$('#login form input').attr('value')
            $('#login form span').html(username)
            $('#login form .input').html('<input name="password" class="password" type="password" />')
            $('#login form input').focus()
        }else{
            login=true
            password=$('#login form input').attr('value')
            $('#login form .input').html('Procesando ...')
            $.post('/index.php?page=login&type=ajax',function(data){
                $('#content').html('post post post')
            })
        }
        return false
    })
})

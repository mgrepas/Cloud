$(window).on('load',doAjax);

function doAjax()
{
    $('#ContAjax').on('click','.ajax',function(e){
        e.preventDefault();
        var enlace=$(this).attr('href');
        //alert(enlace);
        $.ajax({
            url:enlace,
            type:'get',
            success:function(e){
                $('#ContAjax').append("<div id='aux' style='display: none;' >"+e+"</div>");
                var titulo=$('#aux').find('title').html();
                var contenido=$('#aux').find('#tercernivel').html();
                console.log(titulo);
                console.log(contenido);
                console.log(e);
                $('#ContAjax').html(contenido);
                window.history.pushState(null, titulo, enlace);
            },
            error:function(){
                alert('Error Ajax...')
            }
        })
    })
}
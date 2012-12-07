$(window).on('load',doAjax);
$(document).on('ready',iniciar);

function iniciar(){
 $('#loading').hide();   
}

function doAjax()
{
    $('#ContAjax').on('click','.ajax',function(e){
        e.preventDefault();
        $('#loading').show();
        var enlace=$(this).attr('href');
        $('#ContAjax').fadeOut(200,function(){
            $('#tercernivel').css('min-height','360px')
                $.ajax({
                url:enlace,
                type:'get',
                success:function(e){
                    $('#ContAjax').append("<div id='aux' style='display: none;' >"+e+"</div>");
                    var titulo=$('#aux').find('title').html();
                    var contenido=$('#aux').find('#tercernivel').html();
                    console.log(titulo);
                    console.log(contenido);
                    //console.log(e);
                    $('#aux').remove();
                    $('#tercernivel').fadeIn(100,function(){
                        $('#loading').hide();
                        $('#tercernivel').html(contenido);
                        window.history.pushState(null, titulo, enlace);
                    })
                    
                    
                },
                error:function(){
                    alert('Error Ajax...')
                }
            })
            
        })
        //alert(enlace);
        
    })
}
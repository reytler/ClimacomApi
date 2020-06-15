$(function(){
    $('#buscar').bind('click', function(){
        nome=$('#cidade').val();
        end='clima.php?cidade='+nome;
        $('#res').html('Carregando...');
        $.ajax({
            type:'GET',
            url:end,
            dataType:'json',
            success:function(dado){
                //console.log(dado);
                $('#res').html(dado);
            },
            error:function(){
                alert("Ocorreu um erro!");
            }
        });
    });
});
$(function(){
    $('#buscar').bind('click', function(){
        nome=$('#cidade').val();
        end='clima.php?cidade='+nome;
        $('#nome').html('Carregando...');
        $.ajax({
            type:'GET',
            url:end,
            dataType:'json',
            success:function(dado){
                console.log(dado);
                $('#nome').html(dado.location.city+', '+dado.location.region);
                if(!dado.current_observation.condition){
                    $('#temp').html('Sem resultados');                    
                }else{
                    tempCel=converter(parseFloat(dado.current_observation.condition.temperature));
                    $('#temp').html(tempCel+' °C');
                }
                
                if(!dado.current_observation.astronomy){
                    $('#nascer').html('Sem resultados');                    
                }else{
                    $('#nascer').html('Nascer do sol às: '+dado.current_observation.astronomy.sunrise);
                }

                if(!dado.current_observation.astronomy){
                    $('#por').html('Sem resultados');
                }else{
                    $('#por').html('Pôr do sol às: '+dado.current_observation.astronomy.sunset);
                }

            },
            error:function(){
                alert("Ocorreu um erro!");
            }
        });
    });

    function converter(temp){
        var tempfar = temp;
        var celsius = 5*(tempfar - 32)/9;
        tempCel = Math.round(celsius);
        return tempCel;
    }
});
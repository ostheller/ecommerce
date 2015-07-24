$(document).ready(function() {
    $.get('/ideas', function(res){
        $('#content').html(res);
    }); 
    $('#aesthetics').click(function(){
        $.get('/browse/aesthetics', function(res){
            $('#content').html(res);
            }); 
    });
    
    $('#ethics').click(function(){
    $.get('/browse/ethics', function(res){
        $('#content').html(res);
        }); 
    });
    
    $('#epistemology').click(function(){
    $.get('/browse/epistemology', function(res){
        $('#content').html(res);
        }); 
    });
    
    $('#metaphysics').click(function(){
    $.get('/browse/metaphysics', function(res){
        $('#content').html(res);
        }); 
    });
    
    $('#political').click(function(){
    $.get('/browse/political', function(res){
        $('#content').html(res);
        }); 
    });
});
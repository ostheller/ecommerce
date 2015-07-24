$(document).ready(function() {
    $('#aesthetics').click(function(){
        $.get('/sort/aesthetics', function(res){
            $('#content').html(res);
            }); 
    });
    
    $('#ethics').click(function(){
    $.get('/sort/ethics', function(res){
        $('#content').html(res);
        }); 
    });
    
    $('#epistemology').click(function(){
    $.get('/sort/epistemology', function(res){
        $('#content').html(res);
        }); 
    });
    
    $('#metaphysics').click(function(){
    $.get('/sort/metaphysics', function(res){
        $('#content').html(res);
        }); 
    });
    
    $('#political').click(function(){
    $.get('/sort/political', function(res){
        $('#content').html(res);
        }); 
    });

    $('#keyword_search_form').submit(function(){
          $.post('/search', $(this).serialize(), function(res) {
            $('#content').html(res);
          });
          return false;
        });

    $('#byPrice').click(function(){
    $.get('/ideas/byPrice', function(res){
        $('#content').html(res);
        }); 
    });

    $('#byPopularity').click(function(){
    $.get('/ideas/byPopularity', function(res){
        $('#content').html(res);
        }); 
    });
});
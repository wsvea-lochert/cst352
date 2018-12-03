$(document).ready(function(){
    $("#link1").hover(function(){
        $("#link1").addClass('animated pulse');
    });

    $("#link1").mouseleave(function(){
        $("#link1").removeClass('animated pulse')
    });

    $("#link2").hover(function(){
        $("#link2").addClass('animated pulse');
    });

    $("#link2").mouseleave(function(){
        $("#link2").removeClass('animated pulse')
    });

    $("#link3").hover(function(){
        $("#link3").addClass('animated pulse');
    });

    $("#link3").mouseleave(function(){
        $("#link3").removeClass('animated pulse')
    });
    
});

$(document).ready(function(){
    $('.menu-btn').click(function(){
        $('.sidebar').css({
            'width':'70px',
            'font-size':'25px'
        });
        $('.text-link').hide();
        $('.close-btn').show();
        $('.menu-btn').hide();
    });

    $('.close-btn').click(function(){
    $('.sidebar').css({
        'width':'300px',
        'font-size':'15px'
    });
    $('.text-link').show();
    $('.close-btn').hide();
    $('.menu-btn').show();
    });

    $('.add_category').click(function(){
        $('#exampleModal').modal('show');
        $('.modal-title').val('save');
    });
    
});
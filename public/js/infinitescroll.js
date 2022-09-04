$(document).ready(function(){

    var flag = 6;
    var posts_variation = 5;

    $(window).scroll(function() {

        if($(window).scrollTop() >= $(document).height() - $(window).height()){

            $.ajax({
                type: "GET",
                url: "/infinite_scroll",
                data: {
                    'offset': flag,
                    'limit': posts_variation
                },
                success: function(data){
                    $('.posts').append(data);
                    flag += posts_variation;
                }
            });

        }

    });

});

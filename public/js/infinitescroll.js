$(document).ready(function(){

    var flag = 5;

    $(window).scroll(function() {

        if($(window).scrollTop() >= $(document).height() - $(window).height()){

            $.ajax({
                type: "GET",
                url: "/infinite_scroll",
                data: {
                    'offset': flag,
                    'limit': 3
                },
                success: function(data){
                    $('.posts').append(data);
                    flag += 3;
                }
            });

        }

    });

});

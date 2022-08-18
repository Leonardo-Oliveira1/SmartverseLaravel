$(document).ready(function(){

    var flag = 5;

    $(window).scroll(function() {

        if($(window).scrollTop() >= $(document).height() - $(window).height()){
            
            $.ajax({
                type: "GET",
                url: "/SMARTverse/view/get_data.php",
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
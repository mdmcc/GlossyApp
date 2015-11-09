$(document).ready(function () {

    $("#button").click(function () {
        console.log("Toggled menu");
        $("#listRestaurants").stop().slideToggle();
            return false;
    });

    $("#button").hover(function () {
        $(this).stop().css({
           "cursor": "pointer"
        });
    });


    $("#submitCoupon").click(function (e) {
        e.preventDefault();

        $.ajax({
            url: "coupon_ajax_get.php",
            dataType: "json",
            type: "GET",
            data: {id: "alibiRoom"},
            success: function(couponReceived) {
                $("#couponReceived").text(couponReceived['msg']);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $("#couponReceived").text(jqXHR.statusText);
            }
        });
    });
});

  


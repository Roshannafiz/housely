(function ($) {
    /*======== 1. START CHANGE BANNER STATUS ========*/
    $(".toggle-class-banner").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var banner_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/banner-status",
            data: {
                status: status,
                banner_id: banner_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 1. END CHANGE BANNER STATUS ========*/

    /*======== 2. START CHANGE FEATURE STATUS ========*/
    $(".toggle-class-feature").change(function () {
        var status = $(this).prop("checked") == true ? 1 : 0;
        var feature_id = $(this).data("id");

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/feature-status",
            data: {
                status: status,
                feature_id: feature_id,
            },
            success: function (data) {
                console.log("Success");
            },
        });
    });
    /*======== 2. END CHANGE FEATURE STATUS ========*/
})(jQuery);
